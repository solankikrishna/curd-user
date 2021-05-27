<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Hobbies;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\Facades\DataTables;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datatable = datatables(DB::table('users'))->toJson();
        return view('home',['dataTable'=>$datatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hobbiesList = Hobbies::pluck('name');
        $cityList = Cities::pluck('name', 'id');
        return view('user.add',compact('hobbiesList','cityList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'first_name'=>'required',
           'last_name'=>'required',
           'city_id'=>'required',
           'email'=>'required',
           'password'=>'required',
           'gender'=>'required',
        ]);
        if ($validator->fails()) {
            return redirect('admin')
                ->withErrors($validator)
                ->withInput();
        }
        else{
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $city_id = $request->input('city_id');
            $email = $request->input('email');
            $password = bcrypt($request->input('password'));
            $gender = $request->input('gender');
            $data=array('firstname'=>$first_name,"lastname"=>$last_name,"city_id"=>$city_id,"email"=>$email,'password'=>$password,'gender'=>$gender);
            DB::table('users')->insert($data);
            return redirect('admin');
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
