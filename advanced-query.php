<?php 

//when condition

SELECT * FROM `table_name`  WHERE  `column_name`=(CASE   WHEN class='2' THEN  'I'    ELSE '0' END)

// create user name password
update hcs_student u
inner join hcs_student temp on
    u.id= temp.id
set u.username=LOWER(CONCAT(SUBSTRING((temp.stu_name),1,3),temp.id, 'u')),
u.password=CONCAT(temp.id,'p',temp.adm_no)

//end
//Update a column value, replacing part of a string

SELECT column_name FROM table_name  order by REPLACE(column_name, '-', '')  desc limit 1

//end
    
 // order by date(varchar)
    SELECT * FROM table  ORDER BY STR_TO_DATE(date_c, %d-%m-%Y) DESC;
//end
?>
