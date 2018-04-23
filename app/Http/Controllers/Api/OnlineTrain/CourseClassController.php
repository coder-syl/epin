<?php

namespace App\Http\Controllers\Api\OnlineTrain;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CourseClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $position = array();
        $data = DB::select('select   distinct(industry) from  coueseClass ');
        $data = json_decode(json_encode($data), true);
        for ($i = 0; $i < count($data); $i++) {
            $industry = $data[$i]['industry'];
            $data1= DB::select('select  distinct(tag) from coueseClass where industry like :industry ', ['industry' => $industry]);
            $data1= json_decode(json_encode($data1), true);
            $position[$i]["industry"] = $industry;
            for ($j = 0; $j < count($data1); $j++) {
                $tag=$data1[$j]['tag'];
                $course = DB::select('select  course from coueseClass where tag like :tag ', ['tag' => $tag]);

                $arr=array('tag'=>$tag,'course'=>$course);
                $position[$i]["tagcourse"][$j]= $arr;
            }
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
}
