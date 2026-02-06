DROP TABLE IF EXISTS cartes;
DROP TABLE IF EXISTS categories;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE cartes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    prix DECIMAL(6,2) NOT NULL,
    nb_cartes INT NOT NULL,
    imagePath VARCHAR(255),
    categorie_id INT NOT NULL,
    CONSTRAINT fk_cartes_categories
        FOREIGN KEY (categorie_id)
        REFERENCES categories(id)
        ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO categories (nom) VALUES
('Upper Deck Series 1'),
('Upper Deck Series 2'),
('SP Authentic'),
('SPx'),
('Upper Deck Ice'),
('Upper Deck Artifacts'),
('Upper Deck Young Guns');

INSERT INTO cartes (nom, description, prix, nb_cartes, imagePath, categorie_id) VALUES

(
 '2021-22 Upper Deck Series 1 Hobby Box',
 "Young Guns 1:4\n
    Young Guns - Exclusives parallèles jusqu'à 100 unités\n
    Young Guns - Parallel High Gloss #'d à 10\n
    Young Guns - Parallel Clear Cut (Hobby Exclusive !) 1:288\n
    Young Guns - Parallèle français\n
    UD Canvas Young Guns 1:48\n
    Plaques d'impression UD Canvas Young Guns\n",
 139.95,
 192,
 'images/cartes/2021-2022-series01.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Series 1')
),

(
 '2022-23 Upper Deck Series 2 Hockey Hobby Box',
 "La deuxième partie du produit phare de la LNH, la Série 2 Hockey 2022-23 Upper Deck, apporte de nouveaux inserts ainsi qu'un nouveau lot de recrues Young Guns à collectionner.",
 134.95,
 192,
 'images/cartes/2022-2023-series02.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Series 2')
),

(
 '2021-22 Upper Deck SPx Hockey Hobby Box',
 "Avec deux succès et deux cartes techniques par boîte, le SPx Hockey 2021-22 reste un moyen rapide de collectionner la NHL.\n
\n
Cette production annoncée de boîtes Hobby diffère légèrement de celle de 2020-21, qui comptait en moyenne deux à trois hits par boîte. Ces cartes peuvent être des autographes, des reliques ou des reliques autographiées.",
 164.95,
 4,
 'images/cartes/2021-2022-spx.jpg',
 (SELECT id FROM categories WHERE nom = 'SPx')
),

(
 '2024-25 Upper Deck Series 2 Hobby Box ',
 "2024-25 Upper Deck Series 2 Hockey marque le deuxième épisode de la trilogie phare de la saison. Suite de la série 1, elle comporte plusieurs parties qui se poursuivent directement ainsi que d'autres thèmes d'insertion frais. Bien sûr, il y a aussi des Young Guns.",
 149.95,
 90,
 'images/cartes/2024-2025-series02.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Series 2')
),

(
 '2022-23 Upper Deck SP Authentic Hockey Hobby Box',
 "La collection 2022-23 SP Authentic Hockey d'Upper Deck reste un choix populaire pour les collectionneurs de cartes de la LNH en raison de l'offre de contenu signé. Bien sûr, cela inclut la ligne de rookies Future Watch.",
 229.95,
 90,
 'images/cartes/2022-2023-spa.jpg',
 (SELECT id FROM categories WHERE nom = 'SP Authentic')
),

(
 '2021-22 Upper Deck Ice Hockey Hobby Box',
 "2021-22 Upper Deck Ice Hockey présente plusieurs saisons de NHL et plusieurs marques de cartes sous le même toit.\n
 \n
Alors que le jeu Upper Deck Ice Hockey 2020-21 a finalement été annulé en raison de problèmes de production et de chaîne d'approvisionnement, les cartes de la saison 20-21 apparaissent dans un paquet bonus de cinq cartes. Exquisite Collection reste également un jeu dans un jeu pour UD Ice, comprenant des cartes des années 21-22 et 20-21.",
 134.95,
 78,
 'images/cartes/2021-2022-ih.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Ice')
),

(
 '2021-22 SP Authentic Hockey Hobby Box',
 "Grâce aux recrues Future Watch (FW) et à une grande sélection d'autographes sur la carte, 2021-22 SP Authentic Hockey reste l'une des marques de cartes les plus populaires d'Upper Deck.\n
\n
Bien que le format de la boîte Hobby soit mis à jour, passant de 18 paquets de cinq cartes à 10 paquets de neuf cartes, la quantité totale de cartes reste inchangée. Chaque boîte contient toujours en moyenne un autographe Future Watch et un autographe supplémentaire.",
 229.95,
 90,
 'images/cartes/2021-2022-spa.jpg',
 (SELECT id FROM categories WHERE nom = 'SP Authentic')
),

