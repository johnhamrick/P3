@extends('_master')
{{--*/ $numberOfUsers = $data['numberOfUsers'] /*--}}
@section('custom_header')
@stop
@section('title')
Developer&#39;s Best Friend - Random User
@stop
@section('body')
@include('internal_nav')
<div class="container">
<hr />
<div class="row">
<div class="col-md-4">
<h3>About</h3>
<p>
Random Uers are often needed for testing in software applications. This Random User Generator provides fictitious user(s) with the following parameters:
</p>
<ul>
<li>Name</li>
<li>Full address</li>
<li>Phone number</li>
<li>Email addres</li>
<li>Comapny</li>
</ul>
</div>
<div class="col-md-4">
<h2>Generate User</h2>
@include('random_user_form')
</div>
<div class="col-md-4">
<h2>Result</h2>
<p>
@for($i = 0; $i < $numberOfUsers; $i++)
{{ $data['users'][$i] }}
@endfor
</p>
</div>
</div>
</div>
@stop
@section('custom_footer')
@stop