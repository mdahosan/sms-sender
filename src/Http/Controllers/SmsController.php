<?php

namespace Pondit\Sms\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Pondit\Sms\Jobs\SendSmsJob;
use Pondit\Sms\Models\Sms;


class SmsController extends Controller
{

    public function index()
    {
        return view('sms::sms');
    }

    public function sendSms(Request $request)
    {
        try{
            $commaSeparatedNumbers = str_replace("\r\n",",",$request->to);
            $numbersArray = explode(',', $commaSeparatedNumbers);

            $i = 2;
            foreach ($numbersArray as $number){
                $when = now()->addSeconds($i);
                $number = trim($number);
                SendSmsJob::dispatch($number, $request->message)->delay($when);
                $i += 2;
            }

            $data = $request->all();
            $data['total_numbers'] = count($numbersArray);
            Sms::create($data);

            return view('sms::sms', ['message'=>'Success !']);

        }catch (QueryException $exception){
            dd($exception->getMessage());
        }
    }
}
