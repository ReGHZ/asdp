<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersetujuanCuti extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $fillable = [
        'user_id',
        'pengajuan_cuti_id',
        'nomor_surat',
        'tanggal_surat',
        'keterangan',
    ];

    public function PengajuanCuti()
    {
        return $this->belongsToThrough(User::class, PengajuanCuti::class);
    }
}
