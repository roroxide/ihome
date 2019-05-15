<?php

namespace App\Http\Controllers;

use App\Sms;
use Illuminate\Http\Request;
use App\Jobs\SendSmsJob;
use Carbon\Carbon;

class SmsController extends Controller
{
    public function sendSms(Request $request)
    {
        $mobile = $request->input('mobile');
        $message = $request->input('message');
	$sms = new Sms;
	$sms->mobile = $mobile;
	$sms->message = $message;
	$sms->save();
	$job = (new SendSmsJob($sms))
	    ->delay(Carbon::now()->addSeconds(10));
        dispatch($job);
	return view('static_pages/sms_sent');
    }
}
