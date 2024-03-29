<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnapShot extends Model
{
    use HasFactory;

    protected $table = 'snapshots';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'product_id', 'page_url', 'snapshot_url', 'wayback_timestamp',
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

    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    /**
     * Return the Creation time in Human Friendly Format
     *
     * @return mixed
     */
    public function humaneCreatedAt() {
        return $this->created_at->diffForHumans();
    }
}
