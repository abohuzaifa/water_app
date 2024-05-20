<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
function removeImages($imageArray, $multi_images = 0) {
    // print_r($imageArray); exit;
    if($multi_images == 1)
    {
        foreach($imageArray as $img)
        {
            if(File::exists(public_path('/images/'.$img))) {
            //     echo "success"; exit;
                File::delete(public_path('/images/'.$img));
            }
        }
    } else {
        if(File::exists(public_path('/images/'.$imageArray))) {
            //     echo "success"; exit;
                File::delete(public_path('/images/'.$imageArray));
            }
    }
    
}

function formatDateTimeToEnglish($dateTimeString)
{
    $currentFormat = "Y-m-d H:i:s";
    // Parse the input date and time string using Carbon
    $dateTime = Carbon::createFromFormat($currentFormat, $dateTimeString);

    // Format the date and time to English with AM/PM
    $formattedDateTime = $dateTime->format('l, F j, Y g:i A');

    return $formattedDateTime;
}

function formatCreatedAt($created_at) {
    // Convert the created_at string to a DateTime object
    $createdDateTime = new DateTime($created_at);
    
    // Get the current date and time
    $currentDateTime = new DateTime();

    // Calculate the difference between the current date and the created_at date
    $interval = $currentDateTime->diff($createdDateTime);

    // Check the difference and format accordingly
    if ($interval->d > 0) {
        // Less than one hour, show in minutes
        return $interval->d . trans('lang.days_ago');
    } elseif ($interval->h < 24) {
        // Less than 24 hours, show in hours
        return $interval->h . trans('lang.hours_ago');
    } else {
        // More than 24 hours, show in days
        return $interval->i . trans('lang.minutes_ago');
    }
}

    function data($numbers = "", $message = '')
    {
        $username = config('msegat.MSEGAT_USERNAME');
        $userSender = config('msegat.MSEGAT_USER_SENDER');
        $apiKey = config('msegat.MSEGAT_API_KEY');

        if(empty($username)){
            throw new \Exception('Please add msegata username in file env');
        }

        if(empty($userSender)){
            throw new \Exception('Please add msegata user sender in file env');
        }

        if(empty($apiKey)){
            throw new \Exception('Please add msegata ApiKey in file env');
        }

        if(empty($numbers)){
            throw new \Exception('Please add numbers to send message');
        }

        $fields = json_encode([
            "userName"      => $username,
            "numbers"      => $numbers,
            "userSender"   => $userSender,
            "apiKey"       => $apiKey,
            "msg"          => $message
        ]);

        return $fields;
    }

    function sendMessage($numbers = '',$message = '')
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://www.msegat.com/gw/sendsms.php");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        $fields = data($numbers,$message);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json"
        ));

        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        $response = json_decode($response);

         return $response;
    }
