<?php

namespace App\Http\Controllers;

use App\ChiSoVeco;
use App\DonVi;
use App\Http\Resources\ChiSoVecoCollection;
use App\Http\Resources\ChiSoVecoResource;
use Illuminate\Http\Request;

class ChiSoVecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ChiSoVeco::all()->groupBy('DonVi.khoi');
        $response = [
            '1' => ChiSoVecoResource::collection($data->get(1)),
            '2'=> ChiSoVecoResource::collection($data->get(1)),
            '3'=> ChiSoVecoResource::collection($data->get(1)),
            '4'=> ChiSoVecoResource::collection($data->get(1)),
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ChiSoVeco::find($id);
        return response()->json($data->DonVi, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
