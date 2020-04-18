<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperHeroController extends Controller
{
 //   public function index($id) {

	// 	$curl = curl_init();
	// 	curl_setopt_array($curl, array(
	// 		CURLOPT_URL => "https://www.superheroapi.com/api.php/1914766752001644/".$id,
	// 		CURLOPT_RETURNTRANSFER => true,
	// 		CURLOPT_ENCODING => "",
	// 		CURLOPT_MAXREDIRS => 10,
	// 		CURLOPT_TIMEOUT => 30,
	// 		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	// 		CURLOPT_CUSTOMREQUEST => "GET",
	// 		CURLOPT_POSTFIELDS => "",
	// 		CURLOPT_COOKIE => "__cfduid=d3f67d610d2681e3d81126dfb656709ea1582291135",
	// 	));

	// 	$response = curl_exec($curl);
	// 	$err = curl_error($curl);

	// 	curl_close($curl);

	// 	if ($err) {
	// 		echo "cURL Error #:" . $err;
	// 	} else {
	// 		return view('hero', ['heros' => json_decode($response)]);
	// 	}
	// }

	public function post(Request $name) {

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://www.superheroapi.com/api.php/1914766752001644/search/".$name->input('hero_name'),
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_POSTFIELDS => "",
			CURLOPT_COOKIE => "__cfduid=d3f67d610d2681e3d81126dfb656709ea1582291135",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			return view('hero', ['heros' => json_decode($response)]);
		}
	}
}
