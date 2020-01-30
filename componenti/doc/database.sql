USE 5ainf;

CREATE TABLE componenti (
	id INTEGER NOT NULL PRIMARY KEY,
	componente VARCHAR(50),
    costo VARCHAR(50)
)

-- DROP TABLE componenti
-- DROP DATABASE 5ainf

INSERT INTO componenti(id, componente, costo) 
     VALUES (1, 'CPU', '40.00');
     
INSERT INTO componenti(id, componente, costo) 
     VALUES (2, 'Mother Board', '12.00');
     
INSERT INTO componenti(id, componente, costo) 
     VALUES (3, 'Tastiera', '35.00'),
            (4, 'Monitor', '85.00');
			

CREATE USER 'admin5ainf'@'localhost' IDENTIFIED BY 'admin5ainf';
GRANT ALL PRIVILEGES ON 5ainf . componenti TO 'admin'@'localhost';
