<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){

      $location = DB::table('location')->get();
      
      return view('lokasi', ['location' => $location]);
    }

    public function store(Request $request){

      DB::table('location')->insert([
          'title'             => $request->title,
          'description'       => $request->description,
          'lat'               => $request->lat,
          'lang'              => $request->lang,
          'type'              => $request->status,
          'status'            => $request->status,

          'created_at'       => \Carbon\Carbon::now()->toDateTimeString()
      ]);
    }

}
