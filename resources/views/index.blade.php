<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('styles/main.css')}}" />
      <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
      />
      <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/nouislider/distribute/nouislider.css"
      />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  </head>
  <body>
    <!-- Header -->

    <header class="header">
      <div class="first-container">
        <div class="header-block">
          <nav class="header-navigation">
            <div class="header-navigation__logo">
              <a href="{{ url('/') }}" class="header-navigation__logo-link">
                <img
                  class="header-navigation__logo-link-icon"
                  src="{{asset('images/icons/logo-2.svg')}}"
                  alt="logo"
                />
              </a>
            </div>

            <ul class="header-navigation__menu">
              <li class="header-navigation__menu-item">
                <a href="{{url('/')}}" class="header-navigation__menu-link"> {{__('DotaBoost')}} </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="{{url('/service')}}" class="header-navigation__menu-link"> {{__('Послуги')}} </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="{{url('/about')}}" class="header-navigation__menu-link"> {{__('Про нас')}} </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="{{url('/work')}}" class="header-navigation__menu-link"> {{__('Робота')}} </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="{{url('/blog')}}" class="header-navigation__menu-link">
                    {{__('Блог')}}
                </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="{{url('/FAQ')}}" class="header-navigation__menu-link"> {{__('FAQ')}} </a>
              </li>
            </ul>

            <div class="header-navigation__profile">
              <div class="header-navigation__profile-info">
                  @auth
                <div class="header-navigation__profile-info-block">
                  <img
                    class="header-navigation__profile-info-image"
                    alt="profile"
                    src="{{ e((Auth::user()->avatar) ?? asset('images/profile-image.png')) }}"
                  />
                  <p class="header-navigation__profile-info-name">{{ e(Auth::user()->name) }}</p>
                  <button class="header-navigation__profile-info-notification">
                    <img
                      class="header-navigation__profile-info-notification-icon"
                      alt="profile-icon"
                      src="{{asset('images/icons/notifications.svg')}}"
                    />
                  </button>
                    @else
                        <div class="header-navigation__profile">
                            <a class="header-navigation__profile-button" href="{{ route('login') }}">
                                <img
                                    class="header-navigation__profile-button-icon"
                                    src="{{asset('images/icons/account.svg')}}"
                                    alt="account"
                                />
                                {{(__('Особистий кабінет'))}}
                            </a>
                        </div>


                    @endauth
                </div>
                      @auth
                          <div class="header-navigation__profile-menu-block">
                              <div class="header-navigation__profile-menu">
                                  <a
                                      href="{{url('/cabinet')}}"
                                      class="header-navigation__profile-menu-button"
                                  >
                                      <img
                                          class="header-navigation__profile-menu-button-icon"
                                          src="{{asset('images/icons/account.svg')}}"
                                          alt="icon-menu"
                                      />
                                      {{__('Профіль')}}
                                  </a>
                                  <a class="header-navigation__profile-menu-button" href="{{url('/settings')}}">
                                      <img
                                          class="header-navigation__profile-menu-button-icon"
                                          src="{{asset('images/icons/settings-profile.svg')}}"
                                          alt="icon-menu"
                                      />
                                      {{__('Налаштування')}}
                                  </a>
                                  <a class="header-navigation__profile-menu-button" href="{{ route('logout') }}"
                                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      <img class="header-navigation__profile-menu-button-icon" src="{{ asset('images/icons/out-profile.svg') }}"
                                           alt="icon-menu"/>
                                      {{ __('Вихід') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </div>

                      @endauth
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <!-- !Header -->

    <section class="hero">
      <div class="first-container">
        <div class="hero-block">
          <div class="hero-slider">
            <button class="hero-slider__button active">
              <img
                class="hero-slider__button-image"
                src="{{asset('images/slider/slide-1.png')}}"
              />
            </button>
            <button class="hero-slider__button">
              <img
                class="hero-slider__button-image"
                src="{{asset('images/slider/slide-2.png')}}"
              />
            </button>
            <button class="hero-slider__button">
              <img
                class="hero-slider__button-image"
                src="{{asset('images/slider/slide-3.png')}}"
              />
            </button>
            <button class="hero-slider__button">
              <img
                class="hero-slider__button-image"
                src="{{asset('images/slider/slide-4.png')}}"
              />
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Calculator -->

    <section class="calculator">
      <div class="second-container">
        <div class="calculator-block">
          <div class="calculator__header">
            <h1 class="calculator__header-title">
                {{__('Прорахуй ціну')}}
              <span class="calculator__header-title-span"> {{__('твого бусту!')}} </span>
            </h1>
            <div class="calculator__header-information">
              <div class="calculator__header-information-online">
                <img
                  class="calculator__header-infomation-online-icon"
                  src="{{asset('images/icons/person.svg')}}"
                  alt="person"
                />
                  {{__('42 Бустера Онлайн')}}
              </div>
              <div class="calculator__header-information-security">
                <img
                  class="calculator__header-infomation-security-icon"
                  src="{{asset('images/icons/lock.svg')}}"
                  alt="security"
                />
                  {{__('100% Гарантія Конфіденційності')}}
              </div>
            </div>
          </div>

          <div class="calculator__interface-elevated">
            <div class="calculator__interface-elevated-advanced">
              <div class="calculator__interface-elevated-advanced-lvl-first">
                <img
                  class="calculator__interface-elevated-advanced-lvl-first-img"
                  src="{{asset('images/lvl-first.png')}}"
                />
                <p
                  class="calculator__interface-elevated-advanced-lvl-first-text"
                >
                  Божественний IV
                </p>
              </div>

              <div class="calculator__interface-elevated-advanced__column">
                <div class="calculator__interface-elevated-advanced__block">
                  <div
                    class="calculator__interface-elevated-advanced-select-lvl"
                  >
                    <button
                      class="calculator__interface-elevated-advanced-select-lvl-button"
                    >
                      <div
                        class="calculator__interface-elevated-advanced-select-lvl-button-text"
                      >
                        Божественний IV
                      </div>
                      <img
                        class="calculator__interface-elevated-advanced-select-lvl-button-icon"
                        src="./images/icons/arrow.svg"
                      />
                    </button>

                    <div
                      class="calculator__interface-elevated-advanced-select-lvl-show"
                    >
                      <button
                        class="calculator__interface-elevated-advanced-select-lvl-button"
                      >
                        <div
                          class="calculator__interface-elevated-advanced-select-lvl-button-text"
                        >
                          Божественний IV
                        </div>
                        <img
                          class="calculator__interface-elevated-advanced-select-lvl-button-icon"
                          src="./images/icons/arrow.svg"
                        />
                      </button>
                      <button
                        class="calculator__interface-elevated-advanced-select-lvl-button"
                      >
                        Божественний IV
                      </button>
                      <button
                        class="calculator__interface-elevated-advanced-select-lvl-button"
                      >
                        Божественний IV
                      </button>
                    </div>
                  </div>

                  <div
                    class="calculator__interface-elevated-advanced-min-price"
                  >
                    <p
                      class="calculator__interface-elevated-advanced-min-price-title"
                    >
                      Початкова Оцінка
                    </p>
                    <button
                      class="calculator__interface-elevated-advanced-min-price-minus"
                    >
                      -
                    </button>

                    <p
                      class="calculator__interface-elevated-advanced-min-price-value"
                    >
                      5365
                    </p>

                    <button
                      class="calculator__interface-elevated-advanced-min-price-plus"
                    >
                      +
                    </button>
                  </div>

                  <div
                    class="calculator__interface-elevated-advanced-scorematch"
                  >
                    <p
                      class="calculator__interface-elevated-advanced-scorematch-title"
                    >
                      Кількість Матчів
                    </p>
                    <div
                      class="calculator__interface-elevated-advanced-scorematch-block"
                    >
                      <input
                        type="range"
                        min="1"
                        max="10"
                        step="1"
                        value="7"
                        class="calculator__interface-elevated-advanced-scorematch-input"
                      />
                    </div>
                  </div>

                  <div
                    class="calculator__interface-elevated-advanced-max-price"
                  >
                    <p
                      class="calculator__interface-elevated-advanced-max-price-title"
                    >
                      Кінцева Оцінка
                    </p>
                    <button
                      class="calculator__interface-elevated-advanced-max-price-minus"
                    >
                      -
                    </button>

                    <p
                      class="calculator__interface-elevated-advanced-max-price-value"
                    >
                      8000
                    </p>

                    <button
                      class="calculator__interface-elevated-advanced-max-price-plus"
                    >
                      +
                    </button>
                  </div>
                </div>

                <div class="calculator__interface-elevated-advanced__block">
                  <div class="calculator__interface-elevated-advanced-region">
                    <p
                      class="calculator__interface-elevated-advanced-region-text"
                    >
                      Сервер
                    </p>
                    <p
                      class="calculator__interface-elevated-advanced-region-value"
                    >
                      Europa
                    </p>
                  </div>

                  <div class="calculator__interface-elevated-advanced-server">
                    <button
                      class="calculator__interface-elevated-advanced-server-button"
                    >
                      <div
                        class="calculator__interface-elevated-advanced-server-button-text"
                      >
                        <p
                          class="calculator__interface-elevated-advanced-server-title"
                        >
                          Послуга
                        </p>
                        Підвищення Оцінки Поведінки
                      </div>
                      <img
                        class="calculator__interface-elevated-advanced-server-button-icon"
                        src="./images/icons/arrow.svg"
                      />
                    </button>

                    <div
                      class="calculator__interface-elevated-advanced-server-show"
                    >
                      <button
                        class="calculator__interface-elevated-advanced-server-button"
                      >
                        <div
                          class="calculator__interface-elevated-advanced-server-button-text"
                        >
                          <p
                            class="calculator__interface-elevated-advanced-server-title"
                          >
                            Послуга
                          </p>
                          Підвищення Оцінки Поведінки
                        </div>
                        <img
                          class="calculator__interface-elevated-advanced-server-button-icon"
                          src="./images/icons/arrow.svg"
                        />
                      </button>
                      <button
                        class="calculator__interface-elevated-advanced-server-button"
                      >
                        MMR Буст
                      </button>
                      <button
                        class="calculator__interface-elevated-advanced-server-button"
                      >
                        Калібровка
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="calculator__interface-elevated-categories">
              <ul class="calculator__interface-elevated-categories-select">
                <li
                  class="calculator__interface-elevated-categories-select-item"
                >
                  <button
                    class="calculator__interface-elevated-categories-select-button"
                  >
                    <div
                      class="calculator__interface-elevated-categories-select-button-block"
                    >
                      <div
                        class="calculator__interface-elevated-categories-select-button-selected"
                      >
                        <img
                          class="calculator__interface-elevated-categories-select-button-selected-icon"
                          src="./images/icons/checkbox.svg"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-elevated-categories-select-button-text"
                      >
                        Грати з Бустером
                      </p>
                    </div>
                    <p
                      class="calculator__interface-elevated-categories-select-button-percent"
                    >
                      +20%
                    </p>
                  </button>
                </li>
                <li
                  class="calculator__interface-elevated-categories-select-item"
                >
                  <button
                    class="calculator__interface-elevated-categories-select-button"
                  >
                    <div
                      class="calculator__interface-elevated-categories-select-button-block"
                    >
                      <div
                        class="calculator__interface-elevated-categories-select-button-selected"
                      >
                        <img
                          class="calculator__interface-elevated-categories-select-button-selected-icon"
                          src="./images/icons/checkbox.svg"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-elevated-categories-select-button-text"
                      >
                        Грати з Бустером
                      </p>
                    </div>
                    <p
                      class="calculator__interface-elevated-categories-select-button-percent"
                    >
                      +20%
                    </p>
                  </button>
                </li>
                <li
                  class="calculator__interface-elevated-categories-select-item"
                >
                  <button
                    class="calculator__interface-elevated-categories-select-button"
                  >
                    <div
                      class="calculator__interface-elevated-categories-select-button-block"
                    >
                      <div
                        class="calculator__interface-elevated-categories-select-button-selected"
                      >
                        <img
                          class="calculator__interface-elevated-categories-select-button-selected-icon"
                          src="./images/icons/checkbox.svg"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-elevated-categories-select-button-text"
                      >
                        Грати з Бустером
                      </p>
                    </div>
                    <p
                      class="calculator__interface-elevated-categories-select-button-percent"
                    >
                      +20%
                    </p>
                  </button>
                </li>
                <li
                  class="calculator__interface-elevated-categories-select-item"
                >
                  <button
                    class="calculator__interface-elevated-categories-select-button"
                  >
                    <div
                      class="calculator__interface-elevated-categories-select-button-block"
                    >
                      <div
                        class="calculator__interface-elevated-categories-select-button-selected"
                      >
                        <img
                          class="calculator__interface-elevated-categories-select-button-selected-icon"
                          src="./images/icons/checkbox.svg"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-elevated-categories-select-button-text"
                      >
                        Грати з Бустером
                      </p>
                    </div>
                    <p
                      class="calculator__interface-elevated-categories-select-button-percent"
                    >
                      +20%
                    </p>
                  </button>
                </li>
              </ul>
            </div>

            <div class="calculator__interface-elevated-success">
              <div class="calculator__interface-elevated-success-bonus">
                <input
                  class="calculator__interface-elevated-success-bonus-input"
                  placeholder="Введіть Промокод"
                />
                <button
                  class="calculator__interface-elevated-success-bonus-button"
                >
                  <img
                    class="calculator__interface-elevated-success-bonus-button-icon"
                    alt="arrow"
                    src="./images/icons/arrow-black.svg"
                  />
                </button>
              </div>
              <button class="calculator__interface-elevated-success-payment">
                <div
                  class="calculator__interface-elevated-success-payment-value"
                >
                  Сума 1219 ₴
                </div>
                <div
                  class="calculator__interface-elevated-success-payment-text"
                >
                  Оформити Замовлення
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- !Calculator -->

    <!-- Clients -->

    <section class="clients">
      <div class="second-container">
        <div class="clients-block">
          <h2 class="clients-title">Наші клієнти в Захваті</h2>
          <div class="clients-slider">
            <div class="swiper" style="margin-bottom: 10px">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="clients-slider-item">
                    <div class="clients-slider-item-header">
                      <h3 class="clients-slider-item-header-title">Буст MMR</h3>

                      <div class="stars-level">
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star.svg"
                        />
                      </div>
                    </div>
                    <p class="clients-slider-item-description">
                      Дуже задоволена послугою прокачки MMR у DotaBoost! Завдяки
                      їхньому професіоналізму та ефективності, мій рейтинг
                      значно зрос і я досягла нових висот у грі Dota 2.
                      Рекомендую цей сервіс!
                    </p>

                    <div class="clients-slider-item-information">
                      <p class="clients-slider-item-information-number">
                        №3213211123
                      </p>

                      <p class="clients-slider-item-information-date">
                        26.04.2023
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="clients-slider-item">
                    <div class="clients-slider-item-header">
                      <h3 class="clients-slider-item-header-title">Буст MMR</h3>

                      <div class="stars-level">
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star.svg"
                        />
                      </div>
                    </div>
                    <p class="clients-slider-item-description">
                      Дуже задоволена послугою прокачки MMR у DotaBoost! Завдяки
                      їхньому професіоналізму та ефективності, мій рейтинг
                      значно зрос і я досягла нових висот у грі Dota 2.
                      Рекомендую цей сервіс!
                    </p>

                    <div class="clients-slider-item-information">
                      <p class="clients-slider-item-information-number">
                        №3213211123
                      </p>

                      <p class="clients-slider-item-information-date">
                        26.04.2023
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="clients-slider-item">
                    <div class="clients-slider-item-header">
                      <h3 class="clients-slider-item-header-title">Буст MMR</h3>

                      <div class="stars-level">
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star.svg"
                        />
                      </div>
                    </div>
                    <p class="clients-slider-item-description">
                      Дуже задоволена послугою прокачки MMR у DotaBoost! Завдяки
                      їхньому професіоналізму та ефективності, мій рейтинг
                      значно зрос і я досягла нових висот у грі Dota 2.
                      Рекомендую цей сервіс!
                    </p>

                    <div class="clients-slider-item-information">
                      <p class="clients-slider-item-information-number">
                        №3213211123
                      </p>

                      <p class="clients-slider-item-information-date">
                        26.04.2023
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="clients-slider-item">
                    <div class="clients-slider-item-header">
                      <h3 class="clients-slider-item-header-title">Буст MMR</h3>

                      <div class="stars-level">
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star.svg"
                        />
                      </div>
                    </div>
                    <p class="clients-slider-item-description">
                      Дуже задоволена послугою прокачки MMR у DotaBoost! Завдяки
                      їхньому професіоналізму та ефективності, мій рейтинг
                      значно зрос і я досягла нових висот у грі Dota 2.
                      Рекомендую цей сервіс!
                    </p>

                    <div class="clients-slider-item-information">
                      <p class="clients-slider-item-information-number">
                        №3213211123
                      </p>

                      <p class="clients-slider-item-information-date">
                        26.04.2023
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="clients-slider-item">
                    <div class="clients-slider-item-header">
                      <h3 class="clients-slider-item-header-title">Буст MMR</h3>

                      <div class="stars-level">
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star.svg"
                        />
                      </div>
                    </div>
                    <p class="clients-slider-item-description">
                      Дуже задоволена послугою прокачки MMR у DotaBoost! Завдяки
                      їхньому професіоналізму та ефективності, мій рейтинг
                      значно зрос і я досягла нових висот у грі Dota 2.
                      Рекомендую цей сервіс!
                    </p>

                    <div class="clients-slider-item-information">
                      <p class="clients-slider-item-information-number">
                        №3213211123
                      </p>

                      <p class="clients-slider-item-information-date">
                        26.04.2023
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="clients-slider-item">
                    <div class="clients-slider-item-header">
                      <h3 class="clients-slider-item-header-title">Буст MMR</h3>

                      <div class="stars-level">
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star.svg"
                        />
                      </div>
                    </div>
                    <p class="clients-slider-item-description">
                      Дуже задоволена послугою прокачки MMR у DotaBoost! Завдяки
                      їхньому професіоналізму та ефективності, мій рейтинг
                      значно зрос і я досягла нових висот у грі Dota 2.
                      Рекомендую цей сервіс!
                    </p>

                    <div class="clients-slider-item-information">
                      <p class="clients-slider-item-information-number">
                        №3213211123
                      </p>

                      <p class="clients-slider-item-information-date">
                        26.04.2023
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="clients-slider-item">
                    <div class="clients-slider-item-header">
                      <h3 class="clients-slider-item-header-title">Буст MMR</h3>

                      <div class="stars-level">
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star.svg"
                        />
                      </div>
                    </div>
                    <p class="clients-slider-item-description">
                      Дуже задоволена послугою прокачки MMR у DotaBoost! Завдяки
                      їхньому професіоналізму та ефективності, мій рейтинг
                      значно зрос і я досягла нових висот у грі Dota 2.
                      Рекомендую цей сервіс!
                    </p>

                    <div class="clients-slider-item-information">
                      <p class="clients-slider-item-information-number">
                        №3213211123
                      </p>

                      <p class="clients-slider-item-information-date">
                        26.04.2023
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="clients-slider-item">
                    <div class="clients-slider-item-header">
                      <h3 class="clients-slider-item-header-title">Буст MMR</h3>

                      <div class="stars-level">
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star-active.svg"
                        />
                        <img
                          class="stars-level-icon"
                          src="./images/icons/star.svg"
                        />
                      </div>
                    </div>
                    <p class="clients-slider-item-description">
                      Дуже задоволена послугою прокачки MMR у DotaBoost! Завдяки
                      їхньому професіоналізму та ефективності, мій рейтинг
                      значно зрос і я досягла нових висот у грі Dota 2.
                      Рекомендую цей сервіс!
                    </p>

                    <div class="clients-slider-item-information">
                      <p class="clients-slider-item-information-number">
                        №3213211123
                      </p>

                      <p class="clients-slider-item-information-date">
                        26.04.2023
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="clients-testing">
            <div class="clients-testing__content">
              <h3 class="clients-testing__content-title">
                Хочеш перевірити замовлення та відгук ?
              </h3>
              <p class="clients-testing__content-desc">
                Ми надаємо повністю прозору стрічку замовлень, ви можете
                перевірити будь-яке замовлення маючи його номер. Ви маєте
                можливість поділиться вашими враженнями від нашого сервісу після
                завершення виконання замовлення бустером.
              </p>
            </div>

            <button class="clients-testing__button">
              <img
                class="clients-testing__button-icon"
                src="./images/icons/accept.svg"
              />
              Перевірити Замовлення
            </button>
          </div>

          <div class="clients-decor">
            <img class="clients-decor-img" src="./images/icons/bg_guides.svg" />
            <div class="clients-decor-blur"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- !Clients -->

    <!-- About -->

    <section class="about">
      <div class="second-container">
        <div class="about-block">
          <h2 class="about-title">Про GameBoost</h2>

          <div class="about-content">
            <div class="about-content__block">
              <div class="about-content__block-item">
                <h3 class="about-content__block-item-title">
                    {{ $content->title1 ?? 'Text...' }}
                  <span class="about-content__block-item-title-span"
                    >{{ $content->subtitle1 ?? 'Text...' }}</span
                  >
                </h3>
                <p class="about-content__block-item-description">
                    {{ $content->content1 ?? 'Text...' }}
                </p>
              </div>
                <div class="about-content__block-item">
                    <h3 class="about-content__block-item-title">
                        {{ $content->title2 ?? 'Text...' }}
                        <span class="about-content__block-item-title-span"
                        >{{ $content->subtitle2 ?? 'Text...' }}</span
                        >
                    </h3>
                    <p class="about-content__block-item-description">
                        {{ $content->content2 ?? 'Text...' }}
                    </p>
                </div>
                <div class="about-content__block-item">
                    <h3 class="about-content__block-item-title">
                        {{ $content->title3 ?? 'Text...' }}
                        <span class="about-content__block-item-title-span"
                        >{{ $content->subtitle3 ?? 'Text...' }}</span
                        >
                    </h3>
                    <p class="about-content__block-item-description">
                        {{ $content->content3 ?? 'Text...' }}
                    </p>
                </div>
            </div>
            <div class="about-content__image">
              <img
                class="about-content__image-img"
                src="{{asset('images/bg_about.png')}}"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- !About -->

    <!-- Advantages -->
    <section class="advantages">
      <div class="second-container">
        <div class="advantages-block">
          <h2 class="advantages-title">
            Піднімай ММР разом
            <span class="advantages-title-span"> з особистим скілом </span>
          </h2>

          <div class="advantages-content">
            <div class="advantages-content__image">
              <img
                class="advantages-content__image-img"
                src="{{asset('images/bg_advantages.png')}}"
              />
            </div>

            <div class="advantages-content__block">
              <div class="advantages-content__block-item">
                <h3 class="advantages-content__block-item-title">
                    {{ $content->title4 ?? 'Text...' }}
                </h3>
                <p class="advantages-content__block-item-description">
                    {{ $content->content4 ?? 'Text...' }}
                </p>
              </div>
              <div class="advantages-content__block-item">
                <h3 class="advantages-content__block-item-title">
                    {{ $content->title5 ?? 'Text...' }}
                </h3>
                <p class="advantages-content__block-item-description">
                    {{ $content->content5 ?? 'Text...' }}
                </p>
              </div>
              <div class="advantages-content__block-item">
                <h3 class="advantages-content__block-item-title">
                    {{ $content->title6 ?? 'Text...' }}
                </h3>
                <p class="advantages-content__block-item-description">
                    {{ $content->content6 ?? 'Text...' }}
                </p>
              </div>

              <a class="advantages-content__block-button"
                >Замовити Менторство</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- !Advantages -->

    <!-- Blog -->
    <section class="blog">
      <div class="second-container">
        <div class="blog-block">
          <div class="blog-header">
            <h2 class="blog-header-title">Блог</h2>

            <a class="blog-header-button" href="{{url('/blog')}}">
              <img
                class="blog-header-button-icon"
                src="{{asset('images/icons/arrow.svg')}}"
                alt="blog-icon"
              />
            </a>
          </div>

            <ul class="blog-list">
                @php $count = 0; @endphp
                @foreach($posts as $relatedPost)
                    @if($count < 6)
                        <li class="blog-item">
                            <a class="blog-link" href="{{ route('blog.show', ['id' => $relatedPost->id]) }}">
                                <div class="blog-link-block">
                                    <div class="blog-link-info">
                                        <p class="blog-link-date">{{$relatedPost->created_at}}</p>
                                        <p class="blog-link-title">
                                            {{$relatedPost->title}}
                                        </p>
                                    </div>

                                    <div class="blog-link-hidden">
                                        <div class="blog-link-hidden-line"></div>
                                        <p class="blog-link-hidden-text">
                                            {{$relatedPost->content}}
                                        </p>
                                    </div>
                                </div>

                                @if(isset($relatedPost->image))
                                    <img class="blog-link-img" src="{{ asset('storage/' . $relatedPost->image) }}" />
                                @else
                                    <img class="blog-link-img" src="{{ asset('images/blog/blog-1.png') }}" />
                                @endif

                            </a>
                        </li>
                        @php $count++; @endphp
                    @endif

                @endforeach



            </ul>
        </div>
      </div>
    </section>

    <!-- !Blog -->

    <!-- Faq -->
    <section class="faq">
      <div class="second-container">
        <div class="faq-block">
          <h2 class="faq-title">FAQ</h2>

          <div class="faq-list">
              @foreach($faqs as $faq)
            <div class="faq-item">
              <button class="faq-item-button">
                  {{$faq->title}}
                <img
                  class="faq-item-button-icon"
                  alt="faq-item-icon"
                  src="{{asset('images/icons/arrow.svg')}}"
                />
              </button>

              <div class="faq-item-content">
                <p class="faq-item-content-text">
                    {{$faq->content}}
                </p>
              </div>
            </div>
              @endforeach
          </div>
        </div>
      </div>
    </section>

    <!-- Faq -->

    <!-- Footer -->

    <footer class="footer">
      <div class="second-container">
        <div class="footer-block">
          <div class="footer-content">
            <div class="footer-content__settings">
              <a class="footer-content__settings-logo" href="{{url('/')}}">
                <img
                  class="footer-content__settings-logo-icon"
                  src="{{asset('images/icons/logo.svg')}}"
                  alt="logo-footer"
                />
              </a>

              <div class="footer-content__settings-security">
                <a class="footer-content__settings-security-button">
                  <img
                    class="footer-content__settings-security-button-icon"
                    alt="security"
                    src="{{asset('images/icons/security.svg')}}"
                  />
                </a>
              </div>

              <div class="footer-content__settings-award">
                <a class="footer-content__settings-award-button">
                  <img
                    class="footer-content__settings-award-button-icon"
                    alt="award"
                    src="{{asset('images/icons/award_star.svg')}}"
                  />
                </a>
              </div>

              <div class="footer-content__settings-lang">
                <button class="footer-content__settings-lang-button">
                  <img
                    class="footer-content__settings-lang-button-icon"
                    alt="lang"
                    src="{{asset('images/icons/ua.svg')}}"
                  />
                </button>

                <div class="footer-content__settings-lang-button-selected">
                  <button class="footer-content__settings-lang-button">
                    <img
                      class="footer-content__settings-lang-button-icon"
                      alt="lang"
                      src="{{asset('images/icons/pl.svg')}}"
                    />
                  </button>
                  <button class="footer-content__settings-lang-button">
                    <img
                      class="footer-content__settings-lang-button-icon"
                      alt="lang"
                      src="{{asset('images/icons/us.svg')}}"
                    />
                  </button>
                  <button class="footer-content__settings-lang-button">
                    <img
                      class="footer-content__settings-lang-button-icon"
                      alt="lang"
                      src="{{asset('images/icons/ru.svg')}}"
                    />
                  </button>
                </div>
              </div>
            </div>

            <div class="footer-content__company">
              <p class="footer-content__company-title">{{__('Компанія')}}</p>
              <ul class="footer-content__company-menu">
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link">{{__('Послуги')}}</a>
                </li>
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link" href="{{url('/about')}}">{{__('Про Нас')}}</a>
                </li>
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link" href="{{url('/work')}}">{{__('Робота')}}</a>
                </li>
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link" href="{{url('/blog')}}">{{__('Блог')}}</a>
                </li>
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link" href="{{url('/faq')}}}">{{__('FAQ')}}</a>
                </li>
              </ul>
            </div>
            <div class="footer-content__policy">
              <p class="footer-content__policy-title">{{__('Правові')}}</p>
              <ul class="footer-content__policy-menu">
                <li class="footer-content__policy-item">
                  <a class="footer-content__policy-link"
                    >{{__('Політика Конфіденційності')}}</a
                  >
                </li>
                <li class="footer-content__policy-item">
                  <a class="footer-content__policy-link">{{__('Публічна Оферта')}}</a>
                </li>
              </ul>
            </div>
            <div class="footer-content__contacts">
              <p class="footer-content__contacts-title">{{__('Контакти')}}</p>
              <ul class="footer-content__contacts-menu">
                <li class="footer-content__contacts-item">
                  <a class="footer-content__contacts-link">{{__('Зв’язок з нами')}}</a>
                </li>
                <li class="footer-content__contacts-item">
                  <a class="footer-content__contacts-link">{{__('Telegram')}}</a>
                </li>
                <li class="footer-content__contacts-item">
                  <a class="footer-content__contacts-link">{{__('Instagram')}}</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="footer-payment">
            <img
              class="footer-payment-icon"
              src="{{asset('images/icons/Visa.svg')}}"
              alt="payment"
            />
            <img
              class="footer-payment-icon"
              src="{{asset('images/icons/MasterCard.svg')}}"
              alt="payment"
            />
            <img
              class="footer-payment-icon"
              src="{{asset('images/icons/APay.svg')}}"
              alt="payment"
            />
            <img
              class="footer-payment-icon"
              src="{{asset('images/icons/GPay.svg')}}"
              alt="payment"
            />
          </div>

          <div class="footer-by">
            <p class="footer-by-text">
                {{__(" Dota 2 є зареєстрованою торговою маркою компанії Valve
                Corporation. Ми не пов'язані з компанією Valve Corporation, не
                асоційовані з нею і не підтримуємо її. GameBoost не відображає
                погляди чи думки Valve Corporation.")}}
            </p>
            <p class="footer-by-text">{{__('Всі права захищені ©GAMEBOOST 2023')}}</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- !Footer -->

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/nouislider"></script>

    <script src="{{asset('js/range-two-calculator.js')}}"></script>
    <script src="{{asset('js/clients.js')}}"></script>
    <script src="{{asset('js/faq.js')}}"></script>
    <script src="{{asset('js/hero-slider.js')}}"></script>
    <script src="{{asset('js/calculator.js')}}"></script>

  </body>
</html>
