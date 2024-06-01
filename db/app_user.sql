drop user if exists 'graham_demo'@'localhost';
CREATE USER 'graham_demo'@'localhost' IDENTIFIED BY 'graham_demo';
GRANT ALL ON *.* TO 'graham_demo'@'localhost' WITH GRANT OPTION;