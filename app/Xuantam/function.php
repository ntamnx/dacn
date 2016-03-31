<?php

function normalize_filename($filename) {
    $filename = replace_vietnamese_accents($filename);
    $filename = preg_replace('/\s+/', '_', $filename);
    $filename = preg_replace('/[^a-zA-Z0-9-_\.]/', '', $filename);
    return $filename;
}

function replace_vietnamese_accents($str) {
    // biáº¿n Ä‘á»•i cÃ¡c chá»¯ Ã¢,Äƒ,Ä‘,... thÃ nh chá»¯ latin
    $str = preg_replace("/[\x{00C0}-\x{00C3}\x{00E0}-\x{00E3}\x{0102}\x{0103}\x{1EA0}-\x{1EB7}]/u", "a", $str);
    $str = preg_replace("/[\x{00C8}-\x{00CA}\x{00E8}-\x{00EA}\x{1EB8}-\x{1EC7}]/u", "e", $str);
    $str = preg_replace("/[\x{00CC}\x{00CD}\x{00EC}\x{00ED}\x{0128}\x{0129}\x{1EC8}-\x{1ECB}]/u", "i", $str);
    $str = preg_replace("/[\x{00D2}-\x{00D5}\x{00F2}-\x{00F5}\x{01A0}\x{01A1}\x{1ECC}-\x{1EE3}]/u", "o", $str);
    $str = preg_replace("/[\x{00D9}-\x{00DA}\x{00F9}-\x{00FA}\x{0168}\x{0169}\x{01AF}\x{01B0}\x{1EE4}-\x{1EF1}]/u", "u", $str);
    $str = preg_replace("/[\x{00DD}\x{00FD}\x{1EF2}-\x{1EF9}]/u", "y", $str);
    $str = preg_replace("/[\x{0110}\x{0111}]/u", "d", $str);
    return $str;
}

function select($data, $select = 0) {
    foreach ($data as $value) {
        $id   = $value["id"];
        $name = $value["name"];
        if ($select != 0 && $id == $select) {
            echo "<option value='$id' selected>$name</option>";
        } else {
            echo "<option value='$id'>$name</option>";
        }
    }
}

?>