<?php

namespace App\Http\Controllers;
use App\Chat;
use Illuminate\Http\Request;

class chatController extends Controller
{
    public function index(){
         $chat = Chat::All();
         $chat = $chat->reverse();
         return view('home', ['message'=>$chat]);
    }
    public function add(Request $request){
        $data = $request->except(['_token']);
        $chat = Chat::add($data);
       return back();
    }
}
