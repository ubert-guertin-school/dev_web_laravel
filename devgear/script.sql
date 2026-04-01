INSERT INTO categories (nom) VALUES
('Claviers & touches'),
('Souris & pointeurs'),
('Ergonomie'),
('Organisation & bureau'),
('Audio & visioconférence'),
('Câbles & adaptateurs'),
('Stockage & hubs'),
('Éclairage & ambiance');

INSERT INTO produits (categorie_id, nom, description, prix, quantite, image_path, disponible, created_at, updated_at) VALUES
(1, 'Clavier mécanique 60 pour dev', 'Clavier compact 60% idéal pour coder et gagner de la place. Touches reprogrammables.', 89.99, 0, 'images/clavier-mecanique-60-pour-dev.jpg', 1, NOW(), NOW()),
(1, 'Set de keycaps PBT rétro', 'Keycaps PBT style rétro, résistantes et agréables au toucher. Format standard.', 39.99, 25, 'images/set-de-keycaps-pbt-retro.jpg', 1, NOW(), NOW()),
(1, 'Outil extracteur de keycaps', 'Petit outil metal pour retirer les keycaps sans abimer le clavier. Indispensable.', 6.99, 60, 'images/outil-extracteur-de-keycaps.jpg', 1, NOW(), NOW()),
(1, 'Repose-poignets mousse pour clavier', 'Repose-poignets confortable pour longues sessions de frappe. Format medium.', 14.99, 30, 'images/repose-poignets-mousse-pour-clavier.jpg', 1, NOW(), NOW()),
(1, 'Kit switches silencieux x20', 'Switches silencieux pour bureau ou classe. Sensation linéaire, bruit réduit.', 19.99, 40, 'images/kit-switches-silencieux-x20.jpg', 1, NOW(), NOW()),

(2, 'Souris ergonomique verticale', 'Souris verticale pour diminuer la tension au poignet. Connexion USB.', 29.99, 0, 'images/souris-ergonomique-verticale.jpg', 1, NOW(), NOW()),
(2, 'Tapis de souris XXL bureau', 'Tapis XXL couvrant clavier et souris. Surface notée pour glisse uniforme.', 24.99, 35, 'images/tapis-de-souris-xxl-bureau.jpg', 1, NOW(), NOW()),
(2, 'Mouse bungee gestion de câble', 'Support de câble pour souris filaire. Reduit les accrocs sur le bureau.', 12.99, 15, 'images/mouse-bungee-gestion-de-cable.jpg', 1, NOW(), NOW()),
(2, 'Trackball compact pour dev', 'Trackball compact pour gagner de la précision et limiter les mouvements.', 49.99, 10, 'images/trackball-compact-pour-dev.jpg', 1, NOW(), NOW()),
(2, 'Grips antidérapants pour souris', 'Bandes antidérapantes pour meilleure prise. Faciles a poser.', 7.99, 50, 'images/grips-antiderapants-pour-souris.jpg', 1, NOW(), NOW()),

(3, 'Support laptop aluminium ajustable', "Support d'ordinateur portable ajustable pour une posture plus saine.", 27.99, 28, 'images/support-laptop-aluminium-ajustable.jpg', 1, NOW(), NOW()),
(3, 'Support écran hauteur réglable', "Rehausseur d'écran pour aligner les yeux. Espace de rangement dessous.", 21.99, 12, 'images/support-ecran-hauteur-reglable.jpg', 1, NOW(), NOW()),
(3, 'Coussin lombaire chaise bureau', 'Coussin lombaire pour posture. Attaches élastiques pour stabilité.', 18.99, 20, 'images/coussin-lombaire-chaise-bureau.jpg', 1, NOW(), NOW()),
(3, 'Repose-pieds ergonomique', 'Repose-pieds inclinable pour confort en position assise prolongée.', 23.99, 14, 'images/repose-pieds-ergonomique.jpg', 1, NOW(), NOW()),
(3, 'Tapis anti-fatigue debout', 'Tapis anti-fatigue pour bureau assis-debout. Confort et support.', 34.99, 9, 'images/tapis-anti-fatigue-debout.jpg', 1, NOW(), NOW()),

(4, 'Gestionnaire de câbles adhesif x10', 'Clips adhesifs pour organiser câbles USB et chargeurs. Lot de 10.', 8.99, 80, 'images/gestionnaire-de-cables-adhesif-x10.jpg', 1, NOW(), NOW()),
(4, 'Boite rangement SSD et cartes', 'Boite compacte pour cartes SD, microSD et petits accessoires.', 11.99, 26, 'images/boite-rangement-ssd-et-cartes.jpg', 1, NOW(), NOW()),
(4, 'Support casque sous bureau', 'Crochet support casque discret a fixer sous le bureau.', 9.99, 33, 'images/support-casque-sous-bureau.jpg', 1, NOW(), NOW()),
(4, 'Porte-stylos minimaliste métal', 'Porte-stylos style industriel. Pour garder le bureau propre.', 10.99, 21, 'images/porte-stylos-minimaliste-metal.jpg', 1, NOW(), NOW()),
(4, 'Tableau blanc mini kanban', 'Mini tableau effacable pour planifier: Todo Doing Done. Format bureau.', 16.99, 17, 'images/tableau-blanc-mini-kanban.jpg', 1, NOW(), NOW()),

