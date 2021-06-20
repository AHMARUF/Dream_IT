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
	                    <h4 class="card-title">Team Add Page</h4><hr>
	                    <form class="mt-4" method="POST" action="{{route('Team.store')}}" enctype="multipart/form-data"> @csrf
	                        <div class="form-group">
	                        	<label>Name</label>
	                            <input type="text" class="form-control" name="name">
	                        </div>
	                        <div class="form-group">
	                        	<label>Skill</label>
	                        	<input type="text" class="form-control" name="skill">
	                        </div>
	                        <div class="form-group">
	                        	<label>Facebook</label>
	                        	<input type="text" class="form-control" name="facebook" >
	                        </div>
	                        <div class="form-group">
	                        	<label>Instagram</label>
	                        	<input type="text" class="form-control" name="instagram" >
	                        </div>
	                        <div class="form-group">
	                        	<label>Twitter</label>
	                        	<input type="text" class="form-control" name="twitter" >
	                        </div>
	                        <div class="form-group">
	                        	<label>E-mail</label>
	                        	<input type="text" class="form-control" name="mail">
	                        </div>
	                        <div class="form-group">
	                        	<label>File</label>
	                            <input type="file" class="form-control" name="images">
	                        </div>
	                        <div class="form-group">
	                        	<label>Junior</label>
	                            <input type="checkbox"  name="head" value="1">
	                        </div>
	                        <div class="form-group">
	                        	<label>Publication Status</label>
	                            <input type="checkbox"  name="publication_status" value="1">
	                        </div>
	                        <div class="form-group">
	                            <button class="btn btn-success">Save</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
			</div>
		</div>
	</div>
</div>


@endsection