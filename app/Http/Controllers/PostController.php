<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Models\Post;


class PostController extends Controller
{
    //

    public function index() {

        return view('formulaire');
    }


    public function creat(Request $request)
    {
         
        $validatedData = $request->input([
          'name' => 'required',
          'surname' => 'required',
          'age' => 'required',
          'city' => 'required',
          'brand'=> 'required',
          'brand_car' => 'required',
          'nationality' => 'required',
          'language' => 'required',
          'married' => 'required',
          'student'=> 'required'  
        ]);
 
        $form = new Post;
 
        $form->name = $request->name;
        $form->surname = $request->surname;
        $form->age = $request->age;
        $form->city = $request->city;
        $form->brand = $request->brand;
        $form->brand_car = $request->brand_car;
        $form->nationality = $request->nationality;
        $form->language = $request->language;
        $form->married = $request->married;
        $form->student = $request->student;
 
        if($form->save())
        {
            return dd($request->input());


        }
 
 
    }
}
