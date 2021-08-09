<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MilestonePayment;
use App\Http\Controllers\Controller;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id, $proposal_id, $milestone_id, $status, $task, $amount)
    {
        $this->milestone( $request,$user_id, $proposal_id, $milestone_id, $status, $task, $amount);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    protected function milestone(Request $request,$user_id,$proposal_id,$milestone_id,$status,$task,$amount)
    {
        
        $data=[
            [
                'user_id'=>auth()->user()->id,
                'proposal_id'=>$request->id,
                'milestone_id'=>1,
                'status'=>$request->status,
                'task'=>'',
                'amount'=>$request->amount,
            ],
            [
                'user_id'=> auth()->user()->id,
                'proposal_id'=> $request->id,
                'milestone_id'=>1,
                'status'=> '',
                'task'=>'',
                'amount'=>''
            ],
            [
                'user_id'=> auth()->user()->id,
                'proposal_id'=> $request->id,
                'milestone_id'=>1,
                'status'=> '',
                'task'=> '',
                'amount'=>''
            ],
            [
                'user_id'=> auth()->user()->id,
                'proposal_id'=> $request->id,
                'milestone_id'=>1,
                'status'=> '',
                'task'=> '',
                'amount'=>''
            ],
            [
                'user_id'=> auth()->user()->id,
                'proposal_id'=> $request->id,
                'milestone_id'=>1,
                'status'=>'',
                'task'=> '',
                'amount'=>''
            ],
        ];

        MilestonePayment::crate($data);
    }
}