<?php

// Encode string (replace all non-alphanumeric with corresponding values, eg space with +)
function fixUrl($str){
    return urlencode($str);
}

// Add necessary puntuation to database query make it look cleaner
function fixDB($str){
    return '"'.addslashes($str).'"';
}