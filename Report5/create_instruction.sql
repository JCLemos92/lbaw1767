PRAGMA foreign_keys = ON;

CREATE TABLE users(
	IDuser INTEGER PRIMARY KEY Autoincrement,
	username VARCHAR(60),
	password VARCHAR(60),
	name VARCHAR(60),
	lastName VARCHAR(60),
	gender VARCHAR(60),
	country VARCHAR(60),
	email VARCHAR(60)
);

CREATE TABLE projects(
	IDproject INTEGER PRIMARY KEY Autoincrement,
	projTitle VARCHAR(60),
	projDescription VARCHAR(500)
);

CREATE TABLE projectMembers(
	projectID INTEGER REFERENCES projects(IDproject),
	userID INTEGER REFERENCES users(IDuser),
	role VARCHAR(60),
	PRIMARY KEY (projectID)
);

CREATE TABLE tasks(
	IDtask INTEGER PRIMARY KEY Autoincrement,
	taskOwner INTEGER REFERENCES users(IDuser),
	projectID INTEGER REFERENCES projects(IDproject),
	taskName VARCHAR(60),
	taskDescription VARCHAR(500),
	priority VARCHAR(60),
	dateLimit DATE,
	completed INTEGER,
	completionDate DATE
);

CREATE TABLE forum(
	IDforum INTEGER PRIMARY KEY Autoincrement,
	projectID INTEGER REFERENCES projects(IDproject),
	ownerID INTEGER REFERENCES users(IDuser),
	forumTitle VARCHAR(60),
	forumDescription VARCHAR(500)
);

CREATE TABLE post(
	IDpost INTEGER PRIMARY KEY Autoincrement,
	forumID INTEGER REFERENCES forum(IDforum),
	ownerID INTEGER REFERENCES users(IDuser),
	postText VARCHAR(500),
	postDate DATE
);

CREATE TABLE notification(
	userID INTEGER REFERENCES users(IDuser),
	senderID INTEGER REFERENCES users(IDuser),
	projectID INTEGER REFERENCES projects(IDproject),
	text VARCHAR(500),
	dateSent DATE,
	PRIMARY KEY (userID)
);
