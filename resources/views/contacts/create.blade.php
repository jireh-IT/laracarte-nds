@extends("layouts.default", ['title' => 'Contact'])

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8  col-sm-10 mx-auto">
			<h2>Get In Touch</h2>
			<p class="text-muted">If you having trouble with this service, please
			<a href="mailto:{{config('laracarte.admin_support_email')}} "> ask for help</a>.</p>

			<form action="{{ route('contact') }}" method="POST" novalidate>
				@csrf

				<div class="form-group ">
					<label for="name" class="control-lable">Name</label>
					<input type="text" name="name" id="name" value="{{old('name')}}" class="form-control {{ $errors->has('name') ? 'is-invalid': ""  }}" required="required">
					{!! $errors->first('name', '<div class="invalid-feedback">:message</div>')  !!}
				</div>

				<div class="form-group">
					<label for="email" class="control-lable">Email</label>
					<input type="email" name="email" id="email" value="{{old('email')}}" class="form-control {{ $errors->has('email') ? 'is-invalid': ""  }}" required="required">
					{!! $errors->first('email', '<div class="invalid-feedback">:message</div>')  !!}
				</div>

				<div class="form-group">
					<label for="message" class="control-lable sr-only">Message</label>
					<textarea name="message" id="message" rows="10" cols="10" class="form-control {{ $errors->has('message') ? 'is-invalid': ""  }}" required="required">{{old('message')}}</textarea>
					{!! $errors->first('message', '<div class="invalid-feedback">:message</div>')  !!}
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
				</div>

			</form>

		</div>
	</div>
</div>
@stop