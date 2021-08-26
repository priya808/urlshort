<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\urlshort;

class urlController extends Controller
{
	public function short(Request $request){
		// TODO:check url exists?


		$url = URLShort::whereUrl($request->url)->first();

		
		// if url exists then just shor the short url
		// else generate a short url and save to DB and display the short url

		if($url == null){
			$short = $this->generateShortURL();

			URLShort::create([
				'url' => $request->url,
				'short'=> $short
			]);

			$url = URLShort::whereUrl($request->url)->first();
			
			}
				

			return view('short_url',compact('url'));
			
		}

		public function shortlink($link){
			$url = URLshort::whereShort($link)->first();
			return redirect($url->url);
		}
		
		public function generateShortURL(){
			$result = base_convert(rand(1000,99999),10,36);
			$data = URLShort::whereShort($result)->first();

			if($data != null){
				$this->generateShortURL();
			}
			return $result;
		}	
}



	

	















   