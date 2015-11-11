<?php

/**
 * Returns months names for current language
 * @return array
 */
function lang_months(){
    return array(
        'січня', 'лютого', 'березня', 'квітня', 'травня', 'червня',
        'липня', 'серпня', 'вересня', 'жовтня', 'листопада', 'грудня'
    );
}

/**
 * Returns days names for current language
 * @return array
 */
function lang_days(){
    return array(
        'нд', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'
    );
}

function lang_date($date_string){

    $eng_months = array(
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    );

    $date_string = str_replace($eng_months, lang_months(), $date_string);

    return $date_string;

}

/**
 * Converts string from current language to SLUG
 * @return string
 */
function lang_slug($string){

    $string    = strip_tags(trim($string));
    $string    = mb_strtolower($string, 'utf-8');
    $string    = str_replace(' ', '-', $string);

    $slug = preg_replace ('/[^a-zA-Zа-яґіїєА-ЯҐІЇЄ0-9\-\/]/u', '-', $string);
    $slug = preg_replace('/([-]+)/i', '-', $slug);
    $slug = trim($slug, '-');

    $ua_en = array(
                    'а'=>'a','б'=>'b','в'=>'v','г'=>'g','ґ'=>'g','д'=>'d',
                    'е'=>'e','є'=>'e','ё'=>'yo','ж'=>'zh','з'=>'z','и'=>'y',
                    'й'=>'i','і'=>'i','ї'=>'yi','к'=>'k','л'=>'l',
                    'м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r',
                    'с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h',
                    'ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'sch','ъ'=>'',
                    'ы'=>'y','ь'=>'','э'=>'e','ю'=>'yu','я'=>'ja'
                    );

    foreach($ua_en as $ua=>$en){
        $slug = str_replace($ua, $en, $slug);
    }

    if (!$slug){ $slug = 'untitled'; }

    return $slug;

}
