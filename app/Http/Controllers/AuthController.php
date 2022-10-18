<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use Illuminate\Http\Request;
use Redirect;

class AuthController extends Controller
{
    /**
    * Get a JWT via given credentials.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            $mult_response = [
                "Title" => 
                    "Operation failed",
                "message" => 
                    $validator->errors(),
                "code" => 422,
            ];
            return redirect()->route('errorPage');
            // return response()->json(['terminus' => env('APP_URL').'/'.'api/login', 'status' => 'F9', 'response' => $mult_response] , 422);        
        }

        $user = User::where('username', $request->username)->first();

        if($user == NULL) {
            $mult_response = [
                "Title" => 
                    "operation failed",
                "message" => 
                   'username Cannot Be Found',
                "code" => 404,
            ];
            return redirect()->route('errorPage');
            // return response()->json(['terminus' => env('APP_URL').'/'.'api/login', 'response' => $mult_response] , 404);
        }

        if (! $user ) {
            $mult_response = [
                "Title" => 
                    "Operation failed",
                "message" => 
                   'Invalid Credentials',
                "code" => 401,
              ];
            return redirect()->route('errorPage');

            // return response()->json(['terminus' => env('APP_URL').'/'.'api/login', 'response' => $mult_response] , 401);
        }

        // $token = auth()->attempt($user);
        $random = mt_rand(100000, 999999);
        $token = $user->createToken($random)->plainTextToken;

        $mult_response = [
            "Title" => 
            "operation successful",
            "message" => 
            "Login Succesfull",
            "code" => 200,
            "token" => $token,
            "data" => $user
        ];

        if ($user->type == 'user') {
            return redirect()->route('dashboard');
        }
        elseif($user->type == 'admin'){
            return redirect()->route('adminDashboard');
        }

    }

    public function loginUser(Request $request){
        $mult_response = [
            "Title" => 
            "operation successful",
            "message" => 
            'Authenticated User',
            "code" => 200,
            "data" => $request->user()
        ];
        return response()->json(['status' => 'OK', 'response' => $mult_response], 200);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            $mult_response = [
                "Title" => 
                "Operation failed",
                "message" => 
                $validator->errors(),
                "code" => 422,
            ];
            return redirect()->route('errorPage');
            // return response()->json(['status' => 'F9', 'response' => $mult_response] , 422);
        }

        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        
        $user->save();

        $mult_response = [
            "Title" => 
            "Operation successful",
            "message" => 
            "Data added succesfully",
            "code" => 201,
            "data" => ['user' => $user]
        ];
        return redirect()->route('loginpage');
        // return response()->json(['status' => 'OK', 'response' => $mult_response], 201);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        $mult_response = [
            "Title" => 
            'Operation successful',
            "message" => 
            "User Logout Succesfully",
            "code" => 202,
        ];
        return response()->json(['terminus' => env('APP_URL').'/'.'api/logout', 'status' => 'OK', 'response' => $mult_response], 202);
    }
}
