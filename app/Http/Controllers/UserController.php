<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $userName = auth()->user()->nama;

        $statusnya = "Belum dibaca";
        $message = Message::where('messages.status', $statusnya)->get();
        $totalMessage = Message::where('messages.status', $statusnya)->count();

        return view('admin.index', compact('message', 'totalMessage', 'userName'));
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function user()
    {
        $user = User::all();

        $userName = auth()->user()->nama;

        $statusnya = "Belum dibaca";
        $message = Message::where('messages.status', $statusnya)->get();
        $totalMessage = Message::where('messages.status', $statusnya)->count();

        return view('admin.user', compact('message', 'totalMessage', 'userName', 'user'));
    }

    public function addUser()
    {
        $userName = auth()->user()->nama;

        $statusnya = "Belum dibaca";
        $message = Message::where('messages.status', $statusnya)->get();
        $totalMessage = Message::where('messages.status', $statusnya)->count();

        return view('admin.user-add', compact('message', 'totalMessage', 'userName'));
    }

    public function save(Request $request)
    {
        //validate form
        $request->validate([
            'nama'     => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'     => 'required|min:6|confirmed',
        ]);

        //create post
        User::create([
            'nama'     => $request->nama,
            'email'     => $request->email,
            'password'     => $request->password,
        ]);

        //redirect to index
        return redirect()->route('admin.user')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function updateUserForm(string $id)
    {
        $user = User::findOrFail($id);

        $userName = auth()->user()->nama;

        $statusnya = "Belum dibaca";
        $message = Message::where('messages.status', $statusnya)->get();
        $totalMessage = Message::where('messages.status', $statusnya)->count();

        return view('admin.user-edit', compact('message', 'totalMessage', 'userName', 'user'));
    }
}
