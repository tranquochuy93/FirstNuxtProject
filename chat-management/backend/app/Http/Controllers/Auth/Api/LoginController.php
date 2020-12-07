<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use App\Services\StaffService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

  private $staffService;
  /**
   * Create a new controller instance.
   *
   * @param  UserRepository  $users
   * @return void
   */
  public function __construct(StaffService $staffService)
  {
      $this->staffService = $staffService;
  }

  public function login(Request $request) {
    try {
      $request->validate([
          'email' => 'email|required',
          'password' => 'required'
      ]);

      // get user by email
      $user = $this->staffService->getByEmail($request->email);
      if (!$user && !Hash::check($request->password, $user->password, [])) {
        throw new \Exception('Error in Login');
      }

      // create token
      $token = $user->createToken($request->device_name ?? 'undefined')->plainTextToken;

      return response()->json(['token' => $token, 'user' => $user], 200);
    } catch (\Exception $error) {
      return response()->json([
        'status_code' => 500,
        'message' => 'Error in Login',
        'error' => $error,
      ]); 
    }
    
  }
}
