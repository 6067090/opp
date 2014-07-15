<?php
//接口也是抽象方法
//接口不能被实例化
//接口的成员必须是常量
//接口里的方法都必须是抽象方法、接口里的抽象方法不需要写abstract
//接口是为了规范子类达到统一的目的


interface Computer{
	const NAME = '联想';
	public function _run();
	public function _run2();

}
//子类继承子类的方法叫作实现
class NoteComputer implements Computer{
	public function _run(){
		echo "我重写了run";
	}
	public function _run2(){
		echo '我重写了run2';
	}

}

$notecomputer = new NoteComputer();
$notecomputer->_run2();

