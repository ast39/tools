@php
    use App\Http\Libs\Helper;
@endphp

@php
    $services = [
        '1' => [
            'head'  => 'Ремонт бытовой техники',
            'text'  => 'Ремонт домашней бытовой техники: стиральных машин, посудомоечных машин, кухонной техники, газовых и микроволновых печей, утюгов, пылесосов и т.д.',
            'bg'    => '1.jpg',
            'price' => '990',
            'link'  => '#'
        ],
        '2' => [
            'head'  => 'Ремонт квартир',
            'text'  => 'Все виды отделки: штукатурка, шпатлевка, покраска стен и потолков, поклейка обоев, облицовка плиткой, укладка ламината, паркета, линолеума и т.д.',
            'bg'    => '2.jpg',
            'price' => '991',
            'link'  => '#'
        ],
        '3' => [
            'head'  => 'Обслуживание компаний',
            'text'  => 'Ремонт сложной электронной техники: компьютеров, ноутбуков, планшетов, мобильных телефонов, навигаторов, смарт-часов, систем "Умный дом" и т.д.',
            'bg'    => '3.jpg',
            'price' => '992',
            'link'  => '#'
        ],
        '4' => [
            'head'  => 'Услуги сантехника',
            'text'  => 'Все виды сантехнических работ: установка и ремонт смесителей, унитазов, раковин, установка радиаторов отопления, систем теплого пола, прокладка труб и т.д.',
            'price' => '993',
            'bg'    => '4.jpg',
            'link'  => '#'
        ],
        '5' => [
            'head'  => 'Услуги электрика',
            'text'  => 'Любые электротехнические работы: установка и ремонт розеток, выключателей, установка счетчиков, монтаж освещения и т.д.',
            'bg'    => '5.jpg',
            'price' => '994',
            'link'  => '#'
        ],
        '6' => [
            'head'  => 'Муж на час',
            'text'  => 'Сборка и ремонт мебели: шкафов-купе, диванов, кроватей, столов, тумбочек, кухонных гарнитуров, установка подвесных полок и т.д.',
            'bg'    => '6.jpg',
            'price' => '995',
            'link'  => '#'
        ]
    ];
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
                                    <div class="serviceBox__price">{{ __('Цена от') }} 990 {{ __('руб.') }}</div>
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