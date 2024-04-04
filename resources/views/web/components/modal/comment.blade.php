<div class="fancybox-hidden" style="display: none;">
    <div class="fancybox-inline-tmp" style="display: none;">
        <div id="popupComment" class="popupForm popupComment">
            <h2 class="popupTitle">Оставить отзыв</h2>
            
            <div role="form" class="wpcf7" id="wpcf7-f371-o3" lang="ru-RU" dir="ltr">
                <form action="/#wpcf7-f371-o3" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">

                    <div class="formContent">
                        <div class="popup-star" data-star_content="5">
                            <input type="hidden" name="rate" value="">
                            
                            <div class="popup-star__one">
                                @for($i=1; $i<=5; $i++)
                                    <div class="popup-star__ico" data-star_one="{{ $i }}"><svg><use xlink:href="#reviews-ico2"></use></svg></div>
                                @endfor
                            </div>
                            
                            <div class="popup-star__one">
                                <div class="popup-star__num" data-star_num></div>
                            </div>
                        </div>

                        <div class="popupForm__field"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required formName" aria-required="true" aria-invalid="false" placeholder="Ваше имя"></span></div>
                        
                        <div class="popupForm__field"><span class="wpcf7-form-control-wrap your-phone"><textarea name="your-phone" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" rows="4" cols="50" placeholder="Ваш отзыв"></textarea></span></div>

                        <div class="popupForm__submit promoForm__submit_dark"><input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit btn btn_big btn_dark btn_lightColor2 btn_submit"><span class="ajax-loader hideLoader"></span></div>
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