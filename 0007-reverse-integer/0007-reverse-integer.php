class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $reversedInteger = (int) strrev($x);

        if (
            $reversedInteger >= ((PHP_INT_MAX-1) & 0xffffffff)/2 || 
            $reversedInteger <= (PHP_INT_MIN & 0xffffffff)/2
        ){
            $reversedInteger = 0;
        } elseif (str_starts_with($x, '-')) {
            $reversedInteger = ("-" . $reversedInteger);
        }

        return $reversedInteger; 
    }
}