<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  GET | /admins  | index
        // view  all Table Record Show 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // GET | /admins/create | create
        // view 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // POST | /admins | store
        // post x view 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // GET | /admins/{id} | show
        // viewe (single Record Show)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // GET | /admins/{id}/edit | edit
        // view (single Record Edit)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // PUT | /admins/{id} | update
        // put x view (single Record Update)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DELETE | /admins/{id} | destroy
        //  view x ( just destory the reocrd form database)
    }
}
