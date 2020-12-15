<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $schedule = Schedule::all();
      return view('Schedule.index', ['days' => $schedule]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $hours = ['00:00', '00:30', '01:00', '01:30', '02:00', '02:30', '03:00', '03:30', '04:00', '04:30', '05:00', '05:30', '06:00', '06:30', 
                '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', 
                '21:00', '21:30', '22:00', '22:30', '23:00', '23:30'];
      $daysList = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
      return view('Schedule.create', ['hours' => $hours, 'daysList' => $daysList]);
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
          'day'=>'required',
          'start_hour'=>'required',
          'end_hour'=>'required',
      ]);


      $schedule = new Schedule([
          'day' => $request->get('day'),
          'start_hour' => $request->get('start_hour'),
          'end_hour' => $request->get('end_hour')
      ]);
      $schedule->save();

      return redirect()->route('Schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
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
      $hours = ['00:00', '00:30', '01:00', '01:30', '02:00', '02:30', '03:00', '03:30', '04:00', '04:30', '05:00', '05:30', '06:00', '06:30', 
                '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', 
                '21:00', '21:30', '22:00', '22:30', '23:00', '23:30'];
      $daysList = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
      $day = Schedule::all()->find($id);
      return view('Schedule.edit', ['day' => $day, 'hours' => $hours, 'daysList' => $daysList]);
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
      $schedule = Schedule::find($id);
      $schedule->fill($request->all());
      $schedule->save();
      return redirect()->route('Schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
