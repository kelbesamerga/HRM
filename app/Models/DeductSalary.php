<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeductSalary extends Model
{
    use HasFactory;
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'deduct_salaries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country',
        'region',
        'city',
    ];
}
