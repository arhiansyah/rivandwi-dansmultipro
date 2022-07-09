<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class JobController extends Controller
{

    public function search(Request $request)
    {
        $input = $request->all();
        $input['description'] = strtolower($request->description);
        $input['location'] = strtolower($request->location);

        $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json?description=' . $input['description'] . '&location=' . $input['location']);
        $jobs = $response->collect();
        // dd($jobs);
        $data['jobs'] = (object) $jobs;
        return view('page.jobs', $data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json');
        $jobs = $response->collect();
        // dd($data['jobs']);
        $data['jobs'] = (object) $jobs;
        // $data['jobs'] = $data['jobs']->paginate(10);
        foreach ($data['jobs'] as $key => $value) {
            $data['jobCarbon'] = Carbon::parse($value['created_at'])->diffForHumans();
        }
        return view('page.jobs', $data);
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
        $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions/' . $id);
        $data['jobs'] = $response->collect();
        return view('page.detail', $data);
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
