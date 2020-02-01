# Bit_Mascot_Exam

Some questions and answer for Bit Mascot recruitment

## Java Competency

#### 1.Write a Java program with 2 threads. The first thread updates d:\a.rss in every 15 seconds with the content fetched from http://rss.cnn.com/rss/edition.rss . In every 20 seconds, the other thread reads d:\a.rss and prints the list of jpg image references in the file.
[Solution](https://github.com/MdShohanurRahman/Bit_Mascot_Exam/tree/master/JsoupDemo)


## JavaScript Competency

#### 2.Write a jQuery code that will update a div with id "my-div" in every 15 second with the content received from URL "/dynamic.php" by an AJAX call.

[Solution](https://github.com/MdShohanurRahman/Bit_Mascot_Exam/tree/master/load_content)

#### 3.Write a jQuery code so that a pop-up (alert) will appear if any link on the page is clicked.

[Solution](https://github.com/MdShohanurRahman/Bit_Mascot_Exam/blob/master/popup.html)

#### 4.Write a jQuery code that reads strings from an array. For each string, it is enclosed within li tag, and appended within an ul tag named "my-ul". For example, if the array contains "apple","banana","cake" - the UL tag will be: <ul id='my-ul'><li>apple</li><li>banana</li><li>cake</li></ul>

[Solution](https://github.com/MdShohanurRahman/Bit_Mascot_Exam/blob/master/arrayTolist.html)


## SQL Competency
Consider a table named "employees" which has 2 columns id (Integer), and name (String). Write SQL to:

#### 5.Find name of the employee whose id is maximum

```sql
SELECT name from employees ORDER BY id desc LIMIT 1
```

#### 6.Find all the names which occurred more than once

``` sql
select * from employees t1 
where (select count(*) from employees t2 
  where t1.name = t2.name) > 1 
order by t1.name;

```


#### 7.Find the name(s) which occurred most number of times

``` sql
SELECT name,
    count(*) AS counts
FROM
    employees
GROUP BY
    name
HAVING counts = (SELECT count(name) AS counts FROM worker GROUP BY name order by counts desc LIMIT 1)

```
