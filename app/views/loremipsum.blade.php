@extends('_master')
{{--*/ $numberOfParas = $data['numberOfParas'] /*--}}
@section('title')
Developer&#39;s Best Friend - Lorem Ipsum
@stop
@section('body')
@include('internal_nav')
<div class="container">
<hr />
<div class="row">
<div class="col-md-4">
<h2>About</h2>
<p>
"In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.
Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout."
</p>
<br />Source: <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">Wikipedia <span class="glyphicon glyphicon-new-window min"></span></a>
</div>
<div class="col-md-2">&nbsp;</div>
<div class="col-md-4">
<h2>Generate Text</h2>
@include('lorem_ipsum_form')
</div>
</div>
</div>
<div class="container">
<hr />
<div class="row">
<div class="col-md-12">
<h2>Result</h2>
<p>
{{ $data['paragraphs'] }}
</p>
</div>
</div>
</div>
@stop