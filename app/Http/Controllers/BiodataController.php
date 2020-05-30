<?php

namespace App\Http\Controllers;

use App\Biodata;
use App\Http\Resources\BiodataCollection;
use App\Http\Resources\BiodataResource;
use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BiodataController extends Controller
{
  // mendefinisikan nama tabel
  private $namaTabel = [
    'provinsi' => 'provinsi',
    'kecamatan' => 'kecamatan',
    'kabupaten' => 'kabupaten',
    'desa' => 'desa',
    'agama' => 'agama',
    'sekolah' => 'sekolah',
  ];
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index($nama = "", $id = "")
  {
    $namaTabel = array_search($nama, $this->namaTabel);
    $errorResponse = response()->json([
      'error' => "terjadi kesalahan"
    ], 404);
    if ($namaTabel == "") {
      return $errorResponse;
    }
    Biodata::$namaTable = $nama;

    if ($id) {
      if (is_numeric($id)) {
        $tes = Biodata::findOrFail($id);
        return new BiodataResource($tes);
      } else {
        return $errorResponse;
      }
    } else {
      return new BiodataCollection(Biodata::paginate(5)); //Mengembalikan objek

      // return new BiodataResource(Biodata::all()); // Mengembalikan object
      // return response()->json(Biodata::all()->toArray(), 200); //Mengembalikan array
    }
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
