<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Response;
use App\JunkBank;
use App\JunkType;
use Illuminate\Http\Request;

class JunkBankController extends Controller
{
    public function index(){

      $bank = DB::table('junk_bank')->get();

      return view('bank-sampah', ['bank' => $bank]);
    }

    public function show($id){

      $transaksi = DB::table('junk_type')
                  ->join('junk_bank', 'junk_type.id_junk_bank', '=', 'junk_bank.id')
                  ->where('junk_type.id_junk_bank',$id)
                  ->get();

      return view('transaksi', ['transaksi' => $transaksi,'id' => $id]);
    }

    public function api_index(){
      $bank = DB::table('junk_bank')->select('id','name','description','lat','lang')->get();
      return Response::json($bank,200);
    }

    public function api_store(){
      $JunkBank = new JunkBank;
    	$JunkBank->name=Input::get('name');
    	$JunkBank->description=Input::get('description');
      $JunkBank->lat=Input::get('lat');
      $JunkBank->lang=Input::get('lang');
    	$success = $JunkBank->save();

    	if(!$success)
    	{
        return Response::json("error saving",500);
    	}
        return Response::json("success",201);
    }
}
