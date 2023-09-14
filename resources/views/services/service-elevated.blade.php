<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service Elevated</title>
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
            <p class="service-boost-head-path-text">{{__('Калібровка')}}</p>
          </div>

          <div class="service-boost-head-titles">
            <h1 class="service-boost-head-titles-title">
                {{__('Замовляй бустинг Порядності Аккаунту')}}
            </h1>

            <div class="service-boost-head-titles-notification">
              <div class="service-boost-head-titles-notification-policy">
                <img
                  class="service-boost-head-titles-notification-policy-icon"
                  src="{{asset('images/icons/shield_lock.svg')}}"
                />
                  {{__('100% Гарантія Конфіденційності')}}
              </div>

              <div class="service-boost-head-titles-notification-online">
                <img
                  class="service-boost-head-titles-notification-online-icon"
                  src="{{asset('images/icons/person.svg')}}"
                />
                  {{__('42 Бустера Онлай')}}н
              </div>
            </div>
          </div>
        </div>
        <div class="service-boost-block">
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
                    {{__('Божественний IV')}}
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
                          {{__('Божественний IV')}}
                      </div>
                      <img
                        class="calculator__interface-elevated-advanced-select-lvl-button-icon"
                        src="{{asset('images/icons/arrow.svg')}}"
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
                            {{__('Божественний IV')}}
                        </div>
                        <img
                          class="calculator__interface-elevated-advanced-select-lvl-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>
                      <button
                        class="calculator__interface-elevated-advanced-select-lvl-button"
                      >
                          {{__('Божественний IV')}}
                      </button>
                      <button
                        class="calculator__interface-elevated-advanced-select-lvl-button"
                      >
                          {{__('Божественний IV')}}
                      </button>
                    </div>
                  </div>

                  <div
                    class="calculator__interface-elevated-advanced-min-price"
                  >
                    <p
                      class="calculator__interface-elevated-advanced-min-price-title"
                    >
                        {{__('Початкова Оцінка')}}
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
                        {{__('Кількість Матчів')}}
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
                        {{__('Кінцева Оцінка')}}
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
                        {{__('Сервер')}}
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
                            {{__('Послуга')}}
                        </p>
                          {{__('Підвищення Оцінки Поведінки')}}
                      </div>
                      <img
                        class="calculator__interface-elevated-advanced-server-button-icon"
                        src="{{asset('images/icons/arrow.svg')}}"
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
                            {{__('Підвищення Оцінки Поведінки')}}
                        </div>
                        <img
                          class="calculator__interface-elevated-advanced-server-button-icon"
                          src="{{asset('images/icons/arrow.svg')}}"
                        />
                      </button>
                      <button
                        class="calculator__interface-elevated-advanced-server-button"
                      >
                          {{__('MMR Буст')}}
                      </button>
                      <button
                        class="calculator__interface-elevated-advanced-server-button"
                      >
                          {{__('Калібровка')}}
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
                          src="{{asset('images/icons/checkbox.svg')}}"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-elevated-categories-select-button-text"
                      >
                          {{__('Грати з Бустером')}}
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
                          src="{{asset('images/icons/checkbox.svg')}}"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-elevated-categories-select-button-text"
                      >
                          {{__('Грати з Бустером')}}
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
                          src="{{asset('images/icons/checkbox.svg')}}"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-elevated-categories-select-button-text"
                      >
                          {{__('Грати з Бустером')}}
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
                          src="{{asset('images/icons/checkbox.svg')}}"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-elevated-categories-select-button-text"
                      >
                          {{__('Грати з Бустером')}}
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
                    src="{{asset('images/icons/arrow-black.svg')}}"
                  />
                </button>
              </div>
              <button class="calculator__interface-elevated-success-payment">
                <div
                  class="calculator__interface-elevated-success-payment-value"
                >
                    {{__('Сума 1219 ₴')}}
                </div>
                <div
                  class="calculator__interface-elevated-success-payment-text"
                >
                    {{__('Оформити Замовлення')}}
                </div>
              </button>
            </div>
          </div>

          <div class="service-boost-second">
            <h2 class="service-boost-second-title">
                {{__('Підвищення Оцінки Поведінки')}}
            </h2>
            <div class="service-boost-second-flex">
              <p class="service-boost-second-description">
                  {{__(' Занурся в епічну гру та випередь своїх суперників, піднімаючи
                  свій рейтинг до неймовірних висот. Наша команда талановитих та
                  висококваліфікованих бустерів допоможе тобі розкрити твій
                  потенціал та покращити свою гру до неперевершеності.')}}
              </p>

              <p class="service-boost-second-description">
                  {{__(' Забудь про обмеження та досягни своїх геймінгових мрій разом з
                  нами. Наші бустери - це справжні майстри гри, які володіють
                  вражаючими навичками та стратегіями. Вони виконають свою місію -
                  підняти твій рейтинг - з максимальною ефективністю та
                  професіоналізмом.')}}
              </p>
            </div>
          </div>

          <div class="service-boost-more">
            <div class="service-boost-more-head">
              <h3 class="service-boost-more-head-title">{{__('Додаткові Послуги')}}</h3>
            </div>

            <ul class="service-boost-more-list">
              <li class="service-boost-more-item">
                <div class="service-boost-more-item-head">
                  <p class="service-boost-more-item-head-title">
                      {{__('Грати з Бустером')}}
                  </p>

                  <p class="service-boost-more-item-head-percent">+50%</p>
                </div>

                <p class="service-boost-more-item-desc">
                    {{__(' Запрошуємо тебе разом з нашою командою професіоналів відкрити
                    нові горизонти в світі Dota 2. Грай разом з бустерами,
                    піднімай свій рейтинг та досягай неймовірних результатів у
                    грі. Приєднуйся до нас сьогодні та стань справжнім героєм на
                    полі бою!')}}
                </p>
              </li>
              <li class="service-boost-more-item">
                <div class="service-boost-more-item-head">
                  <p class="service-boost-more-item-head-title">
                      {{__('Грати з Бустером')}}
                  </p>

                  <p class="service-boost-more-item-head-percent">+50%</p>
                </div>

                <p class="service-boost-more-item-desc">
                    {{__(' Запрошуємо тебе разом з нашою командою професіоналів відкрити
                    нові горизонти в світі Dota 2. Грай разом з бустерами,
                    піднімай свій рейтинг та досягай неймовірних результатів у
                    грі. Приєднуйся до нас сьогодні та стань справжнім героєм на
                    полі бою!')}}
                </p>
              </li>
            </ul>
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