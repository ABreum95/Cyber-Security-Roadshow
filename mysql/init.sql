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
	(1, "alice", "51294ec24ab55726f4805beaebd65e234e795760432a03e03de86c7e31567f4e"), -- vsknj2sdiX
	(2, "bob", "acf322c8a528719cba9bf4fcf206a04ddd0784668fb0f7b2f93ec78b8983d051"); -- Spongebob06