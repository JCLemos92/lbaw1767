# A2: Actors and User stories
 
## 1. Actors

![alt text](https://github.com/JCLemos92/lbaw1767/blob/master/Report2/28511904_1925414804439284_572127218_n.png "Logo Title Text 1")


Figure 1: Actors.

 
Identifier|Description|Examples
----------|-----------|--------
User|Generic user that has access to public information such as public project names and descriptions, can ask to join projects if option is available|n/a
Visitor|Unauthenticated user that has access to public information such as public project names and descriptions, can register itself (sign-up) or sign-in in the system|n/a
Common|User that joins a project or is included by the coordinator of said project, can add tasks and comment on them, can create topics on the forum|Team members
Coordinator|User that creates a project. Can invite, accept join requests and ban users from said project, has same permissions as Common user|Team Leader
API|External API that can be used to register or authenticate into the system|Facebook

Table 1: Actor's description 


## 2. User Stories 

### 2.1. Visitor

Identifier|Name|Priority|Description
----------|----|--------|-----------
US01|Sign-In|high|As a visitor, I want to authenticate into the system, so that I can access privileged information
US02|Sign-up|high|As a visitor, I want to register myself into the system, so that I can authenticate myself into the system
US03|Sign-in using external API|low|As a Visitor, I want to sign-in through my Facebook account, so that I can authenticate myself into the system
US04|Sign-up using external API|low|As a Visitor, I want to register a new account linked to my Facebook account, so that I can access privileged information

Table 2: Visitor's user stories 

### 2.2. User

Identifier|Name|Priority|Description
----------|----|--------|-----------
US11|Home page|high|As an User, I want to access home page, so that I can see a brief website's presentation
US12|About page|high|As an User, I want to access the about page, so that I can see a complete website's description
US13|Projects page|high|As an User, I want to access the projects page, so that I can see the prejects list
US14|FAQ page|high|As an User, I want to access the FAQ page, so that I can see Frequently Asked Questions
US15|Contact page|high|As an User, I want to access contact page, so that I can see the contacts
US16|Search|high|As an User, I want to consult all the public information, so that I be informed

Table 3: User's user stories 

### 2.3. Registered User

Identifier|Name|Priority|Description
----------|----|--------|-----------
US21|Sign-Out|high|As a registered user, I want to exit from the system, so that I can end my session
US22|Search projects|high|As a registered user, I want to search a project, so that I can find the specific project
US23|Join a project|high|As a registered user, I want to join a project, so that I can access privileged information
US24|Edit profile|medium|As a registered user, I want to edit my profile, so that I can keep my profile updated

Table 4: Registered User's user stories 

### 2.4. Common
Identifier|Name|Priority|Description
----------|----|--------|-----------
US31|Member list|high|As a common user in a project, I want to access the member list, so that I can see the members on project
US32|Create a task|high|As a common user in a project, I want to create tasks, so that I set goals
US33|Comment on a task|high|As a common user in a project, I want to comment on the tasks, so that I can tell other users my opinion
US34|Create a forum posts|high|As a common user in a project, I want to create forum posts, so that I start a discussion
US35|Comment on a forum post|high|As a common user in a project, I want to comment on the forum posts, so that I can tell other users my opinion
US36|Edit comments|low|As a common user in a project, I want to edit my comments on the forum posts, so that I can fix my comment

Table 5: Common User's user stories 

### 2.5. Coordinator
Identifier|Name|Priority|Description
----------|----|--------|-----------
US41|Add user|high|As a project coordinator, I want to add users, so that I can include users on the project
US42|Remove user|high|As a project coordinator, I want to remove users, so that I can keep only actives users on the project
US43|Accept user|high|As a project coordinator, I want to accept users, so that I can include users on the project
US44|Refuse user|high|As a project coordinator, I want to refuse users, so I can reject unnecessary users in the project
US45|Edit project|high|As a project coordinator, I want to edit project description, so I can adjust the goals of project
US46|Remove comments|high|As a project coordinator, I want to remove comments, so I can avoid unwanted comments

Table 6: Coordinator's user stories

Visitor: adicionar de item – visitor (sign-up API low) https://web.fe.up.pt/~jlopes/doku.php/teach/lbaw/medialib/a2)
User: Sign-out, pesquisar projetos e solicitar entrada. Alterar info do perfil (medium) https://web.fe.up.pt/~jlopes/doku.php/teach/lbaw/medialib/a2  exceto item US17
Coordinator: Todas as condições do user, ver a lista de membros do grupo, add e remover usuário, aceitar pedidos de entrada, editar definições do projeto, criar e comentar nas tarefas, criar discussão e comentar no fórum, remover comentários.
Commom: Todas as condições do user, ver a lista de membros do grupo, criar e comentar nas tarefas, criar discussão e comentar no fórum. Editar comentários feitos (low).
> For each actor, a table containing a line for each user story, and for each user story: an identifier, a name, a priority, and a description (following the recommended structure).
 
### 2.1. Actor 1
 
### 2.2. Actor 2
 
### 2.N. Actor N
 
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

Technical requirements are concerned with the technical aspects that the system must meet, such as performance-related issues, reliability issues and availability issues.
Copiar de https://web.fe.up.pt/~jlopes/doku.php/teach/lbaw/medialib/a2 Technical requirements
  
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
