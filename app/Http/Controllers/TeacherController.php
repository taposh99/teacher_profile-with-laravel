<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('showdata',[
            'teachers'=>Teacher::all()
        ]);
    }
    public function AddData(){

        return view('adddata');
    }
    public function insertForm(Request $request){
        $teacher=new Teacher();
        $teacher->name = $request->teacher_name;
        $teacher->number = $request->number;
        $teacher->deggnation = $request->deggnation;
        $teacher->adress = $request->adress;

        $teacher->image =$this->saveImage($request);
        $teacher->save();
        return redirect('/')->with('message','Success');

    }
    private function saveImage($request){
        $image=$request->file('image');
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='frontEndAsset/teacher-image/';
        $imgUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
    public function editData($id){
        return view('edit-data',[
            'teacher'=>Teacher::find($id)
        ]);
    }
    public function updateData(Request $request){
        $teacher=Teacher::find($request->teacher_id);
        $teacher->name = $request->teacher_name;
        $teacher->number = $request->number;
        $teacher->deggnation = $request->deggnation;
        $teacher->adress = $request->adress;
        if ($request->file('image')){
            if ($teacher->image){
                unlink($teacher->image);
            }
            $teacher->image =$this->saveImage($request);
        }
        $teacher->save();
        return redirect('/')->with('message','Update');
    }
    public function deleteData(Request $request){
        $teacher=Teacher::find($request->teacher_id);
        if ($teacher->image){
            unlink($teacher->image);
        }
        $teacher->delete();
        return back()->with('message','Deleted');

    }
}
