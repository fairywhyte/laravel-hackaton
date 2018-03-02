<?php

namespace App\Http\Controllers;

use App\Option;
use App\Poll;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($code)
    {
        $view =view('layouts.option');
        $view->code =$code;
        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $code)
    {
        $poll = Poll::where ('code','=',$code)->first();//this will give u the first poll matched with the code
        $newOption =new Option();
        $newOption ->option_name = $request->get('option');
        $newOption ->poll_id = $poll->id;
        $newOption->save();
        return redirect(action('PollController@show',[$poll->code]));
    }

}
