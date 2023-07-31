use  MyTestDb;

create table if not exists MyUsers(
 id int not null AUTO_INCREMENT PRIMARY KEY,
 First_Name varchar(25) Not null,
 Last_Name varchar(25) Not null,
 UserId varchar(25),
 Pswd varchar(25),
 isAdmin int,
 isActive int
);


create table if not exists MyWebDocs(
 id int not null AUTO_INCREMENT PRIMARY KEY,
 Title varchar(25) Not null,
-- Category varchar(25),
 Header1 varchar(25),
 Text1 varchar(225),
 ParentPage int DEFAULT 0,
 SortOrder int DEFAULT 2,
 isActive int
);

-- Sample data
INSERT INTO MyUsers ( id, First_Name, Last_Name, UserId, Pswd, isAdmin, isActive)
VALUES    (1, 'uFirstName', 'uLastName', 'myuser', 'a', 0, 1)
ON DUPLICATE KEY UPDATE
First_Name = 'uFirstName', Last_Name = 'uLastName', UserId = 'myuser', Pswd = 'a', isAdmin = 0, isActive = 1;

INSERT INTO MyUsers ( id, First_Name, Last_Name, UserId, Pswd, isAdmin, isActive)
VALUES    (2, 'aFirstName', 'aLastName', 'myadmin', 'a', 1, 1)
ON DUPLICATE KEY UPDATE
First_Name = 'aFirstName', Last_Name = 'aLastName', UserId = 'myadmin', Pswd = 'a', isAdmin = 1, isActive = 1;

INSERT INTO MyUsers ( id, First_Name, Last_Name, UserId, Pswd, isAdmin, isActive)
VALUES    (2, 'aFirstName', 'aLastName', 'myadmin', 'a', 1, 1)
ON DUPLICATE KEY UPDATE
First_Name = 'aFirstName', Last_Name = 'aLastName', UserId = 'myadmin', Pswd = 'a', isAdmin = 1, isActive = 1;

-- --------------------------------------
-- Main links/pages
INSERT INTO MyWebDocs ( id, Title, Header1, Text1, SortOrder, isActive)
VALUES    (1, 'Home', 'Header number 1', 'My text, asfaf af af af a sag asf saf', 0, 1)
ON DUPLICATE KEY UPDATE
Title = 'Home', Header1 = 'Header number 1', Text1 = 'My text, asfaf af af af a sag asf saf', SortOrder = 0, isActive = 1;

INSERT INTO MyWebDocs ( id, Title, Header1, Text1, SortOrder, isActive)
VALUES    (2, 'Something', 'Header number 2', 'My text, asfaf af af af a sag asf saf', 2, 1)
ON DUPLICATE KEY UPDATE
Title = 'something', Header1 = 'Header number 2', Text1 = 'My text, asfaf af af af a sag asf saf', SortOrder = 2, isActive = 1;

INSERT INTO MyWebDocs ( id, Title, Header1, Text1, SortOrder, isActive)
VALUES    (3, 'About', 'Header number 3', 'My text, asfaf af af af a sag asf saf', 3, 1)
ON DUPLICATE KEY UPDATE
Title = 'About', Header1 = 'Header number 3', Text1 = 'My text, asfaf af af af a sag asf saf', SortOrder = 3, isActive = 1;

INSERT INTO MyWebDocs ( id, Title, Header1, Text1, SortOrder, isActive)
VALUES    (4, 'Contact Us', 'Header number 4', 'My text, asfaf af af af a sag asf saf', 4, 1)
ON DUPLICATE KEY UPDATE
Title = 'Contact Us', Header1 = 'Header number 4', Text1 = 'My text, asfaf af af af a sag asf saf', SortOrder = 4, isActive = 1;

-- ---------------------
-- Sub pages
-- Note Parent Id points to the record with id=1
INSERT INTO MyWebDocs ( id, Title, Header1, Text1, ParentPage, SortOrder, isActive)
VALUES    (5, 'Home 1', 'Sub Header number 1', 'My text, asfaf af af af a sag asf saf', 1, 3, 1)
ON DUPLICATE KEY UPDATE
Title = 'Home 1', Header1 = 'Sub Header number 1', Text1 = 'My text, asfaf af af af a sag asf saf', ParentPage = 1, SortOrder = 3, isActive = 1;

INSERT INTO MyWebDocs ( id, Title, Header1, Text1, ParentPage, SortOrder, isActive)
VALUES    (6, 'Home 2', 'Sub Header number 2', 'My text, asfaf af af af a sag asf saf', 1, 4, 1)
ON DUPLICATE KEY UPDATE
Title = 'Home 2', Header1 = 'Sub Header number 2', Text1 = 'My text, asfaf af af af a sag asf saf', ParentPage = 1, SortOrder = 4, isActive = 1;

-- Note Parent Id points to the record with id=2
INSERT INTO MyWebDocs ( id, Title, Header1, Text1, ParentPage, SortOrder, isActive)
VALUES    (7, 'Something 1', 'Sub Header number 1', 'My text, asfaf af af af a sag asf saf', 2, 3, 1)
ON DUPLICATE KEY UPDATE
Title = 'Something 1', Header1 = 'Sub Header number 1', Text1 = 'My text, asfaf af af af a sag asf saf', ParentPage = 2, SortOrder = 3, isActive = 1;

INSERT INTO MyWebDocs ( id, Title, Header1, Text1, ParentPage, SortOrder, isActive)
VALUES    (8, 'Something 2', 'Sub Header number 2', 'My text, asfaf af af af a sag asf saf', 2, 4, 1)
ON DUPLICATE KEY UPDATE
Title = 'Something 2', Header1 = 'Sub Header number 2', Text1 = 'My text, asfaf af af af a sag asf saf', ParentPage = 2, SortOrder = 4, isActive = 1;




