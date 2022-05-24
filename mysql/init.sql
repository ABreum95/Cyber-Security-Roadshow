USE db;

CREATE TABLE users (
	id int,
	username varchar(255),
	passcode varchar(255)
	);

INSERT INTO users 
VALUES (0, "testuser", "testpassword"), (1, "alice", "alice"), (2, "bob", "bob"); 
