<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Validation\ValidationException;
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
    public function contact()
    {
        return view('contact');
    }
    public function stor(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string|max:1000',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Your data has been submitted!');
    }
    public function booking()
    {
        return view('booking');
    }
    public function store(Request $request)
    {
        try {
            $datetimeString = $request->input('datetime');
            $formattedDatetime = Carbon::createFromFormat('m/d/Y g:i A', $datetimeString)->format('Y-m-d H:i:s');
        } catch (InvalidFormatException $e) {
            throw ValidationException::withMessages(['datetime' => 'Invalid datetime format.']);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'datetime' => 'required',
            'people' => 'required|integer|min:1',
            'message' => 'nullable|string|max:1000',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->datetime = $formattedDatetime;
        $user->people = $request->people;
        $user->message = $request->message;
        $user->save();

        return redirect()->back()->with('success', 'Your data has been submitted!');
    }


    public function ourteam()
    {
        return view('ourteam');
    }
    public function Testimonial()
    {
        return view('Testimonial');
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
