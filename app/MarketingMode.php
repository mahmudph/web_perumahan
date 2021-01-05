<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketingMode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_marketing';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user_id", "jenis_kelamin_id", "tgl_lahir", "no_hp_marketing", "nama_company", "no_hp_company", "foto", "alamat"
    ];

    public function user()
    {
        return $this->hasOne(App\User::class);
    }

    public function perumahan()
    {
        return $this->hasMany(App\Perumahan::class);
    }
}
