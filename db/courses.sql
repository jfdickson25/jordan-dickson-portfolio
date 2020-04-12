--*********************Drop all tables*********************--
DROP TABLE courses;


--*********************Create tables*********************--
CREATE TABLE courses
( id                        SERIAL        NOT NULL UNIQUE PRIMARY KEY
, grade      VARCHAR(10)  NOT NULL
, course     VARCHAR(100)  NOT NULL
, code VARCHAR(10) NOT NULL
);


--*********************Insert characters and attributes to tables*********************--
-- Character 1 --
INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CS124'
                        , 'Intro to Software Engineering'
                        , 'A');
INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CS165'
                        , 'Object Oriented Programming'
                        , 'A');
INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CS235'
                        , 'Data Structures'
                        , 'A');

INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CS246'
                        , 'Software Design and Development'
                        , 'A');

INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CS213'
                        , 'Web Engineering 1'
                        , 'A-');

INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CS308'
                        , 'Technical Communications'
                        , 'A');

INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CIT270'
                        , 'Systems Security'
                        , 'B+');

INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('ECEN160'
                        , 'Fundamentals of Digital Systems'
                        , 'A-');

INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CS364'
                        , 'Software Engineering 1'
                        , 'B+');

INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CS371'
                        , 'Human Computer Interactions'
                        , 'A');

INSERT INTO courses   ( code
                        , course
                        , grade)
                 VALUES ('CS313'
                        , 'Web Engineering 2'
                        , 'A-');


\echo --*********************List all from character*********************--
SELECT 
      code AS "Course Code"
    , course AS "Course Description"
    , grade AS "Grade"
    FROM courses;