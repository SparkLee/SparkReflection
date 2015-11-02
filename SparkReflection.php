<?php

namespace sparklee;

use ReflectionClass;

/**
 * @author SparkLee <liweijsj@163.com>
 * @since v1.0
 * @see http://php.net/manual/zh/class.reflectionclass.php
 */
class SparkReflection {
	public static function getClassInfo($class_name) {
		$reflection = new ReflectionClass($class_name);

		$class_info = [];

		// 类名（两种方法获取：访问公共成员属性name；调用成员方法getName()）
		$class_info['name'] = $reflection->name;
		$class_info['name'] = $reflection->getName();

		// 获取类的短名，就是不含命名空间（namespace）的那一部分。
		$class_info['short_name'] = $reflection->getShortName(); 

		// 获取一个类中所有已定义的常量
		$class_info['constants'] = $reflection->getConstants();

		// 获取类的构造函数
		$class_info['constructor'] = $reflection->getConstructor();

		// 获取类的默认属性（包括了继承的属性） 默认属性的数组，其键是属性的名称，其值是属性的默认值或者在属性没有默认值时是 NULL。 这个函数不区分静态和非静态属性，也不考虑可见性修饰符。
		$class_info['default_properties'] = $reflection->getDefaultProperties();

		// 获取反射过的属性
		$class_info['properties'] = $reflection->getProperties();

		// 获取静态（static）属性
		$class_info['static_properties'] = $reflection->getStaticProperties();		

		// 从一个类中获取文档注释
		$class_info['doc_comment'] = $reflection->getDocComment();

		// 从用户定义的类获取其第一行的行数
		$class_info['start_line'] = $reflection->getStartLine();

		// 从用户定义的类获取其最后一行的行数
		$class_info['end_line'] = $reflection->getEndLine();

		// 获取已定义类的扩展的ReflectionExtension对象。
		$class_info['extension'] = $reflection->getExtension();

		// 获取定义的类所在的扩展的名称
		$class_info['extension_name'] = $reflection->getExtensionName();

		// 获取定义类的文件名（文件的绝对路径）
		$class_info['file_name'] = $reflection->getFileName();

		//  获取接口（interface）名称
		$class_info['interface_names'] = $reflection->getInterfaceNames();

		// 获取接口
		$class_info['interfaces'] = $reflection->getInterfaces();

		// 获取类的方法的一个数组
		$class_info['methods'] = $reflection->getMethods();

		// 返回这个类访问修饰符的位字段
		$class_info['modifiers'] = $reflection->getModifiers();

		// 获取命名空间（namespace）的名称
		$class_info['namespace_name'] = $reflection->getNamespaceName();

		// 获取父类
		$class_info['parent_class'] = $reflection->getParentClass();

		// 返回这个类所使用的 traits 数组
		$class_info['traits'] = $reflection->getTraits(); 

		// 返回这个类所使用 traits 的名称的数组
		$class_info['trait_names'] = $reflection->getTraitNames(); 

		// 返回 trait 别名的一个数组
		$class_info['trait_aliases'] = $reflection->getTraitAliases(); 

		// 检查是否位于命名空间中
		$class_info['in_namespace'] = $reflection->inNamespace();

		// 检查类是否是抽象类（abstract）
		$class_info['is_abstract'] = $reflection->isAbstract();

		// 返回了这个类是否可复制
		$class_info['is_cloneable'] = $reflection->isCloneable();

		// 检查类是否声明为 final
		$class_info['is_final'] = $reflection->isFinal();

		// 检查这个类是否可实例化
		$class_info['is_instantiable'] = $reflection->isInstantiable();

		// 检查类是否是一个接口（interface）
		$class_info['is_interface'] = $reflection->isInterface();

		// 检查类是否是一个trait
		$class_info['is_trait'] = $reflection->isTrait();

		// 检查类是否由扩展或核心在内部定义，与用户定义相反
		$class_info['is_internal'] = $reflection->isInternal();

		// 检查一个类是否由用户定义，和内置相对
		$class_info['is_user_defined'] = $reflection->isUserDefined();

		// 检查一个类是否可迭代（iterateable）
		$class_info['is_iterateable'] = $reflection->isIterateable();

		// 创建一个新的类实例而不调用它的构造函数
		$class_info['new_instance_without_constructor'] = $reflection->newInstanceWithoutConstructor();

		// 返回 ReflectionClass 对象字符串的表示形式
		$class_info['__toString'] = $reflection->__toString();

		return $class_info;
	}

	public static function echoClassInfo($class_name, $echo_type = 2) {
		$class_info = self::getClassInfo($class_name);

		switch ($echo_type) {
			case '1':
			case 'var_dump':
				self::echoClassInfoVarDump($class_info);
				break;

			case '2':
			case 'html':
				self::echoClassInfoHtml($class_info);
				break;
			
			default:
				self::echoClassInfoVarDump($class_info);
				break;
		}
	}

	public static function echoClassInfoVarDump($class_info) {
		var_dump($class_info);
	}

	public static function echoClassInfoHtml($class_info) {
		require (__DIR__ . '\classinfo_html.php');
	}
}