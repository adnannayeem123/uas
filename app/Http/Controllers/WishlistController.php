<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WishlistController extends Controller
{
    public function Wishlist()
    {
        return view('backend.wishlistform');
    }
   
}