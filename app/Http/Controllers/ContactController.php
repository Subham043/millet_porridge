<?php

namespace App\Http\Controllers;

use App\Events\EnquiryCreated;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(ContactRequest $request) {
        $request->validated();
        EnquiryCreated::dispatch($request->name, $request->email, $request->phone, $request->subject, $request->message);
        return response()->json([
            "message" => "Thank you for your enquiry. We will get back to you soon.",
        ], 200);
    }
}
