@extends('layouts.admin-layout')
@section('content')
<div class="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto py-2 border-red" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
				<div class="card" >
					 @if ($errors->any())
				      <div class="alert alert-danger">
				          <ul>
				              @foreach ($errors->all() as $error)
				                  <li>{{ $error }}</li>
				              @endforeach
				          </ul>
				      </div>
				    @endif
	                <div class="card-body">
	                    <h4 class="card-title">Slider Add Page</h4><hr>
	                    <form class="mt-4" method="POST" action="{{URL::to('slider/update/'.$slider->id)}}" enctype="multipart/form-data"> @csrf
	                        <div class="form-group">
	                        	<label>Title</label>
	                            <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
	                        </div>
	                        <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
	                        	<div class="form-group">
	                        	<label>File</label>
	                            <input type="file" class="form-control" name="images">
	                        </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
	                        	<input type="hidden" name="old_photo" value="{{ $slider->images }}">
	                        	<img src="{{ URL::to($slider->images) }}" height="100" width="130" class="img-fluid">
	                        </div>
	                    	</div>
	                        <div class="form-group">
	                            <button class="btn btn-success">UPDATE</button>
	                            <a href="{{ route('/sliderall') }}" class="btn btn-primary">Back</a>
	                        </div>
	                    </form>
	                </div>
	            </div>
			</div>
		</div>
	</div>
</div>
@endsection