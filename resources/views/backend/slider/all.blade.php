@extends('layouts.admin-layout')
@section('content')
<div class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
<!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i>  ALL Slider</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SL</th>
              <th>Title</th>
              <th>Images</th>
              <th>created</th>
              <th>updated</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>SL</th>
              <th>Title</th>
              <th>Images</th>
              <th>created</th>
              <th>updated</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($slider as $key=>$sliders)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $sliders->title }}</td>
              <td><img src="{{ URL::to($sliders->images) }}" height="80" width="80"></td>
              <td>{{ $sliders->created_at }}</td>
              <td>{{ $sliders->updated_at  }}</td>
              <td> 
                @if($sliders->publication_status==1)
                <label class="bg-success pl-2 pr-2">Active</label>
                @else
                <label class="bg-danger pl-2 pr-2">Unactive</label>
                @endif
              </td>
              <td>
                @if($sliders->publication_status==1)
                <a href="{{URL::to('/slider/unactive') }}/{{ Crypt::encryptString($sliders->id) }}" class="btn btn-outline-danger">Unactive</a>
                @else
                <a href="{{URL::to('slider/active') }}/{{ Crypt::encryptString($sliders->id) }}" class="btn btn-outline-success">Active</a>
                @endif
                <a href="{{URL::to('/eidt/slider') }}/{{ Crypt::encryptString($sliders->id) }}" class="btn btn-outline-warning">Eidt</a>
                <a href="{{URL::to('/delete/slider') }}/{{ Crypt::encryptString($sliders->id) }}" id="delete" class="btn btn-outline-danger">Delete</a>
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