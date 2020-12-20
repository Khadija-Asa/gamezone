<?php

namespace App\Http\Controllers;

use App\Address;
use App\AddressesUser;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::with(['getAddresses'])->find(Auth::id());
      return view('Address.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = User::all();
      return view('Address.create', ['user' => $user]);
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
          'address'=>'required',
          'zip_code'=>'required',
          'city'=>'required',
          'country'=>'required'
      ]);


      $address = new Address([
          'address' => $request->get('address'),
          'zip_code' => $request->get('zip_code'),
          'city' => $request->get('city'),
          'country' => $request->get('country')
      ]);
      $address->save();
      $insertedId = $address->id;

      DB::insert('insert into addresses_users (user_id, address_id) values (?, ?)', [Auth::id(), $insertedId]);
      return redirect()->route('Address.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
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
      $address = Address::all()->find($id);
      return view('Address.edit', ['address' => $address]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $address = Address::find($id);
        $address->fill($request->all());
        $address->save();
        return redirect()->route('Address.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $addressesUsers = AddressesUser::find($id);
      $addressesUsers->delete();
      $address = Address::find($id);
      $address->delete();

      return redirect()->route('Address.index');
    }
}
