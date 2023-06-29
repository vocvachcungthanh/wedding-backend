<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\TokenUser;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = album::get();

        return response()->json([
            'code' => 200,
            'data' => $albums
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

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
                'message' => "Token không hợp lệ",
            ], 401);
        } else {
            
            $albumCreate = Album::create([
                'link_img'  => $request->link_img,
                'link'      => $request->link,
                'status'    => $request->status,
                'create_at' => Now(),
            ]);

            return response()->json([
                'code' => 200,
                'data' => $albumCreate,
                "message"   => "Thêm album thành công"
            ],200);
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
        //
    }
}