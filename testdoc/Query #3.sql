CREATE DATABASE tagore;
SHOW DATABASES;
USE tagore;
CREATE TABLE 12th_student(roll_no INT PRIMARY KEY AUTO_INCREMENT ,student_name VARCHAR(30) NOT NULL,department VARCHAR(5),
mark1 INT ,mark2 INT, mark3 INT, fees INT ,join_date DATE , class_teacher_name VARCHAR(30),student_address VARCHAR(100));
DESCRIBE 12th_student;
SHOW TABLES;
INSERT INTO 12th_student VALUES (NULL, "Krishnaraj","mca",89,80,78,40000,"2018-08-01","natrajan","perambalur");
SELECT * FROM 12th_student;
INSERT INTO 12th_student VALUES (NULL, "ravi","mca",69,40,98,41000,"2018-08-01","natrajan","salem"),
(NULL, "mani","BSE",99,80,68,45000,"2018-08-07","kumaran","chennai"),
(NULL, "paramesh","mca",79,89,71,40000,"2018-08-01","natrajan","perambalur"),
(NULL, "gopi","cs",88,80,88,50000,"2018-08-01","gurunadha","bengaluru"),
(NULL, "ramu","IT",30,30,30,30000,"2018-08-01","gopi","chennai"),
(NULL, "kumar","mca",99,80,78,40000,"2018-08-01","natrajan","perambalur"),
(NULL, "vinoth","mca",59,80,58,40000,"2018-08-01","natrajan","perambalur"),
(NULL, "mani","mca",99,88,88,40000,"2018-08-01","natrajan","perambalur");
SELECT * FROM 12th_student;
SELECT * FROM 12th_student WHERE department="mca";
SELECT roll_no,student_name,department FROM 12th_student;
INSERT INTO 12th_student(student_name,department) VALUES ("kavin","PS");
INSERT INTO 12th_student(student_name,class_teacher_name,student_address) VALUES ("ajim","jaya","kerala");
/* same as java comment line*/
--hi
ALTER TABLE 12th_student RENAME TO  tstudent;
SELECT * FROM tstudent;
DROP DATABASE if EXISTS krish;
DROP SCHEMA if EXISTS krish;
DROP DATABASE krish;
SHOW TABLES;
CREATE TABLE d_detail(d_id INT );
INSERT INTO d_detail VALUES (1);
ALTER TABLE d_detail RENAME TO dep_detail;
DROP TABLE if EXISTS d_detail;
SELECT * FROM dep_detail;
ALTER TABLE dep_detail ADD dep_name VARCHAR(20) after d_id;
ALTER TABLE dep_detail ADD dep_room_no VARCHAR(20) after d_id;
ALTER TABLE tstudent ADD d_id INT;
ALTER TABLE tstudent ADD (d_ss INT ,d_mm INT);
ALTER TABLE tstudent DROP d_mm;
SELECT student_name FROM  tstudent WHERE student_name="krishnaraj";
SELECT roll_no,student_name,mark1,mark2,mark3 FROM tstudent WHERE (mark1>60 AND mark2>50) or mark3>90;
SELECT roll_no,student_name FROM tstudent WHERE student_name <> "krishnaraj" AND student_name <> "ravi";
SELECT roll_no, student_name, FROM tstudent WHERE fees>40100 AND department="mca";
ALTER TABLE tstudent  
CHANGE COLUMN student_address location VARCHAR(25);  
SELECT * FROM tstudent;
SELECT * FROM tstudent WHERE department ="mca" OR department="cs";
SELECT * FROM tstudent WHERE department  IN ("mca","cs","it");
/* rename column field*/
ALTER TABLE tstudent CHANGE COLUMN class_teacher_name teacher_name VARCHAR(30);
SELECT *FROM tstudent WHERE student_name <> ("krishnaraj" , "paramesh") ;
SELECT * FROM tstudent WHERE student_name  IN ("krishnaraj","paramesh");
SELECT * FROM tstudent WHERE student_name  NOT in ("krishnaraj","paramesh");
SELECT * FROM tstudent WHERE fees BETWEEN 30000 AND 50000  LIMIT 5;
--wild cards
SELECT * FROM tstudent WHERE student_name not LIKE "a%";
UPDATE tstudent SET mark1=66,mark2=55,mark3=44 WHERE roll_no=11;
DELETE FROM tstudent WHERE roll_no=9;
SELECT DISTINCT student_name FROM tstudent;
SELECT * FROM tstudent ORDER BY student_name desc;
SELECT * FROM tstudent WHERE fees>40100 ORDER BY fees DESC;
--custome_order created
SELECT * FROM tstudent ORDER BY (
case department 
when 'mca' then 1
when 'ps' then 2

ELSE 1000 END 
),student_name,location; 

