CREATE TABLE person (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    age INT
);

INSERT INTO person (name, age) VALUES ('Alice', 30);
INSERT INTO person (name, age) VALUES ('Bob', 25);
INSERT INTO person (name, age) VALUES ('Charlie', 35);
