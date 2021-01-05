<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeRumah extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_tipe';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama'];
}
