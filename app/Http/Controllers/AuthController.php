<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\TokenUser;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request){
        $dataCheckLogin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        // check user có tài khoản

        if(auth()->attempt($dataCheckLogin)){

            $id = auth()->id();

            $checkTokenExit = TokenUser::where('user_id', $id)->first();
            
            if(empty($checkTokenExit)){
                $tokenUser = TokenUser::create([
                    'token' => Str::random(40),
                    'refresh_token' => Str::random(40),
                    'token_expired' => date('Y-m-d H:i:s', strtotime('+30 day')),
                    'refresh_token_expired' => date('Y-m-d H:i:s', strtotime('+360 day')),
                    'user_id' => $id,
                ]);
            } else {
                $tokenUser = $checkTokenExit;
            }

           return response()->json([
            'code' => 200,
            'data' =>  $tokenUser,
           ], 200);
        } else {
            return response()->json([
                'code' => 401,
                'message' => 'Tài khoản hoặc mật khẩu không đúng'
            ], 401);
        }
    }

    public function refreshToken(Request $request){
        
        $refreshToken = $request->header('refresh_token');
        
        $checkRefreshTokenIsValid = TokenUser::where('refresh_token', $refreshToken)->first();

  
        if(!empty($checkRefreshTokenIsValid)){
          
            if(strtotime($checkRefreshTokenIsValid->token_expired) < time()){
                $checkRefreshTokenIsValid->update([
                    'token' => Str::random(40),
                    'refresh_token' => Str::random(40),
                    'token_expired' => date('Y-m-d H:i:s', strtotime('+30 day')),
                    'refresh_token_expired' => date('Y-m-d H:i:s', strtotime('+360 day')),
                ]);
            }

            $dataToken = TokenUser::find($checkRefreshTokenIsValid->id);

            return response()->json([
                'code' => 200,
                'data' => $dataToken,
                'message' => "refresh token success"
            ], 200);
        } else {
            return response()->json([
                'code' => 401,
                'refresh_token' => $refreshToken,
                'message' => 'refresh token không dúng hoặc không tồn tại'
            ],401);
        }

    }

    public function logout(Request $request){
        $token = $request->header('token');
        
        $checkTokenIsValid = TokenUser::where('token', $token)->first();

        if(!empty($checkTokenIsValid)){
            $checkTokenIsValid->delete();

            return response()->json([
                'code' => 200,
                'message' => "đăng xuất thành công",
                'status' => true,
            ], 200);
        } else {
            return response()->json([
                'code' => 401,
                'message' => "Không thể đăng xuất",
                'status' => false,
            ], 401);
        }

       
    }

}