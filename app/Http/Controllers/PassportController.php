<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePassportRequest;
use App\Http\Requests\UpdatePassportRequest;
use App\Models\Passport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $passport = Auth::user()->passport;
        return view('passports.index', compact('passport'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('passports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePassportRequest $request)
    {
        $passport = Auth::user()->passport()->create($request->validated());
        return redirect()->route('passports.show', $passport);
    }

    /**
     * Display the specified resource.
     */
    public function show(Passport $passport)
    {
        return view('passports.show', compact('passport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passport $passport)
    {
        return view('passports.edit', compact('passport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePassportRequest $request, Passport $passport)
    {
        $passport->passport_number = $request->input('passport_number');
        $passport->issue_date = $request->input('issue_date');
        $passport->expiry_date = $request->input('expiry_date');
        $passport->update();
        return redirect()->route('passports.show', $passport);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passport $passport)
    {
        $passport->delete();
        return redirect()->route('dashboard');
    }
}
