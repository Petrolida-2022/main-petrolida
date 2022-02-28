<?php

namespace App\Http\Controllers;

use App\Models\PetrosmartCompetition;
use App\Models\PetrosmartMember;
use Illuminate\Http\Request;

class PetrosmartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leader()
    {
        return view('admin.petrosmart.leader', [
            'title'     => 'Petrosmart Leader Data',
            'leaders'   => PetrosmartCompetition::all()
        ]);
    }

    public function members()
    {
        return view('admin.petrosmart.members', [
            'title'     => 'Petrosmart Members Data',
            'members'   => PetrosmartMember::all()
        ]);
    }

    public function team()
    {
        return view('admin.petrosmart.team', [
            'title'     => 'Petrosmart Team Data',
            'teams'     => PetrosmartCompetition::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetrosmartCompetition  $petrosmartCompetition
     * @return \Illuminate\Http\Response
     */
    public function show(PetrosmartCompetition $petrosmartCompetition)
    {
        return view('admin.petrosmart.show', [
            'title'     => $petrosmartCompetition->register_code . ' Team Data',
            'team'      => $petrosmartCompetition,
            'members'   => PetrosmartMember::where('register_code', $petrosmartCompetition->register_code)->get()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetrosmartCompetition  $petrosmartCompetition
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetrosmartCompetition $petrosmartCompetition)
    {
        //
    }
}
