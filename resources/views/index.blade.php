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
                <a href="{{route('/')}}" class="header-navigation__menu-link"> DotaBoost </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="{{route('/services')}}" class="header-navigation__menu-link"> Послуги </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="{{route('/about')}}" class="header-navigation__menu-link"> Про нас </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="{{route('/work')}}" class="header-navigation__menu-link"> Робота </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="{{route('/blog')}}" class="header-navigation__menu-link">
                  Блог
                </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="/" class="header-navigation__menu-link"> FAQ </a>
              </li>
            </ul>

            <div class="header-navigation__profile">
              <div class="header-navigation__profile-info">
                <div class="header-navigation__profile-info-block">
                  <img
                    class="header-navigation__profile-info-image"
                    alt="profile"
                    src="{{ Auth::user()->avatar ?? asset('images/profile-image.png') }}"
                  />
                  <p class="header-navigation__profile-info-name">{{ Auth::user()->name }}</p>
                  <button class="header-navigation__profile-info-notification">
                    <img
                      class="header-navigation__profile-info-notification-icon"
                      alt="profile-icon"
                      src="{{asset('images/icons/notifications.svg')}}"
                    />
                  </button>
                </div>

                <div class="header-navigation__profile-menu-block">
                  <div class="header-navigation__profile-menu">
                    <a
                      href="./cabinet.html"
                      class="header-navigation__profile-menu-button"
                    >
                      <img
                        class="header-navigation__profile-menu-button-icon"
                        src="./images/icons/account.svg"
                        alt="icon-menu"
                      />
                      Профіль
                    </a>
                    <button class="header-navigation__profile-menu-button">
                      <img
                        class="header-navigation__profile-menu-button-icon"
                        src="./images/icons/settings-profile.svg"
                        alt="icon-menu"
                      />
                      Налаштування
                    </button>
                    <button class="header-navigation__profile-menu-button">
                      <img
                        class="header-navigation__profile-menu-button-icon"
                        src="./images/icons/out-profile.svg"
                        alt="icon-menu"
                      />
                      Вихід
                    </button>
                  </div>
                </div>
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

          <div class="calculator__interface-elevated">
            <div class="calculator__interface-elevated-advanced">
              <div class="calculator__interface-elevated-advanced-lvl-first">
                <img
                  class="calculator__interface-elevated-advanced-lvl-first-img"
                  src="./images/lvl-first.png"
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

    <script src="{{asset('js/range-two-calculator.js')}}"></script>
    <script src="{{asset('js/clients.js')}}"></script>
    <script src="{{asset('js/faq.js')}}"></script>
    <script src="{{asset('js/hero-slider.js')}}"></script>
    <script src="{{asset('js/calculator.js')}}"></script>
  </body>
</html>