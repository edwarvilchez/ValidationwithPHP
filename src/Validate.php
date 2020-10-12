<?php

namespace App;

class Validate{
	# validamos el correo o email
	public static function email($value){
		return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
	}

	# validamos url
	public static function url($value){
		return (bool) filter_var($value, FILTER_VALIDATE_URL);
	}

	# validamos password
	public static function password($value) {
        return (bool) preg_match('/^[0-9a-zA-Z]{4,12}$/',$value);
    }
}