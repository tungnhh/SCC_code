@extends  ('users.layout.user')
@section ('main')

	<div class="col-md-3 col-sm-2 col-xs-12">
		<select name="" id="subject" class="form-control">
		<option value="-1">Select Subject</option>
		@foreach($subject as $sub)

		<option value="{{$sub->id}}">{{$sub->name}}</option>

		@endforeach
		</select>
	</div>
	
	<script>
		
	</script>


@stop