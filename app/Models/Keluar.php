<?php

namespace App\Models;

use App\Models\Masuk;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keluar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function masuk()
    {
        return $this->belongsTo(Masuk::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['searchkeluar'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%'.$search.'%')
            ->orWhere('nomor', 'like', '%'.$search.'%')
            ->orWhere('tujuan', 'like', '%'.$search.'%')
            ->orWhere('tanggal', 'like', '%'.$search.'%')
            ->orWhere('alamat', 'like', '%'.$search.'%')
            ->orWhere('keterangan', 'like', '%'.$search.'%');
        });
    }

    public static function kode()
    {
        $bulanRomawi = array("", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
    	$kode = DB::table('keluars')->max('kodesk');
    	$addNol = '';
    	$kode = str_replace("SK/", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "00";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "0";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "";
    	}

    	// $kodeBaru = $addNol.$incrementKode;
    	$kodeBaru = $addNol.$incrementKode . '/' . "SK". '/' . $bulanRomawi[date('n')] . '/' . date('Y');
    	return $kodeBaru;
    }
}
