-- This is for demonstration purposes only and would normally never be included in version control
-- unless obfuscated in some fashion
drop user if exists 'graham_demo'@'localhost';
CREATE USER IF NOT EXISTS 'graham_demo'@'localhost' IDENTIFIED BY 'graham_demo';
GRANT ALL ON *.* TO 'janet'@'localhost' WITH GRANT OPTION;