@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 text-center">
			<h1>
				Bustle UP! <br>
				<small class="text-grayed">
					Hustle through all of your Todos!..
				</small>
			</h1>
			<a href="#" class="btn btn-lg btn-raised btn-white btn-ripple" data-toggle="modal" data-target=".todo-form-modal-lg">Add Todo</a>
		</div>
	</div>

	<div class="row" style="padding-top: 70px;">
		<div class="col-sm-10 col-sm-offset-1">
			@foreach($todos as $todo)
			<div class="card">
			  <div class="card-block">
			  	<input type="checkbox" class="star" checked="false">
			  	<h4 class="card-title">{{ $todo->title }} <a href="" class="small" style="color: #222; font-size: 12px;">Edit</a></h4>
			  	<img class="card-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAAAyCAYAAAAZUZThAAAD3ElEQVR4Xu2deU/cMBDFMytAgIAWKCBAgPhy5YZyQ7nKfd/3l22q1RY22cTB40w2Wfv9hVjCKj7iX96b8Zjex3/6RJ7neb4X+kk1v3/8nft5+f9KMd9v/Pnf8H0y74uY14f6RbQdQv2bejwC/SnVvvJ84t4X93rG/Cl9zG9u+8jz6H18wtd+OBg39fmwKW6qpLrZ3DrXrywS3E4sXDv+L0a5tiN+ESPVQyDZ79Lj8TY2USEI9wnmXi/eCSBJKuJHxgMkiVsc6W1s0mc/HIKTHSQReL0VHA8lQY0WUQtI8jo6GdYgXDJwrxcfTJAEJOG9VnI0Cb2OTlU1SI6THSQBSQppiLyMTGXrYtVNmIEkIIk8SehlZFrfxarDZAdJQJJCkeR5eNqXFWZMfx+aJBrXkbYqOXEuuFuh8aDn4Rm+iwWS6E/qQk32wOKFOIlecPxpaKaqQawaTGgSaJL0moSehmbNXSyQBCQJvr5xXVBqgDjJ4+Bs1MUCST7xi9yt2vQbtyLu9Dg4l97FAklAEltJ8jAwp3axQBKQJJjlHZoPbpCEHgbm5VwskAQksY0k9/3zX7tYIAlI4ihJ6L5/Qd7FAklAEltIcte3oO9igSQgiWMkobu+Rd/zavxotp+dX3oJcreQu5Vp7tZt7y++iwWSgCSOkIRufywF4iAgidH249iES+xxj9Q6MC2YkWfE/aZn0dzFAklAEstJQjc9yxWCqIJARnuRoUmqiYIgSUOT5Lp7Kb2LBZKAJJaShK67V8K5WCCJ3j6BJLJCk+jHgYzeUOqYBXz1bVnOxQJJQBLLSEJX31ej2bzQJKnKmyb78tAkDaVJLrtW5F0skAQksYQkdNm1FuNiqfYuI06COIlkIXKm26nM8MhQk1x0rmbnYoEkIEmDk4QuOtcTXCyQxIgYrGxmaJJCa5LzjrX4yori9aqkcMr8HvF2oFqKS9VS6LxjQ8PFAklAkoy1h+jruKAmOWtfTz4fRHwFZhJAKvVevB0giQskobP2TYaLBZKAJI6R5LRtQ+98EPEVGCQpP2you1Xsult02vbbwMUCSUASR0hy0rrJOx8EJFEk4kGT2KhJ6KR1K4WLBZKAJJaT5Lhlyy8fz5vnQZ44n6Q6yaBJiqVJ6LhlW8DFAklAEktJctS8HdAgIEls2oPRYTPQJDZoEjpq3hF0sUASkMQykhw27cS4WCAJSKJxXJvRdllm/CvnMxPpsGk3AxcLJAFJLCHJQWk3IRcLJAFJ3CYJHZT21OeDZBYUxM5EI8KgWkr9q6Xs055GLhZIApK4SRLapz9fnw8CkkRWLlSVd6Oq/D+srw7y5IzXaAAAAABJRU5ErkJggg==" alt="todo background" style="width:100%">
			  </div>
			  <div class="card-container">
			    <p>{{ $todo->description }}</p>
			    <div class="card-footer">
			    	<a href="" class="btn btn-sm btn-teal btn-raised btn-ripple">Done</a>
			    </div>
			  </div>
			</div>
			@endforeach
		</div>
	</div>

	<div class="modal fade todo-form-modal-lg" tabindex="-1" role="dialog" aria-labelledby="Add your todo.">
	  <div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      <div class="modal-header"><h3 class="text-center">New Todo</h3></div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-sm-8 col-sm-offset-2">
		      		<form action="/" method="POST" class="form-horizontal">
		      			{{ csrf_field() }}
			      		<div class="form-group">
			      			<label for="todoTitle">Title</label>
			      			<input type="text" placeholder="Title" id="todoTitle" name="title" class="form-control">
			      		</div>
			      		<div class="form-group">
			      			<label for="todoDescription">Description</label>
			      			<textarea class="form-control" rows="3" name="description" id="todoDescription"></textarea>
			      		</div>
			      		<div class="form-group">
						    <button type="submit" class="btn btn-raised btn-blue btn-ripple">Create your todo</button>
						</div>
			      	</form>
		      	</div>
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>
@endsection

@section('custom-css')
	<style type="text/css">
		.modal {
			color: #222;
		}
	</style>
@endsection