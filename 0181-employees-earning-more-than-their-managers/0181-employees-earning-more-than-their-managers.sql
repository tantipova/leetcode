# Write your MySQL query statement below
SELECT e1.name as Employee from Employee as e1
LEFT JOIN Employee as e2 ON e2.id = e1.managerId
WHERE e1.salary > e2.salary;