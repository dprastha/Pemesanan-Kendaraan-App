<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Order::all();
        $vehicles = Vehicle::all();
        $drivers = Driver::all();

        return view('pages.order.index')->with([
            'items' => $items,
            'vehicles' => $vehicles,
            'drivers' => $drivers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = Vehicle::all();
        $drivers = Driver::all();

        return view('pages.order.create')->with([
            'vehicles' => $vehicles,
            'drivers' => $drivers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Order::create($data);

        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Order::findOrFail($id);
        $vehicles = Vehicle::all();
        $drivers = Driver::all();

        return view('pages.order.edit')->with([
            'item' => $item,
            'vehicles' => $vehicles,
            'drivers' => $drivers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderRequest $request, $id)
    {
        $data = $request->all();

        $item = Order::findOrFail($id);
        $item->update($data);

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Order::findOrFail($id);
        $item->delete();

        return redirect()->route('order.index');
    }
}
