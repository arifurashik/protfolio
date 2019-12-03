@if ($errors->any())

@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>{{ $error }}</strong>
    </div>
 @endforeach
@endif

@if (Session::has('success'))
<div class="alert alert-success">
    <p>{{Session::get('success')}}</p>
</div>
    
@endif
