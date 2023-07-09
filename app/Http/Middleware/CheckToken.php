<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\TokenUser;
class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token= $request->cookie('access_token');
     
        $checkTokenIsValid = TokenUser::where('token',$token)->first();
        if(empty($token)){
            return response()->json([
                'code' => 401,
                'message' => 'Bạn không có quyền truy cập'
            ], 401);
        } elseif(empty($checkTokenIsValid)){
            return response()->json([
                'code' => 401,
                'message' => "Bạn cần đăng nhập để tiếp tục",
            ], 401);
        } else {
            
            return $next($request);
          
        }
        
    }
}