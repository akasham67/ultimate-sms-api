<?php

    $parameters = [
        'name' => 'Codeglen Update',
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://ultimatesms.codeglen.com/demo/api/v3/contacts/{group_id}'); //replace it with your domain name and /api/v3/contacts/{group_id}
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
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
        "message": "Contact group was successfully updated",
        "data": {
            "name": "Codeglen Update",
            "uid": "65fa99fa9d55e"
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
