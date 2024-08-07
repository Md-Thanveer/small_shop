@extends('frontend.layout.app')
@section('title')
Forgot password
@endsection
@Section('content')

<div class="container">
    <h1>Welcome to Forgot Password</h1>
    <form id="forgot password form" onsumbit="return Validate Form()">
        <div class="input-group">
            <label for="email" id="email" name="email" required>
</div>
<button type="submit" class="btn">Submit</button>
<div id ="error-message" class="error_message"></div>
</form>
</div>
@endsection