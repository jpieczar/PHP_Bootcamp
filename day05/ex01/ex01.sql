create table if not exists ft_table
(
	"id"	int NOT NULL AUTO_INCREMENT,
	"login" varchar(28) NOT NULL DEFAULT "toto",
	ENUM("staff", "student", "other") NOT NULL,
	"creation_date" NOT NULL DATE,
	PRIMARY KEY (id)
);