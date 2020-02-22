<?php

namespace App\Http\Controllers;

use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class mitarbeiterController extends Controller
{
    public function onOpenNewMitarbeiter()
    {
        $countrys = DB::select('select * from country');
        $states = DB::select('select * from states');
        $departments = DB::select('select * from departments');
        $employeeTypes = DB::select('select * from employeetypes');
        return view('mitarbeiter.new_mitarbeiter', ['countrys' => $countrys, 'states' => $states, 'departments' => $departments, 'employeeTypes' => $employeeTypes]);
    }

    public function onSubmitNewMitarbeiter(Request $request)
    {
        $worker = new Worker();

        $worker->gender = $request->genderOption;
        $worker->title = $request->title;
        $worker->firstName = $request->firstName;
        $worker->lastName = $request->lastName;
        $worker->dateOfBirth = $request->dateOfBirth;

        $country = implode(",",$request->countryOption);
        $countryName = DB::table('country')->where('id',$country)->pluck('name');
        $worker->country = $countryName[0];

        $state = implode(",",$request->stateOption);
        $stateName = DB::table('states')->where('id',$state)->pluck('name');
        $worker->state = $stateName[0];

        $departments = $request->departmentOption;
        $worker->department = implode(",",$departments);

        $employeeTypes = $request->employeeTypeOption;
        $worker->employeeType = implode(",",$employeeTypes);

        $worker->postCode = $request->postCode;
        $worker->city = $request->city;
        $worker->address = $request->address;
        $worker->privateEmail = $request->privateEmail;
        $worker->internalEmail = $request->internalEmail;
        $worker->privatePhoneNumber = $request->privatePhoneNumber;
        $worker->internalPhoneNumber = $request->internalPhoneNumber;

        $worker->passportPicture = "http://localhost/upload/workers/".$request->firstName."-".$request->lastName."/picture.jpg";
        $request->passportPicture->storeAs('upload/workers/'.$request->firstName."-".$request->lastName.'/', 'picture.jpg');

        $worker->letterOfApplication = "http://localhost/upload/workers/".$request->firstName."-".$request->lastName."/letterOfApplication.pdf";
        $request->letterOfApplication->storeAs('upload/workers/'.$request->firstName."-".$request->lastName.'/', 'letterOfApplication.pdf');

        $worker->curriculumVitae = "http://localhost/upload/workers/".$request->firstName."-".$request->lastName."/curriculumVitae.pdf";
        $request->curriculumVitae->storeAs('upload/workers/'.$request->firstName."-".$request->lastName.'/', 'curriculumVitae.pdf');

        $worker->contract = "http://localhost/upload/workers/".$request->firstName."-".$request->lastName."/contract.pdf";
        $request->contract->storeAs('upload/workers/'.$request->firstName."-".$request->lastName.'/', 'contract.pdf');

        $worker->conditions = "http://localhost/upload/workers/".$request->firstName."-".$request->lastName."/conditions.pdf";
        $request->conditions->storeAs('upload/workers/'.$request->firstName."-".$request->lastName.'/', 'conditions.pdf');

        $worker->save();

        return redirect('/');
    }

    public function onOpenManageMitarbeiter()
    {
        $mitarbeiter = DB::select('select * from workers');
        return view('mitarbeiter.manage_mitarbeiter', ['mitarbeiter' => $mitarbeiter]);
    }

    public function onOpenManageMitarbeiterDelete($id)
    {
        DB::table('workers')->where('id',$id)->delete();
        return redirect('/');
    }

    public function onOpenManageMitarbeiterEdit($id)
    {
        $countrys = DB::select('select * from country');
        $states = DB::select('select * from states');
        $departments = DB::select('select * from departments');
        $employeeTypes = DB::select('select * from employeetypes');
        $mitarbeiter = DB::table('workers')->where('id',$id)->get();
        return view('mitarbeiter.edit_mitarbeiter', ['mitarbeiter' => $mitarbeiter, 'countrys' => $countrys, 'states' => $states, 'departments' => $departments, 'employeeTypes' => $employeeTypes]);
    }

    public function onSaveManageMitarbeiterEdit($id, Request $request)
    {
        DB::table('workers')->where('id',$id)->update([
            'gender' => $request->genderOption,
            'title' => $request->title,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'dateOfBirth' => $request->dateOfBirth,
            'country' => implode(',',$request->countryOption),
            'state' => implode(',', $request->stateOption),
            'postCode' => $request->postCode,
            'address' => $request->address,
            'employeeType' => implode(',', $request->employeeTypeOption),
            'department' => implode(',', $request->departmentOption),
            'privateEmail' => $request->privateEmail,
            'internalEmail' => $request->internalEmail,
            'privatePhoneNumber' => $request->privatePhoneNumber,
            'internalPhoneNumber' => $request->internalPhoneNumber
        ]);

        return redirect('/');
    }

    public function onOpenManageMitarbeiterArbeiter($id)
    {
        $arbeiter = DB::table('workers')->where('id',$id)->get();
        return view('mitarbeiter.view_mitarbeiter', ['arbeiter' => $arbeiter]);
    }
}
