<?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://restcountries.com/v3.1/all?fields=name',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    // echo $response;

    $countries = json_decode($response, true);
    //sort the array by country name
    usort($countries, function ($a, $b) {
        return $a['name']['common'] <=> $b['name']['common'];
    });