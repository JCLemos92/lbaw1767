# A2: Actors and User stories
 
## 1. Actors

![alt text](https://github.com/JCLemos92/lbaw1767/blob/master/Report2/oie.png "Logo Title Text 1")


Figure 1: Actors.

 
Identifier|Description|Examples
----------|-----------|--------
User|Generic user that has access to public information such as public project names and descriptions|N/A
Visitor|Unauthenticated user that has access to public information such as public project names and descriptions. Can register itself (sign-up) or sign-in in the system|N/A
Authenticated User|User that Authenticated at system, has access to the projects and foruns|N/A
Common|User that joins a project or is included by the coordinator of said project. Can add tasks, comment on them and create topics on the forum|Team members
Coordinator|User that creates a project. Can invite, accept join requests and ban users of said project. Has the same permissions of Common user|Team Leader
API|External API that can be used to register or authenticate in the system|Facebook

Table 1: Actor's description 


## 2. User Stories 

### 2.1. Visitor

Identifier|Name|Priority|Description
----------|----|--------|-----------
US01|Sign-In|High|As a visitor, I want to authenticate into the system, so that I can access privileged information
US02|Sign-up|High|As a visitor, I want to register myself into the system, so that I can authenticate myself into the system
US03|Sign-in using external API|Low|As a Visitor, I want to sign-in through my Facebook account, so that I can authenticate myself into the system
US04|Sign-up using external API|Low|As a Visitor, I want to register a new account linked to my Facebook account, so that I can access privileged information

Table 2: Visitor's user stories 

### 2.2. User

Identifier|Name|Priority|Description
----------|----|--------|-----------
US11|Home page|High|As an User, I want to access home page, so that I can see a brief website's presentation
US12|About page|High|As an User, I want to access the about page, so that I can see a complete website's description
US13|Projects page|High|As an User, I want to access the projects page, so that I can see the prejects list
US14|Help page|High|As an User, I want to access the Help page, so that I can take off my doubts about the system
US15|Contact page|High|As an User, I want to access contact page, so that I can see the contacts
US16|Search|High|As an User, I want to consult all the public information, so that I be informed

Table 3: User's user stories 

### 2.3. Authenticated User

Identifier|Name|Priority|Description
----------|----|--------|-----------
US21|Sign-Out|High|As a authenticated user, I want to exit from the system, so that I can end my session
US22|Search projects|High|As a authenticated user, I want to search a project, so that I can find the specific project
US23|Join a project|High|As a authenticated user, I want to join a project, so that I can access privileged information
US24|Edit profile|Medium|As a authenticated user, I want to edit my profile, so that I can keep my profile updated

Table 4: Authenticated User's user stories 

### 2.4. Common
Identifier|Name|Priority|Description
----------|----|--------|-----------
US31|Member list|High|As a common user in a project, I want to access the member list, so that I can see the members on project
US32|Create a task|High|As a common user in a project, I want to create tasks, so that I set goals
US33|Comment on a task|High|As a common user in a project, I want to comment on the tasks, so that I can tell other users my opinion
US34|Create a forum posts|High|As a common user in a project, I want to create forum posts, so that I start a discussion
US35|Comment on a forum post|High|As a common user in a project, I want to comment on the forum posts, so that I can tell other users my opinion
US36|Edit comments|Low|As a common user in a project, I want to edit my comments on the forum posts, so that I can fix my comment

Table 5: Common User's user stories 

### 2.5. Coordinator
Identifier|Name|Priority|Description
----------|----|--------|-----------
US41|Add user|High|As a project coordinator, I want to add users, so that I can include users on the project
US42|Remove user|High|As a project coordinator, I want to remove users, so that I can keep only actives users on the project
US43|Accept user|High|As a project coordinator, I want to accept users, so that I can include users on the project
US44|Refuse user|High|As a project coordinator, I want to refuse users, so I can reject unnecessary users in the project
US45|Edit project|High|As a project coordinator, I want to edit project description, so I can adjust the goals of project
US46|Remove comments|High|As a project coordinator, I want to remove comments, so I can avoid unwanted comments

Table 6: Coordinator's user stories
 
## A1. Annex: Supplementary requirements
This annex contains business rules, technical requirements and other non-functional requirements on the project.
 
### A1.1. Business rules
A business rule defines or constrains one aspect of the business, with the intention of asserting business structure or influencing business behaviour.

Identifier|Name|Description 
----------|----|-----------
BR01|User's login|A user login must contain at least 5 characters, including only letters, numbers and  symbols
BR02|User's password|A user password must contain at least 8 characters, including only letters, numbers and  symbols
BR03|Max Users|A project can contain a maximum of 100 users

 ### A1.2. Technical requirements
Technical requirements are concerned with the technical aspects that the system must meet, such as performance-related issues, reliability issues and availability issues. 

Identifier|Name|Description 
----------|----|-----------
TR01|Availability|The system must be available 99 percent of the time in each 24-hour period
TR02|Accessibility|The system must ensure that everyone can access the pages, regardless of whether they have any handicap or not, or the Web browser they use
TR03|Usability|The system should be simple and easy to use
TR04|Performance|The system should have response times shorter than 2s to ensure the user's attention
TR05|Web application|The system should be implemented as a Web application with dynamic pages (HTML5, JavaScript, CSS3 and PHP)
TR06|Portability|The server-side system should work across multiple platforms (Linux, Mac OS, etc.)
TR07|Database|The PostgreSQL 9.4 database management system must be used
TR08|Security|The system shall protect information from unauthorised access through the use of an authentication and verification system
TR09|Robustness|The system must be prepared to handle and continue operating when runtime errors occur
TR10|Scalability|The system must be prepared to deal with the growth in the number of users and their actions
TR11|Ethics|The system must respect the ethical principles in software development (for example, the password must be stored encrypted to ensure that only the owner knows it) 
TR12|Legal requiriments|The system must be acording the laws
  
### A1.3. Restrictions
 
A restriction on the design limits the degree of freedom in the search for a solution

Identifier|Name|Description 
----------|----|-----------
C01|Deadline|The system should be ready to be used at the end of june 2018


***
 
## Revision history
 
Changes made to the first submission:
1. Item 1
1. Item 2
 
***

GROUP1767, 28/02/2018
 
> Carla Cristine Alvarenga Ferrarez de Castro, up201710786@fe.up.pt

> Gabriel Francisco Machado, up201711002@fe.up.pt
 
> João Carlos Fonseca Pina de Lemos, ee10201@fe.up.pt

> Luis Guilherme da Costa Castro Neves, up201306485@fe.up.pt
