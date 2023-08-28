class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        if (in_array($target, $nums)){
            return array_search($target, $nums);
        }

        if ($target < $nums[0]){
            return 0;
        }

        if ($target > end($nums)){
            return count($nums);
        }

        $lowIndex = 0;
        $hightIndex = count($nums) - 1;  
        while($lowIndex <= $hightIndex) {
            $middleIndex = round(($lowIndex + $hightIndex) / 2);            
            if($target > $nums[$middleIndex] && $target < $nums[$middleIndex + 1]){           
                return $middleIndex + 1;
            }
            else if($target < $nums[$middleIndex]) 
            {
                $hightIndex = $middleIndex - 1;
            }
            else 
            {
                $lowIndex = $middleIndex  + 1;
            }       
        }
    }
}