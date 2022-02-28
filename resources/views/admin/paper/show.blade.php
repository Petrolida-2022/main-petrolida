@extends('admin.layouts.main')

@section('content')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif

  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Paper</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active d-none d-sm-block" aria-current="page">Paper</li>
          <li class="breadcrumb-item active" aria-current="page">{{ $team->register_code }} Team Data</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Paper Team Data</h6>
  <hr>
  <div class="row">
    <div class="col-12 col-xl-8 order-xl-1 order-2">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="mb-0">{{ $team->register_code }} : {{ $team->team_name }}</h5>
          <hr>

          {{-- LEADER INFORMATION --}}
          <div class="card shadow-none border">
            <div class="card-header">
              <h6 class="mb-0">LEADER INFORMATION</h6>
            </div>
            <div class="card-body">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label fw-bold">Full Name</label>
                  <p class="mb-0">
                    {{ $team->name }}
                  </p>
                </div>
                <div class="col-sm-6">
                  <label class="form-label fw-bold">Email address</label>
                  <p class="mb-0">
                    {{ $team->email }}
                  </p>
                </div>
                <div class="col-sm-6">
                  <label class="form-label fw-bold">Phone Number</label>
                  <p class="mb-0">
                    {{ $team->phone }}
                  </p>
                </div>
                <div class="col-sm-6">
                  <label class="form-label fw-bold">Identity Files</label>
                  <p class="mb-0">
                    File name : 
                    <a href="https://api.petrolida.com/files/paper/{{ $team->file }}">
                      {{ $team->file }}
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          {{-- END OF LEADER INFORMATION --}}
          
          @foreach ($members as $member)
              
          {{-- MEMBERS INFORMATION --}}
          <div class="card shadow-none border">
            <div class="card-header">
              <h6 class="mb-0">MEMBER {{ $loop->iteration }} INFORMATION</h6>
            </div>
            <div class="card-body">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label fw-bold">Full Name</label>
                  <p class="mb-0">
                    {{ $member->name }}
                  </p>
                </div>
                <div class="col-sm-6">
                  <label class="form-label fw-bold">Email address</label>
                  <p class="mb-0">
                    {{ $member->email }}
                  </p>
                </div>
                <div class="col-sm-6">
                  <label class="form-label fw-bold">Phone Number</label>
                  <p class="mb-0">
                    {{ $member->phone }}
                  </p>
                </div>
                <div class="col-sm-6">
                  <label class="form-label fw-bold">Identity Files</label>
                  <p class="mb-0">
                    File name : 
                    <a href="https://api.petrolida.com/files/paper/{{ $member->file }}">
                      {{ $member->file }}
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          {{-- END OF MEMBERS INFORMATION --}}

          @endforeach
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4 order-xl-2 order-1">
      <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body">
          <div class="text-center mt-2">
            <h4 class="mb-1">{{ $team->team_name }}</h4>
            <p class="mb-0 text-secondary">{{ $team->register_code }}</p>
            <div class="mt-4"></div>
            <h6 class="mb-1">University : {{ $team->university }}</h6>
            <p class="mb-0 text-secondary">
              Registered from {{ $team->created_at->diffForHumans() }}<br>
              at {{ $team->created_at }}
            </p>
          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
            Payment Slip
            <a href="https://api.petrolida.com/files/paper/{{ $team->payment }}" target="_blank">
              <span class="badge bg-primary rounded-pill">Download <i class="bi bi-download"></i></span>
            </a>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
            Leader Identity
            <a href="https://api.petrolida.com/files/paper/{{ $team->file }}" target="_blank">
              <span class="badge bg-primary rounded-pill">Download <i class="bi bi-download"></i></span>
            </a>
          </li>
          @foreach ($members as $member)
          <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
            Member {{ $loop->iteration }} Identity
            <a href="https://api.petrolida.com/files/paper/{{ $member->file }}" target="_blank">
              <span class="badge bg-primary rounded-pill">Download <i class="bi bi-download"></i></span>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  
@endsection