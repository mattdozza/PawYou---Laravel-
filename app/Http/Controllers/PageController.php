<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Simple in-memory "database" of pets so the lab
     * doesn't need a pets table/migration.
     */
    private function petsData(): array
    {
        return [
            1 => [
                'name' => 'Buddy',
                'type' => 'Dog',
                'breed' => 'Golden Retriever',
                'age' => 3,
                'emoji' => '🐕',
                'image' => 'https://images.unsplash.com/photo-1552053831-71594a27632d?auto=format&fit=crop&w=800&q=80',
                'bio' => 'Buddy is a friendly, energetic dog who loves belly rubs and long walks in the park.',
            ],
            2 => [
                'name' => 'Luna',
                'type' => 'Cat',
                'breed' => 'British Shorthair',
                'age' => 2,
                'emoji' => '🐈',
                'image' => 'https://images.unsplash.com/photo-1548247416-ec66f4900b2e?auto=format&fit=crop&w=800&q=80',
                'bio' => 'Luna is a calm, independent cat who enjoys sunny windowsills and the occasional nap.',
            ],
            3 => [
                'name' => 'Kiwi',
                'type' => 'Bird',
                'breed' => 'Cockatiel',
                'age' => 1,
                'emoji' => '🐦',
                'image' => 'https://images.unsplash.com/photo-1552728089-57bdde30beb3?auto=format&fit=crop&w=800&q=80',
                'bio' => 'Kiwi loves to whistle along to music and is very affectionate towards visitors.',
            ],
            4 => [
                'name' => 'Hazel',
                'type' => 'Rabbit',
                'breed' => 'Holland Lop',
                'age' => 2,
                'emoji' => '🐇',
                'image' => 'https://images.unsplash.com/photo-1585110396000-c9ffd4e4b308?auto=format&fit=crop&w=800&q=80',
                'bio' => 'Hazel is a gentle rabbit who loves fresh vegetables and hopping around the yard.',
            ],
        ];
    }

    public function home()
    {
        return view('pages.home', [
            'petCount' => count($this->petsData()),
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = [
            [
                'title' => 'Veterinary Checkups',
                'description' => 'Routine health checkups and vaccinations for all pet types.',
                'image' => 'https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Grooming',
                'description' => 'Bathing, brushing, and styling to keep your pet clean and comfortable.',
                'image' => 'https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Boarding',
                'description' => 'A safe and cozy place for your pet to stay while you are away.',
                'image' => 'https://images.unsplash.com/photo-1583512603805-3cc6b41f3edb?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Training',
                'description' => 'Positive-reinforcement training sessions for pets of all ages.',
                'image' => 'https://images.unsplash.com/photo-1587764379873-97837921fd44?auto=format&fit=crop&w=800&q=80',
            ],
        ];

        return view('pages.services', ['services' => $services]);
    }

    public function pets()
    {
        return view('pages.pets.index', ['pets' => $this->petsData()]);
    }

    /**
     * Demonstrates a route parameter: /pets/{id}
     */
    public function petShow(string $id)
    {
        $pets = $this->petsData();

        abort_unless(isset($pets[$id]), 404);

        return view('pages.pets.show', [
            'pet' => $pets[$id],
            'id' => $id,
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        return back()->with('status', "Thanks, {$validated['name']}! We received your message and will reply to {$validated['email']} soon.");
    }
}
