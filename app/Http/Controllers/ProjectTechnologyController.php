<?php

namespace App\Http\Controllers;

use App\Models\project_technology;
use App\Http\Requests\Storeproject_technologyRequest;
use App\Http\Requests\Updateproject_technologyRequest;

class ProjectTechnologyController extends Controller
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
     * @param  \App\Http\Requests\Storeproject_technologyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproject_technologyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project_technology  $project_technology
     * @return \Illuminate\Http\Response
     */
    public function show(project_technology $project_technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project_technology  $project_technology
     * @return \Illuminate\Http\Response
     */
    public function edit(project_technology $project_technology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproject_technologyRequest  $request
     * @param  \App\Models\project_technology  $project_technology
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproject_technologyRequest $request, project_technology $project_technology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project_technology  $project_technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(project_technology $project_technology)
    {
        //
    }
}
