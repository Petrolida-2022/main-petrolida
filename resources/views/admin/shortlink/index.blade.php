@extends('admin.layouts.main')

@section('content')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Short Links</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-link-45deg"></i> Short Links</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  @if (session()->has('notif'))
    <div id="notification" data-flashdata="{{ session('notif') }}"></div>
  @endif

  <h6 class="mb-0 text-uppercase">Daftar Short Link</h6>
  <hr>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Short link</th>
              <th>Original</th>
              <th>Visited</th>
              <th>Created By</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($links as $link)
            <tr>
              <td class="text-center align-middle">{{ $loop->iteration }}</td>
              <td class="align-middle">{{ $link->name }}</td>
              <td class="align-middle">
                <a href="/{{ $link->short }}" target="_blank">
                  petrolida.com/{{ $link->short }}
                </a>
              </td>
              <td class="text-wrap align-middle">
                <a href="{{ $link->original }}" target="_blank">
                  {{ $link->original }}
                </a>
              </td>
              <td class="text-center align-middle">{{ $link->visited }}</td>
              <td class="text-center text-nowrap align-middle">{{ $link->created_at }}</td>
              <td class="text-center align-middle">
                {{-- <a href="" class="btn btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Detail"><i class="bi bi-eye"></i></a> --}}
                <a href="/admin/shortlink/{{ $link->short }}/edit" class="btn btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ubah"><i class="bi bi-pencil"></i></a>
                
                <form action="/admin/shortlink/{{ $link->short }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm text-danger deleteButton" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Hapus" onclick="return confirm('Data akan dihapus, lanjutkan?')"><i class="bi bi-trash"></i></button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Short link</th>
              <th>Original</th>
              <th>Visited</th>
              <th>Created By</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

  
@endsection