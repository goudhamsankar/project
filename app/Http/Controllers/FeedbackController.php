<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class FeedbackController extends Controller
{
    /**
     * save feedback form.
     */
    public function store(Request $request)
    {
        // Check if feedback already exists for the email on the current date
        $existingFeedback = Feedback::where('email', $request->email)
        ->whereDate('created_at', Carbon::today())
        ->first();

        if ($existingFeedback) {
            Session::flash('error', 'Feedback already submitted.');
        } else {
            // If no feedback exists, proceed with validation and creation
            $request->validate([
                'name' => 'required|max:50',
                'email' => ['required', 'email'],
                'feedback' => 'required|max:250',
            ]);

            Feedback::create($request->all());

            Session::flash('success', 'Feedback sent successfully!');
        }
        return redirect()->back();
    }

    /**
     * show feedback form.
     */
    public function view()
    {
        $feedback = Feedback::all();
        return view('admin.feedbacks', compact('feedback'));
        return redirect()->back();
    }
}
