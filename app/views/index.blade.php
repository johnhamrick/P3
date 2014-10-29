@extends('_master')

@section('title')
	Developer&#39;s Toolkit

@stop

@section('content')
	<div class="container">
		<div class="row">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">About</a></h4>
					</div>
				<div class="panel-collapse collapse in" id="collapse1">
					<div class="panel-body">
						<p>
	The Developer&#39;s Toolkit provides an easy way to generate
	Lorem Ipsum text &#38; random users for web development.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>Lorem Ipsum</h3>
			<p>
	"In publishing and graphic design, Lorem Ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.
	Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout."
</p>
<br />Source: <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">Wikipedia <span class="glyphicon glyphicon-new-window min"></span></a>
<p>
<br />
<a class="btn btn-default" role="button" href="lorem_ipsum/"><span class="glyphicon glyphicon-cog min"></span> Generate Text</a>
</p>
</div>
<div class="col-md-4">
<h3>Random User</h3>
	<p>
	Random Uers are often needed for testing in software applications. This Random User Generator provides fictitious user(s) with the following parameters:
	</p>
		<ul>
		<li>Name</li>
		<li>Email</li>
		<li>Phone</li>
		<li>Address</li>
		<li>Company</li>
		</ul>
<p>
<br />
<a class="btn btn-default" role="button" href="random_user/"><span class="glyphicon glyphicon-cog min"></span> Generate User(s)</a>
</p>
</div>
</div>
</div>
@stop