<?php

namespace App\Http\Controllers;

use App\Models\Animebsktbll;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AnimebsktbllController extends Controller
{
    public function index() {
        $players = Animebsktbll::orderBy('id')->get();
        return Inertia::render('Players', ['players' => $players]);
    }

    public function show(Animebsktbll $player) {
        return Inertia::render('View', ['player' => $player]);
    }

    public function create() {
        return Inertia::render('Create');
    }

    public function store(Request $request) {
        $request->validate([
            'position' => 'required',
            'name' => 'required',
            'jerseyno' => 'required',
            'team' => 'required',
        ]);

        Animebsktbll::create($request->all());
        return redirect('/players');
    }

    public function update(Request $request, Animebsktbll $player) {
        $fields = $request->validate([
            'position' => 'required',
            'name' => 'required',
            'jerseyno' => 'required',
            'team' => 'required',
        ]);

        $player->update($fields);
        return redirect('/players');
    }

    public function destroy(Animebsktbll $player){
        $player->delete();
        return redirect('/players');
    }
}
