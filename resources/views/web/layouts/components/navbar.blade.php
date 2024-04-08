@php
    use Illuminate\Support\Facades\Cache;
    use App\Http\Libs\Helper;
@endphp

<section class="sticky-header">
    <section class="ms-header">
        <div class="container">
            <div class="row">
                <div class="ms-header__contact">
                    <div class="ms-header__contact__one">
                        <div class="ms-header__phone">
                            <a href="{{ url('/') }}" class="ms-header__phone__one">
                                <div class="ms-header__phone__one__social logo"><svg><use xlink:href="#site-logo4"></use></svg></div>
                            </a>
                            
                            <a href="#" class="ms-header__phone__one">
                                <div class="ms-header__phone__one__social phone"><svg><use xlink:href="#social-phone"></use></svg></div>
                                <div class="ms-header__phone__one__social">+7(921)108-97-02</div>
                            </a>
                            
                            <a href="#" class="ms-header__phone__one">
                                <div class="ms-header__phone__one__social whatsapp"><svg><use xlink:href="#social-whatsapp2"></use></svg></div>
                                <div class="ms-header__phone__one__social">+7(921)108-97-02</div>
                            </a>
                        </div>
                    </div>

                    <div class="ms-header__contact__one">
                        <a class="btn btn_dark fancybox-inline" href="#popupOrder" data-type_id="0" target="_self">Оставить заявку</a>
                        
                        <div class="ms-header__menu__wrapper" data-open_blockm="mobilemenu" data-open_block_hidem>
                            <svg class="ms-header__menu"><use xlink:href="#site-menu"></use></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ms-menu" data-open_block_contentm="mobilemenu" data-open_block_content_hidem>
        <div class="container">
            <div class="row">
                <div class="ms-menu__wrapper">  
                    <div class="ms-menu__one">
                        <div class="ms-menu__list">
                            @php $step = 0; @endphp
                            
                            @foreach(Cache::get('menu')->toArray() as $k => $punct)
                                @php $step++; @endphp
                            
                                <div class="ms-menu__list__one">
                                    @if($punct['categories'])
                                        <div class="ms-menu__list__one__link sub" data-open_block="{{ 'menu'.$k }}" data-open_block_hide>{{ $punct['title'] }} <svg><use xlink:href="#site-cursor"></use></svg></div>
                                    
                                        <div class="ms-menu__list__one__sub {{ ((count($punct['categories']) > 10)? 'two' : '') }} {{ ((count(Cache::get('menu')->toArray())/2 < $step)? 'right' : '') }}" data-open_block_content="{{ 'menu'.$k }}" data-open_block_content_hide>
                                            <a href="{{ route('web.sphere.show', $punct['slug'] ?? 'home') }}" class="ms-menu__list__one__sub__one main">{{ $punct['title'] }}</a>
                                        
                                            @foreach($punct['categories'] as $cat)
                                                <a href="{{ route('web.category.show', [$punct['slug'] ?? 'home', $cat['slug'] ?? 'home']) }}" class="ms-menu__list__one__sub__one"><svg><use xlink:href="#site-cursor"></use></svg> <span>{{ $cat['title'] }}</span></a>
                                            @endforeach
                                        </div>
                                    @else
                                        <a href="{{ route('web.sphere.show', $punct['slug'] ?? 'home') }}" class="ms-menu__list__one__link">{{ $punct['title'] }}</a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>