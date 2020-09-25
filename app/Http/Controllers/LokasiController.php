<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LokasiController extends Controller
{
  public function index(Request $request)
  {
    $response = Http::get('https://app.jala.tech/api/regions', [
      'search' => $request->search,
      'scope' => 'regency',
    ]);
    
    return $response->json();
  }
}
