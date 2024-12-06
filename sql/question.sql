-- Write a SQL query to print details of the Students whose FIRST_NAME ends with 'a'. ?
            SELECT * FROM Student WHERE FIRST_NAME LIKE '%a';

-- . Write an SQL query to fetch Students full names with GPA >= 8.5 and <= 9.5. ?
            SELECT name FROM Student WHERE GPA BETWEEN 8.5 and 9.5;

-- delete   particular  employe 
            DELETE FROM employees WHERE employee_id = 5;


-- DROP  
DROP TABLE table_name;

-- Truncate
DROP TABLE table_name;




-- Union and Union all
UNION: Combines the result sets of two or more queries and removes duplicate rows from the final result.
UNION ALL: Combines the result sets of two or more queries without removing duplicates, returning all rows, including duplicates.

