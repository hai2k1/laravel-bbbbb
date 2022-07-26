<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\RealEstateProject;
use App\Models\Ward;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function District(Request $request)
    {
        $province = $request->get('q');
        $district = District::where('province_id', $province)->get(['district_id as id', 'name as text']);
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
        $data = RealEstateProject::where('id_province', $request->get('q'))->get(['name as text']) ?? [];
        return $data;
    }

    public function ProjectDistrict(Request $request)
    {
        $data = RealEstateProject::where('name', $request->get('q'))->get() ?? [];
        if ($data) {
            $district = District::where('district_id',$data['0']['id_district'])->get(['name as text', 'district_id as id']);
            return $district;
        }
        return [];
    }
    public function ProjectWard(Request $request){
        $data = RealEstateProject::where('name', $request->get('q'))->get() ?? [];
        if ($data) {
            $ward = Ward::where('wards_id', $data['0']['id_ward'])->get(['name as text', 'wards_id as id']);
            return $ward;
        }
        return [];

    }
}
