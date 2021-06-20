@extends('layouts.admin-layout')
@section('content')
<div class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
<!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SL</th>
              <th>Title</th>
              <th>Images</th>
              <th>Description</th>
              {{-- <th>created</th> --}}
              {{-- <th>updated</th> --}}
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>SL</th>
              <th>Title</th>
              <th>Images</th>
              <th>Description</th>
              {{-- <th>created</th> --}}
              {{-- <th>updated</th> --}}
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($Service as $key=>$Services)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $Services->title }}</td>
              <td><img src="{{ URL::to($Services->images) }}" height="80" width="80"></td>
              <td style="width: 35%;">@php echo $Services->description; @endphp</td>
              {{-- <td>{{ $Services->created_at }}</td> --}}
              {{-- <td>{{ $Services->updated_at  }}</td> --}}
              <td> 
                @if($Services->publication_status==1)
                <label class="bg-success pl-2 pr-2">Active</label>
                @else
                <label class="bg-danger pl-2 pr-2">Unactive</label>
                @endif
              </td>
              <td>
                @if($Services->publication_status==1)
                <a href="{{URL::to('/Service/unactive') }}/{{ Crypt::encryptString($Services->id) }}" class="btn btn-outline-danger">Unactive</a>
                @else
                <a href="{{URL::to('Service/active') }}/{{ Crypt::encryptString($Services->id) }}" class="btn btn-outline-success">Active</a>
                @endif
                <a href="{{URL::to('/eidt/Service') }}/{{ Crypt::encryptString($Services->id) }}" class="btn btn-outline-warning">Eidt</a>
                <a href="{{URL::to('/delete/Service') }}/{{ Crypt::encryptString($Services->id) }}" id="delete" class="btn btn-outline-danger">Delete</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div></div>
<!-- /.container-fluid-->
@endsection