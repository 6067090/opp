<?php
//抽象类、抽象方法abstract
//抽象内里的抽象方法必须被子类重写
//抽象内里的抽象方法方法体不能被实现
abstract Class Person{

	abstract public function _run();

}


class Computer extends Person{

	public function _run(){

	}
}

