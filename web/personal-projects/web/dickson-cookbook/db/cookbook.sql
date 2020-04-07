DROP TABLE recipe;
DROP TABLE category;

CREATE TABLE category (
    id SERIAL       PRIMARY KEY NOT NULL
  , category_name   VARCHAR(100) NOT NULL 
);

CREATE TABLE recipe (
    id SERIAL       PRIMARY KEY NOT NULL
  , title           VARCHAR(100) NOT NULL
  , ingredients     VARCHAR(10000) NOT NULL
  , instructions    VARCHAR(10000) NOT NULL
  , category_id     INT NOT NULL REFERENCES category(id)
  );

  SELECT * FROM recipe;