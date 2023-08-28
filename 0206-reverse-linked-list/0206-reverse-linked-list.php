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
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $array = [];
        while ($head){
            $array[] = $head->val;
            $head = $head->next;
        }

        array_reverse($array);

        $next = null;
        foreach ($array as $value){
            $newList = new ListNode($value);
            $newList->next = $next;
            $next = $newList;
        }

        return $newList;
    }
}