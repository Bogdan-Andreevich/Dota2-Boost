<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('styles/main.css')}}" />
  </head>
  <body>
    <header class="header">
      <div class="first-container">
        <div class="header-block">
          <nav class="header-navigation">
            <div class="header-navigation__logo">
              <a href="/" class="header-navigation__logo-link">
                <img
                  class="header-navigation__logo-link-icon"
                  src="./images/icons/logo-2.svg"
                  alt="logo"
                />
              </a>
            </div>

            <ul class="header-navigation__menu">
              <li class="header-navigation__menu-item">
                <a href="/" class="header-navigation__menu-link"> DotaBoost </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="/" class="header-navigation__menu-link"> Послуги </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="/" class="header-navigation__menu-link"> Про нас </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="/" class="header-navigation__menu-link"> Робота </a>
              </li>
              <li class="header-navigation__menu-item">
                <a href="./blog.html" class="header-navigation__menu-link">
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
                    src="./images/profile-image.png"
                  />
                  <p class="header-navigation__profile-info-name">Marakesh</p>
                  <button class="header-navigation__profile-info-notification">
                    <img
                      class="header-navigation__profile-info-notification-icon"
                      alt="profile-icon"
                      src="./images/icons/notifications.svg"
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

    <section class="cabinet-client-settings">
      <div class="second-container">
        <a href="./" class="cabinet-back">
          <img
            class="cabinet-back-img"
            alt="cabinet-back"
            src="./images/icons/arrow.svg"
          />
          Налаштування
        </a>
        <div class="cabinet-client-settings-block">
          <div class="cabinet-client-settings-nav">
            <button class="cabinet-client-settings-nav-button active">
              <img
                class="cabinet-client-settings-nav-button-icon"
                src="./images/icons/account.svg"
              />
              Аккаунт
            </button>
            <button class="cabinet-client-settings-nav-button">
              <img
                class="cabinet-client-settings-nav-button-icon"
                src="./images/icons/notifications.svg"
              />
              Повідомлення
            </button>
          </div>
          <div class="cabinet-client-settings-account">
            <p class="cabinet-client-settings-account-title">
              Персональна Інформація
            </p>

            <div class="cabinet-client-settings-account-wrapper">
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">
                  Нікнейм
                </p>
                <div class="cabinet-client-settings-account-label-block">
                  <input
                    class="cabinet-client-settings-account-label-input"
                    placeholder="Ваше Нікнейм"
                  />
                </div>
              </label>
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">
                  Телефон
                </p>
                <div class="cabinet-client-settings-account-label-block">
                  <span class="cabinet-client-settings-account-label-after"
                    >+380</span
                  >
                  <input
                    class="cabinet-client-settings-account-label-input"
                    placeholder="Ваш номер телефону"
                  />
                </div>
              </label>
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">Ім’я</p>
                <div class="cabinet-client-settings-account-label-block">
                  <input
                    class="cabinet-client-settings-account-label-input"
                    placeholder="Ваше Ім’я"
                  />
                </div>
              </label>
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">
                  Дата Народження
                </p>
                <div class="cabinet-client-settings-account-label-block">
                  <span class="cabinet-client-settings-account-label-after"
                    ><img
                      class="cabinet-client-settings-account-label-after-icon"
                      src="./images/icons/calendar_today.svg"
                  /></span>
                  <input
                    class="cabinet-client-settings-account-label-input"
                    placeholder="ДД/ММ/РРРР"
                  />
                </div>
              </label>
            </div>

            <p class="cabinet-client-settings-account-title">Зміна Паролю</p>

            <div class="cabinet-client-settings-account-wrapper">
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">
                  Ваш Пароль
                </p>
                <div class="cabinet-client-settings-account-label-block">
                  <input
                    class="cabinet-client-settings-account-label-input"
                    placeholder="Ваш Пароль"
                  />
                </div>
              </label>
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">
                  Новий Пароль
                </p>
                <div class="cabinet-client-settings-account-label-block">
                  <input
                    class="cabinet-client-settings-account-label-input"
                    placeholder="Ваш Новий Пароль"
                  />
                </div>
              </label>
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">
                  Повторіть Новий Пароль
                </p>
                <div class="cabinet-client-settings-account-label-block">
                  <input
                    class="cabinet-client-settings-account-label-input"
                    placeholder="Повторіть Новий Пароль"
                  />
                </div>
              </label>
            </div>

            <p class="cabinet-client-settings-account-title">З’вязок з вами</p>

            <div class="cabinet-client-settings-account-wrapper">
              <p class="cabinet-client-settings-account-text">
                Задля сервісу що ми надаємо, нам може знадобиться зв’язок з
                вами. Ці контакти не будуть використовуватись у рекламних цілях
                без вашого дозволу.
              </p>
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">
                  Ваш Телеграм
                </p>
                <div class="cabinet-client-settings-account-label-block">
                  <span
                    class="cabinet-client-settings-account-label-after"
                    style="
                      background: linear-gradient(
                        180deg,
                        #2ca4e0 0%,
                        #0d83bf 100%
                      );
                    "
                    ><img
                      class="cabinet-client-settings-account-label-after-icon"
                      src="./images/icons/telegram.svg"
                  /></span>

                  <input
                    class="cabinet-client-settings-account-label-input"
                    placeholder="@dotaboostua"
                  />
                </div>
              </label>
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">
                  Ваш Discord
                </p>
                <div class="cabinet-client-settings-account-label-block">
                  <span
                    class="cabinet-client-settings-account-label-after"
                    style="
                      background: linear-gradient(
                        180deg,
                        #5562f5 0%,
                        #5662f6 100%
                      );
                    "
                    ><img
                      class="cabinet-client-settings-account-label-after-icon"
                      src="./images/icons/discord.svg"
                  /></span>
                  <input
                    class="cabinet-client-settings-account-label-input"
                    placeholder="dotaboostua"
                  />
                </div>
              </label>
              <label class="cabinet-client-settings-account-label">
                <p class="cabinet-client-settings-account-label-title">
                  Наш Телеграм Бот
                </p>

                <button class="cabinet-client-settings-account-button-bot">
                  <img
                    class="cabinet-client-settings-account-button-bot-icon"
                    src="./images/icons/telegram.svg"
                  />
                  Авторизація в Боті
                </button>
              </label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
