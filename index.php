<!-- 
На вход подается строка из чисел, разделенных пробелами.
Найдите наиболее часто встречающееся число в строке. -->

<?php

function mostCommonNumber ($strNumber) {
	$arrNumber = explode (" ", $strNumber);
	$numsCommon = [];
	$max = 0;
	$returnValue = '';


	foreach ($arrNumber as $thisKey => $thisValue){
{
				if (!isset ($numsCommon[$thisValue])) {
					$numsCommon[$thisValue] = 1;
				}
				else {
					$numsCommon [$thisValue]++;
				}
			}
		
	}
	foreach ($numsCommon as $key => $value) {
		if ($value === max($numsCommon)) {
			$returnValue .= $key . ' ';
		}
}
return $returnValue;
}


echo mostCommonNumber("1 2 3 2 4 4 2 5");

?>
