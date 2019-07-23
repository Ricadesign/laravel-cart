<?php

namespace Ricadesign\LaravelCart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function index()
    {
        dd(Cart::getContent());
        return 'Hellow';
    }

    public function store(Request $request)
    {
        // TODO: Add validation
        $request->validate([
            'id' => 'required'
        ]);

        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array()
        ]);
        return 'Store';
    }
}