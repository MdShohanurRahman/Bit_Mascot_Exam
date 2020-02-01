## SQL Competency
Consider a table named "employees" which has 2 columns id (Integer), and name (String). Write SQL to:

#### question: Find name of the employee whose id is maximum

```
SELECT name from employees ORDER BY id desc LIMIT 1
```

#### question: Find all the names which occurred more than once

```
select * from employees t1 
where (select count(*) from employees t2 
  where t1.name = t2.name) > 1 
order by t1.name;

```


#### question: Find the name(s) which occurred most number of times

```
SELECT name,
    count(*) AS counts
FROM
    employees
GROUP BY
    name
HAVING counts = (SELECT count(name) AS counts FROM worker GROUP BY name order by counts desc LIMIT 1)

```
