<?php

namespace App\Http\Controllers;

use App\Models\StockCompetition;
use App\Models\StockMember;
use Illuminate\Http\Request;

class StcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leader()
    {
        return view('admin.stc.leader', [
            'title'     => 'STC Leader Data',
            'leaders'   => StockCompetition::all()
        ]);
    }

    public function members()
    {
        return view('admin.stc.members', [
            'title'     => 'STC Members Data',
            'members'   => StockMember::all()
        ]);
    }

    public function team()
    {
        return view('admin.stc.team', [
            'title'     => 'STC Team Data',
            'teams'     => StockCompetition::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockCompetition  $stockCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(StockCompetition $stockCompetition)
    {
        return view('admin.stc.show', [
            'title'     => $stockCompetition->register_code . ' Team Data',
            'team'      => $stockCompetition,
            'members'   => StockMember::where('register_code', $stockCompetition->register_code)->get()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockCompetition  $stockCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockCompetition $stockCompetition)
    {
        //
    }
}
