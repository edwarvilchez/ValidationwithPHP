<?php


if(! function_exists('upper')){
	function upper($value){
		return Text\Format::upperText($value);
	}
}

if(! function_exists('upper')){
	function lower($value){
		return Text\Format::lowerText($value);
	}
}