<?php

namespace Ricadesign\LaravelCart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function index()
    {
        return Cart::getContent();
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
            'attributes' => $request->input('attributes')
        ]);
        return 'Ok';
    }
    public function update(Request $request)
    {
        Cart::update($request->id,[
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ]
        ]);
        return 'Ok';
    }
    public function remove(Request $request)
    {
        Cart::remove([
            'id' => $request->id
        ]);
        return 'Ok';
    }
}