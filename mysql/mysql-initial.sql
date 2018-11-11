CREATE DATABASE IF NOT EXISTS vibrato;
CREATE USER 'vibrato-test' IDENTIFIED BY 'MySuperSecureUserPassword';
GRANT ALL ON *.* TO 'vibrato-test';
flush privileges;
use vibrato;
CREATE TABLE mystrings (
string VARCHAR(30) NOT NULL
);
INSERT INTO mystrings (string) VALUES ("ExampleString1");
