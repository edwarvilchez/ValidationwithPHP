<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
/**sección para validar correo**/
	public function test_email(){
		$email = Validate::email('edwar@gmail.com');
		$this->assertTrue($email);

		$email = Validate::email('edwar@@gmail.com');
		$this->assertFalse($email);
	}
/**sección para validar correo**/

/**sección para validar url**/
	public function test_url(){
		$url = Validate::url('https://platzi.com');
		$this->assertTrue($url);

		$url = Validate::url('platzi.com');
		$this->assertFalse($url);
	}
/**sección para validar url**/

/**sección para validar password**/
   public function test_password(){
        $password = Validate::password('qwerty7785');
        $this->assertTrue($password);

        $password = Validate::password('34567');
        $this->assertFalse($password);
    }
/**sección para validar password**/
}