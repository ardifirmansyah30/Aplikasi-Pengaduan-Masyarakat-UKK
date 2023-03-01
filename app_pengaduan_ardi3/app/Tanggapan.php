<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'Tanggapans';
    protected $primaryKey = 'id_tanggapan';
    protected $fillable = ['id_pengaduan','tgl_tanggapan','tanggapan','nik','status'];
    
    public function Pengaduan() {
        return $this->hasOne('App\Pengaduan','id_pengaduan','id_pengaduan');
    }
}
