<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemindersController extends Controller
{
    public function create()
    {
        return view('reminders.create_reminders');
    }

    public function store()
    {
        return view('reminders.create_reminders');
    }

    public function show()
    {
        return view('reminders.manage_reminders');
    }

}
