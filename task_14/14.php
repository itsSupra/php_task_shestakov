<?php

function buildDefinitionList($definitions)
{

    foreach ($definitions as $val) {
        $dt1 = '<dt>' . $val[0] . '</dt>';
        $dd1 = '<dd>' . $val[1] . '</dd>';
        echo '<dl>' . $dt1 . $dd1 . '<dl>';
    }
}

buildDefinitionList([
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],]);
