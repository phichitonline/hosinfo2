@extends('layouts.theme')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

                  <div class="login-box">
                    <div class="login-box-body">
                        <p class="login-box-msg">Login เข้าใช้งาน</p>

    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group has-feedback">
                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="ชื่อผู้ใช้หรืออีเมล์" required autofocus>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="รหัสผ่าน" required autocomplete="current-password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <label for="remember_me" class="flex items-center">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me" {{ old('remember') ? 'checked' : '' }}> จำรหัสผ่าน
                </label>
            </div>

            <div class="form-group has-feedback">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>

        </form>
    </x-jet-authentication-card>

</div>
<!-- /.login-box-body -->
</div>

</section>

</div>
<!-- ./wrapper -->

@endsection
