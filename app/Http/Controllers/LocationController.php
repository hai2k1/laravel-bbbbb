<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Project;
use App\Models\RealEstateProject;
use App\Models\Ward;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function District(Request $request)
    {
        $cities = $request->get('q');
        $district = District::where('city', $cities)->get(['id', 'name as text']);
        return $district;
    }

    public function Ward(Request $request)
    {

        $district = $request->get('q');
        $ward = Ward::where('district_id', $district)->get(['name as text', 'wards_id as id']);
        return $ward;
    }

    public function ProjectBDS(Request $request)
    {
        $data = Project::where('district', $request->get('q'))->get(['name as text']) ?? [];
        return $data;
    }
}
