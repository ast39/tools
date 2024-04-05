@php
    $photos = [
        '1' => ['img' => 'default_photos.jpg'],
        '2' => ['img' => 'default_photos.jpg'],
        '3' => ['img' => 'default_photos.jpg'],
        '4' => ['img' => 'default_photos.jpg'],
        '5' => ['img' => 'default_photos.jpg'],
        '6' => ['img' => 'default_photos.jpg'],
    ];
@endphp

<section class="ms-photos">
    <div class="container">
        <div class="owl-carousel owl-theme ms-photos__wrapper" data-owl_carousel="photos">
            @foreach($photos as $k => $v)
                <div class="ms-photos__wrapper__one">
                    <a href="{{ asset('images/'.$v['img']) }}" class="ms-photos__block" style="--background-image: url( {{ asset('images/'.$v['img']) }} )" data-fancybox="gallery"></a>
                </div>
            @endforeach
        </div>
    </div>
</section>