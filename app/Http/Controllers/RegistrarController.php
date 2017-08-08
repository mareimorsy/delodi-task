<?php

namespace App\Http\Controllers;

use \MareiClasses\CountryAssets\EgyGovernorates;
use \MareiClasses\CountryAssets\EgyAreas;
use \MareiClasses\CountryAssets\EgyUniversities;
use \MareiClasses\CountryAssets\Professions;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Registrar;
use Session;

class RegistrarController extends Controller
{
	/**
	 * show the home page
	 *
	 * @return Response
	 */
    public function index(){

    	return view('index', [
                'registrars' => Registrar::get(),
    			'governorates' => EgyGovernorates::get(),
    			'areas' => EgyAreas::get(),
    			'universities' => EgyUniversities::get(),
    			'professions' => Professions::get()
    		]);
    }

    	/**
    	 * show the home page
    	 *
         * @param Request App\Http\Requests\CreateRegistrarRequest $request
    	 * @return Response
    	 */
        public function store(Requests\CreateRegistrarRequest $request){
        	Registrar::create($request->all());
        	return redirect('/')->with('success', 'Event registration form has submitted successfully!');
        }
}
