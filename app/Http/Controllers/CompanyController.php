<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;

class CompanyController extends Controller
{
    public function index() {
        $dataCompany = Company::get();
        $dataCompanyTree = Company::companyTree($dataCompany);

        return view('company')->with(compact(
            'dataCompanyTree'
        ));
    }

    public function userOfCompany($company_id) {
        $companies = User::where('company_id', $company_id)->get();
        
        return view('userOfCompany')->with(compact(
            'companies'
        ));
    }
}
