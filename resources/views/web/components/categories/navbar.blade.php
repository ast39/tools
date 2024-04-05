<section class="ms-categories">
    <div class="container">
        <div class="ms-categories__wrapper">
            <div class="ms-categories__content" data-mouse_scroll>
                @foreach($sphere->categories as $k => $cat)
                    <div class="ms-categories__one" data-open_link="#{{$k}}">{{ $cat['title'] }}</div>
                @endforeach
            </div>
        </div>
    </div>
</section>