@extends('admin.layouts.main')

@section('content')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Short Links</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-link-45deg"></i> Short Links</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Buat Link</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <div class="row">
    <div class="col-xl-9 mx-auto">
      <h6 class="mb-0 text-uppercase">Buat Link</h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="border p-3 p-md-4 rounded">
            <div class="card-title d-flex align-items-center">
              <h5 class="mb-0">Form Pembuatan Short Link Baru</h5>
            </div>
            <hr/>
            <form action="/admin/shortlink" method="POST">
              @csrf
              <div class="row mb-3">
                <label for="name" class="col-md-3 col-sm-4 col-form-label">Nama Short Link</label>
                <div class="col-md-9 col-sm-8">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama short link" value="{{ old('name') }}">
                  @error('name')
                  <div class="invalid-feedback">
                    <p class="ps-2 mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="original" class="col-md-3 col-sm-4 col-form-label">URL Asli</label>
                <div class="col-md-9 col-sm-8">
                  <input type="text" class="form-control @error('original') is-invalid @enderror" id="original" name="original" placeholder="Masukkan URL Asli" value="{{ old('original') }}">
                  @error('original')
                  <div class="invalid-feedback">
                    <p class="ps-2 mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="short" class="col-md-3 col-sm-4 col-form-label">Short Link</label>
                <div class="col-md-9 col-sm-8">
                  <div class="input-group mb-3"> 
                    <span class="input-group-text" id="basic-addon3">petrolida.com/</span>
                    <input type="text" class="form-control @error('short') is-invalid @enderror" id="short" name="short" aria-describedby="basic-addon3" value="{{ old('short') }}">
                    @error('short')
                    <div class="invalid-feedback">
                      <p class="ps-2 mb-0">{{ $message }}</p>
                    </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-sm-4 col-form-label"></label>
                <div class="col-md-9 col-sm-8">
                  <button type="submit" class="btn btn-primary px-5">Buat Short Link!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection