<?php

    $parameters = [
        'PHONE'      => '12025550775',
        'FIRST_NAME' => 'Jhon',
        'LAST_NAME'  => 'Doe',
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://ultimatesms.codeglen.com/demo/api/v3/contacts/{group_id}/store'); //replace it with your domain name and /api/v3/contacts/{group_id}/store
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($parameters));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer 22|RMQRV1boTJel6YbbI0o5fW73IzlI3Cv2GZ1voK6gfb9f97ca',
        'Content-Type: application/json',
        'Accept: application/json',
    ]);
    $result = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($result, true);
    echo '<pre>';
    print_r($result);

    /*
    |--------------------------------------------------------------------------
    | Success Response
    |--------------------------------------------------------------------------
    {
    "status": "success",
    "message": "Contact was successfully added",
    "data": {
        "uid": "65fa8465d3b58",
        "phone": 12025550775,
        "status": "subscribe",
        "custom_fields": {
            "FIRST_NAME": "Jhon",
            "LAST_NAME": "Doe"
            }
         }
      }
    */

    /*
    |--------------------------------------------------------------------------
    | Error Response
    |--------------------------------------------------------------------------
    {
        "status": "error",
        "message" : "A human-readable description of the error."
    }
    */
