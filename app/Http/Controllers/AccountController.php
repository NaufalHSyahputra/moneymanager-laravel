<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Account::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccountRequest $request)
    {
        return Account::create($request->safe()->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        return $account;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccountRequest $request, Account $account)
    {
        return $account->update($request->safe()->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        return $account->delete();
    }
}
