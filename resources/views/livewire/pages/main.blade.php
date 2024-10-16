<main class="main_pages center">
    <section class="main_pages__container1">
        <div class="main_pages__container1__background"></div>
        <div class="main_pages__container1__text">
            <h1 class="main_pages__container1__text__h1">Свежеобжаренный кофе</h1>
            <p class="main_pages__container1__text__p1">Кофе Калининградской обжарки из разных стран
                <br> произрастания с доставкой на дом.
            </p>
            <p class="main_pages__container1__text__p2">Мы обжариваем кофе <span style="font-weight: 700">каждые
                    выходные.</span>
            </p>
            <a class="main_pages__container1__text__a" href="#">Посмотреть каталог</a>
        </div>
        <div class="main_pages__container1__image">
            <img class="main_pages__container1__image__coffee_bean"
                src="{{ Vite::asset('resources/images/pages/main/main_pages__container1__image/coffee-bean.png') }}"
                alt="Зерна кофе">
            <img class="main_pages__container1__image__cappuccino_coffee"
                src="{{ Vite::asset('resources/images/pages/main/main_pages__container1__image/cappuccino-coffee.png') }}"
                alt="Кружка кофе капучино">
        </div>
    </section>
    <section class="main_pages__container2">
        <div class="main_pages__container2__background"></div>
        <div class="main_pages__container2__background_grains"></div>
        <h2 class="main_pages__container2__h2">Каталоги нашей продукции</h2>
        <div class="main_pages__container2__category_cards">
            <a href="/coffee_catalog" wire:navigate>
                <div class="main_pages__container2__category_cards__block">
                    <img class="main_pages__container2__category_cards__block__img"
                        src="{{ Vite::asset('resources/images/pages/main/main_pages__container2__category_cards/freshly-roasted-coffee.png') }}"
                        alt="#">
                    <p class="main_pages__container2__category_cards__block__text">Свежеобжаренный кофе</p>
                    <a class="main_pages __container2__category_cards__block__buy" href="#">Купить</a>
                </div>
            </a>
            <a href="/tea_catalog" wire:navigate>
                <div class="main_pages__container2__category_cards__block">
                    <img class="main_pages__container2__category_cards__block__img"
                        src="{{ Vite::asset('resources/images/pages/main/main_pages__container2__category_cards/tea-and-coffee-drinks.png') }}"
                        alt="#">
                    <p class="main_pages__container2__category_cards__block__text">Чай и кофейные напитки</p>
                    <a class="main_pages__container2__category_cards__block__buy" href="#">Купить</a>
                </div>
            </a>
            <a href="/vending_catalog" wire:navigate>
                <div class="main_pages__container2__category_cards__block">
                    <img class="main_pages__container2__category_cards__block__img"
                        src="{{ Vite::asset('resources/images/pages/main/main_pages__container2__category_cards/products-for-vending.png') }}"
                        alt="#">
                    <p class="main_pages__container2__category_cards__block__text">Продукция для вендинга</p>
                    <a class="main_pages__container2__category_cards__block__buy" href="#">Купить</a>
                </div>
            </a>
            <a href="/healthy_food_catalog" wire:navigate>
                <div class="main_pages__container2__category_cards__block">
                    <img class="main_pages__container2__category_cards__block__img"
                        src="{{ Vite::asset('resources/images/pages/main/main_pages__container2__category_cards/healthy-eating.png') }}"
                        alt="#">
                    <p class="main_pages__container2__category_cards__block__text">Здоровое питание</p>
                    <a class="main_pages__container2__category_cards__block__buy" href="#">Купить</a>
                </div>
            </a>
        </div>
    </section>
    <section class="main_pages__container3">
        <div class="main_pages__container3__text">
            <h2 class="main_pages__container3__text__h2">Товары со скидкой</h2>
            <p class="main_pages__container3__text__p">Наша компания предлагает покупать товар со скидкой не только в
                дни распродаж<br>
                или в течение действия ограниченных предложений, но и пользоваться скидками постоянно!</p>
        </div>
        <div class="main_pages__container3__slider">
            <a class="main_pages__container3__slider__left" href="#">
                <svg width="27.000000" height="13.000000" viewBox="0 0 27 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>
                        Created with Pixso.
                    </desc>
                    <defs />
                    <path id="Arrow 1"
                        d="M3.41 7L7.36 10.94C7.75 11.34 7.75 11.96 7.36 12.36C6.96 12.75 6.34 12.75 5.94 12.36L0.29 6.7C-0.11 6.31 -0.11 5.68 0.29 5.29L5.94 -0.37C6.34 -0.76 6.96 -0.76 7.36 -0.37C7.75 0.03 7.75 0.65 7.36 1.05L3.41 5L27 5L27 7L3.41 7Z"
                        fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                </svg>
            </a>
            <div class="main_pages__container3__slider__product_card">
                <div class="main_pages__container3__slider__product_card__header">
                    <div class="main_pages__container3__slider__product_card__header__discount">
                        <svg class="main_pages__container3__slider__product_card__header__discount__svg"
                            width="70.000000" height="70.000000" viewBox="0 0 90 90" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <desc>
                                Created with Pixso.
                            </desc>
                            <defs>
                                <filter id="filter_425_274_dd" x="0.000000" y="0.000000" width="90.000000"
                                    height="90.000000" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="0" dy="0" />
                                    <feGaussianBlur stdDeviation="3.33333" />
                                    <feComposite in2="hardAlpha" operator="out" k2="-1" k3="1" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.56078 0 0 0 0 0.56078 0 0 0 0 0.56078 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect_dropShadow_1" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect_dropShadow_1"
                                        result="shape" />
                                </filter>
                            </defs>
                            <g filter="url(#filter_425_274_dd)">
                                <circle id="Ellipse 6" cx="45.000000" cy="45.000000" r="45.000000" fill="#F9B300"
                                    fill-opacity="1.000000" />
                                <path id="%"
                                    d="M42.91 42.87Q43.67 42.49 44.3 41.86C45.42 40.74 45.98 39.37 45.98 37.73Q45.98 36.34 45.44 35.21Q45.03 34.35 44.3 33.64Q43.63 32.97 42.83 32.56Q41.62 31.96 40.1 31.96Q38.63 31.96 37.43 32.53Q36.58 32.94 35.87 33.64Q35.08 34.43 34.66 35.39Q34.19 36.46 34.19 37.73Q34.19 39.01 34.66 40.08Q35.08 41.03 35.87 41.83Q36.58 42.53 37.43 42.93Q38.63 43.51 40.1 43.51Q41.67 43.51 42.91 42.87ZM52.63 35.49L36.67 53.24L38.77 54.46L54.77 36.68L52.63 35.49ZM39.05 39.75Q38.75 39.59 38.49 39.34C38.1 38.9 37.9 38.36 37.9 37.73C37.9 37.1 38.1 36.58 38.49 36.16C38.91 35.74 39.44 35.53 40.07 35.53C40.7 35.53 41.22 35.74 41.64 36.16C42.06 36.58 42.27 37.1 42.27 37.73C42.27 38.36 42.06 38.9 41.64 39.34C41.22 39.76 40.7 39.97 40.07 39.97Q39.5 39.97 39.05 39.75ZM51.93 57.37C53.61 57.37 55.01 56.81 56.13 55.69Q56.93 54.89 57.35 53.94Q57.81 52.87 57.81 51.59Q57.81 50.32 57.35 49.25Q56.93 48.29 56.13 47.5C55.01 46.38 53.61 45.82 51.93 45.82C50.25 45.82 48.85 46.38 47.73 47.5Q46.94 48.29 46.52 49.25Q46.05 50.32 46.05 51.59Q46.05 52.87 46.52 53.94Q46.94 54.89 47.73 55.69C48.85 56.81 50.25 57.37 51.93 57.37ZM51.93 53.83C51.3 53.83 50.78 53.62 50.36 53.2C49.96 52.76 49.76 52.22 49.76 51.59C49.76 50.96 49.96 50.44 50.36 50.02C50.78 49.57 51.3 49.35 51.93 49.35C52.56 49.35 53.08 49.57 53.47 50.02C53.89 50.44 54.1 50.96 54.1 51.59Q54.1 52.04 53.95 52.42Q53.8 52.83 53.47 53.17C53.08 53.61 52.56 53.83 51.93 53.83Z"
                                    fill="#000000" fill-opacity="1.000000" fill-rule="evenodd" />
                            </g>
                        </svg>
                        <p class="main_pages__container3__slider__product_card__header__discount__p">Скидки</p>
                    </div>
                    <label>
                        <select class="main_pages__container3__slider__product_card__header__select" name="grams">
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="50">50 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="100">100 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="150">150 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="200">200 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="250">250 г
                            </option>
                        </select>
                    </label>
                </div>
                <div class="main_pages__container3__slider__product_card__main">
                    <img class="main_pages__container3__slider__product_card__main__ing"
                        src="{{ Vite::asset('resources/images/products/coffee/coffee.png') }}" alt="Пакет кофе">
                    <div class="main_pages__container3__slider__product_card__main__specifications">
                        <div class="main_pages__container3__slider__product_card__main__specifications__rating">
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star">
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__reviews">
                            <p>4.0 <span style="font-size: 14px; font-weight: 500; line-height: 16px;">(32
                                    отзыва)</span></p>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__roasting">
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__features">
                            <p>Кислинка</p>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__features__level">
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__features">
                            <p>Горчинка</p>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__features__level">
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__features">
                            <p>Насыщенность</p>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__features__level">
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_pages__container3__slider__product_card__footer">
                    <h3 class="main_pages__container3__slider__product_card__footer__text_name_h3">
                        Colombia Supremo
                    </h3>
                    <p class="main_pages__container3__slider__product_card__footer__text_description_p">
                        Свежеобжаренный кофе -<br> описание товара, вкус, аромат
                    </p>
                    <div class="main_pages__container3__slider__product_card__footer__form">
                        <div class="main_pages__container3__slider__product_card__footer__form__price">
                            <p class="main_pages__container3__slider__product_card__footer__form__price__no_discount">
                                350 &#8381</p>
                            <p class="main_pages__container3__slider__product_card__footer__form__price__discount">250
                                &#8381</p>
                        </div>
                        <form action="#">
                            @csrf
                            <button class="main_pages__container3__slider__product_card__footer__form__button"
                                type="submit">В корзину
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="main_pages__container3__slider__product_card">
                <div class="main_pages__container3__slider__product_card__header">
                    <div class="main_pages__container3__slider__product_card__header__discount">
                        <svg class="main_pages__container3__slider__product_card__header__discount__svg"
                            width="70.000000" height="70.000000" viewBox="0 0 90 90" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <desc>
                                Created with Pixso.
                            </desc>
                            <defs>
                                <filter id="filter_425_274_dd" x="0.000000" y="0.000000" width="90.000000"
                                    height="90.000000" filterUnits="userSpaceOnUse"
                                    color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="0" dy="0" />
                                    <feGaussianBlur stdDeviation="3.33333" />
                                    <feComposite in2="hardAlpha" operator="out" k2="-1" k3="1" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.56078 0 0 0 0 0.56078 0 0 0 0 0.56078 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect_dropShadow_1" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect_dropShadow_1"
                                        result="shape" />
                                </filter>
                            </defs>
                            <g filter="url(#filter_425_274_dd)">
                                <circle id="Ellipse 6" cx="45.000000" cy="45.000000" r="45.000000" fill="#F9B300"
                                    fill-opacity="1.000000" />
                                <path id="%"
                                    d="M42.91 42.87Q43.67 42.49 44.3 41.86C45.42 40.74 45.98 39.37 45.98 37.73Q45.98 36.34 45.44 35.21Q45.03 34.35 44.3 33.64Q43.63 32.97 42.83 32.56Q41.62 31.96 40.1 31.96Q38.63 31.96 37.43 32.53Q36.58 32.94 35.87 33.64Q35.08 34.43 34.66 35.39Q34.19 36.46 34.19 37.73Q34.19 39.01 34.66 40.08Q35.08 41.03 35.87 41.83Q36.58 42.53 37.43 42.93Q38.63 43.51 40.1 43.51Q41.67 43.51 42.91 42.87ZM52.63 35.49L36.67 53.24L38.77 54.46L54.77 36.68L52.63 35.49ZM39.05 39.75Q38.75 39.59 38.49 39.34C38.1 38.9 37.9 38.36 37.9 37.73C37.9 37.1 38.1 36.58 38.49 36.16C38.91 35.74 39.44 35.53 40.07 35.53C40.7 35.53 41.22 35.74 41.64 36.16C42.06 36.58 42.27 37.1 42.27 37.73C42.27 38.36 42.06 38.9 41.64 39.34C41.22 39.76 40.7 39.97 40.07 39.97Q39.5 39.97 39.05 39.75ZM51.93 57.37C53.61 57.37 55.01 56.81 56.13 55.69Q56.93 54.89 57.35 53.94Q57.81 52.87 57.81 51.59Q57.81 50.32 57.35 49.25Q56.93 48.29 56.13 47.5C55.01 46.38 53.61 45.82 51.93 45.82C50.25 45.82 48.85 46.38 47.73 47.5Q46.94 48.29 46.52 49.25Q46.05 50.32 46.05 51.59Q46.05 52.87 46.52 53.94Q46.94 54.89 47.73 55.69C48.85 56.81 50.25 57.37 51.93 57.37ZM51.93 53.83C51.3 53.83 50.78 53.62 50.36 53.2C49.96 52.76 49.76 52.22 49.76 51.59C49.76 50.96 49.96 50.44 50.36 50.02C50.78 49.57 51.3 49.35 51.93 49.35C52.56 49.35 53.08 49.57 53.47 50.02C53.89 50.44 54.1 50.96 54.1 51.59Q54.1 52.04 53.95 52.42Q53.8 52.83 53.47 53.17C53.08 53.61 52.56 53.83 51.93 53.83Z"
                                    fill="#000000" fill-opacity="1.000000" fill-rule="evenodd" />
                            </g>
                        </svg>
                        <p class="main_pages__container3__slider__product_card__header__discount__p">Скидки</p>
                    </div>
                    <label>
                        <select class="main_pages__container3__slider__product_card__header__select" name="grams">
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="50">50 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="100">100 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="150">150 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="200">200 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="250">250 г
                            </option>
                        </select>
                    </label>
                </div>
                <div class="main_pages__container3__slider__product_card__main">
                    <img class="main_pages__container3__slider__product_card__main__ing"
                        src="{{ Vite::asset('resources/images/products/coffee/coffee.png') }}" alt="Пакет кофе">
                    <div class="main_pages__container3__slider__product_card__main__specifications">
                        <div class="main_pages__container3__slider__product_card__main__specifications__rating">
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star">
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__reviews">
                            <p>4.0 <span style="font-size: 14px; font-weight: 500; line-height: 16px;">(32
                                    отзыва)</span></p>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__roasting">
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__features">
                            <p>Кислинка</p>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__features__level">
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__features">
                            <p>Горчинка</p>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__features__level">
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__features">
                            <p>Насыщенность</p>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__features__level">
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_pages__container3__slider__product_card__footer">
                    <h3 class="main_pages__container3__slider__product_card__footer__text_name_h3">
                        Colombia Supremo
                    </h3>
                    <p class="main_pages__container3__slider__product_card__footer__text_description_p">
                        Свежеобжаренный кофе -<br> описание товара, вкус, аромат
                    </p>
                    <div class="main_pages__container3__slider__product_card__footer__form">
                        <div class="main_pages__container3__slider__product_card__footer__form__price">
                            <p class="main_pages__container3__slider__product_card__footer__form__price__no_discount">
                                350 &#8381</p>
                            <p class="main_pages__container3__slider__product_card__footer__form__price__discount">250
                                &#8381</p>
                        </div>
                        <form action="#">
                            @csrf
                            <button class="main_pages__container3__slider__product_card__footer__form__button"
                                type="submit">В корзину
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="main_pages__container3__slider__product_card">
                <div class="main_pages__container3__slider__product_card__header">
                    <div class="main_pages__container3__slider__product_card__header__discount">
                        <svg class="main_pages__container3__slider__product_card__header__discount__svg"
                            width="70.000000" height="70.000000" viewBox="0 0 90 90" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <desc>
                                Created with Pixso.
                            </desc>
                            <defs>
                                <filter id="filter_425_274_dd" x="0.000000" y="0.000000" width="90.000000"
                                    height="90.000000" filterUnits="userSpaceOnUse"
                                    color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="0" dy="0" />
                                    <feGaussianBlur stdDeviation="3.33333" />
                                    <feComposite in2="hardAlpha" operator="out" k2="-1" k3="1" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.56078 0 0 0 0 0.56078 0 0 0 0 0.56078 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect_dropShadow_1" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect_dropShadow_1"
                                        result="shape" />
                                </filter>
                            </defs>
                            <g filter="url(#filter_425_274_dd)">
                                <circle id="Ellipse 6" cx="45.000000" cy="45.000000" r="45.000000" fill="#F9B300"
                                    fill-opacity="1.000000" />
                                <path id="%"
                                    d="M42.91 42.87Q43.67 42.49 44.3 41.86C45.42 40.74 45.98 39.37 45.98 37.73Q45.98 36.34 45.44 35.21Q45.03 34.35 44.3 33.64Q43.63 32.97 42.83 32.56Q41.62 31.96 40.1 31.96Q38.63 31.96 37.43 32.53Q36.58 32.94 35.87 33.64Q35.08 34.43 34.66 35.39Q34.19 36.46 34.19 37.73Q34.19 39.01 34.66 40.08Q35.08 41.03 35.87 41.83Q36.58 42.53 37.43 42.93Q38.63 43.51 40.1 43.51Q41.67 43.51 42.91 42.87ZM52.63 35.49L36.67 53.24L38.77 54.46L54.77 36.68L52.63 35.49ZM39.05 39.75Q38.75 39.59 38.49 39.34C38.1 38.9 37.9 38.36 37.9 37.73C37.9 37.1 38.1 36.58 38.49 36.16C38.91 35.74 39.44 35.53 40.07 35.53C40.7 35.53 41.22 35.74 41.64 36.16C42.06 36.58 42.27 37.1 42.27 37.73C42.27 38.36 42.06 38.9 41.64 39.34C41.22 39.76 40.7 39.97 40.07 39.97Q39.5 39.97 39.05 39.75ZM51.93 57.37C53.61 57.37 55.01 56.81 56.13 55.69Q56.93 54.89 57.35 53.94Q57.81 52.87 57.81 51.59Q57.81 50.32 57.35 49.25Q56.93 48.29 56.13 47.5C55.01 46.38 53.61 45.82 51.93 45.82C50.25 45.82 48.85 46.38 47.73 47.5Q46.94 48.29 46.52 49.25Q46.05 50.32 46.05 51.59Q46.05 52.87 46.52 53.94Q46.94 54.89 47.73 55.69C48.85 56.81 50.25 57.37 51.93 57.37ZM51.93 53.83C51.3 53.83 50.78 53.62 50.36 53.2C49.96 52.76 49.76 52.22 49.76 51.59C49.76 50.96 49.96 50.44 50.36 50.02C50.78 49.57 51.3 49.35 51.93 49.35C52.56 49.35 53.08 49.57 53.47 50.02C53.89 50.44 54.1 50.96 54.1 51.59Q54.1 52.04 53.95 52.42Q53.8 52.83 53.47 53.17C53.08 53.61 52.56 53.83 51.93 53.83Z"
                                    fill="#000000" fill-opacity="1.000000" fill-rule="evenodd" />
                            </g>
                        </svg>
                        <p class="main_pages__container3__slider__product_card__header__discount__p">Скидки</p>
                    </div>
                    <label>
                        <select class="main_pages__container3__slider__product_card__header__select" name="grams">
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="50">50 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="100">100 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="150">150 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="200">200 г
                            </option>
                            <option class="main_pages__container3__slider__product_card__header__select__option"
                                value="250">250 г
                            </option>
                        </select>
                    </label>
                </div>
                <div class="main_pages__container3__slider__product_card__main">
                    <img class="main_pages__container3__slider__product_card__main__ing"
                        src="{{ Vite::asset('resources/images/products/coffee/coffee.png') }}" alt="Пакет кофе">
                    <div class="main_pages__container3__slider__product_card__main__specifications">
                        <div class="main_pages__container3__slider__product_card__main__specifications__rating">
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star_active">
                            </div>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__rating__star">
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__reviews">
                            <p>4.0 <span style="font-size: 14px; font-weight: 500; line-height: 16px;">(32
                                    отзыва)</span></p>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__roasting">
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        Created with Pixso.
                                    </desc>
                                    <defs />
                                    <path id="Vector"
                                        d="M0.8 16.06C-1.03 12.84 0.22 7.79 4 4.02C8.3 -0.27 14.24 -1.29 17.28 1.73C17.28 1.74 17.28 1.74 17.29 1.75C16.68 3.51 14.75 7.26 8.95 9.28C3.64 11.14 1.59 14.1 0.8 16.06ZM18.13 2.84C17.67 3.91 16.87 5.3 15.49 6.68C14.1 8.06 12.13 9.42 9.34 10.4C3.68 12.38 2.1 15.62 1.65 17.19C1.67 17.21 1.69 17.24 1.71 17.26C4.75 20.28 10.69 19.26 14.99 14.97C18.81 11.16 20.04 6.05 18.13 2.84Z"
                                        fill="#505050" fill-opacity="1.000000" fill-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__features">
                            <p>Кислинка</p>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__features__level">
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__features">
                            <p>Горчинка</p>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__features__level">
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                            </div>
                        </div>
                        <div class="main_pages__container3__slider__product_card__main__specifications__features">
                            <p>Насыщенность</p>
                            <div
                                class="main_pages__container3__slider__product_card__main__specifications__features__level">
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__active">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                                <div
                                    class="main_pages__container3__slider__product_card__main__specifications__features__level__inactive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_pages__container3__slider__product_card__footer">
                    <h3 class="main_pages__container3__slider__product_card__footer__text_name_h3">
                        Colombia Supremo
                    </h3>
                    <p class="main_pages__container3__slider__product_card__footer__text_description_p">
                        Свежеобжаренный кофе -<br> описание товара, вкус, аромат
                    </p>
                    <div class="main_pages__container3__slider__product_card__footer__form">
                        <div class="main_pages__container3__slider__product_card__footer__form__price">
                            <p class="main_pages__container3__slider__product_card__footer__form__price__no_discount">
                                350 &#8381</p>
                            <p class="main_pages__container3__slider__product_card__footer__form__price__discount">250
                                &#8381</p>
                        </div>
                        <form action="#">
                            @csrf
                            <button class="main_pages__container3__slider__product_card__footer__form__button"
                                type="submit">В корзину
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <a class="main_pages__container3__slider__right" href="#">
                <svg width="28.000000" height="13.000000" viewBox="0 0 28 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>
                        Created with Pixso.
                    </desc>
                    <defs />
                    <path id="Arrow 1"
                        d="M23.58 5L19.63 1.05C19.24 0.65 19.24 0.03 19.63 -0.37C20.03 -0.76 20.65 -0.76 21.05 -0.37L26.7 5.29C27.1 5.68 27.1 6.31 26.7 6.7L21.05 12.36C20.65 12.75 20.03 12.75 19.63 12.36C19.24 11.96 19.24 11.34 19.63 10.94L23.58 7L0 7L0 5L23.58 5Z"
                        fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                </svg>
            </a>
        </div>
        <div class="main_pages__container3__all_discounts">
            <a class="" href="#">Смотреть все</a>
        </div>
    </section>
    <section class="main_pages__container4">
        <div class="main_pages__container4__background_1"></div>
        <div class="main_pages__container4__background_2"></div>
        <div class="main_pages__container4__background_3"></div>
        <div class="main_pages__container4__img">
            <img class="main_pages__container4__img__coffee_beans"
                src="{{ Vite::asset('resources/images/pages/main/main_pages__container4__content/coffee-beans.png') }}"
                alt="#">
            <img class="main_pages__container4__img__cup_coffee"
                src="{{ Vite::asset('resources/images/pages/main/main_pages__container4__content/cup-coffee.png') }}"
                alt="#">
        </div>
        <div class="main_pages__container4__description">
            <h2 class="main_pages__container4__description__text_h2">Почему стоит работать<br> именно с нами?</h2>
            <div class="main_pages__container4__description__block">
                <div class="main_pages__container4__description__block__circle">
                    <img src="{{ Vite::asset('resources/images/pages/main/main_pages__container4__content/Vector.png') }}"
                        alt="#">
                </div>
                <div class="main_pages__container4__description__block__text">
                    <h3 class="main_pages__container4__description__block__text__h3">
                        Всегда свежая обжарка
                    </h3>
                    <p class="main_pages__container4__description__block__text__p">
                        Подбор степени обжарки под каждый сорт кофе. Всегда свежая обжарка.
                    </p>
                </div>
            </div>
            <div class="main_pages__container4__description__block">
                <div class="main_pages__container4__description__block__circle">
                    <img src="{{ Vite::asset('resources/images/pages/main/main_pages__container4__content/Vector2.png') }}"
                        alt="#">
                </div>
                <div class="main_pages__container4__description__block__text">
                    <h3 class="main_pages__container4__description__block__text__h3">
                        Лучшие цены на продукцию
                    </h3>
                    <p class="main_pages__container4__description__block__text__p">
                        Благодаря крупным объемам производства мы даем лучшие цены на нашу продукцию.
                </div>
            </div>
            <div class="main_pages__container4__description__block">
                <div class="main_pages__container4__description__block__circle">
                    <img src="{{ Vite::asset('resources/images/pages/main/main_pages__container4__content/Vector3.png') }}"
                        alt="#">
                </div>
                <div class="main_pages__container4__description__block__text">
                    <h3 class="main_pages__container4__description__block__text__h3">
                        Консультации 24/7
                    </h3>
                    <p class="main_pages__container4__description__block__text__p">
                        Наши специалисты готовы всегда помочь и подсказать вам с выбором кофе или другой продукции.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="main_pages__container5">
        <div class="main_pages__container5__background_1"></div>
        <div class="main_pages__container5__background_2"></div>
        <h2 class="main_pages__container5__text_h2">Как мы обжариваем наш кофе :</h2>
        <p class="main_pages__container5__text_p">Компания Нью Рефайнинг Груп находится в г. Калининграде и имеет свой
            склад и представительство в Москве.
            Завод работает на рынке свежеобжаренного кофе и растворимой продукции более 15 лет. Завод имеет немецкое
            оборудование марки Probat по обжарке кофе и итальянские агломераторы для производства растворимой
            продукции.<br>
            <br>
            Кофе поставляется в контейнерах напрямую с плантаций по всему миру. Компания имеет долгосрочные контракты по
            поставке продукции. Каждая партия проходит строгий контроль на заводе для проверки зерна. Зеленое зерно
            обжаривается, проходит процесс дегазации и тут же отправляется клиентам. Наши обжарщики прошли обучение в
            России и за рубежом. У нас свой подход к каждой партии зерна. <br><br> Мы раскрываем вкус каждого сорта
            кофе.
        </p>
        <a class="main_pages__container5__link" href="#">Перейти в каталог</a>
    </section>
    <section class="main_pages__container6">
        <div class="main_pages__container6__background1"></div>
        <div class="main_pages__container6__background2"></div>
        <div class="main_pages__container6__text">
            <h2 class="main_pages__container6__text__h2">Новости компании</h2>
            <a class="main_pages__container6__text__a" href="#">Читать все</a>
        </div>
        <div class="main_pages__container6__news">
            <div class="main_pages__container6__news__container">
                <img class="main_pages__container6__news__container__img"
                    src="{{ Vite::asset('resources/images/pages/main/main_pages__container6__content/tanzania-arabica-aa.png') }}"
                    alt="#">
                <div class="main_pages__container6__news__container__description">
                    <div>
                        <h3 class="main_pages__container6__news__container__description__h3">
                            Танзанийский кофе. Откуда он взялся и почему мы его так любим?
                        </h3>
                        <br>
                        <p class="main_pages__container6__news__container__description__p">
                            Танзания – красивая африканская страна.
                            Именно здесь расположены легендарные географические объекты – вулкан Килиманджаро и озеро
                            Виктория. <br><br>
                            Но наш интерес вызван не столько природными красотами, сколько кофе...
                        </p>
                        <br>
                        <a class="main_pages__container6__news__container__description__a" href="#">
                            Подробнее
                            <svg width="14.000000" height="9.000000" viewBox="0 0 14 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs />
                                <path id="Arrow 2"
                                    d="M11.18 4.75L0 4.75L0 3.25L11.18 3.25L8.22 0.28C7.93 -0.01 7.93 -0.48 8.22 -0.78C8.52 -1.07 8.99 -1.07 9.28 -0.78L13.53 3.46C13.82 3.76 13.82 4.23 13.53 4.53L9.28 8.77C8.99 9.06 8.52 9.06 8.22 8.77C7.93 8.47 7.93 8 8.22 7.71L11.18 4.75Z"
                                    fill="#F9B300" fill-opacity="1.000000" fill-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main_pages__container6__news__container">
                <div class="main_pages__container6__news__container__description">
                    <div>
                        <h3 class="main_pages__container6__news__container__description__h3">
                            Африканский кофе Кения АА
                        </h3>
                        <br>
                        <p class="main_pages__container6__news__container__description__p">
                            Кения АА – у этого кофе, из африканской страны, репутация одного из самых вкусных и ярких
                            сортов в мире. Многие обжарщики высоко оценивают местные разновидности высокогорной арабики.
                        </p>
                        <br>
                        <a class="main_pages__container6__news__container__description__a" href="#">
                            Подробнее
                            <svg width="14.000000" height="9.000000" viewBox="0 0 14 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs />
                                <path id="Arrow 2"
                                    d="M11.18 4.75L0 4.75L0 3.25L11.18 3.25L8.22 0.28C7.93 -0.01 7.93 -0.48 8.22 -0.78C8.52 -1.07 8.99 -1.07 9.28 -0.78L13.53 3.46C13.82 3.76 13.82 4.23 13.53 4.53L9.28 8.77C8.99 9.06 8.52 9.06 8.22 8.77C7.93 8.47 7.93 8 8.22 7.71L11.18 4.75Z"
                                    fill="#F9B300" fill-opacity="1.000000" fill-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main_pages__container6__news__container">
                <div class="main_pages__container6__news__container__description">
                    <div>
                        <h3 class="main_pages__container6__news__container__description__h3">
                            Африканский кофе Кения АА
                        </h3>
                        <br>
                        <p class="main_pages__container6__news__container__description__p">
                            Кения АА – у этого кофе, из африканской страны, репутация одного из самых вкусных и ярких
                            сортов в мире. Многие обжарщики высоко оценивают местные разновидности высокогорной арабики.
                        </p>
                        <br>
                        <a class="main_pages__container6__news__container__description__a" href="#">
                            Подробнее
                            <svg width="14.000000" height="9.000000" viewBox="0 0 14 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs />
                                <path id="Arrow 2"
                                    d="M11.18 4.75L0 4.75L0 3.25L11.18 3.25L8.22 0.28C7.93 -0.01 7.93 -0.48 8.22 -0.78C8.52 -1.07 8.99 -1.07 9.28 -0.78L13.53 3.46C13.82 3.76 13.82 4.23 13.53 4.53L9.28 8.77C8.99 9.06 8.52 9.06 8.22 8.77C7.93 8.47 7.93 8 8.22 7.71L11.18 4.75Z"
                                    fill="#F9B300" fill-opacity="1.000000" fill-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main_pages__container6__news__container">
                <img class="main_pages__container6__news__container__img"
                    src="{{ Vite::asset('resources/images/pages/main/main_pages__container6__content/tanzania-arabica-aa.png') }}"
                    alt="#">
                <div class="main_pages__container6__news__container__description">
                    <div>
                        <h3 class="main_pages__container6__news__container__description__h3">
                            Танзанийский кофе. Откуда он взялся и почему мы его так любим?
                        </h3>
                        <br>
                        <p class="main_pages__container6__news__container__description__p">
                            Танзания – красивая африканская страна.
                            Именно здесь расположены легендарные географические объекты – вулкан Килиманджаро и озеро
                            Виктория. <br><br>
                            Но наш интерес вызван не столько природными красотами, сколько кофе...
                        </p>
                        <br>
                        <a class="main_pages__container6__news__container__description__a" href="#">
                            Подробнее
                            <svg width="14.000000" height="9.000000" viewBox="0 0 14 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs />
                                <path id="Arrow 2"
                                    d="M11.18 4.75L0 4.75L0 3.25L11.18 3.25L8.22 0.28C7.93 -0.01 7.93 -0.48 8.22 -0.78C8.52 -1.07 8.99 -1.07 9.28 -0.78L13.53 3.46C13.82 3.76 13.82 4.23 13.53 4.53L9.28 8.77C8.99 9.06 8.52 9.06 8.22 8.77C7.93 8.47 7.93 8 8.22 7.71L11.18 4.75Z"
                                    fill="#F9B300" fill-opacity="1.000000" fill-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main_pages__container7">
        <div class="main_pages__container7__header">
            <h2>Мы в Instagram</h2>
            <svg width="86.000000" height="86.000000" viewBox="0 0 86 86" fill="none"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>
                    Created with Pixso.
                </desc>
                <defs />
                <path id="Vector"
                    d="M0 43C0 19.25 19.25 0 43 0C66.74 0 86 19.25 86 43C86 66.74 66.74 86 43 86C19.25 86 0 66.74 0 43ZM66.39 59.17C67 57.6 67.42 55.8 67.54 53.17C67.66 50.54 67.69 49.7 67.69 43C67.69 36.29 67.66 35.45 67.54 32.82C67.42 30.19 67 28.39 66.39 26.82C65.77 25.17 64.8 23.68 63.54 22.45C62.31 21.19 60.82 20.22 59.17 19.6C57.6 18.99 55.8 18.57 53.17 18.45C50.54 18.33 49.7 18.3 43 18.3C36.29 18.3 35.45 18.33 32.82 18.45C30.19 18.57 28.39 18.99 26.82 19.6C25.17 20.22 23.68 21.19 22.45 22.45C21.19 23.68 20.22 25.17 19.6 26.82C18.99 28.39 18.57 30.19 18.45 32.82C18.33 35.45 18.3 36.29 18.3 43C18.3 49.7 18.33 50.54 18.45 53.18C18.57 55.8 18.99 57.6 19.6 59.17C20.22 60.82 21.19 62.31 22.45 63.54C23.68 64.8 25.17 65.77 26.82 66.39C28.39 67 30.19 67.42 32.82 67.54C35.45 67.66 36.29 67.69 43 67.69C49.7 67.69 50.54 67.66 53.18 67.54C55.8 67.42 57.6 67 59.17 66.39C62.49 65.11 65.11 62.49 66.39 59.17ZM62.24 28.43C61.85 27.36 61.22 26.39 60.4 25.59C59.6 24.77 58.63 24.14 57.56 23.75C56.69 23.41 55.38 23.01 52.97 22.9C50.37 22.78 49.59 22.75 43 22.75C36.4 22.75 35.62 22.78 33.02 22.9C30.61 23.01 29.3 23.41 28.43 23.75C27.36 24.14 26.39 24.77 25.59 25.59C24.77 26.39 24.14 27.36 23.75 28.43C23.41 29.3 23.01 30.61 22.9 33.02C22.78 35.62 22.75 36.4 22.75 43C22.75 49.59 22.78 50.37 22.9 52.97C23.01 55.38 23.41 56.69 23.75 57.56C24.14 58.63 24.77 59.6 25.59 60.4C26.39 61.22 27.36 61.85 28.43 62.24C29.3 62.58 30.61 62.98 33.02 63.09C35.62 63.21 36.4 63.24 42.99 63.24C49.59 63.24 50.37 63.21 52.97 63.09C55.38 62.98 56.69 62.58 57.56 62.24C59.71 61.41 61.41 59.71 62.24 57.56C62.58 56.69 62.98 55.38 63.09 52.97C63.21 50.37 63.24 49.59 63.24 43C63.24 36.4 63.21 35.62 63.09 33.02C62.98 30.61 62.58 29.3 62.24 28.43ZM56.18 32.78C54.54 32.78 53.21 31.45 53.21 29.81C53.21 28.18 54.54 26.85 56.18 26.85C57.81 26.85 59.14 28.18 59.14 29.81C59.14 31.45 57.81 32.78 56.18 32.78ZM43 55.67C35.99 55.67 30.32 50 30.32 43C30.32 35.99 35.99 30.32 43 30.32C50 30.32 55.67 35.99 55.67 43C55.67 50 50 55.67 43 55.67ZM51.23 43C51.23 47.54 47.54 51.23 43 51.23C38.45 51.23 34.76 47.54 34.76 43C34.76 38.45 38.45 34.76 43 34.76C47.54 34.76 51.23 38.45 51.23 43Z"
                    fill="#F9B300" fill-opacity="1.000000" fill-rule="evenodd" />
            </svg>
        </div>
        <div class="main_pages__container7__background1"></div>
        <div class="main_pages__container7__main">
            <div class="main_pages__container7__main__iphone">
                <img class="main_pages__container7__main__iphone__1"
                    src="{{ Vite::asset('resources/images/pages/main/main_pages__container7__content/iphone-1.png') }}"
                    alt="iphone">
                <img class="main_pages__container7__main__iphone__2"
                    src="{{ Vite::asset('resources/images/pages/main/main_pages__container7__content/iphone-2.png') }}"
                    alt="iphone">
            </div>
            <div class="main_pages__container7__main__container">
                <div class="main_pages__container7__main__container__block"></div>
                <div class="main_pages__container7__main__container__block"></div>
                <div class="main_pages__container7__main__container__block"></div>
                <div class="main_pages__container7__main__container__block"></div>
                <div class="main_pages__container7__main__container__block"></div>
                <div class="main_pages__container7__main__container__block"></div>
                <a class="main_pages__container7__main__container__all" href="#">
                    <svg width="28.000000" height="13.000000" viewBox="0 0 28 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <desc>
                            Created with Pixso.
                        </desc>
                        <defs />
                        <path id="Arrow 1"
                            d="M23.58 5L19.63 1.05C19.24 0.65 19.24 0.03 19.63 -0.37C20.03 -0.76 20.65 -0.76 21.05 -0.37L26.7 5.29C27.1 5.68 27.1 6.31 26.7 6.7L21.05 12.36C20.65 12.75 20.03 12.75 19.63 12.36C19.24 11.96 19.24 11.34 19.63 10.94L23.58 7L0 7L0 5L23.58 5Z"
                            fill="#F9B300" fill-opacity="1.000000" fill-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>
