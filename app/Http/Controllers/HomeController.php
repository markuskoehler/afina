<?php

namespace App\Http\Controllers;

use App\Models\Hibiscus\Konto;
use App\Models\Hibiscus\Umsatz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        // region REPORT: Gehalt in Ausbildung
        /*$test = Umsatz::where('empfaenger_name', 'like', '%Telekom%')->where('betrag', '>', '500')->get(['datum', 'betrag'])->map(function($item, $key) {
            return [strtotime($item->datum)*1000, $item->betrag];
        })->toArray();*/
        // endregion

        // region REPORT: Gehalt bei Hays
        /*$test = Umsatz::where('empfaenger_name', 'like', '%Hays%')->where('betrag', '>', '500')->get(['datum', 'betrag'])->map(function($item, $key) {
            return [strtotime($item->datum)*1000, $item->betrag];
        })->toArray();*/
        // endregion

        // region REPORT: Gehalt seit 2015 mit Rockwell Collins
        /*$test = Umsatz::where('empfaenger_name', 'like', '%Rockwell%')->where('betrag', '>', '2000')->get(['datum', 'betrag'])->map(function($item, $key) {
            return [strtotime($item->datum)*1000, $item->betrag];
        })->toArray();*/
        // endregion

        // region REPORT: Ausgaben 2017
        $test = Umsatz::where('betrag', '<', '0')->whereBetween('datum', ['2017-01-01', '2017-12-31'])->groupBy(DB::raw('datum, YEAR(datum), MONTH(datum), DAY(datum)'))->selectRaw('datum, SUM(betrag) as betrag')->get()->map(function($item, $key) {
            return [strtotime($item->datum)*1000, $item->betrag];
        })->toArray();
        // endregion

        $test = json_encode($test);
        //dd($test);
        return view('home', compact('test'));
    }
}
