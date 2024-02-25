@php
    use Illuminate\Support\Facades\Cache;
@endphp

@foreach(Cache::get('menu') as $punct)
    <div>
        <h3>{{  $punct->title }}</h3>
        <p>{!! $punct->body !!}</p>
    </div>

@endforeach

<div class="headerInfo">
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-6 col-xl-3 col-lg-4">
                <div class="headerInfo__block d-flex justify-content-xl-center align-items-center">
                    <div class="mainPageTitle d-flex flex-wrap justify-content-xl-center align-items-center">
                        <span class="siteLogo">
                            <a href="/">
                                <img src="https://mastera-ryadom.ru/wp-content/uploads/2019/12/logo-100x100.png" alt="Мастера рядом">
                            </a>
                        </span>

                        <span class="siteLogoText">
                            <a href="/">
                                <span class="siteLogoName">Мастера рядом</span>
                                <span class="siteLogoTagline color_gray">Круглосуточно!</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-4 col-sm-6 col-xl-6 col-lg-2 order-3 order-xl-2">
                <div class="headerInfo__block d-flex justify-content-end justify-content-xl-center align-items-center">
                    <div class="headerTagline">
                        <p><strong>Мастера рядом</strong> – Бесплатный выезд на дом, на каждом районе есть опытный мастер 24/7, работы любой сложности по адекватным ценам!</p>
                    </div>

                    <div class="callBtnMobile">
                        <a onclick="ym(69262135,'reachGoal','tel'); return true;" href="tel:84957774049"><span>8 (495) 777-40-498</span></a>
                    </div>

                    <div class="burger">
                        <div class="burgerBar"></div>
                        <div class="burgerBar"></div>
                        <div class="burgerBar"></div>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-block col-xl-3 col-lg-6 order-2 order-xl-3">
                <div class="headerInfo__block headerInfo__block_middle d-flex flex-row flex-xl-column justify-content-between justify-content-xl-center align-items-center align-items-xl-end">
                    <div class="headerPhone">
                        <div class="headerPhoneText color_gray">
                            <a href="https://api.whatsapp.com/send?phone=74957774049"><div class="vlign-middle"><span>Напишите нам в WhatsApp!</span> <img src="https://mastera-ryadom.ru/wp-content/uploads/2020/10/wa-ico.png" width="30"></div></a>
                        </div>

                        <div class="headerPhoneNumber"><a href="tel:8 (495)777-40-49">8 (495)777-40-49</a></div>
                    </div>

                    <a class="btn btn_medium btn_dark headerPhoneBtn fancybox-inline" href="#popupOrder" target="_self">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>

    <div class="stickyNavWrp" style="">
        <div class="container">
            <nav class="headerNav d-flex align-items-center justify-content-center">
                <ul class="headerMenu d-flex">
                    <li id="menu-item-507" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-507">
                        <a href="https://mastera-ryadom.ru/elektrik/">Электрик</a>
                        <ul class="sub-menu two">
                            <li id="menu-item-537" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-537"><a href="https://mastera-ryadom.ru/elektrik/rozetka/">Розетка</a></li>
                            <li id="menu-item-538" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-538"><a href="https://mastera-ryadom.ru/elektrik/vyklyuchatel/">Выключатель</a></li>
                            <li id="menu-item-539" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-539"><a href="https://mastera-ryadom.ru/elektrik/svetilnik/">Светильники и Бра</a></li>
                            <li id="menu-item-536" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-536"><a href="https://mastera-ryadom.ru/elektrik/lyustra/">Люстра</a></li>
                            <li id="menu-item-561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-561"><a href="https://mastera-ryadom.ru/elektrik/elektroschetchiki/">Электросчетчики</a></li>
                            <li id="menu-item-541" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-541"><a href="https://mastera-ryadom.ru/elektrik/diagnostika-provodki/">Диагностика проводки</a></li>
                            <li id="menu-item-562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-562"><a href="https://mastera-ryadom.ru/elektrik/avtomaty-uzo/">Автоматы, УЗО</a></li>
                            <li id="menu-item-668" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-668"><a href="https://mastera-ryadom.ru/elektrik/sborka-elektroshhita/">Сборка электрощита</a></li>
                            <li id="menu-item-557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-557"><a href="https://mastera-ryadom.ru/elektrik/remont-elektroprovodki/">Ремонт электропроводки</a></li>
                            <li id="menu-item-558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-558"><a href="https://mastera-ryadom.ru/elektrik/zamena-elektroprovodki/">Электрика под ключ</a></li>
                            <li id="menu-item-1244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1244"><a href="https://mastera-ryadom.ru/elektrik/sborka-elekroshhita/">Разводка электрики</a></li>
                            <li id="menu-item-560" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-560"><a href="https://mastera-ryadom.ru/elektrik/shtroblenie-sten/">Штробление стен</a></li>
                        </ul>
                    </li>

                    <li id="menu-item-506" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-506">
                        <a href="https://mastera-ryadom.ru/santehnik/">Сантехник</a>
                        <ul class="sub-menu two">
                            <li id="menu-item-629" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-629"><a href="https://mastera-ryadom.ru/santehnik/ustranenie-techi/">Устранение течи</a></li>
                            <li id="menu-item-628" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-628"><a href="https://mastera-ryadom.ru/santehnik/ustranenie-zasorov/">Устранение засоров</a></li>
                            <li id="menu-item-618" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-567 current_page_item menu-item-618"><a href="https://mastera-ryadom.ru/santehnik/dushevaya-kabina/" aria-current="page">Душевая кабина</a></li>
                            <li id="menu-item-627" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-627"><a href="https://mastera-ryadom.ru/santehnik/unitaz/">Унитаз</a></li>
                            <li id="menu-item-619" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-619"><a href="https://mastera-ryadom.ru/santehnik/installyatsiya/">Инсталляция</a></li>
                            <li id="menu-item-626" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-626"><a href="https://mastera-ryadom.ru/santehnik/smesitel/">Смеситель</a></li>
                            <li id="menu-item-620" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="https://mastera-ryadom.ru/santehnik/mojka/">Мойка</a></li>
                            <li id="menu-item-625" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-625"><a href="https://mastera-ryadom.ru/santehnik/rakovina/">Раковина</a></li>
                            <li id="menu-item-613" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-613"><a href="https://mastera-ryadom.ru/santehnik/vanna/">Ванна</a></li>
                            <li id="menu-item-617" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-617"><a href="https://mastera-ryadom.ru/santehnik/dzhakuzi/">Джакузи</a></li>
                            <li id="menu-item-612" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-612"><a href="https://mastera-ryadom.ru/santehnik/bide/">Биде</a></li>
                            <li id="menu-item-622" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-622"><a href="https://mastera-ryadom.ru/santehnik/polotentsesushitel/">Полотенцесушитель</a></li>
                            <li id="menu-item-616" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-616"><a href="https://mastera-ryadom.ru/santehnik/gigienicheskij-dush/">Гигиенический душ</a></li>
                            <li id="menu-item-614" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-614"><a href="https://mastera-ryadom.ru/santehnik/vodyanye-schetchiki/">Водяные счетчики</a></li>
                            <li id="menu-item-615" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-615"><a href="https://mastera-ryadom.ru/santehnik/vodyanye-filtry/">Водяные фильтры</a></li>
                            <li id="menu-item-630" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-630"><a href="https://mastera-ryadom.ru/santehnik/otoplenie/">Отопление</a></li>
                            <li id="menu-item-624" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-624"><a href="https://mastera-ryadom.ru/santehnik/razvodka-trub/">Разводка труб</a></li>
                            <li id="menu-item-623" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-623"><a href="https://mastera-ryadom.ru/santehnik/razvodka-kanalizatsii/">Разводка канализации</a></li>
                        </ul>
                    </li>

                    <li id="menu-item-505" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-505"><a href="https://mastera-ryadom.ru/muzh-na-chas/">Муж на час</a></li>

                    <li id="menu-item-649" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-649"><a href="https://mastera-ryadom.ru/remont-bytovoj-tehniki/">Ремонт бытовой техники</a>
                        <ul class="sub-menu">
                            <li id="menu-item-650" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-650"><a href="https://mastera-ryadom.ru/muzh-na-chas/ustanovka-bytovoj-tehniki/">Установка бытовой техники</a></li>
                            <li id="menu-item-648" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-648"><a href="https://mastera-ryadom.ru/muzh-na-chas/ustanovka-i-remont-tv/">Установка и ремонт TV</a></li>
                        </ul>
                    </li>

                    <li id="menu-item-696" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-696"><a href="https://mastera-ryadom.ru/sborka-mebeli-2/">Сборка мебели</a></li>

                    <li id="menu-item-694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-694"><a href="https://mastera-ryadom.ru/otdelochnye-raboty/">Ремонт квартир</a>
                        <ul class="sub-menu right">
                            <li id="menu-item-647" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647"><a href="https://mastera-ryadom.ru/muzh-na-chas/ukladka-napolnyh-pokrytij/">Укладка напольных покрытий</a></li>
                            <li id="menu-item-646" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-646"><a href="https://mastera-ryadom.ru/muzh-na-chas/malyarnye-shtukaturnye-raboty/">Малярные, штукатурные работы</a></li>
                        </ul>
                    </li>

                    <li id="menu-item-2388" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2388"><a href="https://mastera-ryadom.ru/muzh-na-chas/plotnitskie-raboty/">Плотник</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@include('web/components/modal/mobile_menu')

<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="{{ route('web.home') }}">Главная</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.electrician.index') }}">Электрика</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.plumber.index') }}">Сантехника</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.husband.index') }}">Муж на час</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.technical.index') }}">Ремонт техники</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.furniture.index') }}">Сборка мебели</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.apartment.index') }}">Ремонт квартир</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.carpenter.index') }}">Работа с деревом</a></li>

            <li class="nav-item"><a class="nav-link" href="{{ route('web.services.index') }}">Наши услуги</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.reviews.index') }}">Отзывы клиентов</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.advantages.index') }}">Наши преимущества</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('web.contacts.index') }}">Наши контакты</a></li>
        </ul>
    </div>
</nav>
-->
