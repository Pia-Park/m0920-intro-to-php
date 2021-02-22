<?php 
    echo date('d');
    echo '<br>';
    echo date('m');
    echo '<br>';
    echo date('Y');
    echo '<br>';
    echo date('l');
    echo '<br>';

    echo date('Y/m/d');
    echo '<br>';

    echo date('h');
    echo '<br>';
    echo date('i');
    echo '<br>';
    echo date('s');
    echo '<br>';
    echo date('a');
    echo '<br>';

    #Set time zone
    date_default_timezone_set('America/Vancouver');
    echo date('h:i:sa');    
    echo '<br>';

    /*
        unix timestamp - a long integer containing the number of seconds between the Unix
        Epoch - January 1 1970
    */

    $timestamp = mktime(10,14,54, 1,2,2021); //hour, min, sec, month, day, year

    echo $timestamp;
    echo '<br>';
    echo date('d/m/Y h:i:sa', $timestamp);
    echo '<br>';

    $timestamp2 = strtotime('7:00pm February 22 2021');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 days');

    echo $timestamp2;
    echo '<br>';
    echo date('d/m/Y h:i:sa', $timestamp3);
    echo '<br>';
    echo date('d/m/Y h:i:sa', $timestamp4);
    echo '<br>';
    echo date('d/m/Y h:i:sa', $timestamp5);
