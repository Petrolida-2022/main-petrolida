<?php

namespace App\Http\Controllers;

use App\Models\FfdCompetition;
use App\Models\FfdMember;
use Illuminate\Http\Request;

class FfdcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leader()
    {
        return view('admin.ffdc.leader', [
            'title'     => 'FFDC Leader Data',
            'leaders'   => FfdCompetition::all()
        ]);
    }

    public function members()
    {
        return view('admin.ffdc.members', [
            'title'     => 'FFDC Members Data',
            'members'   => FfdMember::all()
        ]);
    }

    public function team()
    {
        return view('admin.ffdc.team', [
            'title'     => 'FFDC Team Data',
            'teams'     => FfdCompetition::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FfdCompetition  $ffdCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(FfdCompetition $ffdCompetition)
    {
        return view('admin.ffdc.show', [
            'title'     => $ffdCompetition->register_code . ' Team Data',
            'team'      => $ffdCompetition,
            'members'   => FfdMember::where('register_code', $ffdCompetition->register_code)->get()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FfdCompetition  $ffdCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(FfdCompetition $ffdCompetition)
    {
        //
    }
}
