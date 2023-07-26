<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>
    <link rel="stylesheet" href="{{asset('styles/main.css')}}" />
  </head>
  <body>
    <div class="login active">
      <div class="login-modal">
        <div class="login-block">
          <h2 class="login-title">{{__('Вхід до особистого аккаунту')}}</h2>
          <p class="login-desc">{{__('Виконайте вхід за допомогою наших партнерів')}}</p>

          <div class="login-alt-auth">
              <a href="{{ url('auth/google') }}" class="login-alt-auth-button">
                  <img
                      class="login-alt-auth-button-icon"
                      alt="google"
                      src="{{ asset('images/icons/google.svg') }}"
                  />
              </a>

              <a href="{{ url('auth/steam') }}" class="login-alt-auth-button">
              <img
                class="login-alt-auth-button-icon"
                alt="steam"
                src="{{asset('images/icons/steam.svg')}}"
              />
              </a>
          </div>

          <p class="login-alternative">{{__('або')}}</p>

          <form class="login-form" method="POST" action="{{ route('login') }}">
              @csrf
            <label class="login-form-label">
              <p class="login-form-label-title">{{__('Електронна Пошта')}}</p>
                <x-input-label for="email"/>
                <x-text-input id="email" class="login-form-label-input" type="email" name="email" :value="old('email')" placeholder="E-mail" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </label>
            <label class="login-form-label">
              <div class="login-form-label-block">
                <p class="login-form-label-title">{{__('Пароль')}}</p>
                  @if (Route::has('password.request'))
                      <a class="login-form-label-link" href="{{ route('password.request') }}">
                          {{__('Забув Пароль?')}}
                      </a>
                  @endif
              </div>
                <x-input-label for="password"/>

                <x-text-input id="password" class="login-form-label-input"
                              placeholder="Password"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />


            </label>

            <label class="login-form-label-checkbox">
              <input class="login-form-label-checkbox-input" type="checkbox" name="remember" />
              <p class="login-form-label-checkbox-text">{{__('Запам’ятати Мене')}}</p>
            </label>

            <button class="login-form-submit">{{__('Вхід')}}</button>

            <div class="login-go-register">
              <p class="login-go-register-text">{{__('Не маєш профілю ?')}}</p>
              <a class="login-go-register-link" href="{{ route('register') }}">{{__('Перейти до реєстрації')}}</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
