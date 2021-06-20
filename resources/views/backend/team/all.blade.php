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
              <th>Skill</th>
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
              <th>Skill</th>
              {{-- <th>created</th> --}}
              {{-- <th>updated</th> --}}
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($Teams as $key=>$Teams)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $Teams->name }}</td>
              <td><img src="{{ URL::to($Teams->images) }}" height="80" width="80"></td>
              <td>@php echo $Teams->skill; @endphp</td>
              {{-- <td>{{ $Teams->created_at }}</td> --}}
              {{-- <td>{{ $Teams->updated_at  }}</td> --}}
              <td> 
                @if($Teams->publication_status==1)
                <label class="bg-success pl-2 pr-2">Active</label>
                @else
                <label class="bg-danger pl-2 pr-2">Unactive</label>
                @endif
              </td>
              <td>
              	@if($Teams->head==1)
                <a href="{{URL::to('/Team/member') }}/{{ Crypt::encryptString($Teams->id) }}" class="btn btn-outline-success">CEO Member</a>
                @else
                <a href="{{URL::to('Team/Cmember') }}/{{ Crypt::encryptString($Teams->id) }}" class="btn btn-outline-secondary">Member</a>
                @endif
                @if($Teams->publication_status==1)
                <a href="{{URL::to('/Team/unactive') }}/{{ Crypt::encryptString($Teams->id) }}" class="btn btn-outline-danger">Unactive</a>
                @else
                <a href="{{URL::to('Team/active') }}/{{ Crypt::encryptString($Teams->id) }}" class="btn btn-outline-success">Active</a>
                @endif
                <a href="{{URL::to('/eidt/Team') }}/{{ Crypt::encryptString($Teams->id) }}" class="btn btn-outline-warning">Eidt</a>
                <a href="{{URL::to('/delete/Team') }}/{{ Crypt::encryptString($Teams->id) }}" id="delete" class="btn btn-outline-danger">Delete</a>
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