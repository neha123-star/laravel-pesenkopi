<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kopiice;
use App\Tea;
use App\Dalgona;
use App\Bottle;
use App\Choco;
use App\Brownis;

class CoffeController extends Controller
{
    public function index()
    {
        return view('coffe.index');
    }
    public function menu()
    {
        $kopiice = Kopiice::all();
        $tea = Tea::all();
        $choco = Choco::all();
        $dalgona = Dalgona::all();
        $bottle = Bottle::all();
        $brownis = Brownis::all();
        return view('coffe.menu', ['kopiice' => $kopiice,'tea' => $tea,'choco' => $choco,'dalgona' => $dalgona, 'bottle' =>$bottle,'brownis' =>$brownis]);
    }
    public function about()
    {
        return view('coffe.about');
    }
    public function contact()
    {
        return view('coffe.contact');
    }
}
