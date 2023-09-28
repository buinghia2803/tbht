<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;

class CompanyController extends Controller
{
    public function index() {
        // $dataCompany = Company::get();
        // $dataCompanyTree = Company::companyTree($dataCompany);

        // return view('company')->with(compact(
        //     'dataCompanyTree'
        // ));

        $companies = Company::where('parent_id', 0)
            ->with('childrenCompanies')
            ->get();

        // $companies->map(function ($item) {
        //     $childrenCompanies = $item->childrenCompanies;
        //     $childrenCompanies->map(function ($item2) {
        //         $item2->order_by_company = $item2->orderCompanies->order_by_company;
        //     });
        // });

        return view('company')->with(compact(
            'companies'
        ));
    }

    public function userOfCompany($company_id) {
        $companies = User::where('company_id', $company_id)->get();

        return view('userOfCompany')->with(compact(
            'companies'
        ));
    }
}
