USE db;

CREATE TABLE admin (
	id int,
	username varchar(255),
	passcode varchar(255)
	);

INSERT INTO admin 
VALUES (0, "testuser", "testpassword"), (1, "alice", "alice"), (2, "bob", "bob"); 
