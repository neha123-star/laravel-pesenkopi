<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kopiice;
use File;

class KopiIceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kopiice = Kopiice::all();
    	return view('admin.menu.minuman.kopi.ice.kopi_ice',['kopiice'=>$kopiice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.minuman.kopi.ice.tambah_koice');
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
    		'nama_koice' => 'required|max:200',
    		'gambar_koice' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'harga_koice' => 'required|max:100',
    		'keterangan_koice' => 'required|max:300'
        ]);

        $file = $request->file('gambar_koice');
        $file->move('assets/uploads/minuman/kopi/',time().'_'.$file->getClientOriginalName());
    	Kopiice::insert([
    	'nama_koice' => $request->nama_koice,
    	'gambar_koice' => time().'_'.$file->getClientOriginalName(),
    	'harga_koice' => $request->harga_koice,
    	'keterangan_koice' => $request->keterangan_koice
        ]);
        return redirect()->route('ice.index');
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
        $kopiice = Kopiice::where('id',$id)->get();
        return view('admin.menu.minuman.kopi.ice.edit_koice',compact('kopiice'));
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
    		'nama_koice' => 'required|max:200',
    		'harga_koice' => 'required|max:100',
    		'gambar_koice' => 'required|max:255|image|mimes:jpg,jpeg,png',
    		'keterangan_koice' => 'required|max:300'
        ]);
            
        $file = $request->file('gambar_koice');
        $file->move('assets/uploads/minuman/kopi/',time().'_'.$file->getClientOriginalName());
        Kopiice::where('id',$id)
        ->update([
            'nama_koice' => $request->nama_koice,
            'gambar_koice' => time().'_'.$file->getClientOriginalName(),
            'harga_koice' => $request->harga_koice,
            'keterangan_koice' => $request->keterangan_koice,
        ]);
         return redirect()->route('ice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kopiice = Kopiice::where('id',$id)->first();
        File::delete('assets/uploads/minuman/kopi/'.$kopiice->file);
        Kopiice::where('id',$id)->delete();
        return redirect()->route('ice.index');
    }
}
