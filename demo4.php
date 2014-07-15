<?php
/**
 * 接口\interface关键字
 * 成员必须使用常量
 * 接口内方法及时抽象方法但不需要写abstract
 * 接口被继承要叫作接口被实现
 * 接口可以多实现、抽象类只能单继承
 * 如果要实现多继承就用接口、类方法多继承重用就用抽象类
 */
interface Computer{
	const NAME = '联想';
	public function _run1();
	public function _run2();
}
interface Computer2{
	
	public function _run3();
}

class NoteComputer implements Computer,Computer2{

	public function _run1() {
		
	}
	
	public function _run2() {
		
	}
	public function _run3();

	
}


?>