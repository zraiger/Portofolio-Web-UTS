<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    protected $table = "riwayat";
    protected $fillable = ['judul', 'tipe', 'tgl_str', 'tgl_end', 'info1', 'info2', 'info3', 'isi'];

    protected $appends = ['tgl_str_id', 'tgl_end_id'];

    public function getTglStrIdAttribute()
    {
        return Carbon::parse($this->attributes['tgl_str'])->translatedFormat('d F Y');
    }

    public function getTglEndIdAttribute()
    {
        if ($this->attributes['tgl_end']) {
            return Carbon::parse($this->attributes['tgl_end'])->translatedFormat('d F Y');
        } else {
            return 'Present';
        }
    }
}
