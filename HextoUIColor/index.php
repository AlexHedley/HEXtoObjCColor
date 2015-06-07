<?php
	$hexvalue = trim(getenv('POPCLIP_TEXT'));
	//$hexvalue = "#26264C";
	$rgb = hex2rgb($hexvalue);
	//print_r($rgb);
	//echo implode(",", $rgb);
	//echo $rgb[0];

	$r = $rgb[0];
	$g = $rgb[1];
	$b = $rgb[2];

	$rd = round($r/255, 3);
	$gd = round($g/255, 3);
	$bd = round($b/255, 3);
	
	//"[UIColor colorWithRed:"0.149" green:"0.149" blue:"0.298" alpha:1] /*#26264C*/"
	//echo "[UIColor colorWithRed:".$rgb[0]." green:".$rgb[1]." blue:".$rgb[0]." alpha:1] /*".$hexvalue."*/";
	//echo "[UIColor colorWithRed:".$r."/255 green:".$g."/255 blue:".$b."/255 alpha:1] /*".$hexvalue."*/";
	echo "[UIColor colorWithRed:".$rd." green:".$gd." blue:".$bd." alpha:1] /*".$hexvalue."*/";
	
	$rgb = array( 255, 255, 255 );
	$hex = rgb2hex($rgb);
	//echo $hex;


//http://bavotasan.com/2011/convert-hex-color-to-rgb-using-php/
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}

function rgb2hex($rgb) {
   $hex = "#";
   $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

   return $hex; // returns the hex value including the number sign (#)
}