CREATE TABLE IF NOT EXISTS Producto(
	Codigo INT AUTO_INCREMENT PRIMARY KEY,
	Nombre VARCHAR(100) NOT NULL,
	Precio FLOAT NOT NULL,
	Imagen VARCHAR(100) NOT NULL
);

INSERT INTO Producto VALUES (0, 'Heineken', 18.50, 'lager_heineken.png')
INSERT INTO Producto VALUES (0, 'Corona', 16, 'lager_corona extra.png')
INSERT INTO Producto VALUES (0, 'Capitan Morgan', 79.99, 'ron_Capitan Morgan.png')
INSERT INTO Producto VALUES (0, 'Pils', 23.40, 'pilsner_pils.png')
INSERT INTO Producto VALUES (0, 'Trivento', 105.70, 'malbec_trivento.png')