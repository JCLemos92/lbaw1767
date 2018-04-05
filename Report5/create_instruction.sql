PRAGMA foreign_keys = ON;

CREATE TABLE users(
	user_ID INTEGER PRIMARY KEY Autoincrement NOT NULL,
	username VARCHAR(60) NOT NULL,
	password VARCHAR(60) NOT NULL,
	name VARCHAR(60),
	lastName VARCHAR(60),
	gender ENUM('M','F','O'),
	country VARCHAR(60),
	email VARCHAR(60) NOT NULL
);

CREATE TABLE projects(
	project_ID INTEGER PRIMARY KEY Autoincrement NOT NULL,
	projTitle VARCHAR(60) NOT NULL,
	projDescription VARCHAR(500) NOT NULL,
	teamSize INTEGER NOT NULL,
	privacy BOOLEAN NOT NULL
);

CREATE TABLE projectMembers(
	project_ID INTEGER REFERENCES projects(project_ID),
	user_ID INTEGER REFERENCES users(user_ID),
	role ENUM('Coordinator', 'Member', 'Pending'),
	PRIMARY KEY (project_ID)
);

CREATE TABLE bannedMembers(
	project_ID INTEGER REFERENCES projects(project_ID),
	user_ID INTEGER REFERENCES users(user_ID),
	PRIMARY KEY (project_ID)
);
	

CREATE TABLE tasks(
	task_ID INTEGER PRIMARY KEY Autoincrement NOT NULL UNIQUE,
	taskOwner INTEGER REFERENCES users(user_ID) NOT NULL,
	project_ID INTEGER REFERENCES projects(project_ID) NOT NULL,
	taskName VARCHAR(60) NOT NULL,
	taskDescription VARCHAR(500) NOT NULL,
	priority ENUM('High', 'Medium', 'Low') NOT NULL,
	dateCreated DATE NOT NULL,
	dateLimit DATE,
	status ENUM('Completed', 'Pending', 'Progress')
);

CREATE TABLE taskInProgress(
	task_ID INTEGER PRIMARY KEY Autoincrement NOT NULL UNIQUE,
	taskWorker INTEGER REFERENCES users(user_ID) NOT NULL
);

CREATE TABLE taskCompleted(
	task_ID INTEGER PRIMARY KEY Autoincrement NOT NULL UNIQUE,
	taskWorker INTEGER REFERENCES users(user_ID) NOT NULL,
	completionDate DATE NOT NULL
);

CREATE TABLE forumPost(
	forum_ID INTEGER PRIMARY KEY Autoincrement NOT NULL,
	project_ID INTEGER REFERENCES projects(project_ID) NOT NULL,
	owner_ID INTEGER REFERENCES users(user_ID) NOT NULL,
	forumTitle VARCHAR(60) NOT NULL,
	post VARCHAR(500) NOT NULL,
	dateCreated DATE NOT NULL
);

CREATE TABLE comments(
	comment_ID INTEGER PRIMARY KEY Autoincrement NOT NULL,
	forum_ID INTEGER REFERENCES forumPost(forum_ID) NOT NULL,
	owner_ID INTEGER REFERENCES users(user_ID) NOT NULL,
	commentText VARCHAR(500) NOT NULL,
	commentDate DATE NOT NULL
);

CREATE TABLE notification(
	notification_ID INTEGER PRIMARY KEY Autoincrement NOT NULL,
	user_ID INTEGER REFERENCES users(user_ID) NOT NULL,
	sender_ID INTEGER REFERENCES users(user_ID) NOT NULL,
	project_ID INTEGER REFERENCES projects(project_ID) NOT NULL,
	task_ID INTEGER REFERENCES tasks(task_ID),
	notificationText VARCHAR(500) NOT NULL,
	dateSent DATE NOT NULL
);
