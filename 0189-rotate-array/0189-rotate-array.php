class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        if(count($nums) < $k){
            while($k){
                array_unshift($nums, array_pop($nums));
                $k -=1;
            }
        }
        
        $newNums = $nums;
        $offset = count($nums) - $k;

        $newNums = array_slice($newNums, $offset);
        array_splice($nums, $offset);
        $nums = array_merge($newNums, $nums);
    }
}