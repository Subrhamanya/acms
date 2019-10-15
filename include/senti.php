
<?php

$url="https://api.monkeylearn.com/v3/classifiers/cl_pi3C7JiL/classify/";

require "senti/autoload.php";

$ml = new MonkeyLearn\Client('your token here');
$model_id = 'cl_pi3C7JiL';
$res = $ml->classifiers->classify($model_id, $data);

$output=$res->result;
$senti_result= $output[0]["classifications"][0]["tag_name"];