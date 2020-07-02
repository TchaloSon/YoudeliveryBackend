<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 
use App\User; 
use Validator;
class AuthController extends Controller 
{
  /** 
   * Login API 
   * 
   * @return \Illuminate\Http\Response 
   */ 
  public function login(Request $request){ 
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
      $user = Auth::user(); 
      $success['token'] =  $user->createToken('LaraPassport')->accessToken; 
      return response()->json([
        'status' => 'success',
        'data' => $success
      ]); 
    } else { 
      return response()->json([
        'status' => 'error',
        'data' => 'Unauthorized Access'
      ]); 
    } 
  }

  /** 
   * Register API 
   * 
   * @return \Illuminate\Http\Response 
   */ 
  public function register(Request $request) 
  { 
    $validator = Validator::make($request->all(), [ 
      'nom' => 'required', 
      'telephone'=>'required',
      'prenom'=>'required',
      'adresse'=>'required',
      'email' => 'required|email',
    ]);
    if ($validator->fails()) { 
      return response()->json(['error'=>$validator->errors()]);
    }
    $postArray = $request->all(); 
    $postArray['password'] = bcrypt(123456); 
    $user = User::create($postArray); 
    $success['token'] =  $user->createToken('LaraPassport')->accessToken; 
    $success['nom'] =  $user->nom;
    $success['prenom'] =  $user->prenom;
    $success['adresse'] =  $user->adresse;
    $success['telephone'] =  $user->telephone;
    $success['email'] =  $user->email;
  
    return response()->json([
      'status' => 'success',
      'data' => $success,
    ]); 
  }
}