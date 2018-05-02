CREATE DATABASE PROF_DEV_TRACKER;

CREATE TABLE INSTRUCTORS
(
    Instructor_ID(9) int NOT NULL,
    I_First_Name(20) varchar,
    I_Last_Name(20) varchar,
    I_Email(40) varchar,
    PRIMARY KEY (Instructor_ID)
);

CREATE TABLE CLASSES
(
    Class_ID(5) int NOT NULL,
    Instructor_ID(9) int,
    Class_Name(40) varchar,
    Dates(10) varchar,
    Time(10) varchar
    PRIMARY KEY (Class_ID),
    FOREIGN KEY (Instructor_ID) REFERENCES INSTRUCTORS(Instructor_ID)
);

CREATE TABLE STUDENTS
(
    Student_ID(9) int NOT NULL,
    S_First_Name(20) varchar,
    S_Last_Name(20) varchar,
    S_Email(40) varchar,
    Phone_Num(10) int,
    PRIMARY KEY (Student_ID)
);

CREATE TABLE CLASS_REGISTRATION
(
    Class_ID(5) int NOT NULL,
    Instructor_ID(9) int NOT NULL,
    Student_ID(9) int NOT NULL,
    FOREIGN KEY(Class_ID) REFERENCES CLASSES(Class_ID),
    FOREIGN KEY(Instructor_ID) REFERENCES INSTRUCTORS(Instructor_ID),
    FOREIGN KEY(Student_ID) REFERENCES STUDENTS(Student_ID)
);

INSERT INTO INSTRUCTORS(Instructor_ID, I_First_Name, I_Last_Name, I_Email)
VALUES(000111111, "Mary", "Johnson", "johnson_mary@facdev.edu");
INSERT INTO INSTRUCTORS(Instructor_ID, I_First_Name, I_Last_Name, I_Email)
VALUES(000222222, "Sarah", "Smith", "smith_sarah@facdev.edu");
INSERT INTO INSTRUCTORS(Instructor_ID, I_First_Name, I_Last_Name, I_Email)
VALUES(000333333, "James", "Brown", "brown_james@facdev.edu");
INSERT INTO INSTRUCTORS(Instructor_ID, I_First_Name, I_Last_Name, I_Email)
VALUES(000444444, "Peter", "Lee", "lee_peter@facdev.edu");
INSERT INTO INSTRUCTORS(Instructor_ID, I_First_Name, I_Last_Name, I_Email)
VALUES(000555555, "Kim", "Jones", "jones_kim@facdev.edu");

INSERT INTO CLASSES(Class_ID, Instructor_ID, Class_Name, Dates, Time)
VALUES(11111, 000111111, "Intro to Information Technology", "MW", "1:30 - 2:45 p.m.");
INSERT INTO CLASSES(Class_ID, Instructor_ID, Class_Name, Dates, Time)
VALUES(22222, 000222222, "Agile Development", "TTH", "3:00 - 3:50 p.m.");
INSERT INTO CLASSES(Class_ID, Instructor_ID, Class_Name, Dates, Time)
VALUES(33333, 000333333, "Pega Principles", "MW", "12:00 - 1:15 p.m.");
INSERT INTO CLASSES(Class_ID, Instructor_ID, Class_Name, Dates, Time)
VALUES(44444, 000444444, "Microsoft Office Essentials", "TTH", "6:30 - 7:45 p.m.");
INSERT INTO CLASSES(Class_ID, Instructor_ID, Class_Name, Dates, Time)
VALUES(55555, 000555555, "", "MW", "4:30 - 5:45 p.m.");


INSERT INTO STUDENTS(Student_ID, S_First_Name, S_Last_Name, S_Email, Phone_Num)
VALUES(999111111, "Ashley", "Smith", "smith_ashley@facdev.edu", 5551111111);
INSERT INTO STUDENTS(Student_ID, S_First_Name, S_Last_Name, S_Email, Phone_Num)
VALUES(999222222, "Jordan", "Roberts", "roberts_jordan@facdev.edu", 5552222222);
INSERT INTO STUDENTS(Student_ID, S_First_Name, S_Last_Name, S_Email, Phone_Num)
VALUES(999333333, "Michael", "Black", "black_michael@facdev.edu", 5553333333);
INSERT INTO STUDENTS(Student_ID, S_First_Name, S_Last_Name, S_Email, Phone_Num)
VALUES(999444444, "Leigh", "White", "white_leigh@facdev.edu", 5554444444);
INSERT INTO STUDENTS(Student_ID, S_First_Name, S_Last_Name, S_Email, Phone_Num)
VALUES(999555555, "Zachary", "Peterson", "peterson_zachary@facdev.edu", 5556666666);

INSERT INTO CLASS_REGISTRATION(Class_ID, Instructor_ID, Student_ID)
VALUES(, , );