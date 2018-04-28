<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function store(Request $request){

      DB::table('location')->insert([
          'title'             => $request->title,
          'description'       => $request->description,
          'lat'               => $request->lat,
          'lang'              => $request->lang,
          'type'              => $request->status,
          'status'            => $request->status,
          'user_id'
          'created_at'       => \Carbon\Carbon::now()->toDateTimeString()
      ]);
    }
}
