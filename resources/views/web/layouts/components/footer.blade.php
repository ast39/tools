<!-- Footer - подвал сайта -->
<section class="ms-footer">
    <div class="container">
        <div class="ms-footer__wrapper">
            <div class="ms-footer__wrapper__one flogo">
                <div class="ms-footer__logo">
                    <a href="#"><svg><use xlink:href="#site-logo4"></use></svg></a>
                </div>
                
                <div class="ms-footer__desc">{{ __('Центр Бытовых Услуг') }}</div>
            </div>
            
            <div class="ms-footer__wrapper__one fmenu">
                <div class="ms-footer__menu">
                    <div class="ms-footer__menu__one">
                        <div class="ms-footer__menu__head">{{ __('Пункт меню') }}</div>
                        <div class="ms-footer__menu__sub">
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 1') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 2') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 3') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 4') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 5') }}</a>
                        </div>
                    </div>
                    
                    <div class="ms-footer__menu__one">
                        <div class="ms-footer__menu__head">{{ __('Пункт меню') }}</div>
                        <div class="ms-footer__menu__sub">
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 1') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 2') }}</a>
                        </div>
                    </div>
                    
                    <div class="ms-footer__menu__one">
                        <div class="ms-footer__menu__head">{{ __('Пункт меню') }}</div>
                        <div class="ms-footer__menu__sub">
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 1') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 2') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 3') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Пункт 4') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="ms-footer__wrapper__one fsocial">
               <div class="ms-footer__menu">
                   <div class="ms-footer__menu__one">
                        <div class="ms-footer__menu__head">{{ __('Подписывайтесь на нас') }}</div>
                        <div class="ms-footer__menu__sub">
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Telegram') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Instagram') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Vkontakte') }}</a>
                            <a href="#" class="ms-footer__menu__sub__one">{{ __('Одноклассники') }}</a>
                        </div>
                    </div>
                </div>
                
                <div class="ms-footer__wrapper__smsocial">@include('web/components/social_ico')</div>
            </div>
            
            <div class="ms-footer__wrapper__one fcopyright">© {{ date('Y') }} YourFirm</div>
        </div>
    </div>
</section>