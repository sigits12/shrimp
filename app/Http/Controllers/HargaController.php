<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HargaController extends Controller
{
  public function index(Request $request)
  {
    $response = Http::get('https://app.jala.tech/api/shrimp_prices', [
      'search'    => $request->search,
      'with'      => 'creator,species,region',
      'sort'      => 'size_100|week,dsc',
      'region_id' => $request->region_id,
      'page'      => $request->page,
      'per_page'  => $request->per_page
    ]);

    return $response->json();
  }

  public function detail(Request $request)
  {
    $response = Http::get('https://app.jala.tech/api/shrimp_prices/'.$request->id.'');

    return $response->json();
  }


}
