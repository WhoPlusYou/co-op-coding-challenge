<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Item;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    // Defined Constants
    const LOW_STOCK_THRESHOLD = 5;

    /**
     * Add an item to the user's shopping cart
     *
     * @param  \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Item $item)
    {

        // Quickly Flash a message to the user if the stock is low
        if ($item->number_stocked < self::LOW_STOCK_THRESHOLD) {
            Session::flash('message', 'Item is low stock!');
        }        

        $cart = Auth::user()->shoppingCart;

        // TODO: Make sure the item is in stock! And Item's in the cart don't exceed 10
        

        // Add the item if all is well
        $cart->items()->save($item);

        return response()->json(['status' => 'Successfully added the item to the cart!'], 200);
        
    }

}
