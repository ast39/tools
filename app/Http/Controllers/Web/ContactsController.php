<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\Controller;
use App\Http\Traits\Dictionarable;
use Illuminate\View\View;


/**
 * Страница сферы сантехники
 */
class ContactsController extends Controller {

    use Dictionarable;


    /**
     * Страница контактов
     *
     * @return View
     */
    public function index(): View
    {
        return view('web.contacts.index');
    }
}
