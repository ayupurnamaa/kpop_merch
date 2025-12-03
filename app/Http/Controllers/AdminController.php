<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\product;
use App\Models\order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalproduk = product::count();
        $totaluser = user::count();
        $totalorder = order::count();

        return view('admin.dashboard', compact(
            'totalproduk',
            'totaluser',
            'totalorder'
        ));
    }
}
