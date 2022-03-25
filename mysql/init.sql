USE testdb;

CREATE TABLE IF NOT EXISTS admin (
	id int,
	username varchar(255),
	passcode varchar(255)
	);

INSERT INTO admin 
VALUES (0, "testuser", "testpassword"); 
