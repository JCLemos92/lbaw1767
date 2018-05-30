DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS projects CASCADE;
DROP TABLE IF EXISTS tests CASCADE;
DROP TABLE IF EXISTS user_project CASCADE; 
DROP TABLE IF EXISTS projectMembers CASCADE; 
DROP TABLE IF EXISTS projectmembers CASCADE; 
DROP TABLE IF EXISTS tasks CASCADE; 


DROP TYPE IF EXISTS enum_gender;
DROP TYPE IF EXISTS enum_role;
DROP TYPE IF EXISTS enum_priority;
DROP TYPE IF EXISTS enum_status;


CREATE TYPE enum_gender AS ENUM ('M', 'F', 'O');
CREATE TYPE enum_role AS ENUM ('Coordinator', 'Member', 'Pending');
CREATE TYPE enum_priority AS ENUM('High', 'Medium', 'Low');
CREATE TYPE enum_status AS ENUM('Completed', 'Pending', 'Progress');


CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  name VARCHAR NOT NULL,
  last_name VARCHAR NOT NULL,
  birthday VARCHAR NOT NULL,
  email VARCHAR UNIQUE NOT NULL,
  username VARCHAR UNIQUE NOT NULL,
  password VARCHAR NOT NULL,
  remember_token VARCHAR
);

CREATE TABLE projects(
	id SERIAL PRIMARY KEY,
	proj_title VARCHAR NOT NULL,
	proj_description VARCHAR NOT NULL,
	team_size INTEGER NOT NULL,
	privacy BOOLEAN NOT NULL
);

CREATE TABLE user_project(
  user_id SERIAL references users,
  project_id SERIAL references projects,
  is_coord BOOLEAN NOT NULL,

  PRIMARY KEY(user_id, project_id)
);

CREATE TABLE tests(
	id SERIAL PRIMARY KEY,
	email VARCHAR UNIQUE NOT NULL,
	username VARCHAR UNIQUE NOT NULL,
	password VARCHAR NOT NULL,
	name VARCHAR NOT NULL,
	last_name VARCHAR NOT NULL,
	gender enum_gender NOT NULL,
	country VARCHAR NOT NULL
);

CREATE TABLE projectMembers(
	project_id INTEGER NOT NULL,
	user_id INTEGER NOT NULL,
	role enum_role NOT NULL,

	PRIMARY KEY(project_id, user_id)
);

CREATE TABLE tasks(
	task_id SERIAL PRIMARY KEY,
	taskOwner INTEGER REFERENCES users NOT NULL,
	project_id INTEGER REFERENCES projects NOT NULL,
	taskName VARCHAR(60) NOT NULL,
	taskDescription VARCHAR(500) NOT NULL,
	priority enum_priority NOT NULL,
	dateCreated DATE NOT NULL,
	dateLimit DATE,
	status enum_status
);

INSERT INTO users VALUES (
  DEFAULT,
  'Andre',
  'Marques',
  '25/04/1988',
  'andremarques@gmail.com',
  'andremarques',
  '$2y$12$irfoE9SMNlFFnow80p9a4OCZpkYSnSJ8cRM0kxU4/7zk4i5QGP1TG'
); -- Password is andre123. Generated using Hash::make('1234')

INSERT INTO users VALUES (
  DEFAULT,
  'Julia',
  'Pereira',
  '12/07/1997',
  'juliapereira@gmail.com',
  'JuPereira',
  '$2y$12$hnpEMqzx/R2P1Nb389TxMOTi5TY1WtvxxBD/nASGKttDcWHdS91Zm'
); -- Password is julia123. Generated using Hash::make('1234')


insert into projects values (DEFAULT, 'Hansen, Hansen and Kilback', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 76, true); 
insert into projects values (DEFAULT, 'Wilderman LLC', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 52, false);
insert into projects values (DEFAULT, 'DuBuque-Huels', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 75, false); 
insert into projects values (DEFAULT, 'Franecki and Sons', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.', 43, true); 
insert into projects values (DEFAULT, 'O''Connell, Romaguera and Roob', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 61, true);
insert into projects values (DEFAULT, 'Mann Inc', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 93, true); 

