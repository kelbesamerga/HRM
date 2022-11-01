<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiance extends Model
{
    use HasFactory;
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'experiances';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'company_name',
        'position',
        'address',
        'from',
        'to',
    ];
}
