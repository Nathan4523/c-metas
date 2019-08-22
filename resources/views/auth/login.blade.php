@extends('layouts.appAuth')

@section('content-auth')
<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form-head">
                    <h4>Entrar</h4>
                    <p>Olá, faça login e comece a gerenciar sua vida!</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" id="exampleInputEmail1" name="email"
                            class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required
                            autocomplete="email">
                        <i class="ti-email"></i>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="form-gp">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" id="exampleInputPassword1"
                            class="@error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        <i class="ti-lock"></i>
                    </div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="row mb-4 rmber-area">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing"
                                    name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlAutosizing">Lembrar
                                    novamente</label>
                            </div>
                        </div>

                        <div class="col-6 text-right">
                            <a href="{{route('password.request')}}">Esqueceu a senha?</a>
                        </div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Entrar <i class="ti-arrow-right"></i></button>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Ainda não possui uma conta? <a href="register.html">Cadastrar</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
