<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'cars';

    public function getDamege()
    {
        return $this->hasMany(CarDamage::class,'damage_id','id');
    }

    public function getUser()
    {
        return $this->hasMany(User::class,'user_id','id');
    }

    public function getModel()
    {
        return $this->hasMany(CarModel::class, 'model_id','id');
    }

    public function getMedia()
    {
        return $this->hasMany(MediaGallery::class, 'media_id','id');
    }


}
