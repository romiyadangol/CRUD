CREATE TABLE contacts(
	id int primary key auto_increment,
    first_name varchar(40) not null,
    middle_name varchar(40) null,
    last_name varchar(40) not null,
    phone_number varchar(15) not null 
);

INSERT INTO contacts (first_name, middle_name, last_name, phone_number) values 
('Purna','Man','Dangol','9841182606'),
('Shyam','Kumar','Maharjan','9745332324');


select * from contacts;