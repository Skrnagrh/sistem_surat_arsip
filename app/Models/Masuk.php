<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Masuk extends Model
{
    use HasFactory;

    //  protected $fillable = ['lamp', 'alamat', 'tanggal', 'nomor', 'prihal', 'petunjuk'];

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
        $query->when($filters['searchmasuk'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%'.$search.'%')
            ->orWhere('nomor', 'like', '%'.$search.'%')
            ->orWhere('pengirim', 'like', '%'.$search.'%')
            ->orWhere('tanggal', 'like', '%'.$search.'%')
            ->orWhere('alamat', 'like', '%'.$search.'%')
            ->orWhere('keterangan', 'like', '%'.$search.'%');
        });
    }

    public static function kode()
    {
        $bulanRomawi = array("", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
    	$kode = DB::table('masuks')->max('kodesm');
    	$addNol = '';
    	$kode = str_replace("SM/", "", $kode);
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
    	$kodeBaru = $addNol.$incrementKode . '/' . "SM". '/' . $bulanRomawi[date('n')] . '/' . date('Y');
    	return $kodeBaru;
    }

}
