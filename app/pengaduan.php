<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $guarded = [];
    protected $fillable = ['id_pengaduan','tgl_pengaduan','username','status','isi_laporan'];
}
