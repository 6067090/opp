<?php
/**
 * 一个运作由不同的人去执行，而产生的不同效果，即为多态
 * 一个人通过不同的状态去执行同一个运作而形成不同的结果，也可以称作多态
 */

//创建一个接口来规范运行的方法

interface Computer{
	public function version();
	public function work();
}

//创建一个笔记本类来实现接口
class NoteComputer implements Computer{
	public function version(){
		echo '笔记本';
	}
	public function work(){
		echo '可以运行win7';
	}

}
//创建一个台式机的类来实现接口
class DestopComputer implements Computer{
	public function version(){
		echo '台式机';
	}
	
	public function work(){
		echo '可以运行xp';
	}
}
//创建一个用户
class Person{
	//创建一个方法来接受电脑(笔记本电脑、台式电脑)
	public function _run($type){
		echo '这个人的：';
		$type->version();
		$type->work();
	}
}

//创建笔记本
$notecomputer = new NoteComputer();
//创建台式机
$destopcomputer = new DestopComputer();
//使用电脑
$person = new Person();
$person->_run($destopcomputer);//这种传递，叫作对象引用的传递







?>