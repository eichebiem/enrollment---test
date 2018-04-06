<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RemindersRequest;
use App\Reminder;

class RemindersController extends Controller
{
    public function create()
    {
        return view('reminders.create_reminders');
    }

    public function store(RemindersRequest $request)
    {
        Reminder::create(request([
            'posted_by' => 'aaa',
            'reminder'
        ]));
    }

    public function show()
    {
        return view('reminders.manage_reminders');
    }

}
