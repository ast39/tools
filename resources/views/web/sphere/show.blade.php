@php

@endphp

@extends('web.layouts.app')

@section('title', __('Электрика'))

@section('content')
    @include('web/components/index/promo_form')
    @include('web/components/categories/navbar')

    <div class="container">
        <div class="ms-ncont">
            <h1 class="pageTitle">{{$sphere->title}}</h1>
            
            <div class="postContent">
                <table>
                    <tbody>
                        <tr style="height: 24px;">
                            <th style="width: 57.4002%; height: 24px;"><strong>Услуги</strong></th>
                            <th style="width: 121.782%; height: 24px; text-align: right;"><strong>Цены</strong></th>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Аварийный выезд (<strong>круглосуточно</strong>)</td>
                            <td style="width: 121.782%; text-align: right; height: 24px;">0₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Диагностика электропроводки</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">от 450₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Обрыв в стене, сложная диагностика спец. оборудованием</td>
                            <td style="width: 121.782%; text-align: right; height: 24px;">от 1500₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Монтаж и ремонт электропроводки</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">900₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Частичная замена электропроводки</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">1500₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Прозвонка кабеля</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">250₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Монтаж щитка с автоматами</td>
                            <td style="width: 121.782%; text-align: right; height: 24px;">от 1450</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Подключение кабеля к щитку</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">1700₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Прокладка кабеля</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">75₽/п.м.</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Монтаж автомата / Узо</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">от 280₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Сверление сквозных отверстии</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">170₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Штробление</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">600₽/п.м.</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Монтаж розетки, выключателя</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">350₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Установка люстры, бра, светильника</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">от 250₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Установка полотенцесушителя</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;">от 700₽</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Электрика <strong>под ключ </strong>( см. подробно в разделе)</td>
                            <td style="width: 121.782%; text-align: right; height: 24px;">от 350 за точку</td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;">Не нашли нужную услугу? См. разделы, получите консультацию от ближайшего мастера</td>
                            <td style="width: 121.782%; height: 24px; text-align: right;"></td>
                        </tr>
                        
                        <tr style="height: 24px;">
                            <td style="width: 57.4002%; height: 24px;"><strong>Выезд и оценка работ&nbsp;</strong></td>
                            <td style="width: 121.782%; height: 24px; text-align: right;"><strong>о₽</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="postContent">
                <p><strong style="font-size: 14pt;">{{__('Описание')}}</strong></p>
                
                <!-- Описание-->
                <p>Вы приобрели дорогую стильную люстру, и ее требуется правильно установить? Нужно провести электропроводку в новостройке? Требуется поменять выключатель или розетку? Вызывайте мастера!</p>
                <p><strong>Всего один звонок, и специалист придет на помощь</strong></p>
                <p>Работы с электропроводкой не терпят небрежности и непрофессионализма. Попытки самостоятельно починить сгоревший выключатель могут привести к несчастному случаю. Не стоит рисковать, лучше доверьтесь надежным рукам профессионалов! Компания «Мастера рядом» оказывает весь спектр услуг, связанных с монтажом электропроводки и оборудования, для жителей и организаций г. Москвы и области:</p>
            </div>
        </div>
    </div>
    
    @include('web/components/index/photos')
    @include('web/components/index/review')
    @include('web/components/index/videos')
    @include('web/components/index/contacts')
@endsection