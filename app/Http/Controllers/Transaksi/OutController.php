<?php

namespace App\Http\Controllers\Transaksi;

use App\Permintaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OutController extends Controller
{
    public function index()
    {
         $permintaans = Permintaan::with('barang')->where('status','out')->paginate(5);
         return view('transaksi.out.index',compact('permintaans'));
    }
}