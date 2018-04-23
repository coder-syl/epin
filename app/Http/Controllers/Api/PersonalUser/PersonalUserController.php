<?php

namespace App\Http\Controllers\Api\PersonalUser;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PersonalUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBaseInfo(Request $request)
    {
        //
        try {
            $users = DB::table('users')->where('email', $request->email)->get();
            if ($users->isEmpty()) {
                User::create([
                    'name' => $request->name,
                    'birthday' => $request->birthday,
                    'gradtime' => $request->gradday,
                    'telephone' => $request->telephone,
                    'email' => $request->email,
                    'address' => $request->address,
                ]);
                return response()->json([
                    'message' => 'success'
                ], 200);
            } else {
                return response()->json([
                    'message' => 'fail'
                ]);
            }


        } catch (Exception $e) {
            return response()->json([
                'message' => 'fail'
            ]);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        //
        try {
            $users = DB::table('users')->where('email', $request->email)->get();
            if ($users->isEmpty()) {
                User::create([
                    'name' => $request->username,
                    'password' => $request->password,
                    'email' => $request->email,
                ]);
                return response()->json([
                    'message' => 'success'
                ], 200);
            } else {
                return response()->json([
                    'message' => 'repeat'
                ]);
            }


        } catch (Exception $e) {
            return response()->json([
                'message' => 'fail'
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function checkLogin(Request $request)
    {
        //
        $email=$request->email;
        $users = DB::table('users')->where('email',$email)->get();
        if($users->count()!=0){
            if(  json_decode(json_encode($users), true)[0]['password']==$request->password)
            {
                    return response()->json([
                    'message' => 'success',

                    ]);
            }else{
                return response()->json([
                    'message' => 'pwwrong',

                ]);
            }
        }else{
            return response()->json([
                'message' => 'fail'
            ]);
        }
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
