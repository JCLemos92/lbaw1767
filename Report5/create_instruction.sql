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
	projDescription VARCHAR(500) NOT NULL,
	teamSize INTEGER NOT NULL,
	privacy BOOLEAN NOT NULL
);

CREATE TABLE projectMembers(
	projectID INTEGER REFERENCES projects(IDproject),
	userID INTEGER REFERENCES users(IDuser),
	role ENUM('Coordinator', 'Member', 'Pending'),
	PRIMARY KEY (projectID)
);

CREATE TABLE tasks(
	IDtask INTEGER PRIMARY KEY Autoincrement NOT NULL UNIQUE,
	taskOwner INTEGER REFERENCES users(IDuser) NOT NULL,
	projectID INTEGER REFERENCES projects(IDproject) NOT NULL,
	taskName VARCHAR(60) NOT NULL,
	taskDescription VARCHAR(500) NOT NULL,
	priority ENUM('High', 'Medium', 'Low') NOT NULL,
	dateCreated DATE NOT NULL,
	dateLimit DATE,
	status ENUM('Completed', 'Pending', 'Progress')
);

CREATE TABLE taskInProgress(
	taskID INTEGER PRIMARY KEY Autoincrement NOT NULL UNIQUE,
	taskWorker INTEGER REFERENCES users(IDuser) NOT NULL
);

CREATE TABLE taskCompleted(
	taskID INTEGER PRIMARY KEY Autoincrement NOT NULL UNIQUE,
	taskWorker INTEGER REFERENCES users(IDuser) NOT NULL,
	completionDate DATE NOT NULL
);

CREATE TABLE forumPost(
	IDforum INTEGER PRIMARY KEY Autoincrement NOT NULL,
	projectID INTEGER REFERENCES projects(IDproject) NOT NULL,
	ownerID INTEGER REFERENCES users(IDuser) NOT NULL,
	forumTitle VARCHAR(60) NOT NULL,
	post VARCHAR(500) NOT NULL,
	dateCreated DATE NOT NULL
);

CREATE TABLE comments(
	IDcomment INTEGER PRIMARY KEY Autoincrement NOT NULL,
	forumID INTEGER REFERENCES forum(IDforum) NOT NULL,
	ownerID INTEGER REFERENCES users(IDuser) NOT NULL,
	commentText VARCHAR(500) NOT NULL,
	commentDate DATE NOT NULL
);

CREATE TABLE notification(
	userID INTEGER REFERENCES users(IDuser) NOT NULL,
	senderID INTEGER REFERENCES users(IDuser) NOT NULL,
	projectID INTEGER REFERENCES projects(IDproject) NOT NULL,
	taskID INTEGER REFERENCES tasks(IDtask),
	notificationText VARCHAR(500) NOT NULL,
	dateSent DATE NOT NULL
);
