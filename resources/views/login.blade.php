@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4">
            <form action="login" method='POST'>
                @csrf
                <div class="form-group">
                <strong for="exampleInputEmail1">Email address</strong>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                <Strong for="exampleInputPassword1">Password</Strong>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection


<style>
.custom-login
{
    height: 500px;
    padding: 100px;
}

</style>