(5, 'Micro USB plug and play', 'Micro USB simple pour appels, démos et cours. Installation rapide.', 24.99, 16, 'images/micro-usb-plug-and-play.jpg', 1, NOW(), NOW()),
(5, 'Casque filaire avec micro', 'Casque filaire confortable pour visioconférence. Micro ajustable.', 19.99, 40, 'images/casque-filaire-avec-micro.jpg', 1, NOW(), NOW()),
(5, 'Webcam 1080p avec volet', 'Webcam 1080p avec volet de confidentialité. Image nette pour meetings.', 29.99, 13, 'images/webcam-1080p-avec-volet.jpg', 1, NOW(), NOW()),
(5, 'Cache webcam universel', 'Cache coulissant pour webcam. Protection vie privee simple.', 4.99, 120, 'images/cache-webcam-universel.jpg', 1, NOW(), NOW()),
(5, 'Bras articulé pour micro', 'Bras articule pour micro USB. Libere l espace et reduit les vibrations.', 32.99, 7, 'images/bras-articule-pour-micro.jpg', 1, NOW(), NOW()),

(6, 'Cable USB C 2m tressé', 'Cable USB-C 2 metres, tressé solide. Charge et data.', 9.99, 55, 'images/cable-usb-c-2m-tresse.jpg', 1, NOW(), NOW()),
(6, 'Adaptateur USB C vers HDMI', 'Adaptateur pour brancher un écran HDMI depuis USB-C. Pratique en classe.', 17.99, 19, 'images/adaptateur-usb-c-vers-hdmi.jpg', 1, NOW(), NOW()),
(6, 'Adaptateur USB A vers USB C', 'Petit adaptateur pour connecter un cable USB-C sur un port USB-A.', 5.99, 65, 'images/adaptateur-usb-a-vers-usb-c.jpg', 1, NOW(), NOW()),
(6, 'Cable Ethernet plat 5m', 'Cable ethernet plat 5 metres. Facile a faire passer discretement.', 8.49, 42, 'images/cable-ethernet-plat-5m.jpg', 1, NOW(), NOW()),
(6, 'Lot attaches velcro pour câbles', 'Attaches velcro reutilisables pour regrouper les câbles. Lot de 20.', 7.49, 70, 'images/lot-attaches-velcro-pour-cables.jpg', 1, NOW(), NOW()),

(7, 'Hub USB C 6 en 1', 'Hub multiports: USB, HDMI, SD. Idéal pour laptops modernes.', 34.99, 11, 'images/hub-usb-c-6-en-1.jpg', 1, NOW(), NOW()),
(7, 'Clé USB 128GB metal', 'Cle USB robuste en métal. Stockage rapide pour projets et backups.', 14.99, 23, 'images/cle-usb-128gb-metal.jpg', 1, NOW(), NOW()),
(7, 'SSD externe 512GB compact', 'SSD externe compact pour projets lourds. Rapide et silencieux.', 59.99, 6, 'images/ssd-externe-512gb-compact.jpg', 1, NOW(), NOW()),
(7, 'Lecteur cartes SD USB C', 'Lecteur cartes SD/microSD via USB-C. Simple et efficace.', 9.49, 31, 'images/lecteur-cartes-sd-usb-c.jpg', 1, NOW(), NOW()),
(7, 'Dock disque dur double baie', 'Dock double baie pour clôner et monter des disques. Utile pour backups.', 49.99, 5, 'images/dock-disque-dur-double-baie.jpg', 1, NOW(), NOW()),

(8, 'Lampe de bureau LED dimmable', 'Lampe LED avec intensité reglable. Bonne lumière pour coder le soir.', 22.99, 18, 'images/lampe-de-bureau-led-dimmable.jpg', 1, NOW(), NOW()),
(8, 'Ruban LED USB pour écran', 'Ruban LED USB à coller derrière un écran. Ambiance et confort visuel.', 13.99, 24, 'images/ruban-led-usb-pour-ecran.jpg', 1, NOW(), NOW()),
(8, 'Horloge pixel style rétro', 'Horloge pixel décor rétro gaming. Affiche l heure en style 8-bit.', 19.99, 10, 'images/horloge-pixel-style-retro.jpg', 1, NOW(), NOW()),
(8, 'Support smartphone bureau', 'Support smartphone pour notifications visibles pendant le dev.', 6.49, 45, 'images/support-smartphone-bureau.jpg', 1, NOW(), NOW()),
(8, 'Diffuseur USB mini', 'Mini diffuseur USB pour ambiance. Simple, discret, parfait sur un bureau.', 15.99, 8, 'images/diffuseur-usb-mini.jpg', 1, NOW(), NOW());

SET FOREIGN_KEY_CHECKS = 1;
