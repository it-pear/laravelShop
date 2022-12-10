<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ImagesCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\ImagesCollection  $imagesCollection
     * @return \Illuminate\Http\Response
     */
    public function show(ImagesCollection $imagesCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImagesCollection  $imagesCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(ImagesCollection $imagesCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImagesCollection  $imagesCollection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImagesCollection $imagesCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImagesCollection  $imagesCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImagesCollection $image)
    {   
        dd($image);
        $image->delete();
        Storage::delete($image->filename);
        return back();
    }
}
