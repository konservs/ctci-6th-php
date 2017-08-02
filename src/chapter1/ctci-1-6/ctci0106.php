<?php
/**
 * String Compression: Implement a method to perform basic string compression using the counts
 * of repeated characters. For example, the string aabcccccaaa would become a2b1c5a3. If the
 * "compressed" string would not become smaller than the original string, your method should return
 * the original string. You can assume the string has only uppercase and lowercase letters (a - z).
 */

function packStringSimple($a){
	$n = strlen($a);
	$i = 0;
	$lastChar = '';
	$charsCount = 0;
	$result = '';
	while($i<$n){
		if(empty($lastChar)){
			$lastChar = $a[$i];
			$charsCount++;
			$i++;
			continue;
			}

		if($a[$i] == $lastChar){
			$i++;
			$charsCount++;
			}
		else{
			$result.=$lastChar.$charsCount;
			$lastChar = $a[$i];
			$charsCount = 1;
			$i++;
			}
		}
	//Append last characters.
	if(!empty($lastChar)){
		$result.=$lastChar.$charsCount;
		}
	if(strlen($result)>=strlen($a)){
		return $a;
		}
	return $result;
	}
