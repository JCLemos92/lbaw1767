PRAGMA foreign_keys = ON;

CREATE TABLE users(
	IDuser INTEGER PRIMARY KEY Autoincrement NOT NULL,
	username VARCHAR(60) NOT NULL,
	password VARCHAR(60) NOT NULL,
	name VARCHAR(60),
	lastName VARCHAR(60),
	gender ENUM('M','F','O'),
	country VARCHAR(60),
	email VARCHAR(60) NOT NULL
);

CREATE TABLE projects(
	IDproject INTEGER PRIMARY KEY Autoincrement NOT NULL,
	projTitle VARCHAR(60) NOT NULL,
	projDescription VARCHAR(500) NOT NULL
);

CREATE TABLE projectMembers(
	projectID INTEGER REFERENCES projects(IDproject),
	userID INTEGER REFERENCES users(IDuser),
	role VARCHAR(60),
	PRIMARY KEY (projectID)
);

CREATE TABLE tasks(
	IDtask INTEGER PRIMARY KEY Autoincrement NOT NULL,
	taskOwner INTEGER REFERENCES users(IDuser),
	projectID INTEGER REFERENCES projects(IDproject) NOT NULL,
	taskName VARCHAR(60) NOT NULL,
	taskDescription VARCHAR(500) NOT NULL,
	priority VARCHAR(60) NOT NULL,
	dateLimit DATE,
	completed INTEGER,
	completionDate DATE
);

CREATE TABLE forum(
	IDforum INTEGER PRIMARY KEY Autoincrement NOT NULL,
	projectID INTEGER REFERENCES projects(IDproject) NOT NULL,
	ownerID INTEGER REFERENCES users(IDuser) NOT NULL,
	forumTitle VARCHAR(60) NOT NULL,
	forumDescription VARCHAR(500)
);

CREATE TABLE post(
	IDpost INTEGER PRIMARY KEY Autoincrement NOT NULL,
	forumID INTEGER REFERENCES forum(IDforum) NOT NULL,
	ownerID INTEGER REFERENCES users(IDuser) NOT NULL,
	postText VARCHAR(500) NOT NULL,
	postDate DATE NOT NULL
);

CREATE TABLE notification(
	userID INTEGER REFERENCES users(IDuser) NOT NULL,
	senderID INTEGER REFERENCES users(IDuser) NOT NULL,
	projectID INTEGER REFERENCES projects(IDproject) NOT NULL,
	text VARCHAR(500) NOT NULL,
	dateSent DATE NOT NULL,
	PRIMARY KEY (userID)
);
