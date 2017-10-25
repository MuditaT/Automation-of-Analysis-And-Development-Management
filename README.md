# Automation-of-Analysis-And-Development-Management
This project is about automating, the status tracking of various projects. This system typically enables the top-level management to keep track of status of the projects (queries) under their control. Some of the critical activities that can be performed with this system are monitoring completion status of project documents, to alert admin’s indicating the documents completion status.
Admin  allocates  the  project(query)  to  particular  manager of  a  particular client with the query code , query  name ,  and  time limit of particular  project. The system  keeps  track  of  documents  that  have  to  be  completed  within  a  particular  duration.
## Implemented using PHP and MongoDB.

# Data Dictionary

* Sign Up table

|SR.NO|FIELD NAME|DATA TYPE|OTHER INFO|DESCRIPTION|
|-----|:--------:|:-------:|:--------:|---------:|
|1    |TITLE	 |TEXT     |RADIO BUTTON| LOOKUP:MR,MRS,MS|SELECT GENDER|
|2     |FIRST NAME |	TEXT|	SIZE:AUTOMATIC |WRITE  YOUR FIRST NAME|
|3	|LAST NAME|	TEXT	|SIZE:AUTOMATIC|	WRITE YOUR FIRST NAME|
|4	|MOBILE NUMBER|	INTEGER	|MANDATORY FIELD	|PROVIDE 10 DIGITS MOBILE NUMBER|
|5	|STD NUMBER	|INTEGER	|OPTIONAL FIELD	|PROVIDE STD CODE(OPTIONAL)|
|6	|TELEPHONE NUMBER|	INTEGER	|OPTIONAL FIELD	|PROVIDE  TELEPHONE NUMBER IF ANY|
|7	|USERNAME	|ALPHANUMERIC|	MANDATORY FIELD	|UNIQUE USERNAME|
|8|	PASSWORD	|ALPHANUMERIC|	MANDATORY FIELD	|PASSWORD|
|9|	E-MAIL	|ALPHANUMERIC	|MANDATORY FIELD	|PROVIDE E-MAIL| 

* Query Submit

|SR.NO|FIELD NAME|DATA TYPE|OTHER INFO|DESCRIPTION|
|-----|:--------:|:-------:|:--------:|---------:|
|1	|FIRST NAME |	TEXT|	SIZE:AUTOMATIC|	WRITE  YOUR FIRST NAME|
|2	|LAST NAME|	TEXT|	SIZE:AUTOMATIC	|WRITE YOUR FIRST NAME|
|3|	USER ID	|ALPHANUMERIC|	MANDATORY FIELD	|PROVIDE UNIQUE ID|
|4|	E-MAIL|	ALPHANUMERIC	|MANDATORY FIELD	|PROVIDE E-MAIL |
|5	|CONTACT NUMBER	|INTEGER	|MANDATORY FIELD	|PROVIDE  CONTACT NUMBER| 
|6	|TYPE OF BRAND|	TEXT	|DROP-DOWN MENU|	SELECT TYPE OF BRAND|
|7	|SELECT BRAND	|TEXT	|DROP-DOWN MENU	|SELECT YOUR BRAND|
|8|MOBILE NUMBER|	INTEGER	|MANDATORY FIELD	|PROVIDE 10 DIGITS MOBILE NUMBER|
|9	|YEAR OF PURCHASE	|INTEGER	|DROPDOWN MENU	|SELECT YEAR OF PURCHASE|
|10	|QUERY	TEXTAREA	|MANDATORY FIELD	|PROVIDE YOUR QUERY HERE|


