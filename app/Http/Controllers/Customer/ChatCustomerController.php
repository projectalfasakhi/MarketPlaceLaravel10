<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChatCustomerController extends Controller
{
    public function index()
    {
        $admins = User::where('type', 'admin')->where('is_superadmin', '0')->get();
        Chat::where('to_id', Auth::user()->id)->update([
            'status'=>'on read'
        ]);

        $chat = Chat::where('from_id', Auth::user()->id)
        ->orWhere('to_id', Auth::user()->id)
        ->orderBy('created_at', 'asc')
        ->get();

        return view('customer.chat.chat', compact(['chat', 'admins']));
    }

    public function detail_chat2($admin)
{
    Chat::where('from_id', $admin)->update([
        'status' => 'on read'
    ]);

    $chat = Chat::join('users', 'users.id', '=', 'chat.from_id')
        ->select('users.id', 'users.name', 'users.foto_profile', DB::raw('COUNT(*) AS total'))
        ->where('chat.to_id', Auth::user()->id)
        ->groupBy('users.id', 'users.name', 'users.foto_profile')
        ->orderBy('chat.created_at', 'desc')
        ->get();

    $pesan = Chat::where('to_id', $admin)
        ->where('from_id', Auth::user()->id)
        ->orWhere('to_id', Auth::user()->id)
        ->where('from_id', $admin)
        ->orderBy('created_at', 'asc')
        ->get();

    $id = $admin;

    $nama_user = User::find($admin);

    return view('customer.chat.chat_detail2', compact(['chat', 'pesan', 'id', 'nama_user']));
}



    public function send(Request $request)
    {   
        $request->validate([
            'to_id' => 'required|exists:users,id', // Pastikan 'to_id' adalah ID admin yang valid
            'pesan' => 'required',
        ]);
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

