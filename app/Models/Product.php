<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

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

    /**
     * Get all snapshots of Product
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function snapshots() {
        return $this->hasMany(SnapShot::class);
    }

    /**
     * Get latest/most recent Snapshot of Product
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function latestSnapshot() {
        return $this->hasOne(SnapShot::class)->latest();
    }

    // Variants keys shall be static and saved/cached somewhere. It's not a good idea to do this compute intensive task
    // on every function call
    public function VariantsKeys() {
        $products = Product::all();
        $variants = collect();
        $variantsKeys = collect();

        // Get variants of each product in $variants collection
        foreach ($products as $product) {
            $variants->push(json_decode($product->data, true)['variants']);
        }

        // Loop over all variants of products and get keys of each variant
        foreach ($variants as $variant) {
            $keysToAdd = array_keys($variant); // Get keys/names of variants in an array
            foreach ($keysToAdd as $key) {
                if (!$variantsKeys->contains($key)) { // Key Doesn't exist in $variantKeys collection, push to $variantKeys
                    $variantsKeys->push($key);
                }
            }
        }
        return $variantsKeys;
    }
}
