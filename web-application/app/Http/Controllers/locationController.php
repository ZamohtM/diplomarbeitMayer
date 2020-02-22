<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class locationController extends Controller
{
    public function onOpenNewLocation()
    {
        $countrys = DB::select('select * from country');
        $states = DB::select('select * from states');
        $workers = DB::select('select * from workers');
        $departments = DB::select('select * from instoredepartments');
        return view('locations.new_location', ['countrys' => $countrys, 'states' => $states, 'workers' => $workers, 'departments' => $departments]);
    }

    public function  onSubmitNewLocation(Request $request)
    {
        $location = new Location();

        $location->location = $request->location;
        $location->street = $request->address;
        $location->postCode = $request->postCode;
        $location->city = $request->city;

        $countrys = $request->countryOption;
        $location->country = implode(",",$countrys);

        $states = $request->stateOption;
        $location->state = implode(",",$states);

        $departments = $request->departmentsOption;
        $location->abteilungen = implode(",",$departments);

        $location->öffnungszeiten = $request->openTimes;
        $location->öffnungszeitenWochenende = $request->openTimesWeekends;

        $managers = $request->managerOption;
        $location->manager = implode(",",$managers);

        $employees = $request->employeesOption;
        $location->employees = implode(",",$employees);

        $location->email = $request->email;
        $location->telnummer = $request->phoneNumber;

        $location->locationPicture = "http://localhost/upload/locations/".$request->location.'/picture.jpg';
        $request->locationPicture->storeAs('upload/locations/'.$request->location.'/', 'picture.jpg');

        $location->save();

        return redirect('/');
    }

    public function onOpenManageLocations()
    {
        $locations = DB::select('select * from locations');
        return view('locations.manage_locations', ['locations' => $locations]);
    }

    public function onOpenManageLocationDelete($id)
    {
        DB::table('locations')->where('id',$id)->delete();
        return redirect('/');
    }

    public function onOpenManageLocationEdit($id)
    {
        $countrys = DB::select('select * from country');
        $states = DB::select('select * from states');
        $abteilungen = DB::select('select * from instoredepartments');
        $mitarbeiter = DB::select('select * from workers');
        $location = DB::table('locations')->where('id',$id)->get();
        return view('locations.edit_location', ['mitarbeiter' => $mitarbeiter, 'countrys' => $countrys, 'states' => $states, 'abteilungen' => $abteilungen, 'location' => $location]);
    }

    public function onSaveManageLocationEdit($id, Request $request)
    {
        DB::table('locations')->where('id',$id)->update([
            'location' => $request->location,
            'street' => $request->address,
            'postCode' => $request->postCode,
            'city' => $request->city,
            'email' => $request->email,
            'telnummer' => $request->phoneNumber,
            'öffnungszeiten' => $request->openTimes,
            'öffnungszeitenWochenende' => $request->openTimesWeekends
        ]);

        if (isset($request->boxManager)) {
            DB::table('locations')->where('id', $id)->update([
                'manager' => implode(',', $request->managerOption)
            ]);
        }

        if (isset($request->boxEmployees)) {
            DB::table('locations')->where('id', $id)->update([
                'employees' => implode(',', $request->employeesOption)
            ]);
        }

        if (isset($request->boxDepartments)) {
            DB::table('locations')->where('id', $id)->update([
                'abteilungen' => implode(',', $request->departmentsOption)
            ]);
        }

        return redirect('/');
    }

    public function onOpenManageLocationsLocation($id)
    {
        $location = DB::table('locations')->where('id',$id)->get();
        return view('locations.view_location', ['location' => $location]);
    }
}
