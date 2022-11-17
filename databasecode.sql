CREATE TABLE tester (
    user_id int(255) AUTO_INCREMENT PRIMARY KEY not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_gender varchar(256) not null,
    user_addresse varchar(256) not null,
    user_postal bigint(4) not null,
    user_dob date(8) not null,
    user_phone bigint(8) not null,
    user_email varchar(256) not null,
    user_pwd varchar(256) not null
);

INSERT INTO user_database (user_first, user_last, user_gender, user_address, user_postal, user_dob, user_phone, user_email, user_pwd) 
VALUES ('Ole', 'Hansen', 'ole@hansen.dk', 'OleH', '1234');