<?php

namespace App\Http\Controllers;

use App\Poll;
use App\Option;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $polls = DB::table('polls')->get();
       $view =view('layouts.create');
       $view->polls = $polls;
       return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $view =view('layouts.create');
     return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newRow = new Poll();
        $newRow ->user_id = Auth::user()->id;

        $newRow ->code =uniqid();
        $newRow ->name= $request ->get('name');
        //$newRow ->option= $request ->get('option');
        $newRow ->description = $request ->get('description');
        $newRow ->save();

 // $newOption =new Option();
        // $newOption ->option = $request->get('option');
        // $newOption ->poll_id=$newRow->id;
        // $newOption->save();

        return redirect(action('PollController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $polls =\App\Poll::find($id);
        $view =view('polls.show');
        $view->polls =$polls;
        return $view;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
