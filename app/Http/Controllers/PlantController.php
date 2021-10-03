<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plants;
use App\Http\Resources\Plants as PlantsResource;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$plants = Plants::all();
        return $plants;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
			'species' => 'required|max:255',
			'watering_instructions' => 'required|max:255',
        ]);
		$picture = "";
		
		if ($request->hasFile('photo'))
		{
			$file      = $request->file('photo');
			$filename  = $file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$picture   = time().'-'.rand(1000, 9999).'.'.$extension;
			//move image to public/img folder
			$file->move(public_path('img'), $picture);  
		} 

        $plants = Plants::create([
			"name" => $request->name,
			"species" => $request->species,
			"watering_instructions" => $request->watering_instructions,
			"photo" => $picture,
		]);

        return (new PlantsResource($plants))
                ->response()
                ->setStatusCode(201);
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
