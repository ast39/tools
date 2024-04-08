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

    /**
     * Description - обрезка строки до описания
     *
     * @return string
     */
    public static function getTrim($text, $minLength = 10){
        # Разбиваем текст на слова
        $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

        # Если длина текста меньше минимальной, возвращаем текст без изменений
        if (mb_strlen($text) < $minLength) {
            return strip_tags($text);
        }

        $return = '';

        foreach($words as $k => $v){
            $return = implode(' ', [$return, $v]);

            if(mb_strlen($return) >= $minLength && preg_match('~[\.\?\!]~', $v)){
                break;
            }
        }

        if($return == ''){
            return strip_tags($text);
        }

        return strip_tags($return);
	}

     /**
     * getMinSum - получить минимальную услугу услуги
     *
     * @return string
     */
    public static function getMinSum($categories, $id = 0){
        $min_sum = 0;

        return $min_sum;
    }

    public static function parseTextToImages(string $text): string
    {
        preg_match_all('`IMG:(.*?):IMG`si', $text, $matches);

        if (count($matches ?: []) == 0) {
            return $text;
        }

        foreach ($matches[0] as $key => $match) {
            $text = str_ireplace($match, self::exportImage($matches[1][$key]), $text);
        }

        return $text;
    }

    public static function exportImage(string $image): string
    {
        ob_start(); ?>
            <img class="img-thumbnail" src="<?= asset('/storage/' . $image) ?>"  alt="Изображение не прогрузилось" />
        <?php return ob_get_clean();
    }
}
