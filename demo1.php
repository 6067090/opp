<?php
class Person{
	private $_name;
	private $_user;
	const NAME = 1233;
	public static $_const = 0;

	public function __set($_key,$_value){

		$this->$_key = $_value;
	}

	public function __get($_key){

		return $this->$_key;
	}
	
	public function _run(){
		return Person::NAME;
	}

	public function _add(){
		self::$_const++;
	}

}

$person = new Person();
$person->_name = 'vb';
echo Person::NAME;
echo $person->_name;
echo $person->_run();

Person::_add();
Person::_add();
echo "<br />".Person::$_const;



