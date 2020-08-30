<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function show($id) {
        $data = []; //to be sent to the view

        $person = Person::findOrFail($id);

        $data["title"] = $person->getName();
        $data["person"] = $person;
        return view('person.show')->with("data",$data);
    }


    public function create() {
        $data = []; //to be sent to the view
        $data["title"] = "Create person";
        // $data["people"] = Person::all();

        return view('person.create')->with("data",$data);
    }

    public function save(Request $request) {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0"
        ]);
        Person::create($request->only(["name","price"]));

        return back()->with('success','Item created successfully!');
    }
}
