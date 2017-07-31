<?php
/**
 * One Away: There are three types of edits that can be performed on strings: insert a character,
 * remove a character, or replace a character. Given two strings, write a function to check if they are
 * one edit (or zero edits) away.
 * EXAMPLE
 * pale, pIe -> true
 * pales. pale -> true
 * pale. bale -> true
 * pale. bake -> false
 */

function checkStringModification($a, $b){
	$n = strlen($a);
	$m = strlen($b);
	$diff = $n - $m;
	if(($diff>1)||($diff<-1)){
		return false;
		}
	//The length is equal - only 1 replace could be.
	if($diff == 0){
		$i = 0;
		$replaces = 0;
		while($i<$n){
			if($a[$i] != $b[$i]){
				$replaces++;
				}
			$i++;
			}
		return ($replaces <= 1);
		}
	//The length of $b is less than length of $a, 1 remove could be
	elseif($diff == 1){
		$i = 0;
		$j = 0;
		$removes = 0;
		while(($i<$n)&&($j<$m)){
			if($a[$i] != $b[$j]){
				$i++;
				$removes++;
				} else {
				$i++;
				$j++;
				}
			}
		while($i<$n){
			$removes++;
			$i++;
			}
		if(($i!=$n)||($j!=$m)){
			return false;
			}
		return ($removes <= 1);
		}
	//The length of $b > length of $a, 1 insert could be
	elseif($diff == -1){
		$i = 0;
		$j = 0;
		$inserts = 0;
		while(($i<$n)&&($j<$m)){
			if($a[$i] != $b[$j]){
				$j++;
				$inserts++;
				} else {
				$i++;
				$j++;
				}
			}
		if(($i!=$n)||($j!=$m)){
			return false;
			}
		return ($inserts <= 1);		
		}
	//the difference of length is more than 2
	else{
		return false;
		}
	}

$a = checkStringModification('pale','ple');
echo 'pale, ple    ';
var_dump($a);

$a = checkStringModification('pales','pale');
echo 'pales, pale  ';
var_dump($a);

$a = checkStringModification('pale','bale');
echo 'pale, bale   ';
var_dump($a);

$a = checkStringModification('pale','bake');
echo 'pale, bake   ';
var_dump($a);
