<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kontak;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LpController extends Controller
{
    public function index(){
        $layanan = Layanan::orderby('id', 'desc')->get();
        return view('pages.index', [
            'layanan' => $layanan
        ]);
    }

    public function layanan($id){
        $data = Layanan::findOrFail($id);

        return view('pages.layanan', [
            'item' => $data
        ]);
    }

    public function pesanCreate(Request $request){
        $request->validate([
            'email' => 'email|required',
            'nama' => 'required|string',
            'phone' => 'required|numeric',
            'perusahaan' => 'string'
        ]);

        $data = $request->except(['_token']);
        $data['phone'] = (string)$request->phone;

        $insert = Kontak::create($data);

        return redirect()->back()->with('success', 'Berhasil kirim data selanjutnya akan di followup oleh tim kami');
    }

    public function listBlog(Request $request){
        $data = Artikel::with('kategori')->orderBy('id', 'desc')->limit(1);
        // return response()->json(strlen($data[0]->judul));
        return view('pages.blog', [
            'items' => $data
        ]);
    }

    public function detailArtikel(Request $request, $slug){
        $data = Artikel::with('kategori')->where('slug', $slug)->first();

        $artikel = Artikel::orderBy('id', 'desc')->where('id', '!=', $data->id)->limit(10)->get();

        return view('pages.detail-artikel', [
            'item' => $data,
            'artikel_terbaru' => $artikel
        ]);
    }
}
