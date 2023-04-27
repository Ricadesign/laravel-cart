<?php

namespace Ricadesign\LaravelCart;

use Illuminate\Database\Eloquent\Model;

class DatabaseStorageModel extends Model
{
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
}
