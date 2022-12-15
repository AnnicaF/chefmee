CREATE TABLE user_test (
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    firstName varchar(255) not null,
    lastName varchar(255) not null,
    gender varchar(255) not null,
    addresse varchar(255) not null,
    postal int(4) not null,
    phone int(8) not null,
    dob date not null,
    email varchar(255) not null,
    `password` varchar(255) not null
);

INSERT INTO user_test ( `email`, `token`, `password`, `firstName`, `lastName`, `address`, `postal`, `phone`) VALUES ('$email', '$token', '$password', '$firstName', '$lastName', '$address', '$postal', '$phone')

/* Read */
SELECT * from user_test;

/* JOIN kobler to tabeller sammen*/
SELECT user_test.postal, cities.cities FROM user_test JOIN cities ON user_test.postal = cities.postal 

/* Hvis man vil se alle dem der bor i 7410 postnummer og deres navn samt by*/
SELECT user_test.postal, cities.cities, user_test.firstName FROM user_test JOIN cities ON user_test.postal = cities.postal WHERE user_test.postal = 7410

/* Update : Hvis vi ønsker at opdatere user_test table eksempel */
Alter table user_test 
modify firstName varchar(50) not null;

/* Delete : Hvis vi ønsker at slette vores tabel, som vi ikke ønsker lige pt*/
drop table user_test;