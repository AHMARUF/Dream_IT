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
	                    <h4 class="card-title">Category Eidt Page</h4><hr>
	                    <form class="mt-4" method="POST" action="{{URL::to('Category/update/'.$portfolio->id)}}" enctype="multipart/form-data"> @csrf
	                        <div class="form-group">
	                        	<label>Title</label>
	                            <input type="text" class="form-control" name="title" value="{{ $portfolio->title }}">
	                        </div>
	                        <div class="form-group">
	                        	<label>Description</label>
	                            <textarea id="mytextarea" name="description" >{{ $portfolio->description }}</textarea>
	                        </div>
	                        <div class="form-group">
	                            <button class="btn btn-success">UPDATE</button>
	                            <a href="{{ route('/Categoryall') }}" class="btn btn-primary">Back</a>
	                        </div>
	                    </form>
	                </div>
	            </div>
			</div>
		</div>
	</div>
</div>


@endsection