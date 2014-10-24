
<div>
{{ Form::open(array('url' => '/lorem_ipsum', 'method' => 'POST')) }}
{{ Form::label('numberOfParas', 'Number of Paragraphs:') }}
{{ Form::selectRange('numberOfParas', 1, 5, $numberOfParas) }}
<br />
<button class="btn btn-primary" type="submit" name="btnGenerate" id="btnGenerate"><span class="glyphicon glyphicon-cog min"></span> Generate Text</button>
{{ Form::close() }}
</div>