<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\Models\User;
use Exception;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        try {
            $rules = [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:3',
            ];

            $data = $request->all();

            $validator = Validator::make($data, $rules);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'Error',
                    'message' => $validator->errors()
                ], 400);
            } else {
                $credentials = request(['email', 'password', 'status']);

                if (!Auth::attempt($credentials)) {
                    return response()->json([
                        'status_code' => 401,
                        'status' => 'Error',
                        'message' => 'Unauthorized'
                    ], 401);
                }

                $user = User::where('email', $request->email)->first();

                if ($user->status == "not active") {
                    return response()->json([
                        'status_code' => 401,
                        'status' => 'Error',
                        'message' => 'Your account is not active'
                    ], 401);
                }
                
                if (!Hash::check($request->password, $user->password, [])) {
                    throw new Exception('Error in Login');
                }

                $tokenResult = $user->createToken('token-auth')->plainTextToken;
                return response()->json([
                    'status_code' => 200,
                    'access_token' => $tokenResult,
                    'token_type' => 'Bearer',
                    'data' => $user
                ], 200);
            }
        } catch (Exception $eror) {
            return response()->json([
                'status' => 'Error',
                'msg' => 'Something Went Wrong',
                'data' => $eror
            ], 500);
        }
    }

    public function logout(Request $request)
    {

        $token = $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 'success',
            'msg' => 'Logout successfully',
            'data' => $token,
        ], 200);

        $user = $request->user();
        $user->tokens()->delete();
        return response()->json([
            'status' => 'success',
            'msg' => 'Logout successfully',
            'data' => null,
        ], 200);
    }
}
