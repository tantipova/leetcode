class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $uniqueCount = count(array_unique($nums));
        if ($uniqueCount === count($nums)){
            return false;
        }

        return true;
    }
}