<?php 
namespace test;

include __DIR__ . '\SparkReflection.php';

/**
 * 这是一个测试类
 * @author SparkLee <liweijsj@163.com>
 */
class TestClass {
	const TYPE = '测试类';
}

\sparklee\SparkReflection::echoClassInfo('test\TestClass');
//\sparklee\SparkReflection::echoClassInfo('test\TestClass', 1);