<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        return view('campaigns', [
            'user' => $user,
            'campaigns' =>  Campaign::latest()->whereHas('author', fn($q) => $q->where('user_id', $user->id))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('campaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:100', 'unique:' . Campaign::class], // "Lost Mine of Phandelver"
            'description' => ['max:200'],
            'setting' => [], // "The adventure is set a short distance from the city of Neverwinter in the Sword Coast region of the Forgotten Realms setting."
            'levels' => ['max:6'] // "1-4"
        ]);

        $validated['user_id'] = Auth::id();
        $validated['slug'] = $this->make_slug($validated['name']);
        $validated['last_updated'] = now();

        // dd($validated);

        Campaign::create($validated);

        return redirect()->route('profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        //
    }

    static public function make_slug(string $title)
    {
        $slug = strtolower(implode('-', array_slice(explode('-', preg_replace('/[^a-zA-Z0-9-]/', '-', $title)), 0, 7)));

        if (strlen($slug) > 50) {
            $slug = substr($slug, 0, -50);
        }
        $slug = trim(preg_replace('/-+/', '-', $slug), '-');

        return $slug;
    }
}
