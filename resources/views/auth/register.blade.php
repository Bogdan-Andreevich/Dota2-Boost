<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('styles/main.css')}}" />
  </head>
  <body>
    <div class="register active">
      <div class="register-modal">
        <div class="register-block">
          <h2 class="register-title">{{__('Реєстрація особистого аккаунту')}}</h2>
          <p class="register-desc">
              {{__('Виконайте реєстрацію за допомогою наших партнерів')}}
          </p>

          <div class="register-alt-auth">
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

          <p class="register-alternative">{{__('або')}}</p>

          <form class="register-form" method="POST" action="{{ route('register') }}">
              @csrf

              <label class="register-form-label">
                  <p class="register-form-label-title">{{__("Ім'я")}}</p>
                  <x-text-input id="email" class="register-form-label-input" placeholder="Name" type="name" name="name" :value="old('name')" required autocomplete="nacd" />
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </label>
            <label class="register-form-label">
              <p class="register-form-label-title">{{__('Електронна Пошта')}}</p>
                <x-text-input id="email" class="register-form-label-input" placeholder="E-mail" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </label>
            <label class="register-form-label">
              <div class="register-form-label-block">
                <p class="register-form-label-title">{{__('Пароль')}}</p>
              </div>
                <x-text-input id="password" class="register-form-label-input"
                              type="password"
                              placeholder="Password"
                              name="password"
                              required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </label>
            <label class="register-form-label">
              <div class="register-form-label-block">
                <p class="register-form-label-title">{{__('Повторіть пароль')}}</p>
              </div>
                <x-text-input id="password_confirmation" class="register-form-label-input"
                              type="password"
                              placeholder="Password"
                              name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </label>

            <label class="register-form-label-checkbox">
              <input
                class="register-form-label-checkbox-input"
                type="checkbox"
              />
              <p class="register-form-label-checkbox-text">
                  {{__('Я ознайомився, та згоден з')}}
                <a class="register-form-label-checkbox-link">
                    {{__('Конфіденційності')}}</a
                >, та
                <a class="register-form-label-checkbox-link"> {{__('Користуання')}}</a>
                  {{__('нашого сервісу')}}
              </p>
            </label>

            <button class="register-form-submit">{{__('Вхід')}}</button>

            <div class="register-go-login">
              <p class="register-go-login-text">{{__('Вже зареєстрований ?')}}</p>
              <a class="register-go-login-link" href="{{ route('login') }}">{{__('Перейти до авторизації.')}}</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
