
<div>
{{ Form::open(array('url' => '/lorem_ipsum', 'method' => 'POST')) }}
{{ Form::label('numberOfParas', 'Number of Paragraphs:') }}
{{ Form::selectRange('numberOfParas', 1, 5) }}
<br />
<button class="btn btn-primary" type="submit" name="btnGenerate" id="btnGenerate"></span> Generate Text</button>
{{ Form::close() }}
</div>