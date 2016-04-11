

<form action="{{ route('type_of_user') }}"  method="post">
  <select name="type_of_user">
  <option value="Volunteer">Volunteer</option>
  <option value="Organization" selected>Organization</option>
   <br><br>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit">
</select>
</form>


@if (isset($value))
	
	@if ($value == "Volunteer") 
		@include ('includes.Volform')
	@else 
		@include ('includes.Orgform')
	@endif
@endif






 