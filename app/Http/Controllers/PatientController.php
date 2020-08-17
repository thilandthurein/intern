<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient=Patient::all();
        return view('patientshow',compact('patient'));
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

        //dd($request);
        $result=$request->all();
        //dd($result);
        Patient::create($result);
        return redirect()->route('patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id) {

        return view('patientedit');
       /* $name = $request->input('name');
        $age = $request->input('age');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $email = $request->input('email');
        $password = $request->input('password');
        $diseases = $request->input('diseases');
        $doctor = $request->input('doctor');
        $bdate = $request->input('bdate');
        $data=array('name'=>$name,"age"=>$age,"phone"=>$phone,"address"=>$address,"email"=>$email,"password"=>$password,"diseases"->$diseases,"doctor"->$doctor,
                    "bdate"->$bdate);
//DB::table('student')->update($data);
// DB::table('student')->whereIn('id', $id)->update($request->all());
        DB::update('update patients set name = ?,age=?,phone=?,address=?,email=?,password=?,diseases=?,doctor=?,bdate=? where id = ?',[$name,$age,$phone,$address,$email,$password,$diseases,$doctor,$bdate]);
        //echo "Record updated successfully.";
        //echo 'Click Here to go back.';*/
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
        $name = $request->input('name');
        $age = $request->input('age');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $email = $request->input('email');
        $password = $request->input('password');
        $diseases = $request->input('diseases');
        $doctor = $request->input('doctor');
        $bdate = $request->input('bdate');
        $data=array('name'=>$name,"age"=>$age,"phone"=>$phone,"address"=>$address,"email"=>$email,"password"=>$password,"diseases"->$diseases,"doctor"->$doctor,
                    "bdate"->$bdate);
//DB::table('student')->update($data);
// DB::table('student')->whereIn('id', $id)->update($request->all());
        DB::update('update patients set name = ?,age=?,phone=?,address=?,email=?,password=?,diseases=?,doctor=?,bdate=? where id = ?',[$name,$age,$phone,$address,$email,$password,$diseases,$doctor,$bdate]);
        //echo "Record updated successfully.";
        //echo 'Click Here to go back.';
        
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
