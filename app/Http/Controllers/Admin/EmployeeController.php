<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Employee;
use Image;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        // dd($employees);
        return view('admin.employee.index', compact('employees'));
    }

    public function create(){
        return view('admin.employee.create');
    }

    public function store(Request $request){

        
        $date = Carbon::now()->format("his")+rand(1000,9999);

        if ($request->file('photo')) {
 
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileName = $date.'.'.$extension;
            Image::make($request->file('photo'))
            ->resize(300,300)
            ->save(public_path('uploads/employee/').$fileName );
        }

        $employees = new Employee;
        $employees->name = $request->name;
        $employees->email = $request->email;
        $employees->address = $request->address;
        $employees->phone = $request->phone;
        $employees->nid = $request->nid;
        $employees->gender = $request->gender;
        $employees->status = $request->status;
        $employees->joining_date = $request->joining_date;
        $employees->ending_date = $request->ending_date;
        $employees->designation = $request->designation;
        $employees->blood_group = $request->blood_group;
        $employees->photo = $fileName;

        $employees->save();
        if ($employees->save()) {
            return back()->with('success','Employee information successfully saved.');
        }
        else{
            return back()->with('failed','Something Error Found !, Please try again.');
        }
    }

    public function destroy($id){
        try {
            $employees = Employee::findOrFail($id);
            $file = $employees->photo;
                if(file_exists(public_path('uploads/employee/').$file) AND !empty($file)){
                    unlink(public_path('uploads/employee/').$file);
                }
            $employees->delete();
            return redirect()->back()->with('success','Employee information successfully deleted.');

        } catch (\Exception $e) {
            // dd($e);
            return redirect()->back()->with('failed','Something Error Found !, Please try again.');
        }
    }
}


