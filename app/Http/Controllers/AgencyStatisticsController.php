<?php

namespace App\Http\Controllers;
use App\Http\Requests\examine;
use Illuminate\Http\Request;
use App\Models\Oberservation;
class AgencyStatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obervations = Oberservation::orderBy('id', 'asc')->get();
        return view("observations.index", compact("obervations"));
        //return view('observations.index');
        
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
    public function store(examine $request)
    {
        $data = $request->validated();

        $observation = Oberservation::create($data);

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
        $observation = Oberservation::findOrFail($id);
        return view("observations.show", compact("observation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $observation = Oberservation::findOrFail($id); 
        return view('observations.edit', compact('observation', $observation)); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(examine $request, $id)
    {
        $observation = Oberservation::findOrFail($id); 
        $data = $request->validated();
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
        //
        $observation = Oberservation::findOrFail($id);
        $observation->delete();
        return redirect('observations');
    }
}
