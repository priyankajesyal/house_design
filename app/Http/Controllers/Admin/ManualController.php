<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ManualPayment;
use App\Models\MilestonePayment;
use App\Http\Controllers\Controller;

class ManualController extends Controller
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
    public function store(Request $request)
    {
        //
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
        //dd($request->all());
        $manualPayment = ManualPayment::find($id);
        $manualPayment->update($request->all());
        if ($request->input('type') == 'Manual') {
            $this->milestone($request);
        }
        return back();
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

    protected function milestone($request)
    {

        $data = [
            [
                'user_id' => $request->user_id,
                'proposal_id' => $request->proposal_id,
                'milestone_id' => 1,
                'status' => 'Paid',
                'task' => 'Pending',
                'amount' => (int)$request->amount,
                'created_at' => now()
            ],
            [
                'user_id' => $request->user_id,
                'proposal_id' => $request->proposal_id,
                'milestone_id' => 2,
                'status' => 'Unpaid',
                'task' => 'Pending',
                'amount' => 0,
                'created_at' => now()
            ],
            [
                'user_id' => $request->user_id,
                'proposal_id' => $request->proposal_id,
                'milestone_id' => 3,
                'status' => 'Unpaid',
                'task' => 'Pending',
                'amount' => 0,
                'created_at' => now()
            ],
            [
                'user_id' => $request->user_id,
                'proposal_id' => $request->proposal_id,
                'milestone_id' => 4,
                'status' => 'Unpaid',
                'task' => 'Pending',
                'amount' => 0,
                'created_at' => now()
            ],
            [
                'user_id' => $request->user_id,
                'proposal_id' => $request->proposal_id,
                'milestone_id' => 5,
                'status' => 'Unpaid',
                'task' => 'Pending',
                'amount' => 0,
                'created_at' => now()
            ],
        ];

        MilestonePayment::insert($data);
    }
}