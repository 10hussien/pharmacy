<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Medicien;
use Illuminate\Http\Request;

class MedicienConteroller extends Controller
{
    public function Search($name)
    {
        $medicien = Medicien::where('Trade_name', 'Like', '%' . $name . '%')
            ->orWhere('Classification', 'Like', '%' . $name . '%')
            ->get();
        return response()->json(['medicien:' => $medicien]);
    }

    public function Show()
    {
        $medicien = Medicien::all();
        return response()->json($medicien);
    }

    public function ShowDescription($id)
    {
        $medicien = Medicien::find($id);
        return response()->json($medicien);
    }

    public function AddToCart(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required',
        ]);
        $cart=Cart::with('medicien')->find($id);
        // $cart = $request->all();
        // $cart['mediciens_id']=$id;
        // $check = Cart::where('mediciens_id', $id)->exists();
        // if ($check == false) {
        //     Cart::create($cart);
        // }
        // $cartId = Cart::where('mediciens_id', $id)->first();
        // $data = Medicien::find($id);
        // $cartId->quantity += $cart['quantity'];
        // $cartId->save();
        // $quantity = $data['Quantity_available'] - $cart['quantity'];
        // $total = $cart['quantity'] * $data['Price'];
        // if ($quantity >= 0) {
        //     $data['Quantity_available'] = $quantity;
        //     $data->save();
        //     return response()->json(['success' => 'medicen add to cart successfully', 'quantity' => $quantity, 'price' > $total]);
        // } else {
        //     return response()->json(['error' => 'The required quantity does not exist']);
        // }
    }
    public function Carts()
    {
        $cart = Cart::all();
        return response()->json(['status' => 'success', $cart]);
    }
    public function Favorite($id)
    {
        $data = Medicien::find($id);
        $favorite['mediciens_id'] = $id;
        $favorite['Trade_name'] = $data['Trade_name'];

        $favorite['Classification'] = $data['Classification'];
        return response()->json(['status' => 'success']);
    }
    public function ShowFavorite()
    {
        $favorit = Favorite::all();
        return response()->json(['status' => 'success', $favorit]);
    }
}
