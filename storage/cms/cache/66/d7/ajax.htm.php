<?php 
class Cms5fda0d4e2599e812580366_cc3cc6f18f774aa67f6e51daddd605d4Class extends Cms\Classes\PageCode
{
public function onTest()
{
    $value1 = input('value1');
    $value2 = input('value2');
    $operation = input('operation');

    switch ($operation) {
        case '+' :
            $this['result'] = $value1 + $value2;
            break;
        case '-' :
            $this['result'] = $value1 - $value2;
            break;
        case '*' :
            $this['result'] = $value1 * $value2;
            break;
        default :
            $this['result'] = $value1 / $value2;
            break;
    }
}
}
