CREATE IF NOT EXISTS order_contents (
content_id INT UNSIGNED NOT NULL ,
user_id INT UNSIGNED NOT NULL , 
total DECIMAL(8,2) NOT NULL ,
order_date DATETIME NOT NULL ,
PRIMARY KEY (order_id));