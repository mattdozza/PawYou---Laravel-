<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function myPets()
    {
        $pets = [
            ['name' => 'Buddy', 'status' => 'Vaccinated', 'next_checkup' => '2026-10-15'],
            ['name' => 'Luna', 'status' => 'Needs Vaccination', 'next_checkup' => '2026-09-20'],
        ];

        return view('account.pets', [
            'pets' => $pets,
            'owner' => Auth::user()->name,
        ]);
    }

    public function appointments()
    {
        $appointments = [
            ['pet' => 'Buddy', 'service' => 'Grooming', 'date' => '2026-09-18', 'time' => '10:00 AM'],
            ['pet' => 'Luna', 'service' => 'Vaccination', 'date' => '2026-09-20', 'time' => '2:30 PM'],
            ['pet' => 'Buddy', 'service' => 'Checkup', 'date' => '2026-10-15', 'time' => '9:00 AM'],
        ];

        return view('account.appointments', ['appointments' => $appointments]);
    }

    public function favorites()
    {
        $favorites = [
            ['name' => 'Kiwi', 'type' => 'Bird', 'reason' => 'Loved the whistling during our last visit.'],
            ['name' => 'Hazel', 'type' => 'Rabbit', 'reason' => 'Considering adoption next month.'],
        ];

        return view('account.favorites', ['favorites' => $favorites]);
    }
}
