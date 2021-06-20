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
	                    <h4 class="card-title">Category Add Page</h4><hr>
	                    <form class="mt-4" method="POST" action="{{route('Category.store')}}" enctype="multipart/form-data"> @csrf
	                        <div class="form-group">
	                        	<label>Title</label>
	                            <input type="text" class="form-control" name="title">
	                        </div>
	                        <div class="form-group">
	                        	<label>Description</label>
	                            <textarea id="mytextarea" name="description"></textarea>
	                        </div>
	                        {{-- <div class="form-group">
	                        	<label>File</label>
	                            <input type="file" class="form-control" name="images">
	                        </div> --}}
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