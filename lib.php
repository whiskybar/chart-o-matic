<?php

function string_to_floats($str) {
    $start = 0;
    $result = array();
    for ($i = 1; $i <= strlen($str); $i++) {
        $candidate = substr($str, $start, $i - $start);
        if (is_numeric($candidate)) {
            continue;
        }
        if ($start < $i - 1) {
            $result[] = (float) $candidate;
        }
        $start = $i;
    }
    if ($start < strlen($str)) {
        $result[] = (float) substr($str, $start);
    }
    return $result;
}

?>
