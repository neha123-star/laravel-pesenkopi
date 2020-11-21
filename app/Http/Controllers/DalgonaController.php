<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dalgona;
use File;

class DalgonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dalgona = Dalgona::all();
    	return view('admin.menu.minuman.dalgona.index',['dalgona'=>$dalgona]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.minuman.dalgona.tambah');
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
    		'nama_dg' => 'required|max:200',
    		'gambar_dg' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'harga_dg' => 'required|max:100',
    		'keterangan_dg' => 'required|max:300'
        ]);

        $file = $request->file('gambar_dg');
        $file->move('assets/uploads/minuman/dalgona/',time().'_'.$file->getClientOriginalName());
    	Dalgona::insert([
    	'nama_dg' => $request->nama_dg,
    	'gambar_dg' => time().'_'.$file->getClientOriginalName(),
    	'harga_dg' => $request->harga_dg,
    	'keterangan_dg' => $request->keterangan_dg
        ]);
        return redirect()->route('dalgona.index');
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
        $dalgona = Dalgona::where('id',$id)->get();
        return view('admin.menu.minuman.dalgona.edit',compact('dalgona'));
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
    		'nama_dg' => 'required|max:200',
    		'harga_dg' => 'required|max:100',
    		'gambar_dg' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'keterangan_dg' => 'required|max:300'
        ]);
            
        $file = $request->file('gambar_dg');
        $file->move('assets/uploads/minuman/dalgona/',time().'_'.$file->getClientOriginalName());
        Dalgona::where('id',$id)
        ->update([
            'nama_dg' => $request->nama_dg,
            'gambar_dg' => time().'_'.$file->getClientOriginalName(),
            'harga_dg' => $request->harga_dg,
            'keterangan_dg' => $request->keterangan_dg,
        ]);
         return redirect()->route('dalgona.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dalgona = Dalgona::where('id',$id)->first();
        File::delete('assets/uploads/minuman/dalgona/'.$dalgona->file);
        Dalgona::where('id',$id)->delete();
        return redirect()->route('dalgona.index');
    }
}
