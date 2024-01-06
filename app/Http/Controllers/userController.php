<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Sanctum\PersonalAccessToken;

class userController extends Controller
{
    public function registerApi(Request $request){
            $request->validate([
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
            ]);
    
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $token = $user->createToken('authToken')->plainTextToken;
             return response()->json([
                'status'=>200,
                'message' => "success",
                 'data' => $user,
                 'token'=>$token
             ], 200);
        }

        public function registerProfile(Request $request){
            $request->validate([
                'name' => 'required',
                'JK' => 'required',
                'Alamat' => 'required',
                'phone' => 'required',
                'tgl_lahir' => 'required',
            ]);
    
            $user = User::where('id',$request->user()->id)->update([
                'name' => $request->name,
                'JK' => $request->JK,
                'Alamat' => $request->Alamat,
                'phone' => $request->phone,
                'tgl_lahir' => $request->tgl_lahir,
            ]);
             return response()->json([
                'status'=>200,
                'message' => "success",
             ], 200);
        }

    public function loginApi(Request $request){

        $loginData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($loginData)) {
            /** @var \App\Models\User $user */
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json([
                'status' => 200,
                'message' => "success",
                'data' => Auth::user(),
                'token' => $token
            ], 200);
        }
        else{
            return response()->json([
                'message' => "Failed",
            ], 200);
        }
    }
}
