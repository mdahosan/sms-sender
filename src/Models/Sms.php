<?php

namespace Pondit\Sms\Models;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{

    protected $fillable = [
        'to',
        'message',
        'total_numbers'
    ];

    public static function send($mobileNo = null, $message = null )
    {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => env('SMS_HOST')."/smsapi?api_key=".env('SMS_API_KEY')."&type=text&contacts=".$mobileNo."&senderid=".env('SMS_SENDER_ID')."&msg=".urlencode ($message),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
        ));

        curl_exec($curl);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            //echo "cURL Error #:" . $err;
            return false;
        } else {
            //echo $response;
            return true;
        }
    }

}
