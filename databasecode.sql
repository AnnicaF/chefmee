CREATE TABLE users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first varchar(255) not null,
    user_last varchar(255) not null,
    user_gender varchar(255) not null,
    user_addresse varchar(255) not null,
    user_postal int(4) not null,
    user_dob date not null,
    user_phone int(8) not null,
    user_email varchar(255) not null,
    user_psw varchar(255) not null
);

INSERT INTO user_database (user_first, user_last, user_gender, user_address, user_postal, user_dob, user_phone, user_email, user_psw) 
VALUES ('Ole', 'Hansen', 'o', 'lykkevej', '4694', '1998-10-10', '23209827', 'anni@gg.dk', '1234');