DROP TABLE IF EXISTS produits;
DROP TABLE IF EXISTS categories;

CREATE TABLE categories (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE produits (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  imagePath VARCHAR(255) NOT NULL DEFAULT 'images/produits/image-non-disponible.jpg',
  categorie_id INT UNSIGNED NOT NULL,
  CONSTRAINT fk_produits_categories
    FOREIGN KEY (categorie_id) REFERENCES categories(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO categories (id, nom) VALUES
  (1, 'Catégorie 1'),
  (2, 'Catégorie 2'),
  (3, 'Catégorie 3'),
  (4, 'Catégorie 4'),
  (5, 'Catégorie 5');

INSERT INTO produits (id, nom, description, imagePath, categorie_id) VALUES
  (1,  'Produit 1',  'Description du produit 1.',  'images/produits/image-non-disponible.jpg', 1),
  (2,  'Produit 2',  'Description du produit 2.',  'images/produits/image-non-disponible.jpg', 1),
  (3,  'Produit 3',  'Description du produit 3.',  'images/produits/image-non-disponible.jpg', 1),
  (4,  'Produit 4',  'Description du produit 4.',  'images/produits/image-non-disponible.jpg', 1),
  (5,  'Produit 5',  'Description du produit 5.',  'images/produits/image-non-disponible.jpg', 2),
  (6,  'Produit 6',  'Description du produit 6.',  'images/produits/image-non-disponible.jpg', 2),
  (7,  'Produit 7',  'Description du produit 7.',  'images/produits/image-non-disponible.jpg', 2),
  (8,  'Produit 8',  'Description du produit 8.',  'images/produits/image-non-disponible.jpg', 2),
  (9,  'Produit 9',  'Description du produit 9.',  'images/produits/image-non-disponible.jpg', 3),
  (10, 'Produit 10', 'Description du produit 10.', 'images/produits/image-non-disponible.jpg', 3),
  (11, 'Produit 11', 'Description du produit 11.', 'images/produits/image-non-disponible.jpg', 3),
  (12, 'Produit 12', 'Description du produit 12.', 'images/produits/image-non-disponible.jpg', 3),
  (13, 'Produit 13', 'Description du produit 13.', 'images/produits/image-non-disponible.jpg', 4),
  (14, 'Produit 14', 'Description du produit 14.', 'images/produits/image-non-disponible.jpg', 4),
  (15, 'Produit 15', 'Description du produit 15.', 'images/produits/image-non-disponible.jpg', 4),
  (16, 'Produit 16', 'Description du produit 16.', 'images/produits/image-non-disponible.jpg', 4),
  (17, 'Produit 17', 'Description du produit 17.', 'images/produits/image-non-disponible.jpg', 1),
  (18, 'Produit 18', 'Description du produit 18.', 'images/produits/image-non-disponible.jpg', 2),
  (19, 'Produit 19', 'Description du produit 19.', 'images/produits/image-non-disponible.jpg', 3),
  (20, 'Produit 20', 'Description du produit 20.', 'images/produits/image-non-disponible.jpg', 4);
