<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Pegawai;

 class PegawaiController extends Controller
{
    public function index()
    {
    	$pegawai = Pegawai::all();
    	return view('pegawai', ['pegawai' => $pegawai]);
    }
    public function formulir(){
 
    	return view('formulir');
 
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    
    }
// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['pegawai' => $pegawai]);
 
}
}
