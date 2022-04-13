<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'price', 'currency', 'category', 'manufacturer', 'watched', // boolean, indicates that we are saving snapshots or not
        'data',
    ];

    /**
     * The default attributes
     * @var array
     */
    protected $attributes = [
        'watched' => true,
        'currency' => 'PKR'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        // Do not cast. While seeding, the data is casted to json via json_encode
        // When accessed, an object will be returned. Using "json_decode($product->data)" will return data property
        // as object
//        'data' => 'array',
    ];

    public function snapshots() {
        return $this->hasMany(SnapShot::class);
    }
}
