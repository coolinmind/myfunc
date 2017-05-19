<?php
/**
 * 获取传入参数的和
 * @param  [int] $nums [description]
 * @return [type]       [description]
 */
function get_sum(...$nums)
{
	$num = 0;
	if(!$nums)
	{
		return $num;
	}else
	{
		foreach ($nums as $k => $v) 
		{
			$num += $v;
		}
		return $num;
	}
}

// echo get_sum(1,2,3);

function get_sum1()
{
	$args_num = func_get_args();
	$args_num = count($args_num);
	$sum = 0;
	if(!$args_num)
	{
		return $sum;
	}else
	{
		for ($i=0; $i < $args_num; $i++) 
		{ 
			$sum += func_get_arg($i);
		}
		return $sum;
	}
}

// echo get_sum1(1,2,3);
function swap(&$a,&$b)
{
	$tmp = $a;
	$a = $b;
	$b = $tmp;
}
$a = 1;$b = 2;
swap($a,$b);
// echo $a.$b;
$a = 'zhangsan';
function local()
{
	// global $a;
	// echo $a;
	echo $GLOBALS['a'];
}
// echo local();
$v1 = 1;$v2 = 2;
function test_local()
{
	$GLOBALS['v2'] = &$GLOBALS['v1'];
}
test_local();
// echo $v2;
function test_static()
{
	static $a = 0;
	echo $a ++;
}

// test_static();
function get_apple($num)
{
	return 'in get_apple we need '.$num.' boxes';
}

function get_orange($num)
{
	return 'in get_orange we need '.$num.' boxes';
}

function print_str($str)
{
	echo $str;
}
// $f1 = 'get_apple';
// echo $f1();
// $f1 = 'get_orange';
// echo $f1();

function get_fruit($fruit,$num)
{
	$opt = 'get_'.$fruit;
	return $opt($num);
}

// echo get_fruit('apple',5);

function out()
{
	if(!function_exists('in'))
	{
		function in()
		{
			echo '嵌套函数';
		}	
	}
}
// out();
// in();
// out();
function f_out()
{
	echo "out \n";
	function middle()
	{
		echo "middle \n";
		function in()
		{
			echo "in \n";
		}
	}
}

// f_out();
// middle();
// in();

function res($i)
{
	$sum = 1;
	echo '当前参数$i值为'.$i."\n";
	if($i==1)
	{
		echo "$i={$i};$sum={$sum}\n";
		return 1;
	}else
	{
		$sum = $i * res($i-1);
	}
	return $sum;
}
// $msg = 'hello';
$example = function ($name) use(&$msg)
{
	echo $msg.' '.$name;
};
// $msg = 'hi';
// $example('zhangsan');
/**
 * 闭包函数
 * @param  string  $name 变量名
 * @param  Closure $clo  闭包函数
 * @return [type]        字符串
 */
/*function test_close($name,Closure $clo)
{
	echo 'Hi'.$name."\n";
	$clo();
}
test_close('zhangsan',function(){
	'wellcome!';
});*/

