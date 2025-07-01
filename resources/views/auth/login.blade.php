@extends('auth.master')

@section('title', 'login')

@section('content')

<div class="row justify-content-center align-items-center" style="min-height: 100vh">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                Login Page
            </div>
            <div class="card-body">
                <form action="{{route('cek.login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
        </div>
    </div>
</div>
    
@endsection