<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bottle;
use File;

class BottleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bottle = Bottle::all();
    	return view('admin.menu.minuman.bottle.index',['bottle'=>$bottle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.minuman.bottle.tambah');
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
    		'nama_bt' => 'required|max:200',
    		'gambar_bt' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'harga_bt' => 'required|max:100',
    		'keterangan_bt' => 'required|max:300'
        ]);

        $file = $request->file('gambar_bt');
        $file->move('assets/uploads/minuman/bottle/',time().'_'.$file->getClientOriginalName());
    	Bottle::insert([
    	'nama_bt' => $request->nama_bt,
    	'gambar_bt' => time().'_'.$file->getClientOriginalName(),
    	'harga_bt' => $request->harga_bt,
    	'keterangan_bt' => $request->keterangan_bt
        ]);
        return redirect()->route('bottle.index');
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
        $bottle = Bottle::where('id',$id)->get();
        return view('admin.menu.minuman.bottle.edit',compact('bottle'));
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
    		'nama_bt' => 'required|max:200',
    		'harga_bt' => 'required|max:100',
    		'gambar_bt' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'keterangan_bt' => 'required|max:300'
        ]);
            
        $file = $request->file('gambar_bt');
        $file->move('assets/uploads/minuman/bottle/',time().'_'.$file->getClientOriginalName());
        Bottle::where('id',$id)
        ->update([
            'nama_bt' => $request->nama_bt,
            'gambar_bt' => time().'_'.$file->getClientOriginalName(),
            'harga_bt' => $request->harga_bt,
            'keterangan_bt' => $request->keterangan_bt,
        ]);
         return redirect()->route('bottle.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bottle = Bottle::where('id',$id)->first();
        File::delete('assets/uploads/minuman/bottle/'.$bottle->file);
        Bottle::where('id',$id)->delete();
        return redirect()->route('bottle.index');
    }
}
