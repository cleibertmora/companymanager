<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Company;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::paginate(10);
        return view('companies.index', compact(['companies']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=100,min_height=100'
        ]);

        $data = $request->post();
        $file = $request->file('logo');

        if($file){
            $path = $file->store('public');
            $data['logo'] = $path;
        }
        
        $company = Company::create($data);

        return redirect()->route('companies.index')
            ->with('message', 'Company <b>'.$company->name.'</b> created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('employees.index', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', compact(['company']));
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
        $validation = $request->validate([
            'name' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=100,min_height=100'
        ]);
        
        $company = Company::find($id);

        $data = $request->post();
        $file = $request->file('logo');

        if($file){
            Storage::delete($company->logo);
            $path = $file->store('public');
            $data['logo'] = $path;
        }

        $company->update($data);
        return redirect()->route('companies.index')
            ->with('message', 'Company <b>'.$company->name.'</b> updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $name = $company->name;
        
        if($company->logo){
            Storage::delete($company->logo);
        }
        
        $company->delete();

        return redirect()->route('companies.index')
            ->with('message', 'Company <b>'.$name.'</b> updated');
    }
}
