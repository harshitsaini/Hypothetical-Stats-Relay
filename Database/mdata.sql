create database mdata;
use mdata;
create table user_data(
user_id int Primary key auto_increment ,	
username varchar (50),
password varchar (50),
email_id varchar (50),
isAdmin boolean 
);

--DUMMY DATA
insert into user_data(username,password,email_id,isAdmin) values ('Harshit','hello','harshitsaini15@gmail.com',True);
insert into user_data(username,password,email_id,isAdmin) values ('Rahul','mello','rahulgupta17@gmail.com',False);

create table user_posts(
post_id int Primary Key auto_increment,	
user_id int ,
post_title varchar (30) Not null,
post_text	varchar (200),
post_img blob
		);

