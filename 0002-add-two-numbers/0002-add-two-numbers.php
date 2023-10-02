/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $array1 = $this->addListNodeToArray($l1);
        $array2 = $this->addListNodeToArray($l2);

        $maxArray = count($array1) >= count($array2) ? $array1 : $array2;
        $minArray = count($array1) < count($array2) ? $array1 : $array2;

        for ($i = 0; $i < count($maxArray); $i++) {
            $maxArray[$i] = $maxArray[$i] + $minArray[$i];
            if ($maxArray[$i] >= 10) {
                $maxArray[$i] = $maxArray[$i] - 10;
                $maxArray[$i+1] = $maxArray[$i+1] + 1;
            }
        }

        $finalArray = array_reverse($maxArray);

        return $this->convertArrayToListNode($finalArray);
    }

    function addListNodeToArray($listNode):array {
        while ($listNode){
            $array[] = $listNode->val;
            $listNode = $listNode->next;
        }

        return $array;        
    }

    function convertArrayToListNode(array $array):ListNode {
        $next = null;
        foreach ($array as $value){
            $listNode = new ListNode($value);
            $listNode->next = $next;
            $next = $listNode;
        }

        return $listNode;
    }
}