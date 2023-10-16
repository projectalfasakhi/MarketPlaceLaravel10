<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatCustomerController extends Controller
{
    public function index()
    {
        $admins = User::where('type', 'admin')->get();
        Chat::where('to_id', Auth::user()->id)->update([
            'status'=>'on read'
        ]);

        $chat = Chat::where('from_id', Auth::user()->id)
        ->orWhere('to_id', Auth::user()->id)
        ->orderBy('created_at', 'asc')
        ->get();

        return view('customer.chat.chat', compact(['chat', 'admins']));
    }

    public function send(Request $request)
    {   
        $admins = User::where('type', 'admin')->get();
        Chat::create([
            'from_id'=>Auth::user()->id,
            'to_id'=>$request->to_id,
            'pesan'=>$request->pesan,
            'status'=>'off read',
        ]);

        return back();
    }
}

