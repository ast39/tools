<div class="popupBox mobilePopupBox">
    <div class="popupClose"></div>
    
    <div class="mobilePopupBox__content">
        <nav class="mobileNav">
            <ul class="mobileMenu">
                @php $step = 0; @endphp
                
                @foreach(Cache::get('menu')->toArray() as $punct)
                    @php $step++; @endphp
                    
                    <li class="menu-item menu-item-type-post_type menu-item-object-page {{ ((!empty($punct['categories']))? 'menu-item-has-children' : '') }}">
                        <a href="{{ route('web.electrician.index') }}">{{ $punct['title'] }}</a>
                        
                        @if(!empty($punct['categories']))
                            <ul class="sub-menu">
                                @foreach($punct['categories'] as $cat)
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ route('web.electrician.index') }}">{{ $cat['title'] }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        
        <div class="mobileContacts mobileBlock">
            <ul class="mobileContactsList">
                <li class="mobileContactsList__item">
                    <div class="vlign-middle"><a href="tel:8 (495)777-40-49">8 (495)777-40-49</a> <a href="https://api.whatsapp.com/send?phone=74957774049" class="vlign-middle">(Напишите нам в WhatsApp! <img src="https://mastera-ryadom.ru/wp-content/uploads/2020/10/wa-ico.png" width="30">)</a></div>
                </li>
                <li class="mobileContactsList__item"><a href="mailto:mastera-ryadom@mail.ru">mastera-ryadom@mail.ru</a></li>
                <li class="mobileContactsList__item">Москва и МО</li>
                <li class="mobileContactsList__item mobileContactsList__item_workHours">Круглосуточно</li>
            </ul>
        </div>
        
        <a class="btn btn_medium btn_light btn_lightColor2 mobileBlock mobilePhoneBtn fancybox-inline" href="#popupOrder" target="_self">Оставить заявку</a>
        
        <div class="mobileSocial mobileBlock">
            <ul class="social social_dark d-flex">
                <li class="social__item social__item_vk"><a href="#" target="_blank" title="Вконтакте"></a></li>
                <li class="social__item social__item_fb"><a href="#" target="_blank" title="Facebook"></a></li>
                <li class="social__item social__item_in"><a href="#" target="_blank" title="Instagram"></a></li>
                <li class="social__item social__item_yt"><a href="#" target="_blank" title="YouTube"></a></li>
                <li class="social__item social__item_tw"><a href="#" target="_blank" title="Twitter"></a></li>
            </ul>
        </div>
    </div>
</div>