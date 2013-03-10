@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Login into your account</h1>
</div>
<form method="post" action="" class="form-horizontal">
	<!-- CSRF Token -->
	<input type="hidden" name="csrf_token" id="csrf_token" value="{{{ Session::getToken() }}}" />

	<!-- Email -->
	<div class="{{{ $errors->has('email') ? 'error' : '' }}}">
		<label for="email">Email</label>
		<input type="text" name="email" id="email" value="{{{ Input::old('email') }}}" />
		{{{ $errors->first('email') }}}
	</div>
	<!-- ./ email -->

	<!-- Password -->
	<div class=" {{{ $errors->has('password') ? 'error' : '' }}}">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" value="" />
		{{{ $errors->first('password') }}}
	</div>
	<!-- ./ password -->

	<!-- Login button -->
	<button type="submit" class="button">Login</button>
	<!-- ./ login button -->
</form>
@stop
