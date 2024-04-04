@php
    $employees = [
        '1' => [
            'name'          => 'Сафронов Николай',
            'info'          => 'Огромный опыт в выполнении самых сложных задач по сантехнике и электрике. Всегда найдет решение в любых нестандартных ситуациях. Профессионал своего дела и просто приятный человек.',
            'profi'         => 'Мастер-универсал',
            'in_company'    => 'c 11 декабря 2017',
            'work_month'    => '<b>0</b> работ за последний месяц',
            'experience'    => '<b>16</b> лет опыта',
            'date_of_birth' => '44 года',
            'poster'        => '1.png'
        ],
        '2' => [
            'name'          => 'Кириллов Александр',
            'info'          => 'Монтажник санитарно-технических систем и оборудования. Инженер-метролог',
            'profi'         => 'Сантехник-засорщик',
            'in_company'    => 'c 22 октября 2018',
            'work_month'    => '<b>40</b> работ за последний месяц',
            'experience'    => '<b>26</b> лет опыта',
            'date_of_birth' => '45 лет',
            'poster'        => '2.png'
        ],
        '3' => [
            'name'          => 'Кашперов Роман',
            'info'          => 'Окончил Горловский Политехнический техникум по специальности Слесарь-сантехник. Прошел курсы повышения квалификации по специальности Электромонтёр по ремонту обслуживанию электрооборудования',
            'profi'         => 'Мастер-универсал',
            'in_company'    => 'c 8 ноября 2017',
            'work_month'    => '<b>38</b> работ за последний месяц',
            'experience'    => '<b>12</b> лет опыта',
            'date_of_birth' => '48 лет',
            'poster'        => '3.png'
        ],
        
        '4' => [
            'name'          => 'Коробков Вячеслав',
            'info'          => 'Более 20 лет проработал в ЖЭКе. Был бригадиром и исполнял обязанности мастера участка. Перенимал опыт от наставников в советском союзе. Яркий представитель старой школы.',
            'profi'         => 'Мастер-универсал',
            'in_company'    => 'c 11 мая 2016',
            'work_month'    => '<b>17</b> работ за последний месяц',
            'experience'    => '<b>37</b> лет опыта',
            'date_of_birth' => '68 лет',
            'poster'        => '4.png'
        ],
        '5' => [
            'name'          => 'Водопьянов Вячеслав',
            'info'          => 'Специальность слесарь-сантехник. Работает в сфере сантехники свыше 15 лет. Имеет огромный опыт в выполнении самых разных по уровню сложности задач',
            'profi'         => 'Сантехник',
            'in_company'    => 'c 14 мая 2016',
            'work_month'    => '<b>11</b> работ за последний месяц',
            'experience'    => '<b>20</b> лет опыта',
            'date_of_birth' => '64 года',
            'poster'        => '5.png'
        ],
        '6' => [
            'name'          => 'Зюбровский Эдвард',
            'info'          => 'Опыт работ более 10 лет. Профессиональный мастер, который знает свое дело. Имеется опыт работы в ЖЭК',
            'profi'         => 'Электрик',
            'in_company'    => 'c 15 октября 2018',
            'work_month'    => '<b>10</b> работ за последний месяц',
            'experience'    => '<b>13</b> лет опыта',
            'date_of_birth' => '44 года',
            'poster'        => '6.png'
        ],
    ];
@endphp

<!-- Employees - сотрудники -->
<section class="ms-employees">
    <div class="ms-employees__bg" style="background-image: url('http://mastera2/images/backgrounds/6.png');"></div>

    <div class="container">
        <div class="ms-employees__wrapper">
            <div class="sectionSupTitle color_white">{{ __('Больше 200 мастеров подключены к сервису') }}</div>
            <div class="sectionTitle features__sectionTitle color_white">{{ __('Только лучшие мастера') }}</div>

            <div class="owl-carousel owl-theme ms-employees__block" data-owl_carousel="employees">
                @foreach($employees as $k => $v)
                    <div class="ms-employees__block__one">
                        <div class="ms-employees__poster">
                            <div class="ms-employees__poster__one" style="--background-image: url( {{ asset('images/employees/'.$v['poster']) }} )"></div>
                            <div class="ms-employees__poster__one">
                                <div class="ms-employees__experience__one">{!! $v['work_month'] !!}</div>
                                <div class="ms-employees__experience__one">{!! $v['experience'] !!}</div>
                            </div>
                        </div>
                        
                        <div class="ms-employees__content">
                            <div class="ms-employees__name">{{ $v['name'] }}</div>
                            
                            <div class="ms-employees__table">
                                <div class="ms-employees__line">
                                    <div class="ms-employees__line__one desc">{{ __('Возраст') }}:</div>
                                    <div class="ms-employees__line__one text">{{ $v['date_of_birth'] }}</div>
                                </div>
                                
                                <div class="ms-employees__line">
                                    <div class="ms-employees__line__one desc">{{ __('Специализация') }}:</div>
                                    <div class="ms-employees__line__one text">{{ $v['profi'] }}</div>
                                </div>
                                
                                <div class="ms-employees__line">
                                    <div class="ms-employees__line__one desc">{{ __('В компании') }}:</div>
                                    <div class="ms-employees__line__one text">{{ $v['in_company'] }}</div>
                                </div>
                            </div>
                            
                            <div class="ms-employees__info">
                                <div class="ms-employees__info__desc desc">{{ __('О себе') }}:</div>
                                <div class="ms-employees__info__text text">{{ $v['info'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="ms-review__send"><a class="btn btn_big btn_light btn_lightColor2 btn_submit fancybox-inline" href="#popupOrder" target="_self">{{ __('Оставить заявку') }} <span class="btn__blick"></span></a></div>
        </div>
    </div>
</section>