@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="mt-3 mb-3">ログイン</h3>

            <hr>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror laravelmart-login-input" name="email" value="{{ old('email') }}" requered autocomplete="email" autofocus placeholder="メールアドレス">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>メールアドレスが正しくない可能性があります。</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror laravelmart-login-input" name="password" requered autocomplete="current-password" autofocus placeholder="パスワード">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>パスワードが正しくない可能性があります。</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" id="remember" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label for="remember" class="form-check-label laravelmart-check-label w-100">
                            次回から自動的にログインする
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button class="mt-3 btn laravelmart-submit-button w-100">
                        ログイン
                    </button>

                    <a href="{{ route('password.request') }}" class="btn btn-link mt-3 d-flex justify-content-center laravelmart-login-text">
                        パスワードをお忘れの場合
                    </a>
                </div>

            </form>

            <hr>

            <div class="form-group">
                <a href="{{ route('register') }}" class="btn btn-link mt-3 d-flex justify-content-center laravelmart-login-text">
                    新規登録
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
