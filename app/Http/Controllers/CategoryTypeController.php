<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryTypeRequest;
use App\Http\Requests\UpdateCategoryTypeRequest;
use App\Models\CategoryType;

class CategoryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoryType::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryTypeRequest $request)
    {
        return CategoryType::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryType $categoryType)
    {
        return $categoryType;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryTypeRequest $request, CategoryType $categoryType)
    {
        $categoryType->update($request->safe()->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryType $categoryType)
    {
        return $categoryType->delete();
    }
}
