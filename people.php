<?php
$people = [
    [
        'name' => 'Игорь',
        'email' => 'igor93@gmail.com',
        'registration_date' => '2022-02-15'
    ],

    [
        'name' => 'Славик',
        'email' => 'slavakpss@gmail.com',
        'registration_date' => '2020-06-09'
    ],

    [
        'name' => 'Мария',
        'email' => 'masha22@gmail.com',
        'registration_date' => '2023-04-18'
    ],

];

foreach ($people as $item){
    if(in_array($_REQUEST['name'], $item)) {
        echo $item['name'] . "<br>" . $item['email'] . "<br>" . $item['registration_date'];
    } elseif(in_array($_REQUEST['email'], $item)) {
        echo $item['name'] . "<br>" . $item['email'] . "<br>" . $item['registration_date'];
    } else {
        echo ' ';
    }
}