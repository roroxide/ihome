<?php

namespace App\SmsProviders;

use App\Contracts\SmsProvider;

class Melli implements SmsProvider
{
	public function send($sms)
	{
		// Load config from config('sms.melli...');
		// Send sms 
	}
}