--functions_in_mysql
SELECT COUNT(student_name) FROM tstudent;
SELECT COUNT(fees) FROM tstudent;
SELECT COUNT(student_name) no_of_students_in_mca FROM tstudent WHERE department="ps";
SELECT min(mark1) FROM tstudent WHERE;
SELECT * FROM tstudent;
--sec_MAXVALUEselected
SELECT mark1 FROM tstudent ORDER BY mark1 desc LIMIT 1 OFFSET 1;
UPDATE tstudent SET mark1=11 WHERE roll_no=12;
SELECT MAX(mark1) FROM tstudent WHERE mark1<(SELECT MAX(mark1) FROM tstudent);
SELECT UCASE(student_name) studet_name,ucase(department) FROM tstudent;
SELECT student_name,CHARACTER_LENGTH(student_name) FROM tstudent;
SELECT student_name ,CONCAT('rs',fees) FROM tstudent;
SELECT LEFT(location,3)FROM tstudent;
SELECT CURTIME();
SELECT DATE_FORMAT(CURDATE(),"%d / %m / %y");
SELECT DATEDIFF(CURDATE(),"2000-11-04");
SELECT DATE_ADD(CURDATE(),INTERVAL 1 DAY);
/* group */
SELECT roll_no,student_name,department, MAX(mark2) FROM tstudent GROUP BY department ORDER BY mark2  LIMIT 1 OFFSET 1;
SELECT MAX(mark3),roll_no,student_name FROM tstudent GROUP BY department;
SELECT * FROM tstudent WHERE mark3=98; 
CREATE TABLE employee(emp_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,job_desc VARCHAR(20),emp_salary INT);
INSERT INTO employee VALUES(1,"developer",20000);
INSERT INTO employee VALUES(2,"developer",10000),(3,"tester",10000),(4,"developer",10000),(5,"admin",10000);
SELECT * FROM employee;
SELECT job_desc,COUNT(emp_id) FROM employee GROUP BY job_desc HAVING COUNT(emp_id)>1;
SELECT job_desc,COUNT(emp_id) FROM employee WHERE emp_salary>9000 GROUP BY job_desc HAVING COUNT(emp_id)>0;
/* constrains */
CREATE TABLE const(user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,user_name VARCHAR(20) NOT NULL, pan_no VARCHAR(20) UNIQUE NOT NULL,salary INT CHECK(salary>2000),job_description VARCHAR(20) DEFAULT 'not say that person');
DESCRIBE const;
INSERT INTO const VALUES (null,'krish',123456,40000,"");
INSERT INTO const VALUES (null,'rish',128456,1000,"");
SELECT * FROM const;
ALTER TABLE const MODIFY salary VARCHAR(20) NOT NULL;
CREATE TABLE const1(
user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
user_name VARCHAR(20) NOT NULL, 
pan_no VARCHAR(20) UNIQUE NOT NULL,
salary INT ,
job_description VARCHAR(20) DEFAULT'ok',CHECK(salary>2000));
DESCRIBE const1;
INSERT INTO const1 VALUES (null,'krish',123456,100,"");
SELECT * FROM const1;
INSERT INTO const1 VALUES (null,'krish',23456,1000000,DEFAULT);
DROP TABLE const;
TRUNCATE TABLE const1;
ALTER TABLE const1 ALTER job_description DROP DEFAULT;
ALTER TABLE const1 ADD CONSTRAINT salary CHECK(salary>10000);
INSERT INTO const1 VALUES (null,'krish',20456,100,"dfsdfs");
INSERT INTO const1 VALUES (null,'kr6ish',2047856,10000000 ,"dfsdfs");
/* foreign key */
CREATE DATABASE pf;
USE pf;
CREATE TABLE employee(emp_id INT PRIMARY KEY , ename VARCHAR(20),jobdesc VARCHAR(20),salary INT ,branch_id INT);
INSERT INTO employee VALUES (1,'ram','admin',13333,3),
(2,'kumar','hr',13343,3),
(3,'durai','manager',133333,2),
(4,'ram','admin',1343,1),
(5,'meena','engineer',53333,3),
(6,'celsiya','ceo',833433,2),
(7,'sineka','admin',183333,1),
(8,'aaarthi','manager',78333,1);
SELECT * FROM employee;
CREATE TABLE branch(branch_id INT PRIMARY KEY  ,location VARCHAR(20),address VARCHAR(20));
INSERT INTO branch VALUES (1,'chennai','15,abc road') ,
(2,'bengaluru','17,dbc road') ,
(3,'kolkatha','55,kmt road') ;
SELECT * FROM branch;
DROP TABLE if exists employee;
CREATE TABLE employee(emp_id INT PRIMARY KEY AUTO_INCREMENT ,
ename VARCHAR(20),jobdesc VARCHAR(20),salary INT ,branch_id INT,
CONSTRAINT rem FOREIGN KEY(branch_id) REFERENCES branch(branch_id) ON DELETE CASCADE );                              );
INSERT INTO employee VALUES (1,'ram','admin',13333,3),
(2,'kumar','hr',13343,3),
(3,'durai','manager',133333,2),
(4,'ram','admin',1343,1),
(5,'meena','engineer',53333,3),
(6,'celsiya','ceo',833433,2),
(7,'sineka','admin',183333,1),
(8,'aaarthi','manager',78333,1);
DROP TABLE employee;
DROP TABLE branch;
SHOW INDEX FROM employee;
CREATE INDEX empn ON employee(ename);
/* joins */
SELECT * FROM employee21 LIMIT 0,5;
SELECT * FROM branch21;
DROP table employee21;
CREATE TABLE employee21(emp_id INT PRIMARY KEY AUTO_INCREMENT ,
ename VARCHAR(20),jobdesc VARCHAR(20),salary INT ,branch_id INT );                              );
INSERT INTO employee21 VALUES (1,'ram','admin',13333,3),
(2,'kumar','hr',13343,3),
(3,'durai','manager',133333,2),
(4,'ram','admin',1343,1),
(5,'meena','engineer',53333,3),
(6,'celsiya','ceo',833433,2),
(7,'sineka','admin',183333,1),
(8,'aaarthi','manager',78333,1);
INSERT employee21 (emp_id,ename,jobdesc) VALUES (9,'sowmiya','teacher');
CREATE TABLE branch21(branch_id INT PRIMARY KEY  ,location VARCHAR(20),address VARCHAR(20));
INSERT INTO branch21 VALUES (1,'chennai','15,abc road') ,
(2,'bengaluru','17,dbc road') ,
(3,'kolkatha','55,kmt road') ;
INSERT branch21(branch_id,location) VALUES (4,'singapore');
SELECT employee21.emp_id,employee21.ename,employee21.jobdesc,branch21.branch_id,branch21.location FROM employee21 JOIN branch21 ON employee21.branch_id=branch21.branch_id;
SELECT employee21.emp_id,employee21.ename,employee21.jobdesc,branch21.location,branch21.branch_id FROM employee21 right  JOIN branch21 ON employee21.branch_id=branch21.branch_id ORDER BY emp_id;
/* group by branch */
SELECT count(employee21.emp_id),branch21.branch_id FROM employee21 JOIN branch21 ON employee21.branch_id=branch21.branch_id GROUP BY branch21.branch_id;

