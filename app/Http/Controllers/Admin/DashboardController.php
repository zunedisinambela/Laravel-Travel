<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use App\TravelPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $travel_package = TravelPackage::count();
        $transaction = Transaction::count();
        $transaction_pending = Transaction::where('transaction_status', 'PENDING')->count();
        $transaction_success = Transaction::where('transaction_status', 'SUCCESS')->count();

        return view('pages.admin.dashboard', compact('travel_package', 'transaction', 'transaction_pending', 'transaction_success'));
    }
}
