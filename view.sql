CREATE OR REPLACE FUNCTION CreateEmployee(VARCHAR, VARCHAR, date, date, VARCHAR, VARCHAR, VARCHAR, VARCHAR)
RETURNS void
LANGUAGE PGSQL
AS $$
BEGIN
IF NOT EXISTS (SELECT * FROM employees WHERE name = $2 AND  eid= $1) THEN
    -- Software tuple does not exist, need to add it
    INSERT INTO Employee (name, id) VALUES ($2, $1);
END IF;   