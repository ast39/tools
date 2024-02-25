@php
    use Illuminate\Support\Facades\Cache;
    use App\Http\Libs\Helper;
@endphp

<div class="headerInfo">
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-6 col-xl-3 col-lg-4">
                <div class="headerInfo__block d-flex justify-content-xl-center align-items-center">
                    <div class="mainPageTitle d-flex flex-wrap justify-content-xl-center align-items-center">
                        <span class="siteLogo">
                            <a href="{{ route('web.home') }}">
                                <img src="https://mastera-ryadom.ru/wp-content/uploads/2019/12/logo-100x100.png" alt="Мастера рядом">
                            </a>
                        </span>

                        <span class="siteLogoText">
                            <a href="{{ route('web.home') }}">
                                <span class="siteLogoName">Название компании</span>
                                <span class="siteLogoTagline color_gray">Круглосуточно!</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-4 col-sm-6 col-xl-6 col-lg-2 order-3 order-xl-2">
                <div class="headerInfo__block d-flex justify-content-end justify-content-xl-center align-items-center">
                    <div class="headerTagline">
                        <p><strong>Название компании</strong> – Бесплатный выезд на дом, на каждом районе есть опытный мастер 24/7, работы любой сложности по адекватным ценам!</p>
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
                    @php $step = 0; @endphp

                    @foreach(Cache::get('menu')->toArray() as $punct)
                        @php $step++; @endphp

                        <li class="menu-item menu-item-type-post_type menu-item-object-page {{ ((!empty($punct['categories']))? 'menu-item-has-children' : '') }}">
                            <a href="{{ route('web.sphere.show', $punct['slug'] ?? 'home') }}">{{ $punct['title'] }}</a>

                            @if(!is_null($punct['categories']))
                                <ul class="sub-menu {{ ((count($punct['categories']) > 10)? 'two' : '') }} {{ ((count(Cache::get('menu')->toArray())/2 < $step)? 'right' : '') }}">
                                    @foreach($punct['categories'] as $cat)
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ route('web.category.show', [$punct['slug'] ?? 'home', $cat['slug'] ?? 'home']) }}">{{ $cat['title'] }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</div>

@include('web/components/modal/mobile_menu')
