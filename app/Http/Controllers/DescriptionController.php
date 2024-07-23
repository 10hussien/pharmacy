<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Medicien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Validator;

class DescriptionController extends Controller
{
    public function Show()
    {
        $medicien = Medicien::latest()->paginate(5);
        return view('medicien.show', compact('medicien'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function Cart()
    {
        $cart = Cart::all();
        return view('medicien.cart', compact('cart'));
    }
    public function Order($id)
    {
        $data = Medicien::find($id);
        return view('medicien.order', compact('data'));
    }
    public function EditOrders($id)
    {
        $data = Cart::find($id);
        return view('medicien.editorder', compact('data'));
    }
    public function EditOrder(Request $request, $id)
    {
        $data = Cart::find($id);
        $request->validate([
            'status' => 'required',
            'Payment_status' => 'required',
        ]);
        $input = $request->all();
        $data->update($input);
        return redirect()
            ->route('medicien.Cart')
            ->with('success', 'order edit successfully');
    }
    public function Search(Request $request)
    {
        $search = $request->search;
        $medicien = Medicien::where('Trade_name', 'Like', '%' . $search . '%')
            ->orWhere('Classification', 'Like', '%' . $search . '%')
            ->get();
        return view('medicien.showSearch', compact('medicien'));
    }
    public function create()
    {
        return view('medicien.add');
    }

    public function Add(Request $request)
    {
        $request->validate([
            'Scientific_name' => 'required',
            'Trade_name' => 'required',
            'Classification' => 'required',
            'Manufacturer' => 'required',
            'Quantity_available' => 'required',
            'Expiration_date' => 'required',
            'Price' => 'required',
            'Photo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('Photo')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension(); // اعطاء للصورة تاريخ و لاحقته
            $image->move($destinationPath, $profileImage);
            $input['Photo'] = "$profileImage";
        }
        Medicien::create($input);
        return redirect()
            ->route('medicien.show')
            ->with('success', 'medicen add successfully');
    }

    public function ShowDescription($id)
    {
        $medicien = Medicien::find($id);
        return view('medicien.showDescription', compact('medicien'));
    }

    public function Edit($id)
    {
        $medicien = Medicien::find($id);
        return view('medicien.edit', compact('medicien'));
    }

    public function Update(Request $request, $id)
    {
        $medicien = Medicien::find($id);
        $request->validate(['Scientific_name', 'Trade_name', 'Classification', 'Manufacturer', 'Quantity_available', 'Expiration_date', 'Price', 'Photo' => 'image|mimes:png,jpg,jpeg|max:2048']);
        $input = $request->all();
        if ($image = $request->file('Photo')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['Photo'] = "$profileImage";
        } else {
            unset($input['Photo']);
        }

        $medicien->update($input);
        return redirect()
            ->route('medicien.show')
            ->with('update', 'medicen update successfully');
    }

    public function Destroy($id)
    {
        $medicien = Medicien::find($id);
        $medicien->delete();
        return redirect()
            ->route('medicien.show')
            ->with('delete', 'medicen delete successfully');
    }

    // public function softDelete($id)
    // {
    //     $medicien = Medicien::find($id)->delete();
    //     return redirect()
    //         ->route('medicien.show')
    //         ->with('delete', 'medicen delete successfully');
    // }
}
