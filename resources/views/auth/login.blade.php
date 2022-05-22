@extends('auth.auth_app')
@section('content')
   <div class="login-form login-signin">
        <div class="text-center mb-10 mb-lg-20">
            <h3 class="font-size-h1">Sign In</h3>
            <p class="text-muted font-weight-bold">Enter your email and password</p>
        </div>

        @if (isset($errors) && count($errors))

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>

        @endif
        
        <form class="form" method="POST" id ="login-form" novalidate="novalidate" id="ajax-submit" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
           
            <input type="email" name="email" class="form-control form-control-solid h-auto py-5 px-6" placeholder="Email here...">
            <div class="error" id="email_error"></div>
        </div>
        <div class="form-group">

            <input type="password" name="password" class="form-control form-control-solid h-auto py-5 px-6" placeholder="Password here...">
            <div class="error" id="password_error"></div>
        </div>
        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
            
            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In
            </button>
        </div>
        </form>
    </div>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    <!--begin::Page Scripts(used by this page)-->
    <!-- <script src="{{ asset('js/backend/pages/custom/login/login-general.js') }}"></script> -->
    <!--end::Page Scripts-->
@endsection
