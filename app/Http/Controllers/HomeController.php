<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Driver;
use App\Models\Vehicle;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Order::all();
        $vehicles = Vehicle::all();
        $drivers = Driver::all();
        // $items = Order::orderBy('id', 'DESC')->take(5)->get();
        $pie = [
            'diproses' => Order::where('status', 'Diproses')->count(),
            'diterima' => Order::where('status', 'Diterima')->count(),
            'ditolak' => Order::where('status', 'Ditolak')->count(),
        ];

        return view('pages.penyetuju.dashboard')->with([
            'items' => $items,
            'pie' => $pie,
            'vehicles' => $vehicles,
            'drivers' => $drivers,
        ]);
    }

    public function adminHome()
    {
        $items = Order::all();
        $vehicles = Vehicle::all();
        $drivers = Driver::all();
        // $items = Order::orderBy('id', 'DESC')->take(5)->get();
        $pie = [
            'diproses' => Order::where('status', 'Diproses')->count(),
            'diterima' => Order::where('status', 'Diterima')->count(),
            'ditolak' => Order::where('status', 'Ditolak')->count(),
        ];

        return view('pages.dashboard')->with([
            'items' => $items,
            'pie' => $pie,
            'vehicles' => $vehicles,
            'drivers' => $drivers,
        ]);
    }
}
