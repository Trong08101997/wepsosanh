<?php 
	class laycauhinhchitiet_controller {
		
		function laycauhinhchitiet_controller_function($link) {
			$ch = curl_init();
			$timeout = 5; // set to zero for no timeout
			curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
			curl_setopt ($ch, CURLOPT_URL, $link);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$file_contents = curl_exec($ch);
			curl_close($ch);
			$pattern1 = '#(?<=<div class="content">).*(?=<a id="more-specific")#s';
			preg_match($pattern1, $file_contents, $match1);
			$str = implode('.', $match1);

			return $str;
		}
	}

