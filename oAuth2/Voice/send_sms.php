<?php

    $parameters = [
        'message'   => 'Test message', //required
        'sender_id' => 'Codeglen', //optional
        'recipient' => '12025550775', //required
        'type'      => 'voice', //required
        'language'  => 'en-gb', //required
        'gender'    => 'male', //required : male/female
        //schedule_time => '2021-12-20 07:00', //optional
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://ultimatesms.codeglen.com/demo/api/v3/sms/send');
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
        "message": "Message sent successfully",
        "data": "sms reports with all details",
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
