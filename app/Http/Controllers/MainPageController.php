<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function index($lang = 'en')
  {
    // dd($lang);
    $flagIcon = 'flag-icon-gb';
    $langName = 'En';
    switch ($lang) {
      case 'id':
        app()->setLocale('id');
        $flagIcon = 'flag-icon-id';
        $langName = 'Id';
        break;

      default:
        # code...
        break;
    }
    $data = [
      'left-align',
      'center-align',
      'right-align'
    ];
    // warga sekolah diambil dari database dan mengembalikan json
    // $tes = DB::select('select * from users where active = ?', [1]);
    $wargaSekolah = [
      'students' => 1000,
      'teachers' => 75,
      'employes' => 10,
      'alumni' => 10000
    ];
    // $iconWargaSekolah = [
    //   'people',
    //   'people',
    //   'people',
    //   'school',
    // ];
    return view('welcome', compact('data', 'wargaSekolah', 'flagIcon', 'langName'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
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
    //
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
