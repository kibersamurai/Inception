CREATE DATABASE wordpress;
CREATE USER 'bprovolo'@'%'IDENTIFIED BY '123123';
GRANT ALL PRIVILEGES ON wordpress.* TO 'bprovolo'@'%';
FLUSH PRIVILEGES; 
ALTER USER 'root'@'localhost' IDENTIFIED BY 'boss';