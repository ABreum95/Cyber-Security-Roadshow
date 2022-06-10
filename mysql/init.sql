USE db;

CREATE TABLE users (
	id int,
	username varchar(255),
	password varchar(255)
);

INSERT INTO
	users
VALUES
	(
		0,
		"testuser",
		"9f735e0df9a1ddc702bf0a1a7b83033f9f7153a00c29de82cedadc9957289b05"
	),
	(1, "alice", "2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90"),
	(2, "bob", "81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9");