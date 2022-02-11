<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function store(CompanyRequest $request)
    {
        $validated = $request->validated();
        $company = Company::create($validated);

        return response($company, 201); // created
    }

    public function show(Company $company)
    {
        return $company;
    }
}
