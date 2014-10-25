
<div>
{{ Form::open(array('url' => '/random_user', 'method' => 'POST')) }}
{{ Form::label('numberOfUsers', 'Number of Users:') }}
{{ Form::selectRange('numberOfUsers', 1, 5, $numberOfUsers) }}
<br />
<button class="btn btn-primary" type="submit" name="btnGenerate" id="btnGenerate"><span class="glyphicon glyphicon-cog min"></span> Generate User(s)</button>
{{ Form::close() }}
</div>