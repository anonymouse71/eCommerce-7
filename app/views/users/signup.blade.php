@extends('layouts.main')

@section('content')

   <div class="content-wrapper">
		<div class="dj-auth-header">
			<p>Create New Account</p>
		</div>

		<div class="dj-auth-main">
			{{ Form::open(array('url' => 'users/signup')) }}
			    <div class="auth-input-row">
			    	{{ Form::text('firstname', null, array('class' => 'auth-input input-control', 'placeholder' => 'First Name')) }}

				    @if($errors->has('firstname'))
					    <span class="validation-error">{{ $errors->first('firstname') }}</span>
				    @endif
			    </div>
			    
			    <div class="auth-input-row">
				    {{ Form::text('lastname', null, array('class' => 'auth-input input-control', 'placeholder' => 'Last Name')) }}

				    @if($errors->has('lastname'))
					    <span class="validation-error">{{ $errors->first('lastname') }}</span>
				    @endif
				</div>

                <div class="auth-input-row">
				    {{ Form::email('email', null, array('class' => 'auth-input input-control', 'placeholder' => 'Email')) }}

				    @if($errors->has('email'))
					    <span class="validation-error">{{ $errors->first('email') }}</span>
				    @endif
				</div>

				<div class="auth-input-row">
				    {{ Form::password('password', array('class' => 'auth-input input-control', 'placeholder' => 'Password')) }}

				    @if($errors->has('password'))
					    <span class="validation-error">{{ $errors->first('password') }}</span>
				    @endif
				</div>

				<div class="auth-input-row">
				    {{ Form::password('password_confirmation', array('class' => 'auth-input input-control', 'placeholder' => 'Confirm Password')) }}

				    @if($errors->has('password_confirmation'))
					    <span class="validation-error">{{ $errors->first('password_confirmation') }}</span>
				    @endif
				</div>

				<div class="auth-input-row">
				    {{ Form::text('telephone', null, array('class' => 'auth-input input-control', 'placeholder' => 'Telephone')) }}

				    @if($errors->has('telephone'))
					    <span class="validation-error">{{ $errors->first('telephone') }}</span>
				    @endif
				</div>

			    {{ Form::button('Create Account <span class="fa fa-chevron-circle-right"></span>', array('type' => 'submit', 'class' => 'primary-button auth-button')) }}
			{{ Form::close() }}
			<div class="dj-auth-footer">
				<p>Already have an account? {{ HTML::link('users/login', 'Log in now') }}</p>
			</div>
		</div>
	</div>

@stop
