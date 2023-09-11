# Write your MySQL query statement below
SELECT MAX(e.salary) as SecondHighestSalary FROM Employee as e WHERE e.salary < (SELECT MAX(e2.salary) FROM Employee as e2);