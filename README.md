# Automation-of-Analysis-And-Development-Management
This project is about automating, the status tracking of various projects. This system typically enables the top-level management to keep track of status of the projects (queries) under their control. Some of the critical activities that can be performed with this system are monitoring completion status of project documents, to alert admin’s indicating the documents completion status.
Admin  allocates  the  project(query)  to  particular  manager of  a  particular client with the query code , query  name ,  and  time limit of particular  project. The system  keeps  track  of  documents  that  have  to  be  completed  within  a  particular  duration.
## Implemented using PHP and MongoDB.

# Data Dictionary

* Sign Up table

|SR.NO|FIELD NAME|DATA TYPE|OTHER INFO|DESCRIPTION|
|-----|:--------:|:-------:|:--------:|---------:|
|1    |TITLE	 |TEXT     |RADIO BUTTON LOOKUP:MR,MRS,MS|SELECT GENDER|
|2     |FIRST NAME |	TEXT|	SIZE:AUTOMATIC |WRITE  YOUR FIRST NAME|
|3	|LAST NAME|	TEXT	|SIZE:AUTOMATIC|	WRITE YOUR FIRST NAME|
|4	|MOBILE NUMBER|	INTEGER	|MANDATORY FIELD	|PROVIDE 10 DIGITS MOBILE NUMBER|
|5	|STD NUMBER	|INTEGER	|OPTIONAL FIELD	|PROVIDE STD CODE|
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
|10	|QUERY|	TEXTAREA	|MANDATORY FIELD	|PROVIDE YOUR QUERY HERE|

* Add New Manager

|SR.NO|FIELD NAME|DATA TYPE|OTHER INFO|DESCRIPTION|
|-----|:--------:|:-------:|:--------:|---------:|
|1|	TITLE	|TEXT|	RADIO BUTTON LOOKUP:MR,MRS,MS	|SELECT GENDER|
|2|	FIRST NAME |	TEXT	|SIZE:AUTOMATIC	|WRITE  YOUR FIRST NAME|
|3	|LAST NAME|	TEXT	|SIZE:AUTOMATIC	|WRITE YOUR FIRST NAME|
|4	|MOBILE NUMBER	|INTEGER|	MANDATORY FIELD|	PROVIDE 10 DIGITS MOBILE NUMBER|
|5|	FAX NUMBER	|INTEGER|	OPTIONAL FIELD|	PROVIDE S FAX  NUMBEER|
|6	|TELEPHONE NUMBER	|INTEGER	|OPTIONAL FIELD|	PROVIDE  TELEPHONE NUMBER IF ANY|
|7|	USERNAME|	ALPHANUMERIC|	MANDATORY FIELD|	UNIQUE USERNAME|
|8	|PASSWORD	|ALPHANUMERIC	|MANDATORY FIELD	|PASSWORD|
|9	|E-MAIL	|ALPHANUMERIC|	MANDATORY FIELD|	PROVIDE E-MAIL |

## Summary

When new user signs up, he has to fill up a form and has to specify his query details and time limit.  After completion of sign up, user then signs in.Here he enters his username and password.. After signing in, he enters the query related to the 
Time limit and priority of that query that is whether it is critical, high, medium or low. Also he is able to see what the status of his query is.
		This query is then given to the administrator. Administrator assigns the task to resolve the query submitted by the user to the one particular manager, out of three. Administrator does this task depending upon the field in which that particular manager is expert.
           Manager then updates status of the query to “in progress” or to “completed”. If manager is still working on that query then status will be “in progress”. If manager is done with his task, then status will be “completed”.
                         This status is then given to the administrator as well as to the user who had submitted the query.



