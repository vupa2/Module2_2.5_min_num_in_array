<?php
$arr1 = [0, 1, 3, 4, 1, 1, -9, 5, -1];

function minNum($arr) {
  $minNum = $arr[0];
  for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] < $minNum) $minNum = $arr[$i];
  }
  return $minNum;
}

echo min($arr1);
