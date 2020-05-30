<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Job;
use App\Region;
use App\WargaSekolah;
use Illuminate\Http\Request;

class WargaSekolahController extends Controller
{

    public function index()
    {
        $wargaSekolah = WargaSekolah::with('agama', 'jobs')->get();
        // dd($wargaSekolah);
        // $wargaSekolah = WargaSekolah::all();
        // return view('warga-sekolah.index', ['wargaSekolah' => $wargaSekolah]);
        return $wargaSekolah->toJson();
    }

    public function create()
    {
        $jobs = Job::all()->toArray();
        $agama = Agama::all()->toArray();
        $region = new Region;
        $provinsi = $region->regional();
        // dd($provinsi);
        return view('warga-sekolah.create', compact('jobs', 'agama', 'provinsi'));
    }

    public function store()
    {
    }
}
