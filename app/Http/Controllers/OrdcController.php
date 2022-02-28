<?php

namespace App\Http\Controllers;

use App\Models\OrdCompetition;
use App\Models\OrdMember;
use Illuminate\Http\Request;

class OrdcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leader()
    {
        return view('admin.ordc.leader', [
            'title'     => 'ORDC Leader Data',
            'leaders'   => OrdCompetition::all()
        ]);
    }

    public function members()
    {
        return view('admin.ordc.members', [
            'title'     => 'ORDC Members Data',
            'members'   => OrdMember::all()
        ]);
    }

    public function team()
    {
        return view('admin.ordc.team', [
            'title'     => 'ORDC Team Data',
            'teams'     => OrdCompetition::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdCompetition  $ordCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(OrdCompetition $ordCompetition)
    {
        return view('admin.ordc.show', [
            'title'     => $ordCompetition->register_code . ' Team Data',
            'team'      => $ordCompetition,
            'members'   => OrdMember::where('register_code', $ordCompetition->register_code)->get()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdCompetition  $ordCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdCompetition $ordCompetition)
    {
        //
    }
}
