<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
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
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        $ag = $agent->all();
        return response()->json([
            'agent' => $ag
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }

    public function actualDate(Agent $agent, $start_date, $end_date, $card_accp)
    {
        // $ag = $agent->where('transaction_local_date', '>=', $start_date)->where('transaction_local_date', '<', $end_date)->whereIn('action_code', array(0, 4))->whereIn('processing_code', array(1, 70))->where('autho_flag', 'c')->where('reversal_flag', '<>', 'f')->where('card_acceptor_term_id', $card_accp)->get();
        
        // dd($start_date);

        $ag = $agent->where('transaction_local_date', '>=', $start_date)->whereIn('action_code', array(0, 4))->whereIn('processing_code', array(1, 70))->where('reversal_flag', '<>', 'f')->get();

        return response()->json([
            'ag' => $ag
        ]);
    }
}
