<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_perumahan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['marketing_id', 'tipe_id', 'nama_perumahan', 'harga', 'code', 'sertifikat_id', 'deskripsi', 'foto'];

    public function marketing()
    {
        return $this->belongsTo(MarketingMode::class);
    }

    public function tipe_rumah()
    {
        return $this->belongsTo(TipeRumah::class);
    }

    public function sertifikat()
    {
        return $this->belongsTo(Sertifikat::class);
    }
}
