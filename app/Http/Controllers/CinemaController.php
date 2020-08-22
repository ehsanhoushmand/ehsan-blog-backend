<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class CinemaController
{
	public function getSiteUrl()
	{
		$site = Http::get('https://zil.ink/30nama')->body();
		$text = substr($site,strpos($site, 'آدرس سایت') - 50, 50);
		$url = substr($text, strpos($text, '"') + 1, strpos($text, '">') - strlen($text));

		return Redirect::to($url);
	}
}