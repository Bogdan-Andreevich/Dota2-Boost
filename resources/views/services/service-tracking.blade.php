<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service Tracking</title>
    <link rel="stylesheet" href="{{asset('styles/main.css')}}" />
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
                                src="{{asset('images/icons/logo.svg')}}"
                                alt="logo"
                            />
                        </a>
                        <div class="header-navigation__logo-game">
                            <button class="header-navigation__logo-game-react">
                                <img
                                    class="header-navigation__logo-game-react-decor"
                                    src="{{asset('images/icons/dota2.svg')}}"
                                    alt="dota2"
                                />
                                Dota 2
                                <img
                                    class="header-navigation__logo-game-react-icon"
                                    src="{{asset('images/icons/arrow.svg')}}"
                                    alt="arrow"
                                />
                            </button>

                            <div class="header-navigation__logo-game-selected">
                                <button class="header-navigation__logo-game-selected-button">
                                    <img
                                        class="header-navigation__logo-game-react-decor"
                                        src="{{asset('images/icons/dota2.svg')}}"
                                        alt="dota2"
                                    />
                                    Dota 2
                                </button>
                            </div>
                        </div>
                    </div>


                    <ul class="header-navigation__menu">
                        <li class="header-navigation__menu-item">
                            <a href="{{url('/')}}" class="header-navigation__menu-link"> DotaBoost </a>
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
                                Блог
                            </a>
                        </li>
                        <li class="header-navigation__menu-item">
                            <a href="{{url('/FAQ')}}" class="header-navigation__menu-link"> FAQ </a>
                        </li>
                    </ul>

                    <div class="header-navigation__profile">
                        <div class="header-navigation__profile-info">
                            @auth
                                <div class="header-navigation__profile-info-block">
                                    <img
                                        class="header-navigation__profile-info-image"
                                        alt="profile"
                                        src="{{ Auth::user()->avatar ?? asset('images/profile-image.png') }}"
                                    />
                                    <p class="header-navigation__profile-info-name">{{ Auth::user()->name}}</p>
                                    <button class="header-navigation__profile-info-notification">
                                        <img
                                            class="header-navigation__profile-info-notification-icon"
                                            alt="profile-icon"
                                            src="{{asset('images/icons/notifications.svg')}}"
                                        />
                                    </button>
                                    @else
                                        <div class="header-navigation__profile">
                                            <a class="header-navigation__profile-button" href="{{ route('register') }}">
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

    <section class="service-boost">
      <div class="second-container">
        <div class="service-boost-head">
          <div class="service-boost-head-path">
            <p class="service-boost-head-path-text">{{__('Послуги')}}</p>
            <div class="service-boost-head-path-decor"></div>
            <p class="service-boost-head-path-text">{{__('Моніторинг Замовлень')}}</p>
          </div>

          <div class="service-boost-head-titles">
            <h1 class="service-boost-head-titles-title">
                {{__('Відстежуй Замовлення з будь якого пристрою')}}
            </h1>

            <div class="service-boost-head-titles-notification"></div>
          </div>
        </div>
        <div class="service-boost-block">
          <div class="service-boost-tracking">
            <div class="service-boost-tracking-head">
              <div class="service-boost-tracking-head-item">
                <h2 class="service-boost-tracking-head-item-title">
                    {{__('Пошук по номеру замовлення')}}
                </h2>
                <p class="service-boost-tracking-head-item-desc">
                    {{__(' Відстежуйте замовлення з легкістю: прозора система моніторингу
                    процесу буста у режимі реального часу!')}}
                </p>
              </div>
              <div class="service-boost-tracking-head-line"></div>
              <div class="service-boost-tracking-head-item">
                <h2 class="service-boost-tracking-head-item-title">
                    {{__('Останні Активності по Замовленням')}}
                </h2>
                <p class="service-boost-tracking-head-item-desc">
                    {{__(' Спостерігайте за успіхами наших бустерів: останні результати
                    матчів від команди професіоналів!')}}
                </p>
              </div>
            </div>
            <div class="service-boost-tracking-info">
              <div class="profile-booster-history-orders">
                <div class="service-boost-tracking-info-search">
                  <label class="service-boost-tracking-info-search-label">
                    <input
                      class="service-boost-tracking-info-search-label-input"
                      placeholder="Номер Замовлення"
                    />
                    <button
                      class="service-boost-tracking-info-search-label-button"
                    >
                      <img
                        class="service-boost-tracking-info-search-label-button-icon"
                        src="{{asset('images/icons/arrow-black.svg')}}"
                      />
                    </button>
                  </label>

                  <div class="service-boost-tracking-info-search-activity">
                    <button
                      class="service-boost-tracking-info-search-activity-active active"
                    >
                        {{__('Активні')}}
                    </button>
                    <button
                      class="service-boost-tracking-info-search-activity-out"
                    >
                        {{__('Виконані')}}
                    </button>
                  </div>
                </div>

                <ul class="profile-booster-history-orders-list">
                  <li class="cabinet-information__order-item">
                    <div class="cabinet-information__order-info-work">
                      <div class="cabinet-information__order-info-work-id">
                        <p class="cabinet-information__order-info-work-id-text">
                          №
                        </p>
                        <p
                          class="cabinet-information__order-info-work-id-value"
                        >
                          3213211123
                        </p>
                      </div>

                      <div class="cabinet-information__order-info-work-date">
                        <img
                          class="cabinet-information__order-info-work-date-icon"
                          src="{{asset('images/icons/schedule.svg')}}"
                          alt="time"
                        />

                        <p
                          class="cabinet-information__order-info-work-date-value"
                        >
                          11:01:48
                        </p>
                      </div>

                      <div class="cabinet-information__order-info-work-percent">
                        <img
                          class="cabinet-information__order-info-work-percent-icon"
                          src="{{asset('images/icons/percent.svg')}}"
                          alt="percent"
                        />

                        <p
                          class="cabinet-information__order-info-work-percent-value"
                        >
                          56%
                        </p>
                        <div
                          class="cabinet-information__order-info-work-percent-loading"
                        ></div>
                      </div>
                    </div>

                    <div class="cabinet-information__order-show-work">
                      <div class="cabinet-information__order-show-work-block">
                        <div
                          class="cabinet-information__order-show-work-content"
                        >
                          <div
                            class="cabinet-information__order-show-work-content-status"
                          >
                            <div
                              class="cabinet-information__order-show-work-content-status-decor"
                            ></div>
                            <div
                              class="cabinet-information__order-show-work-content-status-text"
                            >
                                {{__('В Роботі')}}
                            </div>
                          </div>

                          <h3
                            class="cabinet-information__order-show-work-content-title"
                          >
                              {{__('MMR Boost')}}
                          </h3>
                          <p
                            class="cabinet-information__order-show-work-content-number"
                          >
                            1250 - 3270
                          </p>
                        </div>
                      </div>
                      <div class="cabinet-information__order-show-work-server">
                        <button
                          class="cabinet-information__order-show-work-server-button"
                        >
                            {{__('Бан Часу')}}
                        </button>
                        <button
                          class="cabinet-information__order-show-work-server-button"
                        >
                            {{__('Турбо Режим')}}
                        </button>
                        <button
                          class="cabinet-information__order-show-work-server-button"
                        >
                            {{__('Офлайн Режим')}}
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="cabinet-information__order-item">
                    <div class="cabinet-information__order-info-work">
                      <div class="cabinet-information__order-info-work-id">
                        <p class="cabinet-information__order-info-work-id-text">
                          №
                        </p>
                        <p
                          class="cabinet-information__order-info-work-id-value"
                        >
                          3213211123
                        </p>
                      </div>

                      <div class="cabinet-information__order-info-work-date">
                        <img
                          class="cabinet-information__order-info-work-date-icon"
                          src="{{asset('images/icons/schedule.svg')}}"
                          alt="time"
                        />

                        <p
                          class="cabinet-information__order-info-work-date-value"
                        >
                          11:01:48
                        </p>
                      </div>

                      <div class="cabinet-information__order-info-work-percent">
                        <img
                          class="cabinet-information__order-info-work-percent-icon"
                          src="{{asset('images/icons/percent.svg')}}"
                          alt="percent"
                        />

                        <p
                          class="cabinet-information__order-info-work-percent-value"
                        >
                          56%
                        </p>
                        <div
                          class="cabinet-information__order-info-work-percent-loading"
                        ></div>
                      </div>
                    </div>

                    <div class="cabinet-information__order-show-work">
                      <div class="cabinet-information__order-show-work-block">
                        <div
                          class="cabinet-information__order-show-work-content"
                        >
                          <div
                            class="cabinet-information__order-show-work-content-status"
                          >
                            <div
                              class="cabinet-information__order-show-work-content-status-decor"
                            ></div>
                            <div
                              class="cabinet-information__order-show-work-content-status-text"
                            >
                                {{__('В Роботі')}}
                            </div>
                          </div>

                          <h3
                            class="cabinet-information__order-show-work-content-title"
                          >
                              {{__('MMR Boost')}}
                          </h3>
                          <p
                            class="cabinet-information__order-show-work-content-number"
                          >
                            1250 - 3270
                          </p>
                        </div>
                      </div>
                      <div class="cabinet-information__order-show-work-server">
                        <button
                          class="cabinet-information__order-show-work-server-button"
                        >
                            {{__('Бан Часу')}}
                        </button>
                        <button
                          class="cabinet-information__order-show-work-server-button"
                        >
                            {{__('Турбо Режим')}}
                        </button>
                        <button
                          class="cabinet-information__order-show-work-server-button"
                        >
                            {{__('Офлайн Режим')}}
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="cabinet-information__order-item">
                    <div class="cabinet-information__order-info-work">
                      <div class="cabinet-information__order-info-work-id">
                        <p class="cabinet-information__order-info-work-id-text">
                          №
                        </p>
                        <p
                          class="cabinet-information__order-info-work-id-value"
                        >
                          3213211123
                        </p>
                      </div>

                      <div class="cabinet-information__order-info-work-date">
                        <img
                          class="cabinet-information__order-info-work-date-icon"
                          src="{{asset('images/icons/schedule.svg')}}"
                          alt="time"
                        />

                        <p
                          class="cabinet-information__order-info-work-date-value"
                        >
                          11:01:48
                        </p>
                      </div>

                      <div class="cabinet-information__order-info-work-percent">
                        <img
                          class="cabinet-information__order-info-work-percent-icon"
                          src="{{asset('images/icons/percent.svg')}}"
                          alt="percent"
                        />

                        <p
                          class="cabinet-information__order-info-work-percent-value"
                        >
                          56%
                        </p>
                        <div
                          class="cabinet-information__order-info-work-percent-loading"
                        ></div>
                      </div>
                    </div>

                    <div class="cabinet-information__order-show-work">
                      <div class="cabinet-information__order-show-work-block">
                        <div
                          class="cabinet-information__order-show-work-content"
                        >
                          <div
                            class="cabinet-information__order-show-work-content-status"
                          >
                            <div
                              class="cabinet-information__order-show-work-content-status-decor"
                            ></div>
                            <div
                              class="cabinet-information__order-show-work-content-status-text"
                            >
                                {{__(' В Роботі')}}
                            </div>
                          </div>

                          <h3
                            class="cabinet-information__order-show-work-content-title"
                          >
                              {{__('MMR Boost')}}
                          </h3>
                          <p
                            class="cabinet-information__order-show-work-content-number"
                          >
                            1250 - 3270
                          </p>
                        </div>
                      </div>
                      <div class="cabinet-information__order-show-work-server">
                        <button
                          class="cabinet-information__order-show-work-server-button"
                        >
                            {{__('Бан Часу')}}
                        </button>
                        <button
                          class="cabinet-information__order-show-work-server-button"
                        >
                            {{__('Турбо Режим')}}
                        </button>
                        <button
                          class="cabinet-information__order-show-work-server-button"
                        >
                            {{__('Офлайн Режим')}}
                        </button>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="profile-booster-history-matches">
                <div class="profile-booster-history-matches-mobile">
                  <div class="service-boost-tracking-head-item">
                    <h2 class="service-boost-tracking-head-item-title">
                        {{__('Останні Активності по Замовленням')}}
                    </h2>
                    <p class="service-boost-tracking-head-item-desc">
                        {{__(' Спостерігайте за успіхами наших бустерів: останні
                        результати матчів від команди професіоналів!')}}
                    </p>
                  </div>
                </div>
                <ul class="profile-booster-history-matches-list">
                  <li class="cabinet-information__history-item">
                    <div class="cabinet-information__history-info">
                      <button class="cabinet-information__history-info-button">
                        <img
                          class="cabinet-information__history-info-button-icon"
                          alt="open-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>

                      <div class="cabinet-information__history-info-id">
                        <p class="cabinet-information__history-info-id-text">
                          id
                        </p>
                        <p class="cabinet-information__history-info-id-value">
                          7214733882
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-date">
                        <p class="cabinet-information__history-info-date-text">
                            {{__('Час')}}
                        </p>
                        <p class="cabinet-information__history-info-date-value">
                            3 год. тому
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-status">
                        <p
                          class="cabinet-information__history-info-status-text"
                        >
                          W
                        </p>
                        <p
                          class="cabinet-information__history-info-status-value"
                        >
                          +25 MMR
                        </p>
                      </div>
                    </div>

                    <div class="cabinet-information__history-show">
                      <img
                        class="cabinet-information__history-show-image"
                        src="{{asset('images/icons/icon_hero.svg')}}"
                      />

                      <div class="cabinet-information__history-show-block">
                        <p class="cabinet-information__history-show-name">
                          Ember Spirit
                        </p>
                        <p class="cabinet-information__history-show-date">
                          21/1/16
                        </p>
                      </div>
                    </div>
                  </li>
                  <li class="cabinet-information__history-item">
                    <div class="cabinet-information__history-info">
                      <button class="cabinet-information__history-info-button">
                        <img
                          class="cabinet-information__history-info-button-icon"
                          alt="open-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>

                      <div class="cabinet-information__history-info-id">
                        <p class="cabinet-information__history-info-id-text">
                          id
                        </p>
                        <p class="cabinet-information__history-info-id-value">
                          7214733882
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-date">
                        <p class="cabinet-information__history-info-date-text">
                          Час
                        </p>
                        <p class="cabinet-information__history-info-date-value">
                          3 год. тому
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-status">
                        <p
                          class="cabinet-information__history-info-status-text"
                        >
                          W
                        </p>
                        <p
                          class="cabinet-information__history-info-status-value"
                        >
                          +25 MMR
                        </p>
                      </div>
                    </div>

                    <div class="cabinet-information__history-show">
                      <img
                        class="cabinet-information__history-show-image"
                        src="{{asset('images/icons/icon_hero.svg')}}"
                      />

                      <div class="cabinet-information__history-show-block">
                        <p class="cabinet-information__history-show-name">
                          Ember Spirit
                        </p>
                        <p class="cabinet-information__history-show-date">
                          21/1/16
                        </p>
                      </div>
                    </div>
                  </li>
                  <li class="cabinet-information__history-item">
                    <div class="cabinet-information__history-info">
                      <button class="cabinet-information__history-info-button">
                        <img
                          class="cabinet-information__history-info-button-icon"
                          alt="open-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>

                      <div class="cabinet-information__history-info-id">
                        <p class="cabinet-information__history-info-id-text">
                          id
                        </p>
                        <p class="cabinet-information__history-info-id-value">
                          7214733882
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-date">
                        <p class="cabinet-information__history-info-date-text">
                          Час
                        </p>
                        <p class="cabinet-information__history-info-date-value">
                          3 год. тому
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-status">
                        <p
                          class="cabinet-information__history-info-status-text"
                        >
                          W
                        </p>
                        <p
                          class="cabinet-information__history-info-status-value"
                        >
                          +25 MMR
                        </p>
                      </div>
                    </div>

                    <div class="cabinet-information__history-show">
                      <img
                        class="cabinet-information__history-show-image"
                        src="{{asset('images/icons/icon_hero.svg')}}"
                      />

                      <div class="cabinet-information__history-show-block">
                        <p class="cabinet-information__history-show-name">
                          Ember Spirit
                        </p>
                        <p class="cabinet-information__history-show-date">
                          21/1/16
                        </p>
                      </div>
                    </div>
                  </li>
                  <li class="cabinet-information__history-item">
                    <div class="cabinet-information__history-info">
                      <button class="cabinet-information__history-info-button">
                        <img
                          class="cabinet-information__history-info-button-icon"
                          alt="open-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>

                      <div class="cabinet-information__history-info-id">
                        <p class="cabinet-information__history-info-id-text">
                          id
                        </p>
                        <p class="cabinet-information__history-info-id-value">
                          7214733882
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-date">
                        <p class="cabinet-information__history-info-date-text">
                          Час
                        </p>
                        <p class="cabinet-information__history-info-date-value">
                          3 год. тому
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-status">
                        <p
                          class="cabinet-information__history-info-status-text"
                        >
                          W
                        </p>
                        <p
                          class="cabinet-information__history-info-status-value"
                        >
                          +25 MMR
                        </p>
                      </div>
                    </div>

                    <div class="cabinet-information__history-show">
                      <img
                        class="cabinet-information__history-show-image"
                        src="{{asset('images/icons/icon_hero.svg')}}"
                      />

                      <div class="cabinet-information__history-show-block">
                        <p class="cabinet-information__history-show-name">
                          Ember Spirit
                        </p>
                        <p class="cabinet-information__history-show-date">
                          21/1/16
                        </p>
                      </div>
                    </div>
                  </li>
                  <li class="cabinet-information__history-item">
                    <div class="cabinet-information__history-info">
                      <button class="cabinet-information__history-info-button">
                        <img
                          class="cabinet-information__history-info-button-icon"
                          alt="open-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>

                      <div class="cabinet-information__history-info-id">
                        <p class="cabinet-information__history-info-id-text">
                          id
                        </p>
                        <p class="cabinet-information__history-info-id-value">
                          7214733882
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-date">
                        <p class="cabinet-information__history-info-date-text">
                          Час
                        </p>
                        <p class="cabinet-information__history-info-date-value">
                          3 год. тому
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-status">
                        <p
                          class="cabinet-information__history-info-status-text"
                        >
                          W
                        </p>
                        <p
                          class="cabinet-information__history-info-status-value"
                        >
                          +25 MMR
                        </p>
                      </div>
                    </div>

                    <div class="cabinet-information__history-show">
                      <img
                        class="cabinet-information__history-show-image"
                        src="{{asset('images/icons/icon_hero.svg')}}"
                      />

                      <div class="cabinet-information__history-show-block">
                        <p class="cabinet-information__history-show-name">
                          Ember Spirit
                        </p>
                        <p class="cabinet-information__history-show-date">
                          21/1/16
                        </p>
                      </div>
                    </div>
                  </li>
                  <li class="cabinet-information__history-item">
                    <div class="cabinet-information__history-info">
                      <button class="cabinet-information__history-info-button">
                        <img
                          class="cabinet-information__history-info-button-icon"
                          alt="open-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>

                      <div class="cabinet-information__history-info-id">
                        <p class="cabinet-information__history-info-id-text">
                          id
                        </p>
                        <p class="cabinet-information__history-info-id-value">
                          7214733882
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-date">
                        <p class="cabinet-information__history-info-date-text">
                          Час
                        </p>
                        <p class="cabinet-information__history-info-date-value">
                          3 год. тому
                        </p>
                      </div>

                      <div class="cabinet-information__history-info-status">
                        <p
                          class="cabinet-information__history-info-status-text"
                        >
                          W
                        </p>
                        <p
                          class="cabinet-information__history-info-status-value"
                        >
                          +25 MMR
                        </p>
                      </div>
                    </div>

                    <div class="cabinet-information__history-show">
                      <img
                        class="cabinet-information__history-show-image"
                        src="{{asset('images/icons/icon_hero.svg')}}"
                      />

                      <div class="cabinet-information__history-show-block">
                        <p class="cabinet-information__history-show-name">
                          Ember Spirit
                        </p>
                        <p class="cabinet-information__history-show-date">
                          21/1/16
                        </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
  </body>
</html>
