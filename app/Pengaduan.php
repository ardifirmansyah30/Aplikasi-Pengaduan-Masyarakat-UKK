<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = ['tgl_pengaduan','id_tanggapan','nik','isi_laporan','foto'];

    public function tanggapan() {
        return $this->belongsTo('App\Tanggapan','id_tanggapan','id_tanggapan');
    }
    public function user() {
        return $this->belongsTo('App\User','nik','nik');
    }
}
