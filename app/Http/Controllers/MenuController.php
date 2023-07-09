<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $update =   menu::where('id', $id)->update([
            'name' => $request->menu_name,
            'link' => $request->menu_link,
            'status'     => $request->menu_status
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