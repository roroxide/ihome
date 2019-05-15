<?php

namespace App\SmsProviders;

use App\Sms;

class SmsProcess
{
    protected $smsService;

    public function __construct()
    {
	    $smsService = config('sms.default');
	    $smsClass = config('sms.melli.service');
	    $this->smsService = App::make($smsClass); 
    }

    public function send()
    {
	    $this->smsService->send();
    }
}
