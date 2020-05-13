<?php

/* Insertion Sort Function */
function insertSort($my_array) {
	for($i=0;$i<count($my_array);$i++){
		$val = $my_array[$i];
		$j = $i-1;
		while($j>=0 && $my_array[$j] > $val){
			$my_array[$j+1] = $my_array[$j];
			$j--;
		}
		$my_array[$j+1] = $val;
	}
	return $my_array;
}

/* Bubble Sort Function */
function bubbleSort(array $arr) {
	$sorted = false;
	while (false === $sorted) {
		$sorted = true;
		for ($i = 0; $i < count($arr)-1; ++$i) {
			$current = $arr[$i];
			$next = $arr[$i+1];
			if ($next < $current) {
				$arr[$i] = $next;
				$arr[$i+1] = $current;
				$sorted = false;
			}
		}
	}
	return $arr;
}

/* Merge Sort Functions */
function merge_sort (array $a) {
	if (count ($a) == 1) {
		return $a;
	}

	$mid = count($a) / 2;
	$left = array_slice($a, 0, $mid);
	$right = array_slice($a, $mid);


	$left = merge_sort ($left);
	$right = merge_sort ($right);

	return merge ($left, $right);
}

// performs the mergeing of the two halfs of the array.
// $l is the left tail of the array.
// $r is the right tail of the array.
function merge ($l, $r) {
	$res = array();

	while (count($l) > 0 && count($r) > 0) {
		if ($l[0] > $r[0]) {
			$res[] = $r[0];
			$r = array_slice($r, 1);
		} else {
			$res[] = $l[0];
			$l = array_slice ($l, 1);
		}
	}

	while (count ($l) > 0) {
		$res[] = $l[0];
		$l = array_slice($l, 1);
	}

	while (count ($r) > 0) {
		$res[] = $r[0];
		$r = array_slice($r, 1);
	}

	return $res;
}
?>
