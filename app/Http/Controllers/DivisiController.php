<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;
use Illuminate\Support\Facades\DB;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_divisi = Divisi::all();
        $data_divisi = DB::table('divisis')->orderBy('created_at', 'desc')->paginate(5);

        return view('lingkup')->with('data_divisi', $data_divisi);
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
        $this->validate($request,[
            'lingkup' => 'required',
            'deskripsi' => 'required',
        ]);

        $emps = new Divisi;

        $emps->lingkup = $request->input('lingkup');
        $emps->deskripsi = $request->input('deskripsi');

        $emps->save();

        return redirect('/divisi')->with('addsuccess','data saved');
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
        $this->validate($request,[
            'lingkup' => 'required',
            'deskripsi' => 'required',
        ]);

        $emps = Divisi::find($id);

        $emps->lingkup = $request->input('lingkup');
        $emps->deskripsi = $request->input('deskripsi');

        $emps->save();

        return redirect('/divisi')->with('updatesuccess','data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emps = Divisi::find($id);
        $emps->delete();

        return redirect('/divisi')->with('deletesuccess', 'Data Delete');
    }
}
