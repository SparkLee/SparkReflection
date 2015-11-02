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

		// 类名
		$class_info['name'] = [
			'key'         => '类名',
			'value'       => $reflection->name, // 或 $reflection->getName()
			'value_str'   => self::toString($reflection->name),
			'tip'         => '获取带命令空间前缀的类名，有两种方法获取：访问公共成员属性name；调用成员方法getName()',
			'call_method' => 'ReflectionClass::name 或 ReflectionClass::getName()',
		];

		// 类的短名
		$class_info['short_name'] = [
			'key'         => '类的短名',
			'value'       => $reflection->getShortName(),
			'value_str'   => self::toString($reflection->getShortName()),
			'tip'         => '获取类的短名，就是不含命名空间[namespace]的那一部分',
			'call_method' => 'ReflectionClass::getShortName()',
		]; 

		// 类的常量
		$class_info['constants'] = [
			'key'         => '类的常量',
			'value'       => $reflection->getConstants(),
			'value_str'   => self::toString($reflection->getConstants()),
			'tip'         => '获取一个类中所有已定义的常量',
			'call_method' => 'ReflectionClass::getConstants()',
		];

		// 类的构造函数
		$class_info['constructor'] = [
			'key'         => '类的构造函数',
			'value'       => $reflection->getConstructor(),
			'value_str'   => self::toString($reflection->getConstructor()),
			'tip'         => '获取类的构造函数',
			'call_method' => 'ReflectionClass::getConstructor()',
		];

		// 类的默认属性[包括了继承的属性]
		$class_info['default_properties'] = [
			'key'         => '类的默认属性[包括了继承的属性]',
			'value'       => $reflection->getDefaultProperties(),
			'value_str'   => self::toString($reflection->getDefaultProperties()),
			'tip'         => '获取类的默认属性[包括了继承的属性] 默认属性的数组，其键是属性的名称，其值是属性的默认值或者在属性没有默认值时是 NULL。 这个函数不区分静态和非静态属性，也不考虑可见性修饰符。',
			'call_method' => 'ReflectionClass::getDefaultProperties()',
		];

		// 反射过的属性
		$class_info['properties'] = [
			'key'         => '反射过的属性',
			'value'       => $reflection->getProperties(),
			'value_str'   => self::toString($reflection->getProperties()),
			'tip'         => '获取反射过的属性',
			'call_method' => 'ReflectionClass::getProperties()',
		];

		// 类的静态[static]属性
		$class_info['static_properties'] = [
			'key'         => '类的静态[static]属性',
			'value'       => $reflection->getStaticProperties(),
			'value_str'   => self::toString($reflection->getStaticProperties()),
			'tip'         => '获取类的静态[static]属性',
			'call_method' => 'ReflectionClass::getStaticProperties()',
		];

		// 类的文档注释
		$class_info['doc_comment'] = [
			'key'         => '类的文档注释',
			'value'       => $reflection->getDocComment(),
			'value_str'   => self::toString($reflection->getDocComment()),
			'tip'         => '从一个类中获取文档注释',
			'call_method' => 'ReflectionClass::getDocComment()',
		];

		// 类的首行等号
		$class_info['start_line'] = [
			'key'         => '类的首行等号',
			'value'       => $reflection->getStartLine(),
			'value_str'   => self::toString($reflection->getStartLine()),
			'tip'         => '从用户定义的类获取其第一行的行数',
			'call_method' => 'ReflectionClass::getStartLine()',
		];

		// 类的末行行号
		$class_info['end_line'] = [
			'key'         => '类的末行行号',
			'value'       => $reflection->getEndLine(),
			'value_str'   => self::toString($reflection->getEndLine()),
			'tip'         => '从用户定义的类获取其最后一行的行数',
			'call_method' => 'ReflectionClass::getEndLine()',
		];

		// 类的扩展的ReflectionExtension对象
		$class_info['extension'] = [
			'key'         => '类的扩展的ReflectionExtension对象',
			'value'       => $reflection->getExtension(),
			'value_str'   => self::toString($reflection->getExtension()),
			'tip'         => '获取已定义类的扩展的ReflectionExtension对象',
			'call_method' => 'ReflectionClass::getExtension()',
		];

		// 类所在的扩展的名称
		$class_info['extension_name'] = [
			'key'         => '类所在的扩展的名称',
			'value'       => $reflection->getExtensionName(),
			'value_str'   => self::toString($reflection->getExtensionName()),
			'tip'         => '获取定义的类所在的扩展的名称',
			'call_method' => 'ReflectionClass::getExtensionName()',
		];

		// 类所在文件的绝对路径
		$class_info['file_name'] = [
			'key'         => '类所在文件的绝对路径',
			'value'       => $reflection->getFileName(),
			'value_str'   => self::toString($reflection->getFileName()),
			'tip'         => '获取定义类的文件名[文件的绝对路径]',
			'call_method' => 'ReflectionClass::getFileName()',
		];

		// 接口[interface]名称
		$class_info['interface_names'] = [
			'key'         => '接口[interface]名称',
			'value'       => $reflection->getInterfaceNames(),
			'value_str'   => self::toString($reflection->getInterfaceNames()),
			'tip'         => '获取接口[interface]名称',
			'call_method' => 'ReflectionClass::getInterfaceNames()',
		];

		// 接口数组
		$class_info['interfaces'] = [
			'key'         => '接口数组',
			'value'       => $reflection->getInterfaces(),
			'value_str'   => self::toString($reflection->getInterfaces()),
			'tip'         => '获取接数组',
			'call_method' => 'ReflectionClass::getInterfaces()',
		];

		// 类所有的成员方法
		$class_info['methods'] = [
			'key'         => '类所有的成员方法',
			'value'       => $reflection->getMethods(),
			'value_str'   => self::toString($reflection->getMethods()),
			'tip'         => '获取类的方法的一个数组',
			'call_method' => 'ReflectionClass::getMethods()',
		];

		// 类访问修饰符的位字段
		$class_info['modifiers'] = [
			'key'         => '类访问修饰符的位字段',
			'value'       => $reflection->getModifiers(),
			'value_str'   => self::toString($reflection->getModifiers()),
			'tip'         => '返回这个类访问修饰符的位字段',
			'call_method' => 'ReflectionClass::getModifiers()',
		];

		// 命名空间[namespace]的名称
		$class_info['namespace_name'] = [
			'key'         => '命名空间[namespace]的名称',
			'value'       => $reflection->getNamespaceName(),
			'value_str'   => self::toString($reflection->getNamespaceName()),
			'tip'         => '获取命名空间[namespace]的名称',
			'call_method' => 'ReflectionClass::getNamespaceName()',
		];

		// 获取父类
		$class_info['parent_class'] = [
			'key'         => '类的父类',
			'value'       => $reflection->getParentClass(),
			'value_str'   => self::toString($reflection->getParentClass()),
			'tip'         => '获取父类',
			'call_method' => 'ReflectionClass::getParentClass()',
		];

		// 返回这个类所使用的 traits 数组
		$class_info['traits'] = [
			'key'         => '类所使用的traits数组',
			'value'       => $reflection->getTraits(),
			'value_str'   => self::toString($reflection->getTraits()),
			'tip'         => '返回这个类所使用的 traits 数组',
			'call_method' => 'ReflectionClass::getTraits()',
		];

		// 返回这个类所使用 traits 的名称的数组
		$class_info['trait_names'] = [
			'key'         => '类所使用traits的名称的数组',
			'value'       => $reflection->getTraitNames(),
			'value_str'   => self::toString($reflection->getTraitNames()),
			'tip'         => '返回这个类所使用traits的名称的数组',
			'call_method' => 'ReflectionClass::getTraitNames()',
		];

		// 返回 trait 别名的一个数组
		$class_info['trait_aliases'] = [
			'key'         => 'trait别名的数组',
			'value'       => $reflection->getTraitAliases(),
			'value_str'   => self::toString($reflection->getTraitAliases()),
			'tip'         => '返回 trait 别名的一个数组',
			'call_method' => 'ReflectionClass::getTraitAliases()',
		];

		// 检查是否位于命名空间中
		$class_info['in_namespace'] = [
			'key'         => '是否位于命名空间中',
			'value'       => $reflection->inNamespace(),
			'value_str'   => self::toString($reflection->inNamespace()),
			'tip'         => '检查是否位于命名空间中',
			'call_method' => 'ReflectionClass::inNamespace()',
		];

		// 检查类是否是抽象类[abstract]
		$class_info['is_abstract'] = [
			'key'         => '类是否是抽象类[abstract]',
			'value'       => $reflection->isAbstract(),
			'value_str'   => self::toString($reflection->isAbstract()),
			'tip'         => '检查类是否是抽象类[abstract]',
			'call_method' => 'ReflectionClass::isAbstract()',
		];

		// 返回了这个类是否可复制
		$class_info['is_cloneable'] = [
			'key'         => '类是否可复制',
			'value'       => $reflection->isCloneable(),
			'value_str'   => self::toString($reflection->isCloneable()),
			'tip'         => '返回了这个类是否可复制',
			'call_method' => 'ReflectionClass::isCloneable()',
		];

		// 检查类是否声明为final
		$class_info['is_final'] = [
			'key'         => '类是否声明为final',
			'value'       => $reflection->isFinal(),
			'value_str'   => self::toString($reflection->isFinal()),
			'tip'         => '检查类是否声明为final',
			'call_method' => 'ReflectionClass::isFinal()',
		];

		// 检查这个类是否可实例化
		$class_info['is_instantiable'] = [
			'key'         => '类是否可实例化',
			'value'       => $reflection->isInstantiable(),
			'value_str'   => self::toString($reflection->isInstantiable()),
			'tip'         => '检查这个类是否可实例化',
			'call_method' => 'ReflectionClass::isInstantiable()',
		];

		// 检查类是否是一个接口[interface]
		$class_info['is_interface'] = [
			'key'         => '类是否是一个接口[interface]',
			'value'       => $reflection->isInterface(),
			'value_str'   => self::toString($reflection->isInterface()),
			'tip'         => '检查类是否是一个接口[interface]',
			'call_method' => 'ReflectionClass::isInterface()',
		];

		// 检查类是否是一个trait
		$class_info['is_trait'] = [
			'key'         => '类是否是一个trait',
			'value'       => $reflection->isTrait(),
			'value_str'   => self::toString($reflection->isTrait()),
			'tip'         => '检查类是否是一个trait',
			'call_method' => 'ReflectionClass::isTrait()',
		];

		// 检查类是否由扩展或核心在内部定义，与用户定义相反
		$class_info['is_internal'] = [
			'key'         => '类是否由扩展或核心在内部定义',
			'value'       => $reflection->isInternal(),
			'value_str'   => self::toString($reflection->isInternal()),
			'tip'         => '检查类是否由扩展或核心在内部定义，与用户定义相反',
			'call_method' => 'ReflectionClass::isInternal()',
		];

		// 检查一个类是否由用户定义，和内置相对
		$class_info['is_user_defined'] = [
			'key'         => '类是否由用户定义，和内置相对',
			'value'       => $reflection->isUserDefined(),
			'value_str'   => self::toString($reflection->isUserDefined()),
			'tip'         => '检查一个类是否由用户定义，和内置相对',
			'call_method' => 'ReflectionClass::isUserDefined()',
		];

		// 检查一个类是否可迭代[iterateable]
		$class_info['is_iterateable'] = [
			'key'         => '类是否可迭代[iterateable]',
			'value'       => $reflection->isIterateable(),
			'value_str'   => self::toString($reflection->isIterateable()),
			'tip'         => '检查一个类是否可迭代[iterateable]',
			'call_method' => 'ReflectionClass::isIterateable()',
		];

		// 创建一个新的类实例而不调用它的构造函数
		$class_info['new_instance_without_constructor'] = [
			'key'         => '创建一个新的类实例而不调用它的构造函数',
			'value'       => $reflection->newInstanceWithoutConstructor(),
			'value_str'   => self::toString($reflection->newInstanceWithoutConstructor()),
			'tip'         => '创建一个新的类实例而不调用它的构造函数',
			'call_method' => 'ReflectionClass::newInstanceWithoutConstructor()',
		];

		// 返回ReflectionClass对象字符串的表示形式
		$class_info['__toString'] = [
			'key'         => 'ReflectionClass对象字符串的表示形式',
			'value'       => $reflection->__toString(),
			'value_str'   => mb_substr(self::toString($reflection->__toString()), 0, 30,"utf-8"),
			'tip'         => '返回ReflectionClass对象字符串的表示形式',
			'call_method' => 'ReflectionClass::__toString()',
		];

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

	private static function echoClassInfoVarDump($class_info) {
		var_dump($class_info);
	}

	private static function echoClassInfoHtml($class_info) {
		require (__DIR__ . '\classinfo_html.php');
	}

	private static function toString($obj) {
		if (is_string($obj)) {
			return $obj;
		} elseif(is_array($obj)) {
			return 'Array';
		} elseif(is_object($obj)) {
			return 'Object';
		} elseif(is_bool($obj)) {
			return $obj? '是' : '否';
		}		
	}
}