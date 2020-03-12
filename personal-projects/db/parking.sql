
--*********************Drop all tables*********************--
DROP TABLE parking;
DROP TABLE parkingoncampus;


--*********************Create tables*********************--
CREATE TABLE parking
( id                        SERIAL        NOT NULL UNIQUE PRIMARY KEY
, floor                     INT              NOT NULL
, space                     INT           NOT NULL
);

CREATE TABLE parkingoncampus
( id                        SERIAL        NOT NULL UNIQUE PRIMARY KEY
, location                  VARCHAR(50)   NOT NULL
);


--*********************Insert characters and attributes to tables*********************--
INSERT INTO parking   ( floor
                        , space)
                 VALUES (2
                        , 122);

INSERT INTO parkingoncampus (location)
                 VALUES ('1-backleft');






\echo --*********************List all from character*********************--
SELECT * FROM parking;
SELECT * FROM parkingoncampus;