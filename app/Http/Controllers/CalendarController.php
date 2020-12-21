<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $number_of_days = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
      $first_day_timestamp = strtotime("first day of this month");
      $lastMondayOffFirstDay = date('d',strtotime('last monday', strtotime('first day of this month'))); // On se base sur le premier jour du mois, et on cherche le last monday
      $numberDaysLastMonth = date('d', strtotime('last day of last month')); // On determine le nombre de jours dans le mois précédent
      $monthOffset = ($numberDaysLastMonth-$lastMondayOffFirstDay)+1; //Determine le nombre de jours depuis les dernier lundi, par rapport au premier jour de ce mois 
                                                                      //(Ex: Le mois commence Jeudi 1, Il y a donc 3 jours depuis le dernier lundi)   
      $firstTuesday = date('d', strtotime("first tuesday of this month"));
      $lastSunday = date('d', strtotime("last sunday of this month"));
      return view('Calendar.index', [
                                      'days' => $number_of_days, 
                                      'first_day_timestamp' => $first_day_timestamp, 
                                      'month' => date('F', strtotime('this month')), 
                                      'monthOffset' => $monthOffset,
                                      'firstTuesday' => $firstTuesday,
                                      'lastSunday' => $lastSunday
                                    ]);
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
