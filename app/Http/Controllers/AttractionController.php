<?php

namespace App\Http\Controllers;

use App\Attraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $attractions = Attraction::all();
      return view('Attraction.index', ['attractions' => $attractions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Attraction.create');
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
          'name'=>'required',
          'logo'=>'required',
          'bg_image'=>'required',
          'description'=>'required',
          'min_height'=>'required'
      ]);

      $logo_url = $request->file('bg_image')->store('public/attractions');
      $bg_image_url = $request->file('logo')->store('public/attractions');
      $logo_url = substr($logo_url, 7); //On enlève 'public/' de la string, pour faire l'affichage correctement dans la vue
      $bg_image_url = substr($bg_image_url, 7);


      $attraction = new Attraction([
          'name' => $request->get('name'),
          'logo_url' => $logo_url,
          'bg_image_url' => $bg_image_url,
          'description' => $request->get('description'),
          'important_informations' => $request->get('important_informations'),
          'min_height' => $request->get('min_height'),
          'exp_given' => $request->get('exp_given')
      ]);
      $attraction->save();

      return redirect()->route('Attraction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show(Attraction $attraction)
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
      $attraction = Attraction::all()->find($id);
      return view('Attraction.edit', ['attraction' => $attraction]);
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
      $attraction = Attraction::find($id);
      $attraction->fill([
        'name' => $request->get('name'),
        'description' => $request->get('description'),
        'important_informations' => $request->get('important_informations'),
        'min_height' => $request->get('min_height'),
        'exp_given' => $request->get('exp_given'),
      ]);
      if ($request->hasFile('logo')) {
        $logo_url = $request->file('logo')->store('public/attractions');
        $logo_url = substr($logo_url, 7);
        $attraction->fill([
          'logo_url' => $logo_url
        ]);
      }
      if ($request->hasFile('bg_image')) {
        $bg_image_url = $request->file('bg_image')->store('public/attractions');
        $bg_image_url = substr($bg_image_url, 7);
        $attraction->fill([
          'bg_image_url' => $bg_image_url
        ]);
      }
      $attraction->save();
      return redirect()->route('Attraction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attraction $attraction)
    {
        //
    }
}
