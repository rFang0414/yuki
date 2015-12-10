<?php

namespace App\Http\Controllers;

use Request;
use App\Survey;

class SurveyController extends Controller
{
    public function survey_page()
    {
        return view('home.survey');
    }


    public function submit_survey()
    {
        $input = Request::all();
        $gender = $input['gender'];
        $satisfaction = $input['satisfaction'];
        $country = $input['country'];
        $state = $input['state'];
        $city = $input['city'];
        $now = date("Y-m-d h:i:s");

        Survey::create(['Gender'=>$gender, 'Satisfaction'=>$satisfaction, 'Country'=>$country, 'State'=>$state, 'City'=>$city, 'Created'=>$now]);
        return redirect('/home');
    }

}
