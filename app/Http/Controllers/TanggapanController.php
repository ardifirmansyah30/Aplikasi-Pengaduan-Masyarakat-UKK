<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanggapan;
use App\Pengaduan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pengaduan = Pengaduan::all();
        // $tanggapan = Tanggapan::all();
        $tanggapan =  DB::table('tanggapans as a')
            ->join('pengaduans as b', 'a.id_pengaduan', '=', 'b.id_pengaduan')
            ->select('b.isi_laporan', 'b.status', 'a.id_tanggapan', 'a.tgl_tanggapan', 'a.tanggapan')
            ->get();

        return view('tanggapan.index', compact('tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tgl        = Carbon::now()->format('Y-m-d');
        $pengaduan = Pengaduan::get();
        $tanggapan = Tanggapan::all();
        return view('tanggapan.create', compact('pengaduan','tanggapan'));
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
            'id_pengaduan' => 'required',
            'tgl_tanggapan' => Carbon::now()->format('Y-m-d'),
            'tanggapan' => 'required',
            // 'isi_laporan' => 'required',
            // 'foto' => 'required',
            // 'status'=> 'required',
    	]);
 
        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
    		'tgl_tanggapan' => Carbon::now()->format('Y-m-d'),
            'tanggapan' => $request->tanggapan,
            // 'isi_laporan' => $request->isi_laporan,
            // 'foto' => $request->foto,
            // 'status' => $request->status,
    	]);

         $pengaduan = Pengaduan::find($request->id_pengaduan);
         $pengaduan->status = $request->status;
         $pengaduan->save();
 
    	return redirect('/tanggapan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function createOrUpdate(Request $request)
    // {
    //     $tanggapan = Tanggapan::where('$id_pengaduan',$request->id_pengaduan);
    //     $pengaduan = Pengaduan::where('$id_pengaduan',$request->id_pengaduan);
    //     if($tanggapan){
    //         $pengaduan->update(['status'=>$request->status]);

    //         $tanggapan->update([
    //             'tgl_tanggapan'=>date('Y-m-d'),
    //             'tanggapan'=>$request->tanggapan,
    //         ]);
    //         return redirect()->route('pengaduan.show',['pengaduan'=>$pengaduan, 'tanggapan'=>$tanggapan]);        }else{
    //         $pengaduan->update(['status'=>$request->status]);
    //         $tanggapan= Tanggapan::create([
    //             'tgl_tanggapan'=>date('Y-m-d'),
    //             'tanggapan'=>$request->tanggapan,
    //         ]);
    //     }
    //     return redirect()->route('pengaduan.show',['pengaduan'=>$pengaduan, 'tanggapan'=>$tanggapan])->with(['status'=>'Berhasil dikirim']);
    // }

    public function show($id)
    {
        $tgl        = Carbon::now()->format('Y-m-d');
        $tanggapan = Tanggapan::find($id);
        $pengaduan = Pengaduan::find($id);
        return view('tanggapan.show')->with('tanggapan', $tanggapan,'pengaduan', $pengaduan);
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
        return view('tanggapan.edit',compact('tanggapan')); 
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
            'tgl_tanggapan' => Carbon::now()->format('Y-m-d'),
            'tanggapan' => 'required',
            'nik' => 'required|min:5|max:17'
         ]);
      
         $tanggapan = Tanggapan::find($id);
         $tanggapan->tgl_tanggapan = Carbon::now()->format('Y-m-d');
         $tanggapan->tanggapan = $request->tanggapan;
         $tanggapan->nik = $request->nik;
         $tanggapan->save();

         return redirect('/tanggapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tanggapan = Tanggapan::find($id);
        $tanggapan->delete();

        return redirect('/tanggapan');
    }
    public function cetakTanggapan()
    {
 
        $cetaktanggapan = DB::table('tanggapans as a')
        ->join('pengaduans as b', 'a.id_pengaduan', '=', 'b.id_pengaduan')
        ->select('b.isi_laporan', 'b.status', 'a.id_tanggapan', 'a.tgl_tanggapan', 'a.tanggapan')
        ->get();
        return view('tanggapan.cetak', compact('cetaktanggapan'));
    }
}
