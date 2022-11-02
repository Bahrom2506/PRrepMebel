<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace App\Services\Localization;


class Localization
{
    public function locale()
    {  // funksiya perfiks bilan ishlashda yordam beradi
        $locale = request()->segment(1, '');  // segment urlni oladi 1 chi index bu 2chi yoziladiga elementimiz bu bizda til

        if ($locale && in_array($locale, config("app.locales"))) {  // locales massivida til bo’lsa bajaradi.

            return $locale;

        }
        return "";
    }
}
