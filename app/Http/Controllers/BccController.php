<?php

namespace App\Http\Controllers;

use App\Models\BusinessCompetition;
use App\Models\BusinessMember;
use Illuminate\Http\Request;

class BccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leader()
    {
        return view('admin.bcc.leader', [
            'title'     => 'BCC Leader Data',
            'leaders'   => BusinessCompetition::all()
        ]);
    }

    public function members()
    {
        return view('admin.bcc.members', [
            'title'     => 'BCC Members Data',
            'members'   => BusinessMember::all()
        ]);
    }

    public function team()
    {
        return view('admin.bcc.team', [
            'title'     => 'BCC Team Data',
            'teams'     => BusinessCompetition::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessCompetition  $businessCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessCompetition $businessCompetition)
    {
        return view('admin.bcc.show', [
            'title'     => $businessCompetition->register_code . ' Team Data',
            'team'      => $businessCompetition,
            'members'   => BusinessMember::where('register_code', $businessCompetition->register_code)->get()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessCompetition  $businessCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessCompetition $businessCompetition)
    {
        //
    }
}
