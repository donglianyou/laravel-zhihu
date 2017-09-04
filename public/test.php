<?php

$arr = array(
	"Peter" =>35,
	"Ben" =>28,
	"joe" =>30
);
echo("<pre>");
print_r(array_change_key_case($arr,CASE_UPPER));