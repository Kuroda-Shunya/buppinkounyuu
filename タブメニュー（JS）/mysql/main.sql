CREATE DATABASE buy_lists

CREATE TABLE table_want (
  id INT NOT NULL AUTO_INCREMENT,
  goods TEXT,
  price INT,
  url TEXT,
  name TEXT,
  note TEXT,
  PRIMARY KEY (id)
);


CREATE TABLE table_allowed (
  id INT NOT NULL AUTO_INCREMENT,
  goods TEXT,
  price INT,
  url TEXT,
  name TEXT,
  note TEXT,
  buget_name TEXT,
  treat TEXT,
  note_teach TEXT,
  PRIMARY KEY (id)
);


CREATE TABLE table_purchased (
  id INT NOT NULL AUTO_INCREMENT,
  goods TEXT,
  price INT,
  url TEXT,
  name TEXT,
  note TEXT,
  buget_name TEXT,
  treat TEXT,
  note_teach TEXT,
  buy_date TEXT,
  PRIMARY KEY (id)
);