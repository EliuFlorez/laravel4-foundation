@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Signup
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Signup</h1>
</div>
<form method="post" action="" class="form-horizontal">
	<!-- CSRF Token -->
	<input type="hidden" name="csrf_token" id="csrf_token" value="{{{ Session::getToken() }}}" />

	<!-- First Name -->
	<div class="{{{ $errors->has('first_name') ? 'error' : '' }}}">
		<label for="first_name">First Name</label>
		<input type="text" name="first_name" id="first_name" value="{{{ Request::old('first_name') }}}" />
		{{{ $errors->first('first_name') }}}
	</div>
	<!-- ./ first name -->

	<!-- Last Name -->
	<div class="{{{ $errors->has('last_name') ? 'error' : '' }}}">
		<label for="last_name">Last Name</label>
		<input type="text" name="last_name" id="last_name" value="{{{ Request::old('last_name') }}}" />
		{{{ $errors->first('last_name') }}}
	</div>
	<!-- ./ last name -->

	<!-- Email -->
	<div class="{{{ $errors->has('email') ? 'error' : '' }}}">
		<label for="email">Email</label>
		<input type="text" name="email" id="email" value="{{{ Request::old('email') }}}" />
		{{{ $errors->first('email') }}}
	</div>
	<!-- ./ email -->

	<!-- Password -->
	<div class="{{{ $errors->has('password') ? 'error' : '' }}}">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" value="" />
		{{{ $errors->first('password') }}}
	</div>
	<!-- ./ password -->

	<!-- Password Confirm -->
	<div class="{{{ $errors->has('password_confirmation') ? 'error' : '' }}}">
		<label for="password_confirmation">Password Confirm</label>
		<input type="password" name="password_confirmation" id="password_confirmation" value="" />
		{{{ $errors->first('password_confirmation') }}}
	</div>
	<!-- ./ password confirm -->

	<!-- Signup button -->
	<button type="submit" class="button">Signup</button>
	<!-- ./ signup button -->
</form>
@stop
