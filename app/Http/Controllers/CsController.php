<?php

namespace App\Http\Controllers;

use App\Models\CaseCompetition;
use App\Models\CaseMember;
use Illuminate\Http\Request;

class CsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leader()
    {
        return view('admin.cs.leader', [
            'title'     => 'Case Study Leader Data',
            'leaders'   => CaseCompetition::all()
        ]);
    }

    public function members()
    {
        return view('admin.cs.members', [
            'title'     => 'Case Study Members Data',
            'members'   => CaseMember::all()
        ]);
    }

    public function team()
    {
        return view('admin.cs.team', [
            'title'     => 'Case Study Team Data',
            'teams'     => CaseCompetition::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaseCompetition  $caseCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(CaseCompetition $caseCompetition)
    {
        return view('admin.cs.show', [
            'title'     => $caseCompetition->register_code . ' Team Data',
            'team'      => $caseCompetition,
            'members'   => CaseMember::where('register_code', $caseCompetition->register_code)->get()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaseCompetition  $caseCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseCompetition $caseCompetition)
    {
        //
    }
}
