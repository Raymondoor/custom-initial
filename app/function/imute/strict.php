<?php namespace Raymondoor\Helper\Imute{
function strict_string(mixed $value):string{
    if(is_string($value)): return $value;endif;
    throw new \TypeError('Invalid type for strict_string.');
}
function strict_int(mixed $value):int{
    if(is_int($value)): return $value;endif;
    if((is_float($value))):throw new \TypeError('Floating point value given to strict int type.');endif;
    if((is_numeric($value))):throw new \TypeError('Numeric value given to strict int type.');endif;
    throw new \TypeError('Invalid type for strict_int');
}

function strict_arithmetic($x=0, $y=0, string $op='+') {
    if (gettype($x) !== gettype($y)) {
        throw new \TypeError('The types of the given values don\'t match.');
    }
    if (is_string($x)) {
        if ($op !== '.') {
            trigger_error("Operator '$op' applied to strings, using concatenation instead.", E_USER_NOTICE);
        }
        return $x . $y;
    }
    switch ($op) {
        case '+': return $x + $y;
        case '-': return $x - $y;
        case '*': return $x * $y;
        case '/': return $x / $y;
        case '%': return $x % $y;
        default: throw new \InvalidArgumentException("Unsupported operator: $op");
    }
}
}