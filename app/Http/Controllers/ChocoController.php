<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Choco;
use File;

class ChocoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choco = Choco::all();
    	return view('admin.menu.minuman.choco.index',['choco'=>$choco]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.minuman.choco.tambah');
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
    		'nama_co' => 'required|max:200',
    		'gambar_co' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'harga_co' => 'required|max:100',
    		'keterangan_co' => 'required|max:300'
        ]);

        $file = $request->file('gambar_co');
        $file->move('assets/uploads/minuman/choco/',time().'_'.$file->getClientOriginalName());
    	Choco::insert([
    	'nama_co' => $request->nama_co,
    	'gambar_co' => time().'_'.$file->getClientOriginalName(),
    	'harga_co' => $request->harga_co,
    	'keterangan_co' => $request->keterangan_co
        ]);
        return redirect()->route('choco.index');
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
        $choco = Choco::where('id',$id)->get();
        return view('admin.menu.minuman.choco.edit',compact('choco'));
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
    		'nama_co' => 'required|max:200',
    		'harga_co' => 'required|max:100',
    		'gambar_co' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'keterangan_co' => 'required|max:300'
        ]);
            
        $file = $request->file('gambar_co');
        $file->move('assets/uploads/minuman/choco/',time().'_'.$file->getClientOriginalName());
        Choco::where('id',$id)
        ->update([
            'nama_co' => $request->nama_co,
            'gambar_co' => time().'_'.$file->getClientOriginalName(),
            'harga_co' => $request->harga_co,
            'keterangan_co' => $request->keterangan_co,
        ]);
         return redirect()->route('choco.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $choco = Choco::where('id',$id)->first();
        File::delete('assets/uploads/minuman/choco/'.$choco->file);
        Choco::where('id',$id)->delete();
        return redirect()->route('choco.index');
    }
}
