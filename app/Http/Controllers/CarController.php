<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.allcars');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newcar(Request $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'produced' => 'required'
        ]);

        $car = new Car;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->produced_on = $request->produced;
        $car->save();

        return redirect()->route('allcars');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function allcars()
    {
        $allcars = Car::all();
        return view('pages.allcars', compact('allcars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function particularcar($id)
    {
        $particularcar = Car::where('id',$id)->get();
        return view('pages.viewcars',compact('particularcar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
