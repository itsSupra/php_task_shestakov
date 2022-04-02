<?php

function countUniqChars($text)
{
    if (empty($text)) {
        return 0;
    }
    $arr = str_split($text);
    $result = [];
    foreach ($arr as $el) {
        if(!in_array($el, $result, true)){
            $result[] = $el;
        }
    }
    return count($result);
}

echo countUniqChars('yaab');