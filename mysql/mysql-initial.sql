CREATE DATABASE IF NOT EXISTS vibrato;
CREATE USER 'vibratotest' IDENTIFIED BY 'MySuperSecureUserPassword';
GRANT ALL ON *.* TO 'vibratotest';
flush privileges;
use vibrato;
CREATE TABLE mystrings (
string VARCHAR(30) NOT NULL
);
INSERT INTO mystrings (string) VALUES ("ExampleString1");
commit;
