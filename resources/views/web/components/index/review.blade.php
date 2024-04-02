@php
    $reviews = [
        '1' => [
            'name' => 'Andrea Karlson',
            'rate' => 1,
            'text' => 'I am genuinely impressed with the quality of the recliner chair I bought. The comfort it provides is beyond compare, and the design perfectly complements our living room. What sets apart is not just their exceptional products but also their commitment to customer satisfaction. They went the extra mile to ensure I was completely satisfied with my purchase, which is a rarity in today`s market.'
        ],
        '2' => [
            'name' => 'Michael Roberts',
            'rate' => 5,
            'text' => 'I recently purchased a beautiful dining table and it has completely transformed our dining area. The craftsmanship and attention to detail are truly remarkable. The table is not only a functional piece of furniture but also a work of art that our family and guests admire. The process from selection to delivery was smooth, and the customer support team was incredibly helpful throughout.'
        ],
        '3' => [
            'name' => 'Marta Brown',
            'rate' => 3,
            'text' => 'My experience has been consistently outstanding. I`ve furnished my entire home with their products, and every piece has exceeded my expectations. From the bedroom to the home office, offers a wide range of stylish and well-crafted furniture. What truly sets them apart is their dedicated customer support.'
        ],
        '5' => [
            'name' => 'Andrea Karlson',
            'rate' => 1,
            'text' => 'I am genuinely impressed with the quality of the recliner chair I bought. The comfort it provides is beyond compare, and the design perfectly complements our living room. What sets apart is not just their exceptional products but also their commitment to customer satisfaction. They went the extra mile to ensure I was completely satisfied with my purchase, which is a rarity in today`s market.'
        ],
        '5' => [
            'name' => 'Michael Roberts',
            'rate' => 5,
            'text' => 'I recently purchased a beautiful dining table and it has completely transformed our dining area. The craftsmanship and attention to detail are truly remarkable. The table is not only a functional piece of furniture but also a work of art that our family and guests admire. The process from selection to delivery was smooth, and the customer support team was incredibly helpful throughout.'
        ],
        '6' => [
            'name' => 'Marta Brown',
            'rate' => 3,
            'text' => 'My experience has been consistently outstanding. I`ve furnished my entire home with their products, and every piece has exceeded my expectations. From the bedroom to the home office, offers a wide range of stylish and well-crafted furniture. What truly sets them apart is their dedicated customer support.'
        ]
    ];
@endphp

<!-- Review - отзывы -->
<section class="review">
    <div class="testimonials__bg" style="background-image: url('http://mastera2/images/backgrounds/2.jpg');"></div>
    <div class="site-wrapper">
        <div class="container">
            <div class="ms-review__wrapper">
                <div class="sectionSupTitle color_white">{{ __('Отзывы наших клиентов') }}</div>
                <div class="sectionTitle features__sectionTitle color_white">{{ __('Что говорят наши клиенты') }}</div>

                <div class="owl-carousel owl-theme ms-review__block" data-msowl_carousel="review">
                    @foreach($reviews as $k => $v)
                        <div class="ms-review__block__one">
                            <div class="ms-review__block__ico"><svg class="advantage-ico1"><use xlink:href="#reviews-ico1"></use></svg></div>
                            <div class="ms-review__block__text">{{ $v['text'] }}</div>
                            <div class="ms-review__block__data">
                                <div class="ms-review__block__data__one">{{ $v['name'] }}</div>
                                <div class="ms-review__block__data__one star">
                                    @for($i=0; $i<$v['rate']; $i++)
                                        <svg class="advantage-ico1"><use xlink:href="#reviews-ico2"></use></svg>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>