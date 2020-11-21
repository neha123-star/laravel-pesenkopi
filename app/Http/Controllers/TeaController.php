<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tea;
use File;

class TeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tea = Tea::all();
    	return view('admin.menu.minuman.tea.index',['tea'=>$tea]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.minuman.tea.tambah');
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
    		'nama_tea' => 'required|max:200',
    		'gambar_tea' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'harga_tea' => 'required|max:100',
    		'keterangan_tea' => 'required|max:300'
        ]);

        $file = $request->file('gambar_tea');
        $file->move('assets/uploads/minuman/tea/',time().'_'.$file->getClientOriginalName());
    	Tea::insert([
    	'nama_tea' => $request->nama_tea,
    	'gambar_tea' => time().'_'.$file->getClientOriginalName(),
    	'harga_tea' => $request->harga_tea,
    	'keterangan_tea' => $request->keterangan_tea
        ]);
        return redirect()->route('tea.index');
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
        $tea = Tea::where('id',$id)->get();
        return view('admin.menu.minuman.tea.edit',compact('tea'));
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
    		'nama_tea' => 'required|max:200',
    		'harga_tea' => 'required|max:100',
    		'gambar_tea' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'keterangan_tea' => 'required|max:300'
        ]);
            
        $file = $request->file('gambar_tea');
        $file->move('assets/uploads/minuman/tea/',time().'_'.$file->getClientOriginalName());
        Tea::where('id',$id)
        ->update([
            'nama_tea' => $request->nama_tea,
            'gambar_tea' => time().'_'.$file->getClientOriginalName(),
            'harga_tea' => $request->harga_tea,
            'keterangan_tea' => $request->keterangan_tea,
        ]);
         return redirect()->route('tea.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tea = Tea::where('id',$id)->first();
        File::delete('assets/uploads/minuman/tea/'.$tea->file);
        Tea::where('id',$id)->delete();
        return redirect()->route('tea.index');
    }
}
