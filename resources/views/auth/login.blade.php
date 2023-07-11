@extends('layouts.auth.default')

@section('content')
    <div class="be-card-form">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Welcome! User</h5>
                <h6 class="card-subtitle mb-5 text-body-secondary">Login Your Account</h6>
                <form class="be-card-form-inner">
                    <div class="mb-3">
                        <label class="form-label">Email Address <span>*</span></label>
                        <input type="email" class="form-control" placeholder="Email Address" />
                        <div class="form-text invalid-feedback">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password <span>*</span></label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <a href="http://">Forget Password</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
            </div>
        </div>
    </div>
@endsection
