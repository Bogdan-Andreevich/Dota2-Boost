<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cabinet</title>
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
                              src="{{asset('images/icons/logo-2.svg')}}"
                              alt="logo"
                          />
                      </a>

                  </div>


                  <ul class="header-navigation__menu">
                      <li class="header-navigation__menu-item">
                          <a href="{{url('/preparation')}}" class="header-navigation__menu-link"> DotaBoost </a>
                      </li>
                      <li class="header-navigation__menu-item">
                          <a href="{{url('/service')}}" class="header-navigation__menu-link"> Послуги </a>
                      </li>
                      <li class="header-navigation__menu-item">
                          <a href="{{url('/about')}}" class="header-navigation__menu-link"> Про нас </a>
                      </li>
                      <li class="header-navigation__menu-item">
                          <a href="{{url('/work')}}" class="header-navigation__menu-link"> Робота </a>
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
                                      src="{{ e(Auth::user()->avatar ?? asset('images/profile-image.png')) }}"
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
                                              Профіль
                                          </a>
                                          <a class="header-navigation__profile-menu-button" href="{{url('/settings')}}">
                                              <img
                                                  class="header-navigation__profile-menu-button-icon"
                                                  src="{{asset('images/icons/settings-profile.svg')}}"
                                                  alt="icon-menu"
                                              />
                                              Налаштування
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

    <section class="cabinet">
      <div class="second-container">
        <div class="cabinet-block">
          <a href="{{url('/')}}" class="cabinet-back">
            <img
              class="cabinet-back-img"
              alt="cabinet-back"
              src="{{asset('images/icons/arrow.svg')}}"
            />
            Особистий кабінет
          </a>

          <div class="cabinet-control">
            <div class="cabinet-control__info">
              <img
                class="cabinet-control__info-image"
                alt="avatar"
                src="{{e(Auth::user()->avatar ?? asset('images/avatar.jpg'))}}"
              />
              <div class="cabinet-control__info-content">
                <h3 class="cabinet-control__info-content-name">{{e(Auth::user()->name)}}</h3>
                <p class="cabinet-control__info-content-email">
                    {{e(Auth::user()->email ?? 'example@gmail.com')}}
                </p>
                <button class="cabinet-control__info-content-id">
                  <img
                    class="cabinet-control__info-content-id-icon"
                    alt="copy-icon"
                    src="{{asset('images/icons/copy.svg')}}"
                  />
                  <p class="cabinet-control__info-content-id-text">
                      {{e(Auth::user()->id)}}
                  </p>
                </button>
              </div>
            </div>
            <div class="cabinet-control__navigation">
              <button class="cabinet-control__navigation-button">
                <img
                  class="cabinet-control__navigation-button-icon"
                  alt="navigation-button-icon"
                  src="{{asset('images/icons/settings-profile.svg')}}"
                />
                  {{__('Налаштування')}}
              </button>
              <button class="cabinet-control__navigation-button">
                <img
                  class="cabinet-control__navigation-button-icon"
                  alt="navigation-button-icon"
                  src="{{asset('images/icons/headset_mic.svg')}}"
                />
                Підтримка
              </button>
              <button class="cabinet-control__navigation-button">
                <img
                  class="cabinet-control__navigation-button-icon"
                  alt="navigation-button-icon"
                  src="./images/icons/add_circle.svg"
                />
                Нове Замовлення
              </button>
              <button class="cabinet-control__navigation-button">
                <img
                  class="cabinet-control__navigation-button-icon"
                  alt="navigation-button-icon"
                  src="./images/icons/notifications.svg"
                />
                Повідомлення
              </button>
              <button class="cabinet-control__navigation-button">
                <img
                  class="cabinet-control__navigation-button-icon"
                  alt="navigation-button-icon"
                  src="./images/icons/stadia_controller.svg"
                />
                Запуск Гри
              </button>
              <button class="cabinet-control__navigation-button">
                <img
                  class="cabinet-control__navigation-button-icon"
                  alt="navigation-button-icon"
                  src="./images/icons/logout.svg"
                />
                Вихід
              </button>
            </div>
          </div>

          <div class="cabinet-information">
            <div class="cabinet-information__order">
              <h3 class="cabinet-information__order-title">Замовлення</h3>

              <ul class="cabinet-information__order-list">
                <li class="cabinet-information__order-item">
                  <div class="cabinet-information__order-info-work">
                    <div class="cabinet-information__order-info-work-id">
                      <p class="cabinet-information__order-info-work-id-text">
                        №
                      </p>
                      <p class="cabinet-information__order-info-work-id-value">
                        3213211123
                      </p>
                    </div>

                    <div class="cabinet-information__order-info-work-date">
                      <img
                        class="cabinet-information__order-info-work-date-icon"
                        src="./images/icons/schedule.svg"
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
                        src="./images/icons/percent.svg"
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
                      <div class="cabinet-information__order-show-work-content">
                        <div
                          class="cabinet-information__order-show-work-content-status"
                        >
                          <div
                            class="cabinet-information__order-show-work-content-status-decor"
                          ></div>
                          <div
                            class="cabinet-information__order-show-work-content-status-text"
                          >
                            В Роботі
                          </div>
                        </div>

                        <h3
                          class="cabinet-information__order-show-work-content-title"
                        >
                          MMR Boost
                        </h3>
                        <p
                          class="cabinet-information__order-show-work-content-number"
                        >
                          1250 - 3270
                        </p>
                      </div>

                      <div
                        class="cabinet-information__order-show-work-content-navigation"
                      >
                        <button
                          class="cabinet-information__order-show-work-content-navigation-button"
                        >
                          <img
                            class="cabinet-information__order-show-work-content-navigation-button-icon"
                            src="./images/icons/repeat.svg"
                          />
                          <p
                            class="cabinet-information__order-show-work-content-navigation-button-text"
                          >
                            Повторити замовлення
                          </p>
                        </button>
                        <button
                          class="cabinet-information__order-show-work-content-navigation-button"
                        >
                          <img
                            class="cabinet-information__order-show-work-content-navigation-button-icon"
                            src="./images/icons/rate_review.svg"
                          />
                          <p
                            class="cabinet-information__order-show-work-content-navigation-button-text"
                          >
                            Залишити Відгук
                          </p>
                        </button>
                      </div>
                    </div>
                    <div class="cabinet-information__order-show-work-server">
                      <button
                        class="cabinet-information__order-show-work-server-button"
                      >
                        Бан Часу
                      </button>
                      <button
                        class="cabinet-information__order-show-work-server-button"
                      >
                        Турбо Режим
                      </button>
                      <button
                        class="cabinet-information__order-show-work-server-button"
                      >
                        Офлайн Режим
                      </button>
                    </div>
                  </div>
                </li>
                <li class="cabinet-information__order-item">
                  <div class="cabinet-information__order-info">
                    <button class="cabinet-information__order-info-button">
                      <img
                        class="cabinet-information__order-info-button-icon"
                        alt="open-button-icon"
                        src="./images/icons/arrow.svg"
                      />
                    </button>

                    <div class="cabinet-information__order-info-id">
                      <p class="cabinet-information__order-info-id-text">№</p>
                      <p class="cabinet-information__order-info-id-value">
                        3213211123
                      </p>
                    </div>

                    <div class="cabinet-information__order-info-date">
                      <img
                        class="cabinet-information__order-info-date-icon"
                        src="./images/icons/calendar_today.svg"
                        alt="calendar"
                      />

                      <p class="cabinet-information__order-info-date-value">
                        26.04.2023
                      </p>
                    </div>
                  </div>

                  <div class="cabinet-information__order-show">
                    <div class="cabinet-information__order-show-block">
                      <div class="cabinet-information__order-show-content">
                        <div
                          class="cabinet-information__order-show-content-status"
                        >
                          <div
                            class="cabinet-information__order-show-content-status-decor"
                          ></div>
                          <div
                            class="cabinet-information__order-show-content-status-text"
                          >
                            Виконано
                          </div>
                        </div>

                        <h3
                          class="cabinet-information__order-show-content-title"
                        >
                          MMR Boost
                        </h3>
                        <p
                          class="cabinet-information__order-show-content-number"
                        >
                          1250 - 3270
                        </p>
                      </div>

                      <div
                        class="cabinet-information__order-show-content-navigation"
                      >
                        <button
                          class="cabinet-information__order-show-content-navigation-button"
                        >
                          <img
                            class="cabinet-information__order-show-content-navigation-button-icon"
                            src="./images/icons/repeat.svg"
                          />
                          <p
                            class="cabinet-information__order-show-content-navigation-button-text"
                          >
                            Повторити замовлення
                          </p>
                        </button>
                        <button
                          class="cabinet-information__order-show-content-navigation-button"
                        >
                          <img
                            class="cabinet-information__order-show-content-navigation-button-icon"
                            src="./images/icons/rate_review.svg"
                          />
                          <p
                            class="cabinet-information__order-show-content-navigation-button-text"
                          >
                            Залишити Відгук
                          </p>
                        </button>
                      </div>
                    </div>
                    <div class="cabinet-information__order-show-server">
                      <button
                        class="cabinet-information__order-show-server-button"
                      >
                        Бан Часу
                      </button>
                      <button
                        class="cabinet-information__order-show-server-button"
                      >
                        Турбо Режим
                      </button>
                      <button
                        class="cabinet-information__order-show-server-button"
                      >
                        Офлайн Режим
                      </button>
                    </div>
                  </div>
                </li>
                <li class="cabinet-information__order-item">
                  <div class="cabinet-information__order-info">
                    <button class="cabinet-information__order-info-button">
                      <img
                        class="cabinet-information__order-info-button-icon"
                        alt="open-button-icon"
                        src="./images/icons/arrow.svg"
                      />
                    </button>

                    <div class="cabinet-information__order-info-id">
                      <p class="cabinet-information__order-info-id-text">№</p>
                      <p class="cabinet-information__order-info-id-value">
                        3213211123
                      </p>
                    </div>

                    <div class="cabinet-information__order-info-date">
                      <img
                        class="cabinet-information__order-info-date-icon"
                        src="./images/icons/calendar_today.svg"
                        alt="calendar"
                      />

                      <p class="cabinet-information__order-info-date-value">
                        26.04.2023
                      </p>
                    </div>
                  </div>

                  <div class="cabinet-information__order-show">
                    <div class="cabinet-information__order-show-block">
                      <div class="cabinet-information__order-show-content">
                        <div
                          class="cabinet-information__order-show-content-status"
                        >
                          <div
                            class="cabinet-information__order-show-content-status-decor"
                          ></div>
                          <div
                            class="cabinet-information__order-show-content-status-text"
                          >
                            Виконано
                          </div>
                        </div>

                        <h3
                          class="cabinet-information__order-show-content-title"
                        >
                          MMR Boost
                        </h3>
                        <p
                          class="cabinet-information__order-show-content-number"
                        >
                          1250 - 3270
                        </p>
                      </div>

                      <div
                        class="cabinet-information__order-show-content-navigation"
                      >
                        <button
                          class="cabinet-information__order-show-content-navigation-button"
                        >
                          <img
                            class="cabinet-information__order-show-content-navigation-button-icon"
                            src="./images/icons/repeat.svg"
                          />
                          <p
                            class="cabinet-information__order-show-content-navigation-button-text"
                          >
                            Повторити замовлення
                          </p>
                        </button>
                        <button
                          class="cabinet-information__order-show-content-navigation-button"
                        >
                          <img
                            class="cabinet-information__order-show-content-navigation-button-icon"
                            src="./images/icons/rate_review.svg"
                          />
                          <p
                            class="cabinet-information__order-show-content-navigation-button-text"
                          >
                            Залишити Відгук
                          </p>
                        </button>
                      </div>
                    </div>
                    <div class="cabinet-information__order-show-server">
                      <button
                        class="cabinet-information__order-show-server-button"
                      >
                        Бан Часу
                      </button>
                      <button
                        class="cabinet-information__order-show-server-button"
                      >
                        Турбо Режим
                      </button>
                      <button
                        class="cabinet-information__order-show-server-button"
                      >
                        Офлайн Режим
                      </button>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="cabinet-information__history">
              <h3 class="cabinet-information__history-title">Історія Матчів</h3>

              <ul class="cabinet-information__history-list">
                <li class="cabinet-information__history-item">
                  <div class="cabinet-information__history-info">
                    <button class="cabinet-information__history-info-button">
                      <img
                        class="cabinet-information__history-info-button-icon"
                        alt="open-button-icon"
                        src="./images/icons/arrow.svg"
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
                      <p class="cabinet-information__history-info-status-text">
                        W
                      </p>
                      <p class="cabinet-information__history-info-status-value">
                        +25 MMR
                      </p>
                    </div>
                  </div>

                  <div class="cabinet-information__history-show">
                    <img
                      class="cabinet-information__history-show-image"
                      src="./images/icons/icon_hero.svg"
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
                        src="./images/icons/arrow.svg"
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
                      <p class="cabinet-information__history-info-status-text">
                        W
                      </p>
                      <p class="cabinet-information__history-info-status-value">
                        +25 MMR
                      </p>
                    </div>
                  </div>

                  <div class="cabinet-information__history-show">
                    <img
                      class="cabinet-information__history-show-image"
                      src="./images/icons/icon_hero.svg"
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
                        src="./images/icons/arrow.svg"
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
                      <p class="cabinet-information__history-info-status-text">
                        W
                      </p>
                      <p class="cabinet-information__history-info-status-value">
                        +25 MMR
                      </p>
                    </div>
                  </div>

                  <div class="cabinet-information__history-show">
                    <img
                      class="cabinet-information__history-show-image"
                      src="./images/icons/icon_hero.svg"
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
                        src="./images/icons/arrow.svg"
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
                      <p class="cabinet-information__history-info-status-text">
                        W
                      </p>
                      <p class="cabinet-information__history-info-status-value">
                        +25 MMR
                      </p>
                    </div>
                  </div>

                  <div class="cabinet-information__history-show">
                    <img
                      class="cabinet-information__history-show-image"
                      src="./images/icons/icon_hero.svg"
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
    </section>

    <script src="{{asset('js/cabinet.js')}}"></script>
  </body>
</html>
