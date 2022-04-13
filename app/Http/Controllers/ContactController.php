<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Show Contact us Page
     * @return View
     */
    public function index() {
        return view('contact-us');
    }

    /**
     * Show all contact messages
     * @return View
     */
    public function showAllMessages() {
        $messages = ContactMessage::all(); // get all contact messages
        return view('contact-messages')->with('messages', $messages);
    }

    /**
     * Store the message in Database
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        // validate the form input
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:60'],
            'subject' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:1500'],
        ]);

        // return back with errors & input if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // store message in database
        $message = ContactMessage::create([
            'name' => $request['name'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ]);

        /*
         * Note: Email can be sent by passing $message to the Notification Class
         */

        // redirect back with success message
        return redirect()->route('show_messages')->with('success', "Your message has been received");

        // redirect back with success message
//        return redirect()->back()->with('success', "Your message has been received");
    }
}
