<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Property;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function index()
    {
        $properties = Order::count();

        $users = User::count();
        return view('admin.pages.reports.properties',compact('properties','users'));
    }
}
