<?php

namespace App\Http\Controllers;

use App\Models\PaperCompetition;
use App\Models\PaperMember;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leader()
    {
        return view('admin.paper.leader', [
            'title'     => 'Paper Leader Data',
            'leaders'   => PaperCompetition::all()
        ]);
    }

    public function members()
    {
        return view('admin.paper.members', [
            'title'     => 'Paper Members Data',
            'members'   => PaperMember::all()
        ]);
    }

    public function team()
    {
        return view('admin.paper.team', [
            'title'     => 'Paper Team Data',
            'teams'     => PaperCompetition::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaperCompetition  $paperCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(PaperCompetition $paperCompetition)
    {
        return view('admin.paper.show', [
            'title'     => $paperCompetition->register_code . ' Team Data',
            'team'      => $paperCompetition,
            'members'   => PaperMember::where('register_code', $paperCompetition->register_code)->get()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaperCompetition  $paperCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaperCompetition $paperCompetition)
    {
        //
    }
}
