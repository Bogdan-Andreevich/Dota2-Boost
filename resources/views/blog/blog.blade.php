<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blog</title>
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
                          <a href="{{url('/preparation')}}" class="header-navigation__menu-link"> DotaBoost </a>
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

    <!-- Hero -->
  @foreach($posts as $post)
    @if($post->pinned)
    <section class="blog-hero">
      <div class="blog-hero-block">
        <div class="second-container">
          <div class="blog-hero-content">
            <div class="blog-hero-date">
              <p class="blog-hero-date-text">{{$post->created_at}}</p>
              <p class="blog-hero-date-decor">Закріплений блог</p>
            </div>
            <h1 class="blog-hero-title">
                {{$post->title}}
            </h1>
            <a class="blog-hero-link" href="{{ route('blog.show', ['id' => $post->id]) }}">
              >Детальніше
              <img class="blog-hero-link-icon" src="./images/icons/arrow.svg"
            /></a>
          </div>
        </div>
      </div>
    </section>
    @endif
  @endforeach

    <!-- !Hero -->

    <!-- Blog-Catalog -->

    <section class="blog-catalog">
      <div class="second-container">
        <ul class="blog-list">
            @foreach($posts as $post)
                @if(!$post->pinned)
          <li class="blog-item">
            <a class="blog-link" href="{{ route('blog.show', ['id' => $post->id]) }}">
              <div class="blog-link-block">
                <div class="blog-link-info">
                  <p class="blog-link-date">{{$post->created_at}}</p>
                  <p class="blog-link-title">
                      {{$post->title}}
                  </p>
                </div>

                <div class="blog-link-hidden">
                  <div class="blog-link-hidden-line"></div>
                  <p class="blog-link-hidden-text">
                      {{$post->content}}
                  </p>
                </div>
              </div>

              <img class="blog-link-img" src="{{asset('storage/' . $post->image) ?? asset('images/blog/blog-1.png')}}" />
            </a>
          </li>
                @endif
            @endforeach
        </ul>

        <ul class="blog-catalog__pagination">
          <li class="blog-catalog__pagination-item">
            <a class="blog-catalog__pagination-link current">1</a>
          </li>
          <li class="blog-catalog__pagination-item">
            <a class="blog-catalog__pagination-link">2</a>
          </li>
          <li class="blog-catalog__pagination-item">
            <a class="blog-catalog__pagination-link">3</a>
          </li>
          <li class="blog-catalog__pagination-item">
            <a class="blog-catalog__pagination-link">4</a>
          </li>
          <li class="blog-catalog__pagination-item">
            <a class="blog-catalog__pagination-link">5</a>
          </li>
          <li class="blog-catalog__pagination-item">
            <a class="blog-catalog__pagination-link">
              <img
                class="blog-catalog__pagination-link-icon"
                src="./images/icons/arrow.svg"
              />
            </a>
          </li>
        </ul>
      </div>
    </section>

    <!-- !Blog-Catalog -->

    <!-- Footer -->

    <footer class="footer">
      <div class="second-container">
        <div class="footer-block">
          <div class="footer-content">
            <div class="footer-content__settings">
              <a class="footer-content__settings-logo">
                <img
                  class="footer-content__settings-logo-icon"
                  src="./images/icons/logo.svg"
                  alt="logo-footer"
                />
              </a>

              <div class="footer-content__settings-security">
                <a class="footer-content__settings-security-button">
                  <img
                    class="footer-content__settings-security-button-icon"
                    alt="security"
                    src="./images/icons/security.svg"
                  />
                </a>
              </div>

              <div class="footer-content__settings-award">
                <a class="footer-content__settings-award-button">
                  <img
                    class="footer-content__settings-award-button-icon"
                    alt="award"
                    src="./images/icons/award_star.svg"
                  />
                </a>
              </div>

              <div class="footer-content__settings-lang">
                <button class="footer-content__settings-lang-button">
                  <img
                    class="footer-content__settings-lang-button-icon"
                    alt="lang"
                    src="./images/icons/ua.svg"
                  />
                </button>

                <div class="footer-content__settings-lang-button-selected">
                  <button class="footer-content__settings-lang-button">
                    <img
                      class="footer-content__settings-lang-button-icon"
                      alt="lang"
                      src="./images/icons/pl.svg"
                    />
                  </button>
                  <button class="footer-content__settings-lang-button">
                    <img
                      class="footer-content__settings-lang-button-icon"
                      alt="lang"
                      src="./images/icons/us.svg"
                    />
                  </button>
                  <button class="footer-content__settings-lang-button">
                    <img
                      class="footer-content__settings-lang-button-icon"
                      alt="lang"
                      src="./images/icons/ru.svg"
                    />
                  </button>
                </div>
              </div>
            </div>

            <div class="footer-content__company">
              <p class="footer-content__company-title">Компанія</p>
              <ul class="footer-content__company-menu">
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link">Послуги</a>
                </li>
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link">Про Нас</a>
                </li>
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link">Робота</a>
                </li>
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link">Блог</a>
                </li>
                <li class="footer-content__company-item">
                  <a class="footer-content__company-link">FAQ</a>
                </li>
              </ul>
            </div>
            <div class="footer-content__policy">
              <p class="footer-content__policy-title">Правові</p>
              <ul class="footer-content__policy-menu">
                <li class="footer-content__policy-item">
                  <a class="footer-content__policy-link"
                    >Політика Конфіденційності</a
                  >
                </li>
                <li class="footer-content__policy-item">
                  <a class="footer-content__policy-link">Публічна Оферта</a>
                </li>
              </ul>
            </div>
            <div class="footer-content__contacts">
              <p class="footer-content__contacts-title">Контакти</p>
              <ul class="footer-content__contacts-menu">
                <li class="footer-content__contacts-item">
                  <a class="footer-content__contacts-link">Зв’язок з нами</a>
                </li>
                <li class="footer-content__contacts-item">
                  <a class="footer-content__contacts-link">Telegram</a>
                </li>
                <li class="footer-content__contacts-item">
                  <a class="footer-content__contacts-link">Instagram</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="footer-payment">
            <img
              class="footer-payment-icon"
              src="./images/icons/Visa.svg"
              alt="payment"
            />
            <img
              class="footer-payment-icon"
              src="./images/icons/MasterCard.svg"
              alt="payment"
            />
            <img
              class="footer-payment-icon"
              src="./images/icons/APay.svg"
              alt="payment"
            />
            <img
              class="footer-payment-icon"
              src="./images/icons/GPay.svg"
              alt="payment"
            />
          </div>

          <div class="footer-by">
            <p class="footer-by-text">
              Dota 2 є зареєстрованою торговою маркою компанії Valve
              Corporation. Ми не пов'язані з компанією Valve Corporation, не
              асоційовані з нею і не підтримуємо її. GameBoost не відображає
              погляди чи думки Valve Corporation.
            </p>
            <p class="footer-by-text">Всі права захищені ©GAMEBOOST 2023</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- !Footer -->
  </body>
</html>
