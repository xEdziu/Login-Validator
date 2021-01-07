<?php

$badData = array('write', 'here', 'all', 'words', 
                'that', 'you', 'dont', 'want', 'to',
                'be', 'in', 'your', 'database');


function validateNick($input, $arr){
    $input = strtolower($input);
    foreach ($arr as $word){
        $word = strtolower($word);
        //function under this comment exists in PHP 8.0
        if (str_contains($input, $word)) return false;
        similar_text($input, $word, $percent);
        if ($percent > 75) return false;
    }
    return true;
}


$input = $_POST['input'];

$respond = validateNick($input, $badData);

if ($respond)
    echo "Login correct";
else
    echo "Login incorrect";
?>
