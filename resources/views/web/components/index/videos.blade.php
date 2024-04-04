@php
    $videos = [
        '1' => [
            'head'   => 'Видео 1',
            'id_youtube'  => 'zGZ2z2xVHlE',
            'poster' => ''
        ],
        '2' => [
            'head'   => 'Видео 2',
            'id_youtube'  => 'zGZ2z2xVHlE',
            'poster' => ''
        ],
        '3' => [
            'head'   => 'Видео 3',
            'id_youtube'  => 'zGZ2z2xVHlE',
            'poster' => ''
        ],
        '4' => [
            'head'   => 'Видео 4',
            'id_youtube'  => 'zGZ2z2xVHlE',
            'poster' => ''
        ],
        '5' => [
            'head'   => 'Видео 5',
            'id_youtube'  => 'zGZ2z2xVHlE',
            'poster' => ''
        ],
        '6' => [
            'head'   => 'Видео 6',
            'id_youtube'  => 'zGZ2z2xVHlE',
            'poster' => ''
        ]
    ];
@endphp

<section class="ms-video" style="background-image: url('{{ asset('images/backgrounds/1.png') }}');">
    <div class="container">
        <div class="sectionSupTitle">Наши работы прозрачны</div>
        <div class="sectionTitle features__sectionTitle">Видео наших работ</div>
        
        <div class="owl-carousel owl-theme ms-video__wrapper" data-owl_carousel="videos">
            @foreach($videos as $k => $v)
                <div class="ms-video__wrapper__one">
                    <div class="ms-video__block" data-init_video data-video="{{ $v['id_youtube']}}"></div>
                    <div class="ms-video__text">{{ __($v['head']) }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>