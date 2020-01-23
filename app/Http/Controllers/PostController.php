<?php

namespace App\Http\Controllers;
use App\Models\Human;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //
       public function store(Request $request)
    {
         $request->validate([
            'first_name'=>"required|max:255",
            'middle_name'=>"required|max:255",
            'last_name'=>"required|max:255",
            'address'=>"required|max:255",
            'email'=>"required|max:255|email",
            'age'=>"required|numeric|min:18",
            'gender'=>"required|numeric|min:1|max:2"
        ]);

        Human::create($request->all());
        return redirect('/all')->with("message",'added!');
    }

    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'first_name'=>"required|max:255",
            'middle_name'=>"required|max:255",
            'last_name'=>"required|max:255",
            'address'=>"required|max:255",
            'email'=>"required|max:255|email",
            'age'=>"required|numeric|min:18",
            'gender'=>"required|numeric|min:1|max:2"
        ]);
        $human= Human::findOrFail($request->id);
        $human->first_name = $request->first_name;
        $human->middle_name = $request->middle_name;
        $human->last_name = $request->last_name;
        $human->age = $request->age;
        $human->email = $request->email;
        $human->address = $request->address;
        $human->save();

        return redirect('/all')->with("message",'updated!');
    }

    public function destroy($id)
    {
        //
        Human::destroy($id);
        return redirect('/all')->with("message",'deleted!');
    }


}
