<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Brownis;
use File;


class BrownisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brownis = Brownis::all();
    	return view('admin.menu.snack.brownis.index',['brownis'=>$brownis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.snack.brownis.tambah_brow');
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
    		'nama_br' => 'required|max:200',
    		'harga_br' => 'required|max:100',
    		'gambar_br' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'keterangan_br' => 'required|max:300'
        ]);
            
        $file = $request->file('gambar_br');
        $file->move('assets/uploads/snack/',time().'_'.$file->getClientOriginalName());
    	Brownis::insert([
    	'nama_br' => $request->nama_br,
    	'gambar_br' => time().'_'.$file->getClientOriginalName(),
    	'harga_br' => $request->harga_br,
    	'keterangan_br' => $request->keterangan_br
        ]);
        return redirect()->route('brownis.index');
         
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
        $brownis = Brownis::where('id',$id)->get();
        return view('admin.menu.snack.brownis.edit_brow',compact('brownis'));
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
    		'nama_br' => 'required|max:200',
    		'harga_br' => 'required|max:100',
    		'gambar_br' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'keterangan_br' => 'required|max:300'
        ]);
            
        $file = $request->file('gambar_br');
        $file->move('assets/uploads/snack/',time().'_'.$file->getClientOriginalName());
        Brownis::where('id',$id)
        ->update([
            'nama_br' => $request->nama_br,
            'gambar_br' => time().'_'.$file->getClientOriginalName(),
            'harga_br' => $request->harga_br,
            'keterangan_br' => $request->keterangan_br,
        ]);
         return redirect()->route('brownis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brownis = Brownis::where('id',$id)->first();
        File::delete('assets/uploads/snack/'.$brownis->file);
        Brownis::where('id',$id)->delete();
        return redirect()->route('brownis.index');
    }
}
