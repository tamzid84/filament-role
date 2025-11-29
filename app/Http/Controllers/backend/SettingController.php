<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $setting=setting::whereId(1)->first();
        return view('backend.setting.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $setting=Setting::findorfail(1);

        $setting->site_name=$request->site_name;
        $setting->email=$request->email;
        $setting->mobile=$request->mobile;
        $setting->address=$request->address;
        $setting->facebook=$request->facebook;
        $setting->linkedin=$request->linkedin;
        $setting->tweeeter=$request->tweeeter;
        $setting->instagram=$request->instagram;

        

        $setting->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
