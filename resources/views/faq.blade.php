<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

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

    <section class="faq-page">
      <div class="second-container">
        <div class="faq-page-head">
          <p class="faq-page-head-span">FAQ</p>
          <h1 class="faq-page-head-title">Відповіді на часті запитання</h1>
        </div>
        <div class="faq-page-block">
          <div class="faq-page-primary">
            <h2 class="faq-page-primary-title">Рекомендації та Запитання</h2>
            <p class="faq-page-primary-span">
              Все що вам потрібно знати про нас!
            </p>

            <div class="faq-page-primary-block">
              <div class="faq-page-primary-flex">
                <div class="faq-page-primary-question">
                  <img
                    class="faq-page-primary-question-icon"
                    src="./images/icons/flag32.svg"
                  />
                  <h3 class="faq-page-primary-question-title">
                    Ви з України ?
                  </h3>
                  <p class="faq-page-primary-question-desc">
                    Так, наш сервіс на 100% Український
                  </p>
                </div>
                <div class="faq-page-primary-question">
                  <img
                    class="faq-page-primary-question-icon"
                    src="./images/icons/block.svg"
                  />
                  <h3 class="faq-page-primary-question-title">
                    Мене не забанять ?
                  </h3>
                  <p class="faq-page-primary-question-desc">
                    Ми розробили унікальний алгоритм роботи, що зменшує ризик
                    блокування в рази
                  </p>
                </div>
                <div class="faq-page-primary-question">
                  <img
                    class="faq-page-primary-question-icon"
                    src="./images/icons/shield_lock.svg"
                  />
                  <h3 class="faq-page-primary-question-title">
                    Мій акаунт в безпеці ?
                  </h3>
                  <p class="faq-page-primary-question-desc">
                    Всі дані передаються бустеру в зашифрованому та
                    анонімізованому форматі
                  </p>
                </div>
              </div>
              <div class="faq-page-primary-flex">
                <div class="faq-page-primary-question">
                  <img
                    class="faq-page-primary-question-icon"
                    src="./images/icons/encrypted.svg"
                  />
                  <h3 class="faq-page-primary-question-title">
                    Чи потрібно відключати Steam Guard ?
                  </h3>
                  <p class="faq-page-primary-question-desc">
                    Ні, ми працюємо за допомогою одноразових резервних кодів.
                    Завдяки цьому зберігається ваша безпека, та ви может
                    відстежувати всі сессії Steam
                  </p>
                </div>
                <div class="faq-page-primary-question">
                  <img
                    class="faq-page-primary-question-icon"
                    src="./images/icons/cancel_schedule_send.svg"
                  />
                  <h3 class="faq-page-primary-question-title">
                    Чи можливий буст без передачі акаунта ?
                  </h3>
                  <p class="faq-page-primary-question-desc">
                    Так, в нашому сервісі ви можете замовити послугу групового
                    бустингу, що дозволяє втілити ваші ігрові амбіції без
                    передачі акаунту бустеру
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="faq-page-question">
            <div class="faq-page-question-flex">
              <div class="faq-page-question-block">
                <h3 class="faq-page-question-block-title">Головні Питання</h3>
              </div>
              <ul class="faq-page-question-list">
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="faq-page-question-flex">
              <div class="faq-page-question-block">
                <h3 class="faq-page-question-block-title">Головні Питання</h3>
              </div>
              <ul class="faq-page-question-list">
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="faq-page-question-flex">
              <div class="faq-page-question-block">
                <h3 class="faq-page-question-block-title">Головні Питання</h3>
              </div>
              <ul class="faq-page-question-list">
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
                <li class="faq-page-question-item">
                  <button class="faq-page-question-item-button">
                    <p class="faq-page-question-item-button-text">
                      Як довго займає процес бусту мого аккаунту?
                    </p>
                    <img
                      class="faq-page-question-item-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <div class="faq-page-question-item-show">
                    <p class="faq-page-question-item-show-desc">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Dolores vel exercitationem veniam nihil modi iure non ipsa
                      porro nulla doloremque? Maiores excepturi, reiciendis
                      rerum ducimus mollitia illo. Sapiente, officiis itaque!
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="faq-page-send">
            <div class="faq-page-send-block">
              <p class="faq-page-send-title">
                Не знайшли відповіді на своє запитання ?
              </p>
              <p class="faq-page-send-second">
                Напишіть нам в чат, і ми з радістью вас проконсультуємо
              </p>
            </div>
            <button class="faq-page-send-button">
              <img
                class="faq-page-send-button-icon"
                src="./images/icons/chat_bubble_28px.svg"
              />
              Задати питання
            </button>
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
