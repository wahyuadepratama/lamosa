<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request){

      DB::table('messages')->insert([
          'user_id'           => Auth::user()->id,
          'junk_bank_id'      => $request->junk_bank_id,
          'berat'             => $request->berat,
          'junk_name'         => $request->junk_name,
          'message'           => $request->description,
          'message_type'      => 'Pengiriman',
      ]);

      return view('home');
    }

    public function reply(Request $request){

      DB::table('messages')->insert([
          'user_id'           => Auth::user()->id,
          'junk_bank_id'      => $request->junk_bank_id,
          'berat'             => $request->berat,
          'junk_name'         => $request->junk_name,
          'message_send'      => $request->description,
          'message_type'      => 'Pengiriman',
      ]);

      return view('/');
    }

    public function index(){

      $message = DB::table('messages')
                  ->where('messages.user_id',Auth::user()->id)
                  ->orderByRaw('updated_at DESC')
                  ->get();

      return view('profile', ['message' => $message]);
    }


}
