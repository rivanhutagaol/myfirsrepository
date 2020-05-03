<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class BeritaController extends Controller
{
	public function index()
	{
		$berita = DB::table('berita')->get();
 
		return view('index',['berita' => $berita]);
 
	}
 
	public function tambah()
	{
 
		return view('tambah');
 
	}
 
	public function store(Request $request)
	{
		DB::table('berita')->insert([
			'judul' => $request->judul,
			'isi' => $request->isi
		]);
		return redirect('/berita');
 
	}
 
	public function edit($id)
	{
		$berita = DB::table('berita')->where('id',$id)->get();
		return view('edit',['berita' => $berita]);
 
	}
 
	public function update(Request $request)
	{
		DB::table('berita')->where('id',$request->id)->update([
			'judul' => $request->judul,
			'isi' => $request->isi
		]);
		return redirect('/berita');
	}
 
	public function hapus($id)
	{
		DB::table('berita')->where('id',$id)->delete();
		
		return redirect('/berita');
	}
}