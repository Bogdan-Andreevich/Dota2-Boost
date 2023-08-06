<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>article</title>
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

    <section class="article-hero">
      <div class="article-hero-block">
        <div class="second-container">
          <div class="article-hero-content">
            <div class="article-hero-back">
              <a class="article-hero-back-link" href="{{(url('/blog'))}}">
                <img
                  class="article-hero-back-link-icon"
                  src="{{asset('images/icons/arrow.svg')}}"
                />
                  {{__('Назад до Блогу')}}
              </a>
            </div>
            <h1 class="article-hero-title">
                {{$post->title}}
            </h1>
            <p class="article-hero-date">{{$post->created_at}}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- !Hero -->

    <!-- Article Content -->
    <section class="article-content">
      <div class="second-container">
        <div class="article-content-block">
          <div class="article-content-description">
            <p class="article-content-description-text">
                {{$post->created_at}}
            </p>
            <p class="article-content-description-text">
                {!! $post->text !!}
            </p>
          </div>

          <div class="article-content-also">
            <h2 class="article-content-also-title">Читайте також</h2>
            <ul class="blog-list">
                @foreach($posts as $relatedPost)
                    @if(!$relatedPost->pinned && $relatedPost->id !== $post->id)
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
                    @endif
                @endforeach

            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- !Article Content-->

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
