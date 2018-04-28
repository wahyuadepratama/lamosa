<?php

namespace App\Http\Controllers;

use DB;
use Auth;
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
}
