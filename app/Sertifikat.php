<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_sertifikat';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sertifikat'];



    public function rumah()
    {
        return $this->hasMany(Perumahan::class);
    }
}
