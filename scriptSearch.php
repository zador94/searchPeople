<?php

if(!empty($_REQUEST['name']) && !empty($_REQUEST['email'])) {
    $url = 'http://searchPeople//people.php?' . 'name=' . $_REQUEST['name'] . '&' . 'email=' . $_REQUEST['email'];
    $result = file_get_contents($url);
    if($result != 'no'){
        echo $result;
    }
    else {
        echo 'таких нет';
    }
}