(
 '2024-25 Upper Deck Series 1 Hobby Box',
"2024-25 Upper Deck Series 1 Hockey n'est pas la première série de l'année (2024-25 MVP a cet honneur), mais elle donne le coup d'envoi. Il est donc approprié que sa sortie coïncide avec le coup d'envoi de la saison NHL.\n
\n
Comme l'année dernière, Upper Deck a opté pour une approche plus rationalisée des packs et des boîtes pour son produit phare. Cela signifie que les boîtes hobby sont petites et ne contiennent que 12 paquets. Mais chaque paquet est accompagné d'au moins trois inserts.",
 269.95,
 244,
 'images/cartes/2024-2025-series01.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Series 1')
),

(
 '2025-26 Upper Deck Series 1 Hobby Box',
 "2025-26 Upper Deck Series 1 Hockey est le début de la ligne phare de la saison. Deux autres volets suivront éventuellement (Series 2 et Extended Series), mais c'est ici que les choses commencent. Cela inclut les cartes de recrue Young Guns ainsi que certains inserts familiers comme UD Canvas et UD Portraits.",
 159.95,
 244,
 'images/cartes/2025-2025-series01.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Series 1')
),

(
 '2022-23 Upper Deck Ice Hockey Hobby Box',
 "En plus de la série régulière (#'d à partir de 99), collectionnez jusqu'à cinq cartes parallèles Ice Premieres en série et exclusives au hobby, y compris les très convoitées cartes or (#'d à 99) et noires (#'d 1 sur 1).",
 169.95,
 72,
 'images/cartes/2022-2023-ih.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Ice')
),

(
 '2023-24 Upper Deck Series 2 Hobby Box',
 "2023-24 Upper Deck Series 2 Hockey maintient la reconfiguration du vaisseau amiral vu pour la première fois dans la Series 1. Les boîtes Hobby plus petites offrent 12 cartes par paquet et 12 paquets par boîte.",
 269.95,
 244,
 'images/cartes/2023-2024-series02.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Series 2')
),

(
 '2025-26 Upper Deck Series 1 Blaster Box',
 "La série 1 comprend les 250 premières cartes de l'ensemble de base Upper Deck 2025-26. Elle comprend 198 cartes de vétérans, 49 cartes Young Guns® et trois cartes de contrôle. Les emblématiques Young Guns® sont les cartes des recrues les plus attendues de la saison et la liste de contrôle de la série 1 est remplie de recrues haut de gamme !",
 34.95,
 4,
 'images/cartes/2025-2026-series01-blaster.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Series 1')
),

(
 '2025-26 Upper Deck Series 1 Tin Box',
 "La série 1 comprend les 250 premières cartes de l'ensemble de base Upper Deck 2025-26. Elle comprend 198 cartes de vétérans, 49 cartes Young Guns® et trois cartes de contrôle. Les emblématiques Young Guns® sont les cartes des recrues les plus attendues de la saison et la liste de contrôle de la série 1 est remplie de recrues haut de gamme !",
 64.95,
 96,
 'images/cartes/2025-2026-series01-tin.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Series 1')
),

(
 '2024-25 Upper Deck SP Authentic Hockey Hobby Box',
 "2024-25 SP Authentic Hockey est l'une des collections annuelles phares de ce sport. Forte de plus de deux décennies d'histoire, la checklist est mise en valeur par les Future Watch, l'un des meilleurs sous-ensembles de cartes de recrues de tout le hobby.",
 479.95,
 90,
 'images/cartes/2024-2025-spa.jpg',
 (SELECT id FROM categories WHERE nom = 'SP Authentic')
),


(
 '2024-25 Upper Deck Artifacts Hockey Hobby Box',
 "2024-25 Upper Deck Artifacts Hockey débute la saison avec des autographes et des cartes commémoratives. Les Rookie Redemptions reviennent également, délivrant des reconnaissances de dettes quelque peu mystérieuses pour les meilleurs débuts de l'année en début de saison.",
 199.95,
 32,
 'images/cartes/2024-2025-artifacts.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Artifacts')
),

(
 '2023-24 Upper Deck Series 2 Tin Box',
 "Chaque boîte de hockey 2023-24 Upper Deck Series 2 contient 8 paquets, plus 1 paquet bonus, avec 12 cartes dans chaque paquet !",
 129.95,
 108,
 'images/cartes/2023-2024-series02-tin.jpg',
 (SELECT id FROM categories WHERE nom = 'Upper Deck Series 2')
);

