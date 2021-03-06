@extends("layouts.default", ['title' => 'About'])

@section('content')
<div class="container">
	<h2>What is {{config('app.name')}}</h2>
	<p>{{config('app.name')}} is a clone app of <a href="https://laramap.com" target="_blank">laramap.com</a></p>
	<div class="row">
		<div class="col-md-6">
			<p class="alert alert-warning">
				<i class="fas fa-exclamation-triangle"></i>
				<strong></i>this app has been built by <a href="https://twitter.com/JirehIt">@Jireh_IT</a> for learning purposes</strong>
			</p>
		</div>
	</div>
	<p>Feel free to help to improve the <a href="https://github.com/jireh-IT/laracarte-nds"> source code</a></p>
	<hr>
	<h2>What is Laramap?</h2>
	<p>Laramap is the website by which {{config('app.name')}} was inspired.</p>
	<p>More info here.</p>
	<hr>
	<h2>Which tools and services are used in {{config('app.name')}}?</h2>
	<p>Basically it's build on Laravel &amp; Bootstrap. But there's a bunch of services
	used for email and other sections</p>
	<ul>
		<li>Laravel</li>
		<li>Bootstrap</li>
		<li>Amazon S3</li>
		<li>Mandrill</li>
		<li>Google Maps</li>
		<li>Gravatar</li>
		<li>Antoni martin geolocalisation Package</li>
		<li>Antoni martin geolocalisation Package</li>
		<li>Heroku</li>
	</ul>
</div>
@stop