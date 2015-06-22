@extends('layouts.main')

@section('content')

   <div class="content-wrapper">
		<div class="dj-auth-header">
			<p>Please Log In</p>
		</div>

		<div class="dj-auth-main">
			{{ Form::open(array('url' => 'users/login')) }}
			    {{ Form::email('email', null, array('class' => 'input-control auth-input', 'placeholder' => 'Email')) }}
			    {{ Form::password('password', array('class' => 'input-control auth-input-last', 'placeholder' => 'Password')) }}
				<div class="remember-section">
					<div class="dj-checkbox">
						<input type="checkbox" id="remember-me" name="remember-me" />
						<label for="remember-me"></label>
					  	<span>Remember Me</span>
				  	</div>
				  	{{ HTML::link('#', 'Forget your password?', array('class' => 'forget-password')) }}
				</div>

				{{ Form::button('Log In <span class="fa fa-chevron-circle-right"></span>', array('type' => 'submit', 'class' => 'primary-button auth-button')) }}
			{{ Form::close() }}
			<div class="dj-auth-footer">
				<p>New to D&amp;J? {{ HTML::link('users/signup', 'Sign up now') }}</p>
			</div>
		</div>
	</div>

@stop
