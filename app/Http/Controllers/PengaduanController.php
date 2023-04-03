<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Tanggapan;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggapan = Tanggapan::all();
        $pengaduan = Pengaduan::all();
    	return view('pengaduan.index', compact('pengaduan','tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tgl        = Carbon::now()->format('Y-m-d');
        $pengaduan = Pengaduan::all();
        return view('pengaduan.create', compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_pengaduan' => Carbon::now()->format('Y-m-d'),
            // 'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required'
    	]);

        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $imgName);
 
        Pengaduan::create([
            'tgl_pengaduan' => Carbon::now()->format('Y-m-d'),
            // 'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $imgName,
    	]);
 
    	return redirect('/pengaduan')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pengaduan)
    {
        $tgl        = Carbon::now()->format('Y-m-d');
        $pengaduan = Pengaduan::find($id_pengaduan);
        $user = User::find($id_pengaduan);
        $tanggapan = Tanggapan::find($id_pengaduan);
        return view('pengaduan.show',compact('tanggapan','pengaduan','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tgl        = Carbon::now()->format('Y-m-d');
        $tanggapan = Tanggapan::find($id);
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.edit', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            // 'tgl_pengaduan' => Carbon::now()->format('Y-m-d'),
            // 'nik' => 'required|min:5|max:17',
            // 'isi_laporan' => 'required',
            // 'foto' => 'required',
            'status' => 'required',
         ]);
      
         $pengaduan = Pengaduan::find($id);
        //  $pengaduan->tgl_pengaduan = Carbon::now()->format('Y-m-d');
        //  $pengaduan->nik = $request->nik;
        //  $pengaduan->isi_laporan = $request->isi_laporan;
        //  $pengaduan->foto = $request->foto;
         $pengaduan->status = $request->status;
         $pengaduan->save();

         return redirect('/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        return redirect('/pengaduan');
    }
    public function cetak_pdf($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.cetak_pdf', compact('pengaduan'));
    }
}