<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Role extends Model
{
    use HasFactory;

    protected $fillable=['name', 'description','created_at','updated_at'];

    /**
     * @var mixed|string
     */


    public function users(){
        return $this->belongsToMany(User::class);
    }
}
