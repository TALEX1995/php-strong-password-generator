<?php
function get_random_word($len)
{
    $word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9), range('!', '?'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}
