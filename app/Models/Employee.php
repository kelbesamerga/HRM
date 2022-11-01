<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Employee extends Model
{
    use HasApiTokens, HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'role_id',
        'gender',
        'department_id',
        'designation_id',
        'date_of_birth',
        'blood_group',
        'phone',
        'image',
        'email',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Always encrypt password when it is updated.
     *
     * @param $value
     * @return string
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->emp_id=IdGenerator::generate(['table' => 'employees','field' =>'emp_id', 'length' => 10, 'prefix' =>'HRM-']);
        });
    }
}
