$(function() {
    let player_list = {};
    
    $(document).ready(function(){
        /* Функция обработки форм */
        funcForm();
        
        /* Функция открытия блока */
        funcOpenBlock();
        
        /* Функция открытия мобильного меню */
        funcOpenBlockM();
        
        /* Функция определения скроллинга страницы */
        funcScrollWindows();
        
        /* Функция смены типа каталога */
        funcChangeCatalog();
        
        /* функция разрешения скролить блок без ползунка */
        $("[data-mouse_scroll]").attachDragger();

        /* функция работа с модальными окнами */
        funcModal();
        
        /* функция работы с видео */
        funcVideo();
        
        /* Функция разворачивания карточки */
        funcOpenCard();
        
        /* функция запуска слайдеров */
        funcInitSlider();
        
        /* функция выборки рейтинга */
        funcStarRate();
        
        $('body').on('click', '[data-open_link]', function(){ window.location.href = $(this).data('open_link'); });
        
        setTimeout(function(){
            if($('.owl-item.cloned').find('[data-fancybox]').length > 0){
                $('.owl-item.cloned').find('[data-fancybox]').each(function(){
                    let block = $(this);
                    block.removeAttr('data-fancybox');
                });
            }
        }, 1000);
    });
    
    /* ------------------------- Функция обработки форм ------------------------- */
    function funcForm(){
        $('body').on('click', '[href="#popupOrder"]', function(){
            $('[data-form_modal="order"]').find('input[name="type_id"]').val($(this).data('type_id'));
        });
        
        $('body').on('submit', '[data-form]', function() {
            let form = $(this),
                form_data = collectFormData(form);
                form_btn = form.find('[type="submit"]'),
                form_color_load = (typeof form.attr('data-color_load') !== 'undefined') ? form.data('color_load') : '',
                form_alert = form.find('[data-alert]');
            
            form_alert.addClass('hide').removeClass('success').html('');
            
            $.ajax({
                type: form.data('type'),
                url: form.data('action'),
                data: form_data,
                dataType: "json",
                contentType: false,
                processData:false,
                beforeSend: function(){
                    form_btn.addClass('loadblock ' + form_color_load + ' s50');
                },
                success:function(msg) {
                    if(msg.error){
                        form_alert.removeClass('hide').html(msg.error);
                    } else {
                        form_alert.addClass('success').removeClass('hide').html(msg.success);
                    }

                    form_btn.removeClass('loadblock ' + form_color_load + ' s50');
                },
                error:function(msg) {
                    form_alert.removeClass('hide').html(msg.error);
                    form_btn.removeClass('loadblock ' + form_color_load + ' s50');
                }
            });
            
            return false;
        });
        
        /* сбор данных формы */
        function collectFormData(form){
            let result = new FormData();

            form.find('input[name], textarea[name], select[name]').each(function(){
                let block = $(this),
                    type = this.tagName.toLowerCase(),
                    name = block.attr('name'),
                    text = '';

                if (type == 'input' && block.attr('type') == 'file'){
                    result.append(name, block.prop('files')[0]);
                } else if (type == 'input' && $.inArray(block.attr('type'), ['checkbox', 'radio']) !== -1 && block.is(':checked')) {
                    result.append(name, block.val());
                } else {
                    if($.inArray(block.attr('type'), ['checkbox', 'radio']) === -1){
                        result.append(name, block.val());
                    }
                }
            });

            return result;
        }
    }

    /* ------------------------- функция выборки рейтинга ------------------------- */
    function funcStarRate(){
        if($('[data-star_content]').length > 0){
            $('[data-star_content]').each(function(){ starRate($(this), parseFloat($(this).data('star_content'))); });
        }
        
        $('body').on('click', '[data-star_one]', function(){ starRate($(this).parents('[data-star_content]'), parseFloat($(this).data('star_one'))); });
        
        function starRate(content, rate){
            content.find('input').val(rate);
            content.find('[data-star_num]').html(rate);
            content.find('[data-star_one]').removeClass('active');
            
            content.find('[data-star_one]').each(function(){
                let block = $(this),
                    rate_one = parseFloat(block.data('star_one'));
                    
                if(rate_one <= rate){
                    block.addClass('active');
                }
            });
        }
    }
    
    /* ------------------------- функция запуска слайдеров ------------------------- */
    function funcInitSlider(){
        if($('[data-msowl_carousel]').length > 0){
            $('[data-msowl_carousel]').each(function(){
                let block = $(this);
                    
                block.owlCarousel({
                    stagePadding: 200,
                    loop: true,
                    nav: false,
                    autoplay:true,
                    autoplayTimeout:5000,
                    autoplayHoverPause:true,
                    center: true,
                    dots: false,
                    smartSpeed:450,
                    responsive: {
                        0:{items:1, stagePadding: 10},
                        650:{items:1, stagePadding: 50},
                        800:{items:1, stagePadding: 200},
                        1400:{items:1, stagePadding: 300}
                    }
                });
            });
        }
    }
    
    /* ------------------------- Функция разворачивания карточки ------------------------- */
    function funcOpenCard(){
        let status_open_card = true;
        
        $('body').on('click', '[data-service_click]', function(){
            let block = $(this),
                status = block.hasClass('active') ?? false;

            if(status_open_card){
                if(status){
                    block.removeClass('active');
                } else {
                    block.addClass('active');
                }
            }
        });
        
        $('[data-service_click__btn]').hover(function() { status_open_card = false; }, function() { status_open_card = true; });
    }
    
    /* ------------------------- функция работы с видео ------------------------- */
    function funcVideo(){
        if($('[data-init_video]').length > 0){
            $('[data-init_video]').each(function(i){
                let block = $(this),
                    block_video = block.data('video');
                    
                if(typeof block.attr('id') === 'undefined'){ block.attr('id', 'player_' + i); }
                
                video_id = block.attr('id');

                player_list[video_id] = jwplayer(video_id).setup({
                    responsive: true,
                    aspectratio: "16:9",
                    image: 'https://img.youtube.com/vi/' + block.data('video') + '/maxresdefault.jpg',
                    file: 'https://www.youtube.com/watch?v=' + block.data('video'),
                    stretching: 'fill'
                });
            });
        }
    }
    
    /* ------------------------- функция работа с модальными окнами ------------------------- */
    function funcModal(){
        let time = 200 + 1;
        
        $('body').on('click', '[data-modal_btn]', function(){ openModal($(this).data('modal_btn')); });
        $('body').on('click', '[data-modal_close]', function(){ closeModal(); });
        $('body').on('click', '[data-modal_next]', function(){ nextModal($(this).data('modal_next')); });
        
        function openModal(id){
            $('[data-modal_background]').addClass('index');
            setTimeout(function(){ $('[data-modal_background]').addClass('active'); $('body').addClass('overflow'); }, time);
            setTimeout(function(){ $('[data-modal_content="' + id + '"]').addClass('active'); }, time + time );
        }
        
        function nextModal(id){
            $('[data-modal_content]').removeClass('active');
            setTimeout(function(){ $('[data-modal_content="' + id + '"]').addClass('active');}, time);
        }
        
        function closeModal(){
            $('[data-modal_content]').removeClass('active');
            setTimeout(function(){ $('[data-modal_background]').removeClass('active'); }, time);
            setTimeout(function(){ $('[data-modal_background]').removeClass('index'); $('body').removeClass('overflow');}, time + time);
            
            funcStopVideo();
        }
    }

    /* ------------------------- Функция смены типа каталога ------------------------- */
    function funcChangeCatalog(){
        $('body').on('click', '[data-catalog]', function(){
            let block = $(this),
                type = block.data('catalog'),
                content = block.parents('[data-catalog_content]');
                
            content.find('[data-catalog]').removeClass('active');
            content.find('[data-catalog_block]').removeClass('active');
            content.find('[data-catalog="' + type + '"]').addClass('active');
            content.find('[data-catalog_block="' + type + '"]').addClass('active');
        });
    }
    
    /* ------------------------- Функция определения скроллинга страницы ------------------------- */
    function funcScrollWindows(){
        scrollWindows();
        $(window).scroll(function() { scrollWindows(); });

        function scrollWindows(){
            if($(window).scrollTop() > 1){
                $('section.sticky-header').addClass('active'); } else { $('section.sticky-header').removeClass('active');
            }
        }
    }
    
    /* ---------- Функция открытия блока ---------- */
    function funcOpenBlock(){
        $('body').on('click', '[data-open_block]', function(){
            let block  = $(this),
                id     = block.data('open_block'),
                status = block.hasClass('active') ?? false;
            
            hideBlock();
            
            if(!status){
                setTimeout(function(){
                    openBlock(id);
                }, 1);
            }
        });
        
        /* Клик вне области первого уровня навигационного меню */
        $('body').click(function(event){
            let eventblock_parent = (typeof $(event.target).attr('data-open_block_content') !== 'undefined' && $(event.target).attr('data-open_block_content') !== false)? $(event.target).html() : $(event.target).parents('[qqq]').html(),
                eventblock = $(event.target).parents('[data-open_block_content]').html();

            if(typeof eventblock_parent == "undefined" && typeof eventblock == "undefined" ){
                hideBlock();
            }
        });
        
        function hideBlock(){
            $('[data-open_block_hide]').removeClass('active');
            $('[data-open_block_content_hide]').removeClass('active');
        }
        
        function openBlock(id){
            $('[data-open_block="' + id + '"]').addClass('active');
            $('[data-open_block_content="' + id + '"]').addClass('active');
        }
    }
    
    /* ---------- Функция открытия мобильного меню ---------- */
    function funcOpenBlockM(){
        $('body').on('click', '[data-open_blockm]', function(){
            let block  = $(this),
                id     = block.data('open_blockm'),
                status = block.hasClass('active') ?? false;
            
            hideBlock();
            
            if(!status){
                setTimeout(function(){
                    openBlock(id);
                }, 1);
            }
        });
        
        /* Клик вне области первого уровня навигационного меню */
        $('body').click(function(event){
            let eventblock_parent = (typeof $(event.target).attr('data-open_block_contentm') !== 'undefined' && $(event.target).attr('data-open_block_contentm') !== false)? $(event.target).html() : $(event.target).parents('[qqq]').html(),
                eventblock = $(event.target).parents('[data-open_block_contentm]').html();

            if(typeof eventblock_parent == "undefined" && typeof eventblock == "undefined" ){
                hideBlock();
            }
        });
        
        function hideBlock(){
            $('[data-open_block_hidem]').removeClass('active');
            $('[data-open_block_content_hidem]').removeClass('active');
        }
        
        function openBlock(id){
            $('[data-open_blockm="' + id + '"]').addClass('active');
            $('[data-open_block_contentm="' + id + '"]').addClass('active');
        }
    }

    /* ---------- функция разрешения скролить блок без ползунка ---------- */
    $.fn.attachDragger = function(){
        var attachment = false, lastPosition, position, difference;
        $( $(this).selector ).on("mousedown mouseup mousemove",function(e){
            if( e.type == "mousedown" ) attachment = true, lastPosition = [e.clientX, e.clientY];
            if( e.type == "mouseup" ) attachment = false;
            if( e.type == "mousemove" && attachment == true ){
                position = [e.clientX, e.clientY];
                difference = [ (position[0]-lastPosition[0]), (position[1]-lastPosition[1]) ];
                $(this).scrollLeft( $(this).scrollLeft() - difference[0] );
                $(this).scrollTop( $(this).scrollTop() - difference[1] );
                lastPosition = [e.clientX, e.clientY];
            }
        });

        $(window).on("mouseup", function(){
            attachment = false;
        });
    }
    
    /*--------------------------- Функция остановки видео блока при запуске функции ---------------------------*/
    function funcStopVideo(){
        if (Object.keys(player_list).length != 0) {
            $.each(player_list, function(k, v){
                player_list[k].stop();
            });
        }
    }
});