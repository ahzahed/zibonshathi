@extends('Backend.app')

@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Visitors Table</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Todays Visitor
                @forelse($visitorData as $visitorDataa)
                <span class="badge badge-secondary">
                {{ $loop->count }}
                @break
            </span>
            @empty
            <span class="badge badge-danger">
                No user today
            </span>
                 @endforelse
            </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID No</th>
                      <th>IP</th>
                      <th>Date & Time</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($visitorData as $visitorData)
                    <tr>
                      <td>{{$visitorData->id}}</td>
                      <td>{{$visitorData->ip_address}}</td>
                      <td>{{$visitorData->visit_time}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection
