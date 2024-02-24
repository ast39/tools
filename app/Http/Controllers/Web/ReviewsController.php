<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\Controller;
use App\Http\Traits\Dictionarable;
use Illuminate\View\View;


/**
 * Страница отзывов клиентов
 */
class ReviewsController extends Controller {

    use Dictionarable;


    /**
     * Страница контактов
     *
     * @return View
     */
    public function index(): View
    {
        return view('web.reviews.index');
    }
}
