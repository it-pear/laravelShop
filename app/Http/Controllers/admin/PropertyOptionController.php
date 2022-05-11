<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyOption;
use Illuminate\Http\Request;

class PropertyOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Property $property)
    {
        $propertyOptions = PropertyOption::paginate(10);
        return view('auth.admin.property_options.index', compact('propertyOptions', 'property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Property $property)
    {
        return view('auth.admin.property_options.form', compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Property $property)
    {
        $params = $request->all();
        $params['property_id'] = $request->property->id;
        PropertyOption::create($params);
        return redirect()->route('property-options.index', $property);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\propertyOption  $propertyOption
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property, PropertyOption $propertyOption)
    {
        return view('auth.admin.property_options.show', compact('propertyOption'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\propertyOption  $propertyOption
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property, PropertyOption $propertyOption)
    {
        return view('auth.admin.property_options.form', compact('propertyOption', 'property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\propertyOption  $propertyOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property, PropertyOption $propertyOption)
    {
        $params = $request->all();

        $propertyOption->update($params);
        return redirect()->route('property-options.index', $property);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\propertyOption  $propertyOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property, PropertyOption $propertyOption)
    {
        $propertyOption->delete();
        return redirect()->route('property-options.index', $property);
    }
}
