<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('styles/main.css')}}" />
  </head>
  <body
    style="
      background: linear-gradient(
          0deg,
          rgba(0, 0, 0, 0.6) 0%,
          rgba(0, 0, 0, 0.6) 100%
        ),
        url('./images/bg_work-us.png'), #181818 50% / cover no-repeat;
      background-position: top;
      background-repeat: no-repeat;
    "
  >
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

    <section class="work-us-hero">
      <div class="work-us-hero-block">
        <p class="work-us-hero-label">Робота з нами</p>
        <h1 class="work-us-hero-title">Заробляй граючи в Dota 2</h1>
        <h2 class="work-us-hero-second">
          Наше ком’юніті бустерів шукає нових людей!
        </h2>

        <button class="work-us-hero-button">
          Подати Заявку
          <img
            class="work-us-hero-button-icon"
            src="./images/icons/arrow_forward.svg"
          />
        </button>
      </div>
    </section>
    <section class="work-us-advantages">
      <div class="second-container">
        <h2 class="work-us-advantages-title">
          Мінімальні вимоги до вас, та максимальна віддача від нас!
        </h2>

        <div class="work-us-advantages-block">
          <div class="work-us-advantages-you">
            <div class="work-us-advantages-you-content">
              <div class="work-us-advantages-you-content-block">
                <img
                  class="work-us-advantages-you-content-image"
                  src="./images/lvl-first.png"
                />
                <p class="work-us-advantages-you-content-value">5500 ММР</p>
                <p class="work-us-advantages-you-content-text">
                  Середній Рейтинг
                </p>
              </div>
              <div class="work-us-advantages-you-content-block">
                <p class="work-us-advantages-you-content-value">4 години</p>
                <p class="work-us-advantages-you-content-text">
                  Робочого часу в день
                </p>
              </div>
            </div>
            <div class="work-us-advantages-you-decor">
              <div class="work-us-advantages-you-decor-line"></div>
              <p class="work-us-advantages-you-decor-text">Вимоги До Вас</p>
            </div>
          </div>
          <div class="work-us-advantages-our">
            <div class="work-us-advantages-our-content">
              <div class="work-us-advantages-our-content-block">
                <h3 class="work-us-advantages-our-content-title">Сервіс</h3>
                <p class="work-us-advantages-our-content-text">
                  Ми пропонуємо унікальний сервіс як для клієнтів так і для
                  бустерів. Наш сервіс використовує пряму апі інтеграцію з Dota
                  2, що дає змогу розробити унікальний продукт. Відстежуй
                  статистику своєї роботи, матчі що ти граєш та ще багато іншого
                  у воркспейсі бустера.
                </p>
              </div>
              <div class="work-us-advantages-our-content-block">
                <h3 class="work-us-advantages-our-content-title">Підтримка</h3>
                <p class="work-us-advantages-our-content-text">
                  Ми стежимо за вашими досягненнями та надаємо вам підтримку на
                  кожному етапі. Ми розробили комунікаційну система, яка
                  дозволяє вам легко зв'язатися як з нами, так і з клієнтом для
                  отримання додаткової інформації, вирішення питань чи отримання
                  підтримки.
                </p>
              </div>
              <div class="work-us-advantages-our-content-block">
                <h3 class="work-us-advantages-our-content-title">Винагороди</h3>
                <p class="work-us-advantages-our-content-text">
                  Конкурентні винагороди: Ми пропонуємо вам справедливу та
                  конкурентну систему винагород, яка враховує ваші зусилля та
                  вміння. Ви отримуєте винагороду за кожний отриманий ММР на
                  аккаунті, це дозволить вам отримувати стабільний дохід.
                </p>
              </div>
            </div>
            <div class="work-us-advantages-our-decor">
              <div class="work-us-advantages-our-decor-line"></div>
              <p class="work-us-advantages-our-decor-text">Віддача від Нас</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="work-us-order">
      <div class="second-container">
        <h2 class="work-us-order-title">Стати Бустером!</h2>
        <p class="work-us-order-desc">
          Заповніть заявку, і ми зв’яжемося з вами найближчим часом для
          консультації щодо умов працевлаштування.
        </p>
        <div class="work-us-order-block">
          <div class="work-us-order-form">
            <div class="work-us-order-form-personal">
              <label class="work-us-order-form-personal-label">
                <p class="work-us-order-form-personal-label-title">Ім’я</p>
                <input
                  class="work-us-order-form-personal-label-input"
                  placeholder="Ваше Ім’я"
                />
              </label>
              <label class="work-us-order-form-personal-label">
                <p class="work-us-order-form-personal-label-title">Прізвище</p>
                <input
                  class="work-us-order-form-personal-label-input"
                  placeholder="Ваше Прізвище"
                />
              </label>
              <label class="work-us-order-form-personal-label">
                <p class="work-us-order-form-personal-label-title">
                  Номер Телефону
                </p>
                <input
                  class="work-us-order-form-personal-label-input"
                  placeholder="Ваш Номер Телефону"
                />
              </label>
              <label class="work-us-order-form-personal-label">
                <p class="work-us-order-form-personal-label-title">
                  Електронна Пошта
                </p>
                <input
                  class="work-us-order-form-personal-label-input"
                  placeholder="Ваша Електронна Пошта"
                />
              </label>
              <label class="work-us-order-form-personal-label">
                <p class="work-us-order-form-personal-label-title">Telegram</p>
                <input
                  class="work-us-order-form-personal-label-input"
                  placeholder="Ваш Telegram"
                />
              </label>
            </div>
            <div class="work-us-order-form-game">
              <p class="work-us-order-form-game-title">Ігрова Інформація</p>

              <div class="work-us-order-form-game-gap">
                <div class="work-us-order-form-game-block">
                  <label class="work-us-order-form-game-label">
                    <p class="work-us-order-form-game-label-title">
                      Максимальна Кількість ММР
                    </p>
                    <input
                      class="work-us-order-form-game-label-input"
                      placeholder="Число"
                    />
                  </label>
                  <label class="work-us-order-form-game-label">
                    <p class="work-us-order-form-game-label-title">
                      Середня Кількість ММР
                    </p>
                    <input
                      class="work-us-order-form-game-label-input"
                      placeholder="Число"
                    />
                  </label>
                  <label class="work-us-order-form-game-label">
                    <p class="work-us-order-form-game-label-title">
                      Скільки часу готові працювати в день ?
                    </p>
                    <input
                      class="work-us-order-form-game-label-input"
                      placeholder="Кількість годин"
                    />
                  </label>
                </div>
                <label class="work-us-order-form-game-label">
                  <p class="work-us-order-form-game-label-title">
                    Досвід Роботи
                  </p>

                  <textarea
                    class="work-us-order-form-game-label-textarea"
                    placeholder="Досвід Роботи. Де працювали ? Як довго ? Результати ?"
                  ></textarea>
                </label>

                <div class="work-us-order-form-game-block">
                  <label class="work-us-order-form-game-file">
                    <p class="work-us-order-form-game-file-title">
                      Скріншот Статистики Dota 2
                    </p>

                    <div class="work-us-order-form-game-file-upload">
                      <input
                        type="file"
                        class="work-us-order-form-game-file-upload-input"
                      />
                      <p class="work-us-order-form-game-file-upload-text">
                        Прікрипити Скріншот
                      </p>
                    </div>
                  </label>

                  <label class="work-us-order-form-game-stream">
                    <p class="work-us-order-form-game-stream-title">
                      Чи маєте ви можливість стрімити ?
                    </p>

                    <input
                      class="work-us-order-form-game-stream-input"
                      placeholder="Так\Ні"
                    />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="work-us-order-submit">
            <button class="work-us-order-submit-button">
              Віправити Заявку
              <img
                class="work-us-order-submit-button-icon"
                src="./images/icons/send.svg"
              />
            </button>

            <div class="work-us-order-submit-accept">
              <label class="work-us-order-submit-accept-label">
                <input
                  class="work-us-order-submit-accept-label-checkbox"
                  type="checkbox"
                />

                <p class="work-us-order-submit-accept-label-text">
                  Я ознайомлений та згоден з
                  <a class="work-us-order-submit-accept-label-text-link"
                    >умови користування</a
                  >
                  та
                  <a class="work-us-order-submit-accept-label-text-link"
                    >політикою конфіденційності</a
                  >
                </p>
              </label>
              <label class="work-us-order-submit-accept-label">
                <input
                  class="work-us-order-submit-accept-label-checkbox"
                  type="checkbox"
                />

                <p class="work-us-order-submit-accept-label-text">
                  Я згоден з
                  <a class="work-us-order-submit-accept-label-text-link"
                    >обробкою моїх особистих данних</a
                  >
                </p>
              </label>
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
