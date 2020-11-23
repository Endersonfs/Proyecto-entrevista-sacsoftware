<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class BalanceFinancieroController extends Controller
{
    //controlador para balance financiero
    public function balanceComprobacion()
    {
        return view('balancefinanciero.bcomprobacion');
    }
}
