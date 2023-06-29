<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\TokenUser;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $slider = Slider::orderBy('id', 'desc')-limit(10)->get();
        $slider = Slider::orderBy('id', 'desc')->get();

        return response()->json([
            'code' => 200,
            'data' => $slider,
            'message' => null
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
            
            $create = Slider::create([
                'link_img' => $request->link_img,
                'link'  => $request->link,
                'status'    => $request->status,
                'created_at' => now()
            ]);

            if($create) {
                return response()->json([
                    'code' => 200,
                    'data' =>  $create,
                    'message' => "Thêm slider thành công"
                    
                ],200);
            } else{
                return response()->json([
                    'code' => 400,
                    'message' => "Thêm slider thất bại",
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
    public function edit(Request $request)
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
                'message' => "Token không hợp lệ",
            ], 401);
        } else {
            
            $update =   Slider::where('id', $request->id)->update([
                'status' => $request->status,
                'link_img' => $request->link_img,
                'link'     => $request->link
            ]);

            if($update = 1) {
                return response()->json([
                    'code' => 200,
                    'data' =>  $update,
                    'message' => "Cập nhật thành công"
                ],200);
            } else{
                return response()->json([
                    'code' => 400,
                    'message' => "Cập nhật thất bại",
                ], 400);
            }
          
        }
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
            
            $update =   Slider::where('id', $id)->update([
                'status' => $request->status
            ]);

            if($update = 1) {
                return response()->json([
                    'code' => 200,
                    'data' =>  $update,
                    'message' => "Cập nhật thành công"
                ],200);
            } else{
                return response()->json([
                    'code' => 400,
                    'message' => "Cập nhật thất bại",
                ], 400);
            }
          
        }

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
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
                'message' => "Token không hợp lệ",
            ], 401);
        } else {

            
            $delete =   Slider::where('id', $id)->delete();

            if($delete = 1) {
                return response()->json([
                    'code' => 200,
                    'data' =>  $delete,
                    'message' =>  'Xóa slider thành công'
                ],200);
            } else{
                return response()->json([
                    'code' => 400,
                    'message' => "Xóa slider thất bại",
                ], 400);
            }
          
        }
    }

    public function paginate(Request $request){
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
            
            $sliders =   Slider::orderBy('id', 'desc')->paginate($request->limit);

            if($sliders) {
                return response()->json([
                    'code' => 200,
                    'data' =>  $sliders,
                    'message' => "Lấy slider thành công"
                ],200);
            } else{
                return response()->json([
                    'code' => 400,
                    'message' => "không lấy được slider",
                ], 400);
            }
          
        }
    }
}