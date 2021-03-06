DROP  TABLE if exists topic CASCADE;
DROP  TABLE if exists member CASCADE;
DROP  TABLE if exists sacrament_meeting CASCADE;

CREATE TABLE topic (

TopicId		serial PRIMARY KEY,
Descr	varchar(250)

);

INSERT INTO topic (Descr)
VALUES 
('The first message will be about fasting and preparing'),
('The second message will be about the book of mormon');

	


CREATE TABLE member (

MemberId	serial PRIMARY KEY,
FirstName	varchar(100) NOT NULL,
LastName	varchar(100),
EmailAddress	varchar(100)

);

INSERT INTO member (FirstName, LastName, EmailAddress)
VALUES 
('Juan', 'Garcia', 'juang@gmail.com'),
('John', 'Rain', 'johnrain@gmail.com');

	


CREATE TABLE sacrament_meeting (

Id		serial PRIMARY KEY,
MemberId	int,
TopicId		int,
SundayDate	date,
SpeakingOrder	int,
FOREIGN KEY (memberid) REFERENCES Member(memberid),
FOREIGN KEY (topicid) REFERENCES Topic(topicid)
);


INSERT INTO sacrament_meeting (SundayDate, SpeakingOrder)
VALUES 
('2020-05-28', 1),
('2020-10-14', 2);


CREATE TABLE login (
    id SERIAL PRIMARY KEY NOT NULL,
    username VARCHAR(80) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);




