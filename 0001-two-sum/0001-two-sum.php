class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target){
        $finalArray = [];
        foreach($nums as $position1 => $value){
            $position2 = $target - $value;
            if (isset($finalArray[$position2])){
                return [$finalArray[$position2], $position1];
            } else {
                $finalArray[$value] = $position1;
            }
        }
    }
}