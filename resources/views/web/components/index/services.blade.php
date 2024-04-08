@php
    use App\Http\Libs\Helper;
@endphp

<section class="section sectionPattern services" style="background-image: url('{{ asset('images/backgrounds/1.png') }}');">
    <div class="container">
        <div class="sectionSupTitle">{{ __('Чем мы занимаемся?') }}</div>
        <div class="sectionTitle services__sectionTitle">{{ __('Наши Услуги') }}</div>
        
        <div class="owl-carousel" data-owl_carousel="services">
            @foreach($spheres->toArray() as $k => $v)
                <div class="owl-one_services">
                    <div class="serviceBox" data-service_click>
                        <div class="serviceBox__front">
                            <div class="serviceBox__content">
                                <div class="serviceBox__title">{{ $v['title'] }}</div>
                                <div class="serviceBox__text color_gray">{{ Helper::getTrim($v['body'], 2) }}</div>
                                
                                <div class="serviceBox__btn">
                                    <div class="serviceBox__price">{{ __('Цена от') }} {{ Helper::getMinSum($categories->toArray(), $v['id']) }} {{ __('руб.') }}</div>
                                    <a class="btn btn_small btn_dark fancybox-inline" href="#popupOrder" data-type_id="{{ $v['id'] }}" target="_self" data-service_click__btn>{{ __('Оставить заявку') }} <span class="btn__blick"></span></a>
                                </div>
                            </div>
                            
                            <div class="serviceBox__bg" style="--background-image: url('{{ asset('images/services/plank/5.jpg') }}');"></div> 
                        </div>
                        
                        <div class="serviceBox__back">
                            <div class="serviceBox__content color_white">
                                <div class="serviceBox__title">{{ $v['title'] }}</div>
                                <div class="serviceBox__text">{{ Helper::getTrim($v['body'], 2) }}</div>
                                
                                <div class="serviceBox__btn">
                                    <a href="{{ route('web.sphere.show', $v['slug'] ?? 'home') }}" class="btn btn_small btn_light btn_lightColor2" data-service_click__btn>{{ __('Подробнее') }} <span class="btn__blick"></span></a>
                                </div>
                            </div>
                            
                            <div class="serviceBox__bg" style="--background-image: url('{{ asset('images/services/plank/5.jpg') }}');"></div> 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>