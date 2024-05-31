<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePayeeTypeRequest;
use App\Http\Requests\UpdatePayeeTypeRequest;
use App\Models\PayeeType;

class PayeeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PayeeType::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePayeeTypeRequest $request)
    {
        return PayeeType::create($request->safe()->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(PayeeType $payeeType)
    {
        return $payeeType;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePayeeTypeRequest $request, PayeeType $payeeType)
    {
        return $payeeType->update($request->safe()->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PayeeType $payeeType)
    {
        return $payeeType->delete();
    }
}
