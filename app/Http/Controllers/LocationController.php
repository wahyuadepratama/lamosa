<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Location;
use App\JunkBank;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){

      $location = DB::table('location')->get();
      $bank     = DB::table('junk_bank')->get();

      return view('lokasi', ['location' => $location, 'bank'=>$bank]);
    }

    public function store(Request $request){

      DB::table('location')->insert([
          'title'             => $request->title,
          'description'       => $request->description,
          'lat'               => $request->lat,
          'lang'              => $request->lon,
          'type'              => $request->type,
          'user_id'           => Auth::user()->id,
      ]);

      return view('/home', ['notif' => 'Lokasi berhasil ditambahkan, dalam beberapa jam lokasi akan segera diproses']);
    }

}
