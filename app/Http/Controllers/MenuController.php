<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Menu;
use App\Models\Message;

class MenuController extends Controller
{
    //USER
    public function index()
    {
        return view('home');
    }

    public function menu()
    {
        $menus = Menu::all();

        foreach ($menus as $menu) {
            $menu->short_description = $this->truncateWords($menu->deskripsi, 10);
        }

        return view('menu', compact('menus'));
    }

    public function detailMenu(string $id)
    {
        $menu = Menu::findOrFail($id);

        return view('detail-menu', compact('menu'));
    }

    public function gallery()
    {
        $menus = Menu::all();

        return view('gallery', compact('menus'));
    }

    public function contact()
    {
        return view('contact');
    }

    //ADMIN MENU
    public function truncateWords($text, $limit) {
        if (str_word_count($text, 0) > $limit) {
            $words = explode(' ', $text);
            return implode(' ', array_slice($words, 0, $limit)) . '...';
        }
        return $text;
    }

    public function adminMenu()
    {
        $menus = Menu::all();

        $userName = auth()->user()->nama;

        $statusnya = "Belum dibaca";
        $message = Message::where('messages.status', $statusnya)->get();
        $totalMessage = Message::where('messages.status', $statusnya)->count();

        return view('admin.menu', compact('menus', 'message', 'totalMessage', 'userName'));
    }

    public function addMenu()
    {
        $userName = auth()->user()->nama;

        $statusnya = "Belum dibaca";
        $message = Message::where('messages.status', $statusnya)->get();
        $totalMessage = Message::where('messages.status', $statusnya)->count();

        return view('admin.menu-add', compact('message', 'totalMessage', 'userName'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string',
            'bahan' => 'nullable|string',
            'jenis' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();  
            $request->gambar->move(public_path('images/menu'), $imageName);
        } else {
            return redirect()->back()->with('error', 'Gambar tidak ditemukan.');
        }
        
        Menu::create([
            'nama' => $request->nama,
            'gambar' => $imageName,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'jenis' => $request->jenis,
        ]);

        return redirect()->route('admin.menu')->with('success', 'Menu created successfully.');
    }

    public function updateForm(string $id)
    {
        $menu = Menu::findOrFail($id);

        $userName = auth()->user()->nama;

        $statusnya = "Belum dibaca";
        $message = Message::where('messages.status', $statusnya)->get();
        $totalMessage = Message::where('messages.status', $statusnya)->count();

        return view('admin.menu-edit', compact('menu', 'message', 'totalMessage', 'userName'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'sometimes|string|max:255',
            'gambar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'sometimes|string',
            'bahan' => 'sometimes|string',
            'jenis' => 'sometimes|string',
        ]);

        //get post by ID
        $post = Menu::findOrFail($id);

        $data = $request->only('nama', 'gambar', 'deskripsi', 'bahan', 'jenis');

        if($request->hasFile('gambar')){
            $imageName = time() . '.' . $request->gambar->extension();  
            $request->gambar->move(public_path('images/menu/'), $imageName);

            // Hapus gambar lama
            if ($post->gambar && file_exists(public_path('images/menu/' . $post->gambar))) {
                unlink(public_path('images/menu/' . $post->gambar));
            }

            $data['gambar'] = $imageName;
        }

        $post->update($data);

        return redirect()->route('admin.menu')->with('success', 'Menu updated successfully.');
    }

    public function destroy(string $id)
    {
         //get post by id_menu
        $post = Menu::findOrFail($id);

         //delete image
        Storage::delete('public/images/menu/'. $post->gambar);

         //delete post
        $post->delete();

         //redirect to index
        return redirect()->route('admin.menu')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    //ADMIN MESSAGE
    public function adminMessage()
    {
        $userName = auth()->user()->nama;

        $statusnya = "Belum dibaca";
        $message = Message::where('messages.status', $statusnya)->get();
        $totalMessage = Message::where('messages.status', $statusnya)->count();

        return view('admin.message', compact('userName', 'message', 'totalMessage'));
    }

    public function adminMessageRead()
    {
        $userName = auth()->user()->nama;

        $statusnya = "Belum dibaca";
        $statusnya2 = "Sudah dibaca";
        $message = Message::where('messages.status', $statusnya2)->get();
        $totalMessage = Message::where('messages.status', $statusnya)->count();

        return view('admin.message-read', compact('userName', 'message', 'totalMessage'));
    }

    public function saveMessage(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke database
        Message::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'message' => $request->message,
            'status' => 'Belum dibaca',
        ]);

        // Redirect atau response setelah berhasil menyimpan
        return redirect()->route('contact')->with('success', 'Ulasan berhasil disimpan! Terimakasih atas masukan anda');
    }

    public function updateMessage(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255',
            'message' => 'sometimes|string',
        ]);

        $post = Message::findOrFail($id);

        $post->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'message' => $request->message,
            'status' => 'Sudah dibaca',
        ]);

        return redirect()->route('admin.message')->with('success', 'Pesan telah dibaca');
    }
}
