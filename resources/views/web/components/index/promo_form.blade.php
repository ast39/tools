<div class="promoForm">
    <div class="promoForm__content color_white">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="promoForm__block d-flex flex-wrap flex-column justify-content-center align-items-center">
                        <div class="promoForm__title">{{ __('Сервис для вызова мастера') }}</div>
                        
                        <div class="promoForm__text">
                            <p><strong>{{ __('от 590 рублей') }}</strong></p>
                        </div>

                        <div class="ms-advantage">
                            <div class="ms-advantage__ico">
                                <div class="ms-advantage__ico__one">
                                    <svg><use xlink:href="#how_icon-01"></use></svg>
                                    <div class="ms-advantage__ico__text">{{ __('Бесплатный выезд') }}</div>
                                </div>
                                
                                <div class="ms-advantage__ico__one">
                                    <svg><use xlink:href="#how_icon-02"></use></svg>
                                    <div class="ms-advantage__ico__text">{{ __('Приезд 45 минут') }}</div>
                                </div>
                                
                                <div class="ms-advantage__ico__one">
                                    <svg><use xlink:href="#how_icon-03"></use></svg>
                                    <div class="ms-advantage__ico__text">{{ __('Гарантия до 3 лет') }}</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="promoForm__wrp">
                            <div role="form" class="wpcf7" id="wpcf7-f370-o1" lang="ru-RU" dir="ltr">
                                <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                
                                <form action="/#wpcf7-f370-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                    <div class="formContent">
                                        <div class="promoForm__field">
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input type="text" name="your-name" value="Ваше имя" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required formName" aria-required="true" aria-invalid="false">
                                            </span>
                                        </div>
                                        
                                        <div class="promoForm__field">
                                            <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required formPhone" aria-required="true" aria-invalid="false" placeholder="Ваш телефон *"></span>
                                        </div>
                                        
                                        <div class="promoForm__field formCheck_color_light">
                                            <span class="wpcf7-form-control-wrap accept">
                                                <span class="wpcf7-form-control wpcf7-acceptance">
                                                    <span class="wpcf7-list-item">
                                                        <label><input type="checkbox" name="accept" value="1" aria-invalid="false" checked="checked"><span class="wpcf7-list-item-label">Согласен с условиями <a href="/privacy-policy">Пользовательского соглашения</a></span></label>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                        
                                        <div class="promoForm__field promoForm__submit_light">
                                            <button type="submit" value="Отправить" class="btn btn_big btn_light btn_lightColor2 btn_submit">{{ __('Отправить') }} <span class="btn__blick"></span></button>
                                            
                                            <span class="ajax-loader hideLoader"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="formNote formNote_sent hideBlock">
                                        <div class="formNote__text formNote__text_sent">Ваша заявка была успешно отправлена, мы с Вами свяжемся в ближайшее время!</div>
                                    </div>
                                    
                                    <div class="formNote formNote_fail hideBlock">
                                        <div class="formNote__text formNote__text_fail">Ошибка при отправке заявки, попробуйте еще раз или обратитесь к администратору сайта!</div>
                                    </div>
                                    
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="promoForm__bg" style="background-image: url('{{ asset('images/backgrounds/3.jpg') }}');"></div>
</div>