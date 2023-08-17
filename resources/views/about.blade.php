<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
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

    <section class="about-page">
      <div class="second-container">
        <div class="abount-page-block">
          <div class="about-page-head">
            <p class="about-page-head-span">Про нас</p>
            <h1 class="about-page-head-title">
                {{ $content->mainTitle ?? 'Text...' }}
            </h1>
          </div>

          <div class="about-page-lead">
            <div class="about-page-lead-block">
              <div class="about-page-lead-image">
                <img
                  class="about-page-lead-image-img"
                  src="{{asset('images/about/snapfire.png')}}"
                />
              </div>
              <div class="about-page-lead-content">
                <p class="about-page-lead-content-span">{{ $content->animalTitle ?? 'Text...' }}</p>
                <h2 class="about-page-lead-content-title">
                    {{ $content->animalSubtitle ?? 'Text...' }}
                </h2>
                <p class="about-page-lead-content-desc">
                    {{ $content->animalContent1 ?? 'Text...' }}
                </p>
                <p class="about-page-lead-content-desc">
                    {{ $content->animalContent2 ?? 'Text...' }}
                </p>
              </div>
            </div>
          </div>

          <div class="about-page-community">
            <div class="about-page-community-block">
              <div class="about-page-community-content">
                <p class="about-page-community-content-span">
                    {{ $content->courierTitle ?? 'Text...' }}
                </p>
                <h2 class="about-page-community-content-title">
                    {{ $content->courierSubtitle ?? 'Text...' }}
                </h2>
                <p class="about-page-community-content-desc">
                    {{ $content->courierContent ?? 'Text...' }}
                </p>
              </div>
              <div class="about-page-community-image">
                <img
                  class="about-page-community-image-img"
                  src="{{asset('images/about/courier.png')}}"
                />
              </div>
            </div>
          </div>

          <div class="about-page-process">
            <div class="about-page-process-block">
              <div class="about-page-process-flex">
                <div class="about-page-process-image">
                  <img
                    class="about-page-process-image-img"
                    src="{{asset('images/about/observer_ward.png')}}"
                  />
                </div>
                <div class="about-page-process-content">
                  <p class="about-page-process-content-span">
                      {{ $content->wardTitle ?? 'Text...' }}
                  </p>
                  <h2 class="about-page-process-content-title">
                      {{ $content->wardSubtitle ?? 'Text...' }}
                  </h2>
                  <p class="about-page-process-content-desc">
                      {{ $content->wardContent ?? 'Text...' }}
                  </p>
                </div>
              </div>
              <div class="about-page-process-check">
                <div class="about-page-process-check-content">
                  <h3 class="about-page-process-check-content-title">
                    Хочеш перевірити замовлення та відгук ?
                  </h3>
                  <p class="about-page-process-check-content-desc">
                    Ми надаємо повністю прозору стрічку замовлень, ви можете
                    перевірити будь-яке замовлення маючи його номер. Ви маєте
                    можливість поділиться вашими враженнями від нашого сервісу
                    після завершення виконання замовлення бустером.
                  </p>
                </div>

                <button class="about-page-process-check-button">
                  <img
                    class="about-page-process-check-button-icon"
                    src="{{asset('images/icons/accept.svg')}}"
                  />
                  Перевірити Замовлення
                </button>
              </div>
            </div>
          </div>

          <div class="about-page-team">
            <div class="about-page-team-block">
              <div class="about-page-team-content">
                <p class="about-page-team-content-span">{{ $content->techiesTitle1 ?? 'Text...' }}</p>
                <h2 class="about-page-team-content-title">
                    {{ $content->techiesSubtitle1 ?? 'Text...' }}
                </h2>
                <p class="about-page-team-content-desc">
                    {{ $content->techiesContent1 ?? 'Text...' }}
                </p>
                <p
                  class="about-page-team-content-span"
                  style="margin-top: 32px"
                >
                    {{ $content->techiesTitle2 ?? 'Text...' }}
                </p>
                <p class="about-page-team-content-desc">
                    {{ $content->techiesContent2 ?? 'Text...' }}
                </p>
              </div>
              <div class="about-page-team-image">
                <img
                  class="about-page-team-image-img"
                  src="{{asset('images/about/kill_formula.png')}}"
                />
              </div>
            </div>
          </div>

          <div class="about-page-users">
            <div class="about-page-users-block">
              <ul class="about-page-users-list">
                <li class="about-page-users-item">
                  <div class="about-page-users-item-info">
                    <div class="about-page-users-item-info-profile">
                      <img
                        class="about-page-users-item-info-profile-avatar"
                        src="{{asset('images/avatar.jpg')}}"
                      />
                      <div class="about-page-users-item-info-profile-head">
                        <p
                          class="about-page-users-item-info-profile-head-server"
                        >
                          Експерт
                        </p>

                        <p class="about-page-users-item-info-profile-head-name">
                          Marakesh
                          <img
                            class="about-page-users-item-info-profile-head-name-accept"
                            src="{{asset('images/icons/new_releases.svg')}}"
                          />
                        </p>
                      </div>
                    </div>

                    <div class="about-page-users-item-info-view">
                      <p class="about-page-users-item-info-view-like">
                        <img
                          class="about-page-users-item-info-view-like-icon"
                          src="{{asset('images/icons/thumb_up.svg')}}"
                        />
                        150
                      </p>

                      <button class="about-page-users-item-info-view-button">
                        <img
                          class="about-page-users-item-info-view-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>
                    </div>
                  </div>
                  <div class="about-page-users-item-stats">
                    <div class="about-page-users-item-stats-flex">
                      <div class="about-page-users-item-stats-game">
                        <img
                          class="about-page-users-item-stats-game-icon"
                          src="{{asset('images/icons/dota2.svg')}}"
                        />
                        <div class="about-page-users-item-stats-game-head">
                          <p class="about-page-users-item-stats-game-head-text">
                            Гра
                          </p>
                          <p
                            class="about-page-users-item-stats-game-head-title"
                          >
                            Dota 2
                          </p>
                        </div>
                      </div>
                      <div class="about-page-users-item-stats-rank">
                        <img
                          class="about-page-users-item-stats-rank-icon"
                          src="{{asset('images/icons/rank.png')}}"
                        />
                        <div class="about-page-users-item-stats-rank-head">
                          <p class="about-page-users-item-stats-rank-head-text">
                            Ранг
                          </p>
                          <p
                            class="about-page-users-item-stats-rank-head-title"
                          >
                            Титан
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="about-page-users-item-stats-flex">
                      <div class="about-page-users-item-stats-score">
                        <p class="about-page-users-item-stats-score-title">
                          ММР
                        </p>
                        <p class="about-page-users-item-stats-score-value">
                          8900
                        </p>
                      </div>
                      <div class="about-page-users-item-stats-score">
                        <p class="about-page-users-item-stats-score-title">
                          ММР
                        </p>
                        <p class="about-page-users-item-stats-score-value">
                          8900
                        </p>
                      </div>
                      <div class="about-page-users-item-stats-score">
                        <p class="about-page-users-item-stats-score-title">
                          ММР
                        </p>
                        <p class="about-page-users-item-stats-score-value">
                          8900
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="about-page-users-item">
                  <div class="about-page-users-item-info">
                    <div class="about-page-users-item-info-profile">
                      <img
                        class="about-page-users-item-info-profile-avatar"
                        src="{{asset('images/avatar.jpg')}}"
                      />
                      <div class="about-page-users-item-info-profile-head">
                        <p
                          class="about-page-users-item-info-profile-head-server"
                        >
                          Експерт
                        </p>

                        <p class="about-page-users-item-info-profile-head-name">
                          Marakesh
                          <img
                            class="about-page-users-item-info-profile-head-name-accept"
                            src="{{asset('images/icons/new_releases.svg')}}"
                          />
                        </p>
                      </div>
                    </div>

                    <div class="about-page-users-item-info-view">
                      <p class="about-page-users-item-info-view-like">
                        <img
                          class="about-page-users-item-info-view-like-icon"
                          src="{{asset('images/icons/thumb_up.svg')}}"
                        />
                        150
                      </p>

                      <button class="about-page-users-item-info-view-button">
                        <img
                          class="about-page-users-item-info-view-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>
                    </div>
                  </div>
                  <div class="about-page-users-item-stats">
                    <div class="about-page-users-item-stats-flex">
                      <div class="about-page-users-item-stats-game">
                        <img
                          class="about-page-users-item-stats-game-icon"
                          src="{{asset('images/icons/dota2.svg')}}"
                        />
                        <div class="about-page-users-item-stats-game-head">
                          <p class="about-page-users-item-stats-game-head-text">
                            Гра
                          </p>
                          <p
                            class="about-page-users-item-stats-game-head-title"
                          >
                            Dota 2
                          </p>
                        </div>
                      </div>
                      <div class="about-page-users-item-stats-rank">
                        <img
                          class="about-page-users-item-stats-rank-icon"
                          src="{{asset('images/icons/rank.png')}}"
                        />
                        <div class="about-page-users-item-stats-rank-head">
                          <p class="about-page-users-item-stats-rank-head-text">
                            Ранг
                          </p>
                          <p
                            class="about-page-users-item-stats-rank-head-title"
                          >
                            Титан
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="about-page-users-item-stats-flex">
                      <div class="about-page-users-item-stats-score">
                        <p class="about-page-users-item-stats-score-title">
                          ММР
                        </p>
                        <p class="about-page-users-item-stats-score-value">
                          8900
                        </p>
                      </div>
                      <div class="about-page-users-item-stats-score">
                        <p class="about-page-users-item-stats-score-title">
                          ММР
                        </p>
                        <p class="about-page-users-item-stats-score-value">
                          8900
                        </p>
                      </div>
                      <div class="about-page-users-item-stats-score">
                        <p class="about-page-users-item-stats-score-title">
                          ММР
                        </p>
                        <p class="about-page-users-item-stats-score-value">
                          8900
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="about-page-users-item">
                  <div class="about-page-users-item-info">
                    <div class="about-page-users-item-info-profile">
                      <img
                        class="about-page-users-item-info-profile-avatar"
                        src="{{asset('images/avatar.jpg')}}"
                      />
                      <div class="about-page-users-item-info-profile-head">
                        <p
                          class="about-page-users-item-info-profile-head-server"
                        >
                          Експерт
                        </p>

                        <p class="about-page-users-item-info-profile-head-name">
                          Marakesh
                          <img
                            class="about-page-users-item-info-profile-head-name-accept"
                            src="{{asset('images/icons/new_releases.svg')}}"
                          />
                        </p>
                      </div>
                    </div>

                    <div class="about-page-users-item-info-view">
                      <p class="about-page-users-item-info-view-like">
                        <img
                          class="about-page-users-item-info-view-like-icon"
                          src="{{asset('images/icons/thumb_up.svg')}}"
                        />
                        150
                      </p>

                      <button class="about-page-users-item-info-view-button">
                        <img
                          class="about-page-users-item-info-view-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>
                    </div>
                  </div>
                  <div class="about-page-users-item-stats">
                    <div class="about-page-users-item-stats-flex">
                      <div class="about-page-users-item-stats-game">
                        <img
                          class="about-page-users-item-stats-game-icon"
                          src="{{asset('images/icons/dota2.svg')}}"
                        />
                        <div class="about-page-users-item-stats-game-head">
                          <p class="about-page-users-item-stats-game-head-text">
                            Гра
                          </p>
                          <p
                            class="about-page-users-item-stats-game-head-title"
                          >
                            Dota 2
                          </p>
                        </div>
                      </div>
                      <div class="about-page-users-item-stats-rank">
                        <img
                          class="about-page-users-item-stats-rank-icon"
                          src="{{asset('images/icons/rank.png')}}"
                        />
                        <div class="about-page-users-item-stats-rank-head">
                          <p class="about-page-users-item-stats-rank-head-text">
                            Ранг
                          </p>
                          <p
                            class="about-page-users-item-stats-rank-head-title"
                          >
                            Титан
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="about-page-users-item-stats-flex">
                      <div class="about-page-users-item-stats-score">
                        <p class="about-page-users-item-stats-score-title">
                          ММР
                        </p>
                        <p class="about-page-users-item-stats-score-value">
                          8900
                        </p>
                      </div>
                      <div class="about-page-users-item-stats-score">
                        <p class="about-page-users-item-stats-score-title">
                          ММР
                        </p>
                        <p class="about-page-users-item-stats-score-value">
                          8900
                        </p>
                      </div>
                      <div class="about-page-users-item-stats-score">
                        <p class="about-page-users-item-stats-score-title">
                          ММР
                        </p>
                        <p class="about-page-users-item-stats-score-value">
                          8900
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
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
