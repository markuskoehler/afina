<?php

namespace App\Http\Controllers;

use App\Models\Hibiscus\Konto;
use App\Models\Hibiscus\Umsatz;
use Illuminate\Http\Request;
use Redis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$test = Umsatz::whereBetween('datum', ['2017-01-01', '2017-02-01'])->get();
        //$test2 = $test[12]->konto();
        //dd($test2->first()->kontonummer);
        //$test = Konto::get();
        //dd($test[1]->umsaetze()->first());
        $test = '';
        return view('home', compact('test'));
    }
}
