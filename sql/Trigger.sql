-- A trigger in SQL is an automatic procedure that is executed in response to specific events (such as INSERT, UPDATE, or DELETE) on a table or view.

CREATE TRIGGER log_update
AFTER UPDATE ON employees
FOR EACH ROW
BEGIN
    INSERT INTO audit_log (employee_id, old_salary, new_salary, change_time)
    VALUES (OLD.employee_id, OLD.salary, NEW.salary, NOW());
END;
