CREATE TABLE info_site(
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100)NOT NULL,
    phone VARCHAR(15)NOT NULL,
    mail VARCHAR(50)NOT NULL,
    whats VARCHAR(15) NOT NULL,
    descripcion VARCHAR(255)NULL,
    portada VARCHAR(255) null,
    icon VARCHAR(255) null,
    logo VARCHAR(255) NULL,
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

CREATE TABLE slider_copy(
    id INT(11) NOT NULL AUTO_INCREMENT,
    descripción VARCHAR(255)NOT NULL,
    button VARCHAR(15)NOT NULL,
    link VARCHAR(50)NOT NULL,
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE products(
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(150)NOT NULL,
    description VARCHAR(255) NULL,
    link varchar(255)NULL,
    img VARCHAR (255) NOT NULL, 
    fondo VARCHAR(255)NOT NULL, 
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;