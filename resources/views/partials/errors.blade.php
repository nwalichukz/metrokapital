
<br/> <br/><br/><br/>
@if ($errors->any())
<center>
<div class="col-md-4 center-block" style="background-color:red;">
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach
</ul>
</div>
</center>
@endif


@if (Session::has('success'))
	
  <br>
  <div id="overlay" style="margin-left:auto; margin-right:auto; float:none;" class="col-md-8 alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button> 
  <strong> {{ session::get('success') }} </strong>
  </div>
  @elseif(Session::has('error'))
   <br>
  <div id="overlay" style="margin-left:auto; margin-right:auto; float:none;" class="col-md-8 alert alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button> 
  <strong> {{ Session::get('error') }} </strong>
  </div>
  @endif