@extends('layouts.theme')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

            <div class="register-box">

                    <div class="register-box-body">
                      <p class="login-box-msg">สมัครผู้ใช้งานใหม่</p>

    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group has-feedback">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="ชื่อผู้ใช้ (Username)">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
              </div>

              <div class="form-group has-feedback">
                <input type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" id="fullname" name="fullname" value="{{ old('fullname') }}" required placeholder="ชื่อ - นามสกุล">
                @if ($errors->has('fullname'))
                <span class="help-block">
                    <strong>{{ $errors->first('fullname') }}</strong>
                </span>
                @endif
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>

              <div class="form-group has-feedback">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required placeholder="อีเมล์">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>

              <div class="form-group has-feedback">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required placeholder="รหัสผ่าน">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>

              <div class="form-group has-feedback">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="ยืนยันรหัสผ่านอีกครั้ง">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>

              <div class="form-group has-feedback">
                    <label>
                      <input type="checkbox"> ยอมรับ<a href="#">ข้อตกลง</a>
                    </label>
              </div>
              <div class="form-group has-feedback">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
              </div>

        </form>
    </x-jet-authentication-card>


</section>

</div>
</div>
<!-- ./wrapper -->

@endsection
