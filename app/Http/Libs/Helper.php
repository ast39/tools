<?php

namespace App\Http\Libs;

use App\Models\Service;

class Helper {

    /**
     * Цена услуги
     *
     * @param Service $service
     * @return string
     */
    public static function getServicePrice(Service $service): string
    {
        $price = $service->price ?? 0;
        $from = $service->from > 0;
        $unit = $service->unit;

        return ($from ? 'от ' : '')
            . $price
            . 'р.'
            . ($unit > 1 ? ' за ' . __('unit_' . $unit) : '');
    }
}
