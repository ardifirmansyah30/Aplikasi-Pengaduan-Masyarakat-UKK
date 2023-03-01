<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = ['tgl_pengaduan','id_tanggapan','nik','isi_laporan','foto'];

    public function Tanggapan() {
        return $this->hasOne('App\Tanggapan','id_tanggapan','id_tanggapan');
    }
}
