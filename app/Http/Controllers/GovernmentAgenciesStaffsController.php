<?php

namespace App\Http\Controllers;

use App\Models\Observation;
use Illuminate\Http\Request;

class GovernmentAgenciesStaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $observations = Observation::all();
        return view('observations.index', compact('observations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("observations.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
		    'agency_type',
		    'total_people',
		    'political_staff',
		    'senior_rank_staff',
		    'recommended_rank_staff',
		    'appointed_rank_staff',
		    'average_age',
		    'average_seniority',
            
        ]);
        $observation = Observation::create($data);
        return redirect('observations');
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
        $observation = Observation::findOrFail($id);
        return view('observations.show')->with('observation',$observation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $observation = Observation::findOrFail($id);
        return view("observations.edit")->with('observation',$observation);
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
        $observation = Observation::findOrFail($id);
       
        $data = $request->only([
            'agency_type',
		    'total_people',
		    'political_staff',
		    'senior_rank_staff',
		    'recommended_rank_staff',
		    'appointed_rank_staff',
		    'average_age',
		    'average_seniority',
        ]);

        $observation->fill($data);

        $observation->save();
        
        return redirect('observations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $observation = Observation::findOrFail($id);
        $observation->delete();
        return redirect('observations');
    }
}
