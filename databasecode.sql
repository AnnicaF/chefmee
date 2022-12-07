CREATE TABLE user_test (
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    firstName varchar(255) not null,
    lastName varchar(255) not null,
    username varchar(255) not null,
    gender varchar(255) not null,
    addresse varchar(255) not null,
    postal int(4) not null,
    phone int(8) not null,
    dob date not null,
    email varchar(255) not null,
    `password` varchar(255) not null
);

INSERT INTO user_test (`username`, `email`, `verified`, `token`, `password`, `firstName`, `lastName`, `address`, `postal`, `phone`) VALUES ('$username', '$email', '$verified', '$token', '$password', '$firstName', '$lastName', '$address', '$postal', '$phone')

/* JOIN kobler to tabeller sammen*/
SELECT user_test.postal, cities.cities, FROM user_test JOIN cities ON user_test.postal = cities.postal 

/* koble 1 tabel mere på*/
SELECT user_test.postal, cities.cities, regions.region_id FROM user_test JOIN cities ON user_test.postal = cities.postal JOIN regions ON user_test.postal = regions.region_id