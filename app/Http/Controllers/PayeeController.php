<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePayeeRequest;
use App\Http\Requests\UpdatePayeeRequest;
use App\Models\Payee;

class PayeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Payee::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePayeeRequest $request)
    {
        return Payee::create($request->safe()->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(Payee $payee)
    {
        return $payee;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePayeeRequest $request, Payee $payee)
    {
        return $payee->update($request->safe()->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payee $payee)
    {
        return $payee->delete();
    }
}
