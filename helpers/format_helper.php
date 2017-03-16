<?php
/*
 * Format the date
 */
function formatDate($date){
    return date('F, j, Y, g:j a', strtotime($date));
}

/*
 * Format the date
 */
function shortenText($text,$chars = 450){
    $text = $text." ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text."...";
    return $text;
}