CREATE TABLE topic (

TopicId		int PRIMARY KEY,
Description	varchar(250)

);

INSERT INTO topic (topicid, title)
	VALUES (1, 'The first message will be about fasting and preparing');

INSERT INTO topic (topicid, title)
	VALUES (2, 'The second message will be about the book of mormon');


CREATE TABLE member (

MemberId	int PRIMARY KEY,
FirstName	varchar(100) NOT NULL,
LastName	varchar(100),
EmailAddress	varchar(100)

);

INSERT INTO member (memberid, name, lastname, emailaddress)
	VALUES (1, 'Juan', 'Garcia', 'juang@gmail.com');

INSERT INTO member (memberid, name, lastname, emailaddress)
	VALUES (2, 'John', 'Rain', 'johnrain@gmail.com');


CREATE TABLE sacrament_meeting (

Id		int PRIMARY KEY,
MemberId	int,
TopicId		int,
SundayDate	date,
SpeakingOrder	int,
FOREIGN KEY (MemberId) REFERENCES Member(MemberId),
FOREIGN KEY (TopicId) REFERENCES Topic(TopicId)
);


INSERT INTO sacrament_meeting (id, sundaydate, speakingorder)
	VALUES (1, '2020-05-28', 1);

INSERT INTO sacrament_meeting (id, sundaydate, speakingorder)
	VALUES (1, '2020-10-14', 2);


