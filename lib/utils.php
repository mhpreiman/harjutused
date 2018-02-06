<?php

function fixUrl($str){
    //Encode string (replace all non-alphanumeric with corresponding values, eg space with +)
    return urlencode($str);
}