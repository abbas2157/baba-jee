<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function services()
    {
        return view('services');
    }
    public function about()
    {
        return view('about');
    }
    public function menue()
    {
        return view('menue');
    }
    public function booking()
    {
        return view('booking');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'datetime' => 'required',
            'people' => 'required|integer|min:1',
            'message' => 'nullable|string|max:1000',
        ]);
    
        $formattedDatetime = Carbon::createFromFormat('m/d/Y g:i A', $request->datetime)->format('Y-m-d H:i:s');
    
        $booking = new User();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->datetime = $formattedDatetime;
        $booking->people = $request->people;
        $booking->message = $request->message;
        $booking->save();
    
        return redirect()->back()->with('success', 'Your Table Booked Successfully.');
    }
    


    public function ourteam()
    {
        return view('ourteam');
    }
    public function Testimonial()
    {
        return view('testimonial');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
