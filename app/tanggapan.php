<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';
    protected $guarded = [];
    protected $fillable = ['id_tanggapan','id_pengaduan','tanggal_tanggapan','tanggapan','username'];
    public function pengaduan()
    {
        return $this->hasOne(pengaduan::class, 'id','pengaduan' );
    }
}
