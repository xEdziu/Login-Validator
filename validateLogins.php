<?php

$badData = array('write', 'here', 'all', 'words', 
                'that', 'you', 'dont', 'want', 'to',
                'be', 'in', 'your', 'database');


function validateNick($input, $arr){
    $flag = true;
    $input = strtolower($input);
    foreach ($arr as $word){
        $word = strtolower($word);
        if ($input == $word)
            $flag = false;
        similar_text($input, $word, $percent);
        if ($percent > 75)
            $flag = false;
        if (!$flag)
            break;
    }
    if ($flag)
        return true;
    else 
        return false;
}

$input = $_POST['input'];

$respond = validateNick($input, $badData);

if ($respond)
    echo "Login correct";
else
    echo "Login incorrect";
?>
