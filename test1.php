<?php
/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/

class Obj {
    public $x;
}

function obj_inc_x($obj) {
    $obj->x = 6;
    return $obj;
}

$obj = new Obj();
$obj->x = 2;

$obj2 = obj_inc_x($obj);
obj_inc_x($obj2);

print $obj->x . ', ' . $obj2->x . "\n";