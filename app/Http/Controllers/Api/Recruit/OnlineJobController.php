<?php

namespace App\Http\Controllers\Api\Recruit;

use App\Joblists;
use App\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OnlineJobController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $position = array();
        $data = DB::select('select   distinct(tag) from  positions ');
        $data = json_decode(json_encode($data), true);
        for ($i = 0; $i < count($data); $i++) {
            $tag = $data[$i]['tag'];
            $p = DB::select('select  position from positions where tag like :tag ', ['tag' => $tag]);
            $position[$i]["tag"] = $tag;
            $position[$i]["position"] = $p;
        }
        return response()->json($position);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
