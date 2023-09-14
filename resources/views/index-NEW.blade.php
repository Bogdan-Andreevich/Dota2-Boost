<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
              <button class="header-navigation__profile-button">
                <img
                  class="header-navigation__profile-button-icon"
                  src="./images/icons/account.svg"
                  alt="account"
                />
                Особистий кабінет
              </button>
            </div>
          </nav>
          <ul class="header-navigation__menu-submenu">
            <li class="header-navigation__menu-submenu-item">
              <a class="header-navigation__menu-submenu-link">ММР Буст </a>
            </li>
            <li class="header-navigation__menu-submenu-item">
              <a class="header-navigation__menu-submenu-link">Калібровка </a>
            </li>
            <li class="header-navigation__menu-submenu-item">
              <a class="header-navigation__menu-submenu-link"
                >Низький Пріорітет
              </a>
            </li>
            <li class="header-navigation__menu-submenu-item">
              <a class="header-navigation__menu-submenu-link"
                >Оцінка Поведінки
              </a>
            </li>
            <li class="header-navigation__menu-submenu-item">
              <a class="header-navigation__menu-submenu-link"
                >Моніторінг Замовлень
              </a>
            </li>
          </ul>
        </div>
        <div class="header-mobile-block">
          <div class="header-mobile-navigation">
            <div class="header-mobile-navigation-block">
              <button class="header-mobile-navigation-avatar">
                <img
                  class="header-mobile-navigation-avatar-icon"
                  src="./images/avatar-mob.png"
                />
              </button>
              <button class="header-mobile-navigation-logo">
                <img
                  class="header-mobile-navigation-logo-icon"
                  src="./images/icons/logo-2.svg"
                />
              </button>
              <div class="header-mobile-navigation-nav">
                <button class="header-mobile-navigation-nav-open">
                  <img
                    class="header-mobile-navigation-nav-open-icon"
                    src="./images/icons/menu.svg"
                  />
                </button>
                <button class="header-mobile-navigation-nav-report">
                  <img
                    class="header-mobile-navigation-nav-report-icon"
                    src="./images/icons/headset_mic.svg"
                  />
                </button>
                <button class="header-mobile-navigation-nav-close">
                  <img
                    class="header-mobile-navigation-nav-close-icon"
                    src="./images/icons/close.svg"
                  />
                </button>
              </div>
            </div>
            <div class="header-mobile-navigation-down">
              <div class="header-mobile-navigation-down-account">
                <div class="header-mobile-navigation-down-account-avatar">
                  <img
                    class="header-mobile-navigation-down-account-avatar-img"
                    src="./images/avatar-mob.png"
                  />
                  <p class="header-mobile-navigation-down-account-avatar-name">
                    Marakesh
                  </p>
                </div>
                <div class="header-mobile-navigation-down-account-menu">
                  <button
                    class="header-mobile-navigation-down-account-menu-button"
                  >
                    <img
                      class="header-mobile-navigation-down-account-menu-button-icon"
                      src="./images/icons/notifications.svg"
                    />
                  </button>
                  <button
                    class="header-mobile-navigation-down-account-menu-button"
                  >
                    <img
                      class="header-mobile-navigation-down-account-menu-button-icon"
                      src="./images/icons/settings-profile.svg"
                    />
                  </button>
                  <button
                    class="header-mobile-navigation-down-account-menu-button"
                  >
                    <img
                      class="header-mobile-navigation-down-account-menu-button-icon"
                      src="./images/icons/logout.svg"
                    />
                  </button>
                </div>
              </div>
              <button class="header-mobile-navigation-down-manager">
                <div class="header-mobile-navigation-down-manager-avatar">
                  <img
                    class="header-mobile-navigation-down-manager-avatar-icon"
                    src="./images/Manager_Photo.png"
                  />
                  <div
                    class="header-mobile-navigation-down-manager-avatar-text"
                  >
                    <p
                      class="header-mobile-navigation-down-manager-avatar-text-server"
                    >
                      Менеджер
                    </p>
                    <p
                      class="header-mobile-navigation-down-manager-avatar-text-name"
                    >
                      Денис
                    </p>
                  </div>
                </div>

                <div class="header-mobile-navigation-down-manager-button">
                  <img
                    class="header-mobile-navigation-down-manager-button-icon"
                    src="./images/icons/arrow.svg"
                  />
                </div>
              </button>
              <button class="header-mobile-navigation-down-report">
                <img
                  class="header-mobile-navigation-down-report-icon"
                  src="./images/icons/headset_mic.svg"
                />
                Зв’язок з нами
              </button>
              <div class="header-mobile-navigation-down-service">
                <div class="header-mobile-navigation-down-service-one">
                  <button
                    class="header-mobile-navigation-down-service-one-button"
                  >
                    Буст ММР
                  </button>
                  <button
                    class="header-mobile-navigation-down-service-one-button"
                  >
                    Калібровка
                  </button>
                  <button
                    class="header-mobile-navigation-down-service-one-button"
                  >
                    Буст Порядності
                  </button>
                </div>
                <div class="header-mobile-navigation-down-service-second">
                  <button
                    class="header-mobile-navigation-down-service-second-button"
                  >
                    Низький Пріорітет
                  </button>
                  <button
                    class="header-mobile-navigation-down-service-second-button"
                  >
                    Моніторинг Замовлень
                  </button>
                </div>
              </div>

              <div class="header-mobile-navigation-down-menu">
                <button class="header-mobile-navigation-down-menu-button">
                  <img
                    class="header-mobile-navigation-down-menu-button-icon"
                    src="./images/icons/supervised_user_circle.svg"
                  />
                  Про Нас
                </button>
                <button class="header-mobile-navigation-down-menu-button">
                  <img
                    class="header-mobile-navigation-down-menu-button-icon"
                    src="./images/icons/work.svg"
                  />
                  Робота
                </button>
                <button class="header-mobile-navigation-down-menu-button">
                  <img
                    class="header-mobile-navigation-down-menu-button-icon"
                    src="./images/icons/newsmode.svg"
                  />
                  Блог
                </button>
                <button class="header-mobile-navigation-down-menu-button">
                  <img
                    class="header-mobile-navigation-down-menu-button-icon"
                    src="./images/icons/faq.svg"
                  />
                  FAQ
                </button>
              </div>
            </div>
          </div>
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
                src="./images/slider/slide-1.png"
              />
            </button>
            <button class="hero-slider__button">
              <img
                class="hero-slider__button-image"
                src="./images/slider/slide-2.png"
              />
            </button>
            <button class="hero-slider__button">
              <img
                class="hero-slider__button-image"
                src="./images/slider/slide-3.png"
              />
            </button>
            <button class="hero-slider__button">
              <img
                class="hero-slider__button-image"
                src="./images/slider/slide-4.png"
              />
            </button>
          </div>
          <div class="hero-slider-alt">
            <div class="swiper-2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img
                    class="hero-slider-alt-slide"
                    src="./images/slider/slide-1.png"
                    style="
                      border-radius: 80px;
                      background: linear-gradient(
                        64deg,
                        #1d7090 0%,
                        #0094e8 92.94%
                      );
                    "
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    class="hero-slider-alt-slide"
                    src="./images/slider/Transperrent_Void_Hero.png"
                    style="border-radius: 80px"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    class="hero-slider-alt-slide"
                    src="./images/slider/slide-3.png"
                  />
                </div>
              </div>
            </div>

            <script>
              const swiper2 = new Swiper(".swiper-2", {
                // Optional parameters
                direction: "horizontal",
                loop: true,
                autoplay: {
                  delay: 5000,
                },
              });
            </script>
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
              Прорахуй ціну
              <span class="calculator__header-title-span"> твого бусту! </span>
            </h1>
            <div class="calculator__header-information">
              <div class="calculator__header-information-online">
                <img
                  class="calculator__header-infomation-online-icon"
                  src="./images/icons/person.svg"
                  alt="person"
                />
                42 Бустера Онлайн
              </div>
              <div class="calculator__header-information-security">
                <img
                  class="calculator__header-infomation-security-icon"
                  src="./images/icons/lock.svg"
                  alt="security"
                />
                100% Гарантія Конфіденційності
              </div>
            </div>
          </div>

          <div class="calculator__interface-low">
            <div class="calculator__interface-low-advanced">
              <div class="calculator__interface-low-advanced-scorematch">
                <p class="calculator__interface-low-advanced-scorematch-title">
                  Кількість Матчів
                </p>
                <div
                  class="calculator__interface-low-advanced-scorematch-block"
                >
                  <input
                    type="range"
                    min="1"
                    max="10"
                    step="1"
                    value="7"
                    class="calculator__interface-low-advanced-scorematch-input"
                  />
                  <p
                    class="calculator__interface-low-advanced-scorematch-current"
                  >
                    7
                  </p>
                </div>
              </div>

              <div class="calculator__interface-low-advanced-server">
                <button
                  class="calculator__interface-low-advanced-server-button"
                >
                  <div
                    class="calculator__interface-low-advanced-server-button-text"
                  >
                    <p class="calculator__interface-low-advanced-server-title">
                      Послуга
                    </p>
                    Знижений Пріорітет
                  </div>
                  <img
                    class="calculator__interface-low-advanced-server-button-icon"
                    src="./images/icons/arrow.svg"
                  />
                </button>

                <div class="calculator__interface-low-advanced-server-show">
                  <button
                    class="calculator__interface-low-advanced-server-button"
                  >
                    <div
                      class="calculator__interface-low-advanced-server-button-text"
                    >
                      <p
                        class="calculator__interface-low-advanced-server-title"
                      >
                        Послуга
                      </p>
                      Знижений Пріорітет
                    </div>
                    <img
                      class="calculator__interface-low-advanced-server-button-icon"
                      src="./images/icons/arrow.svg"
                    />
                  </button>
                  <button
                    class="calculator__interface-low-advanced-server-button"
                  >
                    MMR Буст
                  </button>
                  <button
                    class="calculator__interface-low-advanced-server-button"
                  >
                    Калібровка
                  </button>
                </div>
              </div>
            </div>

            <div class="calculator__interface-low-categories">
              <ul class="calculator__interface-low-categories-select">
                <li class="calculator__interface-low-categories-select-item">
                  <button
                    class="calculator__interface-low-categories-select-button"
                  >
                    <div
                      class="calculator__interface-low-categories-select-button-block"
                    >
                      <div
                        class="calculator__interface-low-categories-select-button-selected"
                      >
                        <img
                          class="calculator__interface-low-categories-select-button-selected-icon"
                          src="./images/icons/checkbox.svg"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-low-categories-select-button-text"
                      >
                        Грати з Бустером
                      </p>
                    </div>
                    <p
                      class="calculator__interface-low-categories-select-button-percent"
                    >
                      +20%
                    </p>
                  </button>
                </li>
                <li class="calculator__interface-low-categories-select-item">
                  <button
                    class="calculator__interface-low-categories-select-button"
                  >
                    <div
                      class="calculator__interface-low-categories-select-button-block"
                    >
                      <div
                        class="calculator__interface-low-categories-select-button-selected"
                      >
                        <img
                          class="calculator__interface-low-categories-select-button-selected-icon"
                          src="./images/icons/checkbox.svg"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-low-categories-select-button-text"
                      >
                        Грати з Бустером
                      </p>
                    </div>
                    <p
                      class="calculator__interface-low-categories-select-button-percent"
                    >
                      +20%
                    </p>
                  </button>
                </li>
                <li class="calculator__interface-low-categories-select-item">
                  <button
                    class="calculator__interface-low-categories-select-button"
                  >
                    <div
                      class="calculator__interface-low-categories-select-button-block"
                    >
                      <div
                        class="calculator__interface-low-categories-select-button-selected"
                      >
                        <img
                          class="calculator__interface-low-categories-select-button-selected-icon"
                          src="./images/icons/checkbox.svg"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-low-categories-select-button-text"
                      >
                        Грати з Бустером
                      </p>
                    </div>
                    <p
                      class="calculator__interface-low-categories-select-button-percent"
                    >
                      +20%
                    </p>
                  </button>
                </li>
                <li class="calculator__interface-low-categories-select-item">
                  <button
                    class="calculator__interface-low-categories-select-button"
                  >
                    <div
                      class="calculator__interface-low-categories-select-button-block"
                    >
                      <div
                        class="calculator__interface-low-categories-select-button-selected"
                      >
                        <img
                          class="calculator__interface-low-categories-select-button-selected-icon"
                          src="./images/icons/checkbox.svg"
                          alt="checkbox"
                        />
                      </div>
                      <p
                        class="calculator__interface-low-categories-select-button-text"
                      >
                        Грати з Бустером
                      </p>
                    </div>
                    <p
                      class="calculator__interface-low-categories-select-button-percent"
                    >
                      +20%
                    </p>
                  </button>
                </li>
              </ul>
            </div>

            <div class="calculator__interface-low-success">
              <div class="calculator__interface-low-success-bonus">
                <input
                  class="calculator__interface-low-success-bonus-input"
                  placeholder="Введіть Промокод"
                />
                <button class="calculator__interface-low-success-bonus-button">
                  <img
                    class="calculator__interface-low-success-bonus-button-icon"
                    alt="arrow"
                    src="./images/icons/arrow-black.svg"
                  />
                </button>
              </div>
              <button class="calculator__interface-low-success-payment">
                <div class="calculator__interface-low-success-payment-value">
                  Сума 1219 ₴
                </div>
                <div class="calculator__interface-low-success-payment-text">
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
                  Професійні бустери:
                  <span class="about-content__block-item-title-span"
                    >ефективність від GameBoost</span
                  >
                </h3>
                <p class="about-content__block-item-description">
                  GameBoost працює з висококваліфікованими та професійними
                  бустерами. Наші експерти забезпечать найкращі результати
                  прокачки вашого рейтингу та навичок у грі. Довіртеся
                  професіоналам та досягніть максимальної ефективності в грі.
                </p>
              </div>
              <div class="about-content__block-item">
                <h3 class="about-content__block-item-title">
                  Професійні бустери:
                  <span class="about-content__block-item-title-span"
                    >ефективність від GameBoost</span
                  >
                </h3>
                <p class="about-content__block-item-description">
                  GameBoost працює з висококваліфікованими та професійними
                  бустерами. Наші експерти забезпечать найкращі результати
                  прокачки вашого рейтингу та навичок у грі. Довіртеся
                  професіоналам та досягніть максимальної ефективності в грі.
                </p>
              </div>
              <div class="about-content__block-item">
                <h3 class="about-content__block-item-title">
                  Професійні бустери:
                  <span class="about-content__block-item-title-span"
                    >ефективність від GameBoost</span
                  >
                </h3>
                <p class="about-content__block-item-description">
                  GameBoost працює з висококваліфікованими та професійними
                  бустерами. Наші експерти забезпечать найкращі результати
                  прокачки вашого рейтингу та навичок у грі. Довіртеся
                  професіоналам та досягніть максимальної ефективності в грі.
                </p>
              </div>
            </div>
            <div class="about-content__image">
              <img
                class="about-content__image-img"
                src="./images/bg_about.png"
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
                src="./images/bg_advantages.png"
              />
            </div>

            <div class="advantages-content__block">
              <div class="advantages-content__block-item">
                <h3 class="advantages-content__block-item-title">
                  Спільний буст
                </h3>
                <p class="advantages-content__block-item-description">
                  Наші бустери забезпечують швидке та ефективне піднесення
                  вашого рейтингу в Dota 2, допомагаючи вам досягти високих
                  результатів.
                </p>
              </div>
              <div class="advantages-content__block-item">
                <h3 class="advantages-content__block-item-title">
                  Спільний буст
                </h3>
                <p class="advantages-content__block-item-description">
                  Наші бустери забезпечують швидке та ефективне піднесення
                  вашого рейтингу в Dota 2, допомагаючи вам досягти високих
                  результатів.
                </p>
              </div>
              <div class="advantages-content__block-item">
                <h3 class="advantages-content__block-item-title">
                  Спільний буст
                </h3>
                <p class="advantages-content__block-item-description">
                  Наші бустери забезпечують швидке та ефективне піднесення
                  вашого рейтингу в Dota 2, допомагаючи вам досягти високих
                  результатів.
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

            <button class="blog-header-button">
              <img
                class="blog-header-button-icon"
                src="./images/icons/arrow.svg"
                alt="blog-icon"
              />
            </button>
          </div>

          <ul class="blog-list">
            <li class="blog-item">
              <a class="blog-link">
                <div class="blog-link-block">
                  <div class="blog-link-info">
                    <p class="blog-link-date">24 червня 2023р.</p>
                    <p class="blog-link-title">
                      Оголошено нового героя в Dota 2!
                    </p>
                  </div>

                  <div class="blog-link-hidden">
                    <div class="blog-link-hidden-line"></div>
                    <p class="blog-link-hidden-text">
                      Незабаром відбудеться десята річниця повноцінного виходу
                      Dota 2 (так, ми працюємо над цікавинками до цієї події;
                      ні, ми точно не встигнемо до вказаної в Steam дати 9
                      липня).
                    </p>
                  </div>
                </div>

                <img class="blog-link-img" src="./images/blog/blog-1.png" />
              </a>
            </li>
            <li class="blog-item">
              <a class="blog-link">
                <div class="blog-link-block">
                  <div class="blog-link-info">
                    <p class="blog-link-date">24 червня 2023р.</p>
                    <p class="blog-link-title">
                      Оголошено нового героя в Dota 2!
                    </p>
                  </div>

                  <div class="blog-link-hidden">
                    <div class="blog-link-hidden-line"></div>
                    <p class="blog-link-hidden-text">
                      Незабаром відбудеться десята річниця повноцінного виходу
                      Dota 2 (так, ми працюємо над цікавинками до цієї події;
                      ні, ми точно не встигнемо до вказаної в Steam дати 9
                      липня).
                    </p>
                  </div>
                </div>

                <img class="blog-link-img" src="./images/blog/blog-1.png" />
              </a>
            </li>
            <li class="blog-item">
              <a class="blog-link">
                <div class="blog-link-block">
                  <div class="blog-link-info">
                    <p class="blog-link-date">24 червня 2023р.</p>
                    <p class="blog-link-title">
                      Оголошено нового героя в Dota 2!
                    </p>
                  </div>

                  <div class="blog-link-hidden">
                    <div class="blog-link-hidden-line"></div>
                    <p class="blog-link-hidden-text">
                      Незабаром відбудеться десята річниця повноцінного виходу
                      Dota 2 (так, ми працюємо над цікавинками до цієї події;
                      ні, ми точно не встигнемо до вказаної в Steam дати 9
                      липня).
                    </p>
                  </div>
                </div>

                <img class="blog-link-img" src="./images/blog/blog-1.png" />
              </a>
            </li>
            <li class="blog-item">
              <a class="blog-link">
                <div class="blog-link-block">
                  <div class="blog-link-info">
                    <p class="blog-link-date">24 червня 2023р.</p>
                    <p class="blog-link-title">
                      Оголошено нового героя в Dota 2!
                    </p>
                  </div>

                  <div class="blog-link-hidden">
                    <div class="blog-link-hidden-line"></div>
                    <p class="blog-link-hidden-text">
                      Незабаром відбудеться десята річниця повноцінного виходу
                      Dota 2 (так, ми працюємо над цікавинками до цієї події;
                      ні, ми точно не встигнемо до вказаної в Steam дати 9
                      липня).
                    </p>
                  </div>
                </div>

                <img class="blog-link-img" src="./images/blog/blog-1.png" />
              </a>
            </li>
            <li class="blog-item">
              <a class="blog-link">
                <div class="blog-link-block">
                  <div class="blog-link-info">
                    <p class="blog-link-date">24 червня 2023р.</p>
                    <p class="blog-link-title">
                      Оголошено нового героя в Dota 2!
                    </p>
                  </div>

                  <div class="blog-link-hidden">
                    <div class="blog-link-hidden-line"></div>
                    <p class="blog-link-hidden-text">
                      Незабаром відбудеться десята річниця повноцінного виходу
                      Dota 2 (так, ми працюємо над цікавинками до цієї події;
                      ні, ми точно не встигнемо до вказаної в Steam дати 9
                      липня).
                    </p>
                  </div>
                </div>

                <img class="blog-link-img" src="./images/blog/blog-1.png" />
              </a>
            </li>
            <li class="blog-item">
              <a class="blog-link">
                <div class="blog-link-block">
                  <div class="blog-link-info">
                    <p class="blog-link-date">24 червня 2023р.</p>
                    <p class="blog-link-title">
                      Оголошено нового героя в Dota 2!
                    </p>
                  </div>

                  <div class="blog-link-hidden">
                    <div class="blog-link-hidden-line"></div>
                    <p class="blog-link-hidden-text">
                      Незабаром відбудеться десята річниця повноцінного виходу
                      Dota 2 (так, ми працюємо над цікавинками до цієї події;
                      ні, ми точно не встигнемо до вказаної в Steam дати 9
                      липня).
                    </p>
                  </div>
                </div>

                <img class="blog-link-img" src="./images/blog/blog-1.png" />
              </a>
            </li>
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
            <div class="faq-item">
              <button class="faq-item-button">
                Як довго займає процес бусту мого аккаунту?
                <img
                  class="faq-item-button-icon"
                  alt="faq-item-icon"
                  src="./images/icons/arrow.svg"
                />
              </button>

              <div class="faq-item-content">
                <p class="faq-item-content-text">
                  Тривалість процесу бусту вашого аккаунту в Dota 2 залежить від
                  кількості ММР, яку ви бажаєте прокачати. Зазвичай, середня
                  тривалість бусту складає від кількох днів до кількох тижнів.
                  Проте, варто зазначити, що точний час може варіюватися в
                  залежності від наявності доступних бустерів та їх розкладу. Ми
                  завжди стежимо за тим, щоб забезпечити якісне та оперативне
                  виконання замовлень наших клієнтів.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-item-button">
                Як довго займає процес бусту мого аккаунту?
                <img
                  class="faq-item-button-icon"
                  alt="faq-item-icon"
                  src="./images/icons/arrow.svg"
                />
              </button>

              <div class="faq-item-content">
                <p class="faq-item-content-text">
                  Тривалість процесу бусту вашого аккаунту в Dota 2 залежить від
                  кількості ММР, яку ви бажаєте прокачати. Зазвичай, середня
                  тривалість бусту складає від кількох днів до кількох тижнів.
                  Проте, варто зазначити, що точний час може варіюватися в
                  залежності від наявності доступних бустерів та їх розкладу. Ми
                  завжди стежимо за тим, щоб забезпечити якісне та оперативне
                  виконання замовлень наших клієнтів.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-item-button">
                Як довго займає процес бусту мого аккаунту?
                <img
                  class="faq-item-button-icon"
                  alt="faq-item-icon"
                  src="./images/icons/arrow.svg"
                />
              </button>

              <div class="faq-item-content">
                <p class="faq-item-content-text">
                  Тривалість процесу бусту вашого аккаунту в Dota 2 залежить від
                  кількості ММР, яку ви бажаєте прокачати. Зазвичай, середня
                  тривалість бусту складає від кількох днів до кількох тижнів.
                  Проте, варто зазначити, що точний час може варіюватися в
                  залежності від наявності доступних бустерів та їх розкладу. Ми
                  завжди стежимо за тим, щоб забезпечити якісне та оперативне
                  виконання замовлень наших клієнтів.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-item-button">
                Як довго займає процес бусту мого аккаунту?
                <img
                  class="faq-item-button-icon"
                  alt="faq-item-icon"
                  src="./images/icons/arrow.svg"
                />
              </button>

              <div class="faq-item-content">
                <p class="faq-item-content-text">
                  Тривалість процесу бусту вашого аккаунту в Dota 2 залежить від
                  кількості ММР, яку ви бажаєте прокачати. Зазвичай, середня
                  тривалість бусту складає від кількох днів до кількох тижнів.
                  Проте, варто зазначити, що точний час може варіюватися в
                  залежності від наявності доступних бустерів та їх розкладу. Ми
                  завжди стежимо за тим, щоб забезпечити якісне та оперативне
                  виконання замовлень наших клієнтів.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-item-button">
                Як довго займає процес бусту мого аккаунту?
                <img
                  class="faq-item-button-icon"
                  alt="faq-item-icon"
                  src="./images/icons/arrow.svg"
                />
              </button>

              <div class="faq-item-content">
                <p class="faq-item-content-text">
                  Тривалість процесу бусту вашого аккаунту в Dota 2 залежить від
                  кількості ММР, яку ви бажаєте прокачати. Зазвичай, середня
                  тривалість бусту складає від кількох днів до кількох тижнів.
                  Проте, варто зазначити, що точний час може варіюватися в
                  залежності від наявності доступних бустерів та їх розкладу. Ми
                  завжди стежимо за тим, щоб забезпечити якісне та оперативне
                  виконання замовлень наших клієнтів.
                </p>
              </div>
            </div>
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
            <div class="footer-content-flex">
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

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/nouislider"></script>

    <script src="./js/range-two-calculator.js"></script>
    <script src="./js/clients.js"></script>
    <script src="./js/faq.js"></script>
    <script src="./js/hero-slider.js"></script>
    <script src="./js/calculator.js"></script>
  </body>
</html>