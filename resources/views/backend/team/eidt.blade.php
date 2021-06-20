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
	                    <h4 class="card-title">Service Add Page</h4><hr>
	                    <form class="mt-4" method="POST" action="{{URL::to('Team/update/'.$team->id)}}" enctype="multipart/form-data"> @csrf
	                        <div class="form-group">
	                        	<label>Name</label>
	                            <input type="text" class="form-control" name="name" value="{{ $team->name }}">
	                        </div>
	                        <div class="form-group">
	                        	<label>Skill</label>
	                        	<input type="text" class="form-control" name="skill" value="{{ $team->skill }}">
	                        </div>
	                        <div class="form-group">
	                        	<label>Facebook</label>
	                        	<input type="text" class="form-control" name="facebook" value="{{ $team->facebook }}">
	                        </div>
	                        <div class="form-group">
	                        	<label>Instagram</label>
	                        	<input type="text" class="form-control" name="instagram" value="{{ $team->instagram }}">
	                        </div>
	                        <div class="form-group">
	                        	<label>Twitter</label>
	                        	<input type="text" class="form-control" name="twitter" value="{{ $team->twitter }}">
	                        </div>
	                        <div class="form-group">
	                        	<label>E-mail</label>
	                        	<input type="text" class="form-control" name="mail" value="{{ $team->mail }}">
	                        </div>
	                        <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
	                        	<div class="form-group">
	                        	<label>File</label>
	                            <input type="file" class="form-control" name="images">
	                        </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
	                        	<input type="hidden" name="old_photo" value="{{ $team->images }}">
	                        	<img src="{{ URL::to($team->images) }}" height="100" width="130" class="img-fluid">
	                        </div>
	                    	</div>
	                        <div class="form-group">
	                            <button class="btn btn-success">UPDATE</button>
	                            <a href="{{ route('/Teamall') }}" class="btn btn-primary">Back</a>
	                        </div>
	                    </form>
	                </div>
	            </div>
			</div>
		</div>
	</div>
</div>


@endsection