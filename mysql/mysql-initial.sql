CREATE DATABASE IF NOT EXISTS vibrato;
CREATE USER vibratotest IDENTIFIED WITH mysql_native_password BY 'MySuperSecureUserPassword';
GRANT ALL ON vibrato.* TO 'vibratotest';
flush privileges;
use vibrato;
CREATE TABLE mystrings (
string VARCHAR(30) NOT NULL
);
INSERT INTO mystrings (string) VALUES ("ExampleString1");
commit;
