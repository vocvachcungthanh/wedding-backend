<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TokenUser;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::get();

        return response()->json([
            'code' => 200,
            'data' => $menus
        ], 200);
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
        $token= $request->header('access_token');
        
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
            
            $create = Menu::create([
                'name' => $request->name,
                'link'  => $request->link,
                'status'    => $request->status,
                'created_at' => now()
            ]);

            if($create) {
                return response()->json([
                    'code' => 200,
                    'data' =>  $create,
                    'message' => "Thêm menu thành công"
                    
                ],200);
            } else{
                return response()->json([
                    'code' => 400,
                    'message' => "Thêm menu thất bại",
                ], 400);
            }
          
        }
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
        dd($id);
    }

    public function getList(Request $request){
        
        $token= $request->header('access_token');
   
        $checkTokenIsValid = TokenUser::where('token',$token)->first();
       

        if(empty($token)){
            return response()->json([
                'code' => 401,
                'message' => 'Bạn không có quyền truy cập'
            ], 401);
        } elseif(empty($checkTokenIsValid)){
            return response()->json([
                'code' => 401,
                'message' => "Token không hợp lệ",
            ], 401);
        } else {
            
            $Menus =   Menu::orderBy('id', 'desc')->get();

            if($Menus) {
                return response()->json([
                    'code' => 200,
                    'data' =>  $Menus,
                    'message' => "Lấy menu thành công"
                ],200);
            } else{
                return response()->json([
                    'code' => 400,
                    'message' => "Không lấy được menu",
                ], 400);
            }
          
        }
    }
}