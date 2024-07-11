<?php

namespace Ricadesign\LaravelCart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function index(Request $request)
    {
        return Cart::session($request->session()->token())->getContent();
    }

    public function store(Request $request)
    {
        // TODO: Add validation
        $request->validate([
            'id' => 'required'
        ]);
        Cart::session($request->session()->token())->add([
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
        Cart::session($request->session()->token())->update($request->id,[
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ]
        ]);
        return 'Ok';
    }

    public function increment(Request $request)
    {
        Cart::session($request->session()->token())->update($request->id,[
            'quantity' => [
                'relative' => true,
                'value' => $request->quantity
            ]
        ]);
        return 'Ok';
    }

    public function remove(Request $request)
    {
        Cart::session($request->session()->token())->remove([
            'id' => $request->id
        ]);
        return 'Ok';
    }
}
