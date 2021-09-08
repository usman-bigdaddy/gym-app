<?php

namespace App\Http\Controllers;


use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\trainer;
use App\Models\classes;
use Illuminate\Support\Facades\Auth;
class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = classes::join('trainers', 'classes.trainer_id', '=', 'trainers.id')
        ->get(['classes.*','trainers.trainer_firstname','trainers.trainer_lastname']);
        return view("trainer.classes")->with("classes",$res);
    }
    public function show_classes()
    {
        $res = classes::join('trainers', 'classes.trainer_id', '=', 'trainers.id')
        ->get(['classes.*','trainers.trainer_class','trainers.trainer_firstname','trainers.trainer_lastname']);
        return view('classes')
        ->with('breadcrumb_title', 'Classes')
        ->with("classes",$res);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("trainer.add_class")->with("trainers",trainer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'class_name'=>'required |max:50',
            'class_description'=>'required | max:255',
            'class_duration'=>'required | max:25',
            'trainer_id'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:5048'
         ]);
         $new_image_name = time().'.'.$request->image->extension();
         $admin = classes::create([
             'class_name' => $request['class_name'],
             'class_description' => $request['class_description'],
             'class_duration' => $request['class_duration'],
             'trainer_id' => $request['trainer_id'],
             'class_image'=>'classes_images/'.$new_image_name 
         ]);
         $request->image->move(public_path('classes_images'),$new_image_name);
         return back()->with('success', 'Class Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $res = classes::join('trainers', 'classes.trainer_id', '=', 'trainers.id')
        ->where('classes.id',$id)
        ->get(['classes.*','trainers.trainer_firstname','trainers.trainer_lastname']);
        //dd($res);
        return view("trainer.edit-classes")
        ->with("trainers",trainer::all())
        ->with("classes",$res);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData;
        if (isset($request->changeTeamLeader)) {
            // checked
            $validatedData = $request->validate([
                'class_name'=>'required |max:50',
                'class_description'=>'required | max:255',
                'class_duration'=>'required | max:25',
                'trainer_id'=>'required | max:25',
            ]);
        }
        else{
            $validatedData = $request->validate([
                'class_name'=>'required |max:50',
                'class_description'=>'required | max:255',
                'class_duration'=>'required | max:25' 
            ]);
        }   
        classes::find($id)->update($validatedData);
        return back()->with('success',"Successfully Edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Enrollment::find($id)->delete();
        return back()->with('success',"Successfully Deleted");
    }
    public function class_enrollments($id)
    {
        $classes = classes::findOrFail($id);
        $res = Enrollment::join('users', 'enrollments.user_id', '=', 'users.id')
        ->where('enrollments.class_id',$id)
        ->get(['users.*', 'enrollments.*']);

        return view("trainer.class-enrollments")
        ->with("classes",$classes)
        ->with("enrollments",$res);
    }
    public function my_classes_trainer()
    {
        $res = classes::where('trainer_id', Auth::guard('trainer')->user()->id)->get();
        return view("trainer.my-classes")->with("classes",$res);
    }
}
