<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'tbusers';
    protected $primaryKey = 'id';
    protected $fillable = ['nik','nama','email','password','telp','jenis_kel','level','alamat','rt','rw','kode_pos','province_id','regency_id','district_id','village_id'];
}
