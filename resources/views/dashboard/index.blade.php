@extends('layouts.dashboard')

@section('content')
	<div class="container mt-4">
	    <div class="card">
	        <div class="card-header">Shorten Link's</div>
	        <div class="card-block">
	            <div class="list-group d-flex-column">
	            	@foreach($shrts as $shrt)
	            		<div class="list-group-item list-group-item-action">
	            			<div class="d-flex w-100" style="border-bottom: 1px solid #eaeaea;">
		            			<h5 class="mb-1">{{ $shrt->title }}</h5>
		            		</div>
		            		<hr>
	            			<a href="{{ $shrt->shrt }}">
			            		<div class="d-flex w-100">
			            			<h6 class="mb-1 mr-1">li.te/{{ $shrt->shrt }}</h6> <small>{{ $shrt->link }}</small>
			            		</div>
	            			</a>
	            		</div>
	            	@endforeach
	            </div>

	        </div>
	    </div>
	</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Shorten Link</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="{{ route('store')}}" method="POST">
	      	{{ csrf_field() }}
	      	<div class="modal-body">
	        	<div class="form-group">
	        		<input type="text" name="title" class="form-control" placeholder="title">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" name="link" class="form-control" placeholder="link">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" name="shrt" class="form-control" placeholder="Short url">
	        	</div>
	        	<div class="form-group">
	        		<input type="textarea" name="description" class="form-control" placeholder="description">
	        	</div>
	      	</div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">add</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
@endsection