-- union

SELECT ename,emp_id FROM employee21 UNION SELECT branch_id,location FROM branch21;

--subqueries
SELECT *FROM employee where branch_id=(SELECT branch_id FROM branch21 WHERE location='chennai');
SELECT branch_id FROM branch21 WHERE location='chennai';
SELECT *FROM employee21 where branch_id=1;
SELECT * FROM employee WHERE salary =(SELECT MIN(salary) FROM employee);
SELECT branch_id,location FROM branch21 
WHERE EXISTS(SELECT * FROM employee21 
WHERE jobdesc="manager" AND branch21.branch_id=employee21.branch_id);
SELECT * FROM branch21 WHERE branch_id =ANY (SELECT branch_id FROM employee21 WHERE salary >20000);

--views
CREATE VIEW vname
AS
SELECT branch_id,location FROM branch21 WHERE EXISTS(SELECT * FROM employee21 WHERE jobdesc="manager" AND branch21.branch_id=employee21.branch_id);
SELECT * FROM vname;
############################################################################################################
CREATE DATABASE test;
USE test;
CREATE TABLE student(sname VARCHAR(20));
INSERT INTO student VALUES("krish");
SELECT * FROM student;
**********************************************************************************************************
CREATE DATABASE firstentry;
USE firstentry;
CREATE TABLE k(fname VARCHAR(20),
 lname VARCHAR(20),
 pass1 VARCHAR(20),
 pass2 VARCHAR(20),
 email VARCHAR(20));
 
 INSERT INTO k VALUES ("krish","raj","1234","1234","krish@gmail.com");
 SELECT * FROM k;
 CREATE DATABASE tutorial;
 USE tutorial;
 CREATE TABLE users(uid INT PRIMARY KEY NOT NULL AUTO_INCREMENT  , uname VARCHAR(50), uage INT);
 DROP TABLE users;
 INSERT INTO users(uname,uage) VALUES ("celsia",22);
 SELECT * FROM users;
 DELETE from users WHERE uid=4;
 ***********************************************real_project***********************************************************
 DROP TABLE signup;
 DELETE FROM signup;
 CREATE DATABASE project;
 USE project;
 CREATE TABLE signup(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,firstname VARCHAR(50),
 username VARCHAR(50),email VARCHAR(30),phonenumber BIGINT ,
 pass VARCHAR(20),cpass VARCHAR(20),gender VARCHAR(20));
 INSERT INTO signup VALUES (1,"krishna","raj","kei@gmail.com",68989899051,"sfjkd","dfjlj","male");
 SELECT * FROM signup;

 CREATE TABLE w3s(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,fname VARCHAR(20),lname VARCHAR(20));
 INSERT INTO w3s VALUES(1,"kavin","raj");
 SELECT * FROM w3s;
 
 CREATE TABLE employee(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,first_name VARCHAR(20),last_name VARCHAR(20),city_name VARCHAR(30),email VARCHAR(20));
