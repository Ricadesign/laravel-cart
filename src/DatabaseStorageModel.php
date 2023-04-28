<?php

namespace Ricadesign\LaravelCart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

class DatabaseStorageModel extends Model
{
    use Prunable;

    protected $table = 'database_carts';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'cart_data',
    ];

    public function setCartDataAttribute($value)
    {
        $this->attributes['cart_data'] = serialize($value);
    }

    public function getCartDataAttribute($value)
    {
        return unserialize($value);
    }

    /**
     * Get the prunable model query.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function prunable()
    {
        $days = config('laravel-cart.prunable_days');
        return static::where('created_at', '<=', now()->subDays($days));
    }
}
