--this sql file creates a database called "gradecalculator" with three tables: login that holds a record of all the logins, signup that holds the record of all the sign ups and tabler that record all the value in input by the user for grades and marks
CREATE DATABASE gradecalculator;

USE gradecalculator;

CREATE TABLE login (
    id INT NOT NULL AUTO_INCREMENT,
    student_id INT NOT NULL,
    orario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

CREATE TABLE signup (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    student_id INT NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE tabler (
    id INT NOT NULL AUTO_INCREMENT,
    student_id INT NOT NULL,
    COMP7001_credits VARCHAR(10),
    COMP7001_marks VARCHAR(10),
    COMP7002_credits VARCHAR(10),
    COMP7002_marks VARCHAR(10),
    TECH7005_credits VARCHAR(10),
    TECH7005_marks VARCHAR(10),
    DALT7002_credits VARCHAR(10),
    DALT7002_marks VARCHAR(10),
    DALT7011_credits VARCHAR(10),
    DALT7011_marks VARCHAR(10),
    SOFT7003_credits VARCHAR(10),
    SOFT7003_marks VARCHAR(10),
    TECH7004_credits VARCHAR(10),
    TECH7004_marks VARCHAR(10),
    TECH7009_credits VARCHAR(10),
    TECH7009_marks VARCHAR(10),
    PRIMARY KEY (id)
);