INSERT INTO employee VALUES(1,"kavin","raj","perambalur","krish@gmail.com");
 SELECT * FROM employee;
 
 CREATE DATABASE crud;
 USE crud;
 CREATE TABLE  employee(userid INT PRIMARY KEY AUTO_INCREMENT NOT NULL ,first_name VARCHAR(20),last_name VARCHAR(20),city_name VARCHAR(20),email VARCHAR(20));
 ALTER TABLE employee ADD username VARCHAR(30) AFTER userid;
 SELECT * FROM employee;
 INSERT INTO employee VALUES(1,'krish','k','perambalur','krish@gmail.com');
  INSERT INTO employee VALUES(2,'krish','krish','k','perambalur','krish@gmail.com');
  
  
  
  //////////////////////////////////////////////////////////////////
  
   CREATE DATABASE workout;
   USE workout;
   CREATE TABLE signup(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	username VARCHAR(20) NOT NULL ,
	email VARCHAR(40)NOT NULL ,
	mobile BIGINT NOT NULL  ,
	pass1 VARCHAR(16)NOT NULL ,
	pass2 VARCHAR(16)NOT NULL ,
	dob DATE NOT NULL , 
	address VARCHAR(200) NOT NULL ,
	gender VARCHAR(10) NOT NULL ,
	fav VARCHAR(50),
	education VARCHAR(50) ,
	fav1 VARCHAR(50) ,
	fileupload BLOB NOT null,
	agree VARCHAR(10) NOT NULL) ;
   INSERT INTO signup VALUES (1,"krish","krish@gmail.com",6775868999,"8768","687","2000-07-05",
   "udumbiyam","male","c","10th","playing games","djkfjk","accept");
   INSERT INTO signup VALUES (2,"celsi","krish@gmail.com","8768","687","2000-07-05",
   "udumbiyam","male","book","soda","djkfjk",8);
   SELECT * FROM signup;
   TRUNCATE  TABLE signup;
   DELETE TABLE signup;
   DELETE from signup WHERE id=2 ;
   ALTER TABLE signup ADD COLUMN hide BOOLEAN DEFAULT TRUE;
   ALTER TABLE signup ADD orignalpassword VARCHAR(20) after mobile;
   DELETE FROM signup WHERE hide=0;
   ALTER TABLE signup MODIFY pass1 VARCHAR(300) ;
   ALTER TABLE signup MODIFY pass2 VARCHAR(300) ;


   