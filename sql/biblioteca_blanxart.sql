/*

    ██████╗░██████╗░
    ██╔══██╗██╔══██╗
    ██████╦╝██████╦╝
    ██╔══██╗██╔══██╗
    ██████╦╝██████╦╝
    ╚═════╝░╚═════╝░

    Projecte: Bilbioteca Blanxart
    Versió: 1.2
    Desenvolupadors: Sergio Muñoz y Carlos Martinez
    Repositori: https://github.com/xxssisback/Biblioteca-Blanxart
    
 */

/* Biblioteca blanxart */
DROP DATABASE IF EXISTS biblioteca_blanxart;
CREATE DATABASE biblioteca_blanxart;
USE biblioteca_blanxart;


/* Taula dades */
CREATE TABLE tb_dades (
    id_dades INT PRIMARY KEY AUTO_INCREMENT, 
    nom VARCHAR(30), 
    nif VARCHAR(9), 
    direccion VARCHAR(40), 
    email VARCHAR(40), 
    telefono VARCHAR(15)
);

INSERT INTO tb_dades VALUES
(null,"Biblioteca Blanxart", "87459831Y", "Carrer Vall d'Aran Nª0", "bilbioteca@insdanielblanxart.cat", "92 183 172 591");


/* Taula usuaris */
CREATE TABLE tb_usuaris (
    id_usuari INT PRIMARY KEY AUTO_INCREMENT, 
    nom VARCHAR(15), 
    cognoms VARCHAR(15),
    data_naix DATE, 
    nif VARCHAR(10), 
    mail VARCHAR(30), 
    usuari VARCHAR(20), 
    pasword VARCHAR(40)
);

INSERT INTO tb_usuaris VALUES
(null, "Manel", "Roca", "1994-5-10", "83759641Y", "manelroca@gmail.com", "mroca", "rocodromo1994"),
(null, "Anna", "Rovira", "1997-7-4", "538173498X", "annarovira1997@gmail.com", "arovira", "annarovira1997"),
(null, "Nai", "Di", "1985-4-28", "76329853Z", "naidi@gmail.com", "ndi", "naidixxx"),
(null, "Israel", "Peru", "1996-9-25", "47744309N", "isralol@gmail.com", "iperu", "Momon-kun"),
(null, "Carla", "Moro", "2004-1-20", "12675387Z", "carlamoro@gmail.com", "cmoro", "carlamoroloko"),
(null, "Pau", "Moorilloo", "1999-12-23", "84661397P", "polomurillocemento@gmail.com", "polom", "caracemento24"),
(null, "Manolo", "Basoto", "2002-5-30", "82763918Z", "bolonchocyka@gmail.com", "mbasoto", "phplover"),
(null, "Kevin", "Lacalle", "1991-2-2", "32129840G", "kcalle@gmail.com", "kcalle", "mdlr08K"),
(null, "Maria", "Escobar", "2000-2-16", "83716498Z", "mariaescobar@gmail.com", "mescobar", "m4r1a2020"),
(null, "Cristian", "Lyonad", "2000-8-16", "84695712N", "clyonad@gmail.com", "clyonad", "P@ssw0rd"),
(null, "Pep", "Guardiola", "1987-8-4", "73825184Z", "pepguardiola@gmail.com", "pguardiola", "pepeteloco");


/* Taula admins */
CREATE TABLE tb_admins (
    id_admin INT PRIMARY KEY AUTO_INCREMENT, 
    usuari VARCHAR(50), 
    contrasenya VARCHAR(50)
);

INSERT INTO tb_admins VALUES
(null,"smunoz","P@ssw0rd"),
(null,"cmart","P@ssw0rd"),
(null,"mmoles","P@ssw0rd");


/* Taula productes */
CREATE TABLE tb_producte (
    id_producte INT PRIMARY KEY AUTO_INCREMENT, 
    nom VARCHAR(50), 
    genere VARCHAR(10), 
    proveidor VARCHAR(50)
);

INSERT INTO tb_producte VALUES
(1,"Las aventuras del oso","Infantil","La casa del libro"),
(2,"La gota que colmó el vaso","Drama","Fnac"),
(3,"El racismo existe!","Actualidad","Fnac"),
(4,"Las luciérnagas","Terror","La casa del libro"),
(5,"Minecraft","Fantasia","Libros altar"),
(6,"La historia de Ibai Llanos","Historia","La casa del libro"),
(7,"Las redes sociales","Terror","Libros altar"),
(8,"Los efectos de la marihuana","Actualidad","Libros adamuz"),
(9,"Blancanieves y los 15 enanitos","Infantil","Fnac"),
(10,"La bala que dobló la esquina","Drama","La casa del libro"),
(11,"Vaya dos patas para un banco","Comedia","Libros altar"),
(12,"Zorrito, el campeon de la redbull","Actualidad","Libros adamuz"),
(13,"Dos pistolas para un manco","Comedia","La casa del libro"),
(14,"El COVID-24","Actualidad","Libros altar"),
(15,"Youtubers y Andorra","Actualidad","La casa del libro"),
(16,"La casa de las cinco mariposas","Fantasia","Libros adamuz"),
(17,"¿Poner un muro es ético?","Historia","Libros adamuz"),
(18,"Drill, el nuevo estilo de música","Actualidad","Libros adamuz"),
(19,"El crack del 29","Historia","La casa del libro"),
(20,"La segunda guerra mundial","Drama","Fnac");


/* Taula treballadors */
CREATE TABLE tb_treballadors (
    id_treballador INT PRIMARY KEY AUTO_INCREMENT, 
    nom_i_cognom VARCHAR(50), 
    data_naixament DATE, 
    correu_electronic VARCHAR(50), 
    numero_contacte VARCHAR(10), 
    poblacio VARCHAR(50), 
    dni VARCHAR(9), 
    carrec VARCHAR(50)
);

INSERT INTO tb_treballadors VALUES
(null,"Sergio Muñoz","2000-01-07","smunoz@gmail.com","633807100","Sant Esteve Sesrovires","47752078F","Gestor de emmagatzematge"),
(null,"Carlos Martinez","2002-10-02","cmart2@gmail.com","658128409","Olesa de Montserrat","45932966B","Gestor Administratiu");


/* Taula treballadors 2 */
CREATE TABLE tb_treballadors_2 (
    id_treballador INT PRIMARY KEY AUTO_INCREMENT, 
    nom VARCHAR(50), 
    cognom VARCHAR(50), 
    adreça VARCHAR(50), 
    codi_postal VARCHAR(5), 
    poblacio VARCHAR(50), 
    nif VARCHAR(12), 
    telefon VARCHAR(12), 
    correu_electronic VARCHAR(40)
);

INSERT INTO tb_treballadors_2 VALUES
(1,"Sergio","Muñoz","Carrer Josep Anselm Clavé 17","08635","Sant Esteve Sesrovires","47752078F","633807100","smunoz@gmail.com"),
(2,"Carlos","Martinez","Carrer Segarra 25","08640","Olesa de Montserrat","45932966B","658128409","cmart@gmail.com"),
(3,"Arnau","Granero","Carrer Maresme 52","08640","Olesa de Montserrat","43246576J","675643678","granero@gmail.com"),
(4,"Adrian","Bautista","Carrer Riera 13","08635","Sant Esteve Sesrovires","45643785Y","722346576","zorrito@gmail.com"),
(5,"Roger","Llobet","Carrer Alfons Sala 24","08640","Olesa de Montserrat","34655763L","664378459","llobet@gmail.com");


/* Taula operacions */
CREATE TABLE tb_operacions (
    id_operacio INT PRIMARY KEY AUTO_INCREMENT, 
    nom_i_cognom VARCHAR(50), 
    nom VARCHAR(50), 
    genere VARCHAR(10), 
    proveidor VARCHAR(50), 
    quantitat VARCHAR(10), 
    preu VARCHAR(10)
);

INSERT INTO tb_operacions VALUES
(1,"Sergio Muñoz","Las aventuras del oso","Infantil","La casa del libro","1","5"),
(2,"Carlos Martinez","La gota que colmó el vaso","Drama","Fnac","1","20"),
(3,"Kevin Cueva","El racismo existe!","Actualidad","Fnac","1","10"),
(4,"Adri Alvarez","Las luciérnagas","Terror","La casa del libro","1","5"),
(5,"Ismael Gonzalez","Minecraft","Fantasia","Libros altar","1","10"),
(6,"Edgar Cano","La historia de Ibai Llanos","Historia","La casa del libro","1","5"),
(7,"Marc Salinas","Las redes sociales","Terror","Libros altar","1","20"),
(8,"Manel Fernandez","Los efectos de la marihuana","Actualidad","Libros adamuz","1","10"),
(9,"Marc Tribaldos","El COVID-24","Actualidad","Libros altar","1","5"),
(10,"Ivan Martinez","El crack del 29","Historia","La casa del libro","1","10");


/* Taula ordinadors */
CREATE TABLE tb_ordinadors (
    id_ordinador INT PRIMARY KEY AUTO_INCREMENT, 
    ip VARCHAR(15), 
    cpu VARCHAR(10), 
    velocitat_cpu VARCHAR(10), 
    placa_base VARCHAR(20), 
    ram VARCHAR(10), 
    disc_dur VARCHAR(20), 
    espai_disc_GB INT, 
    disc_velocitat VARCHAR(10), 
    departament VARCHAR(20), 
    id_departament INT, 
    id_espai INT
);

INSERT INTO tb_ordinadors VALUES
(null, "192.168.1.50","AMD","3GHz","GigaByte H310M","4GB", "HDD", "500","150 mb/s", "soci",3,3),
(null, "192.168.1.51","AMD","3GHz","GigaByte H310M","4GB", "HDD", "500","150 mb/s", "soci",3,3),
(null, "192.168.1.52","AMD", "3GHz","GigaByte H310M","8GB", "SSD", "250", "525 mb/s", "recepció",2,4),
(null, "192.168.1.53","AMD","3GHz","GigaByte H310M", "4GB", "HDD", "500", "150 mb/s","soci",3,3),
(null, "192.168.1.54","AMD", "3GHz","GigaByte H310M","8GB", "SSD", "250", "525 mb/s", "recepció",2,4),
(null, "192.168.1.55","AMD", "3GHz","GigaByte H310M","8GB", "SSD", "500", "525 mb/s", "informàtic",1,3),
(null, "192.168.1.56","AMD", "3GHz","GigaByte H310M","4GB", "HDD", "500", "150 mb/s", "soci",3,3);


/* Taula xarxa */
CREATE TABLE tb_xarxa (
    id_xarxa INT PRIMARY KEY, 
    ip VARCHAR(15), 
    porta_de_enllac varchar(15), 
    dns VARCHAR(20)
);

INSERT INTO tb_xarxa VALUES
(1,"192.168.1.2","192.168.1.1","asocafe.com"),
(2,"192.168.1.3","192.168.1.1","asocafe.com"),
(3,"192.168.1.4","192.168.1.1","asocafe.com"),
(4,"192.168.1.5","192.168.1.1","asocafe.com"),
(5,"192.168.1.6","192.168.1.1","asocafe.com"),
(6,"192.168.1.7","192.168.1.1","asocafe.com"),
(7,"192.168.2.2","192.168.2.1","asocafe.com"),
(8,"192.168.2.3","192.168.2.1","asocafe.com"),
(9,"192.168.2.4","192.168.2.1","asocafe.com"),
(10,"192.168.2.5","192.168.2.1","asocafe.com"),
(11,"192.168.2.6","192.168.2.1","asocafe.com"),
(12,"192.168.2.7","192.168.2.1","asocafe.com");


/* Taula software */
CREATE TABLE tb_software (
    id_software INT PRIMARY KEY, 
    sistema_operatiu VARCHAR(50), 
    empresa VARCHAR(50)
);

INSERT INTO tb_software VALUES
(1,"MacOS","Apple"),
(2,"Debian","Linux"),
(3,"Ubuntu","Linux"),
(4,"Windows 10","Microsoft");


/* Taula espais */
CREATE TABLE tb_espais (
    id_espai INT PRIMARY KEY AUTO_INCREMENT, 
    nom VARCHAR(20), 
    planta VARCHAR(15)
);

INSERT INTO tb_espais VALUES
(1,"Lectura","Segona"),
(2,"Estudi", "Segona"),
(3, "Ordinadors", "Segona"),
(4, "Recepció", "Primera"),
(5, "Lavabo", "Primera");


/* Taula clients */
CREATE TABLE tb_clients (
    id_client INT PRIMARY KEY AUTO_INCREMENT, 
    nom_client VARCHAR(50), 
    adreça VARCHAR(50), 
    poblacio VARCHAR(50), 
    nif VARCHAR(12), 
    telefon VARCHAR(12), 
    correu_electronic VARCHAR(40)
);

INSERT INTO tb_clients VALUES
(1,"Kevin Cueva","Carrer Joan 8","Esparraguera","47456078X","676347784","kcueva@gmail.com"),
(2,"Adri Alvarez","Carrer catalunya 1","Abrera","43975925F","690883722","adrii2@gmail.com"),
(3,"Ismael Gonzalez","Plaça tarradelles 42","Martorell","46592745T","691857288","isma@gmail.com"),
(4,"Edgar Cano","Avenida març 88","Collbató","38675992R","639205783","edgarcan@gmail.com"),
(5,"Marc Salinas","Carrer franc 1","Olesa de Montserrat","26586346G","633847529","salinas2@gmail.com"),
(6,"Juanjo Granero","Carrer Segarra 1","Olesa de Montserrat","45345678K","656845529","jgranerp@gmail.com"),
(7,"Ivan Vazquez","Carrer Barcelona 18","Martorell","34567523L","722256748","ivavaz@gmail.com"),
(8,"Marc Oñate","Carrer Napols 3","Esparraguera","87453675C","634874654","moñate@gmail.com"),
(9,"Francisco Pulido","Carrer España 7","Olesa de Montserrat","74457846F","664347864","puli@gmail.com"),
(10,"Oier Pescador","Carrer Puigdemont 23","Sant Esteve de Sesrovires","85674563H","673408657","pesca@gmail.com");


 /* Taula pressupostos */
CREATE TABLE tb_pressupostos (
    id_pressupost INT PRIMARY KEY AUTO_INCREMENT, 
    data_elaboracio DATE, 
    data_presentacio DATE, 
    data_venciment DATE, 
    data_acceptacio DATE, 
    data_rebuig DATE,
    import_total DOUBLE, 
    descompte DOUBLE, 
    marge_net DOUBLE, 
    detall LONGTEXT,
    estat VARCHAR(50),
    id_client INT, 
    id_treballador INT,
    FOREIGN KEY (id_client) REFERENCES tb_clients(id_client),
    FOREIGN KEY (id_treballador) REFERENCES tb_treballadors_2(id_treballador)
);

INSERT INTO tb_pressupostos VALUES
/* PRESSUPOSTS PENDENTS DE PRESENTAR*/
(1, '2021-01-01', NULL, NULL, NULL, NULL, "20", "40", "19", 'Pressupost de compra de llibres','Pendent de presentar', 1, 1),
(2, '2021-01-02', NULL, NULL, NULL, NULL, "50", "12", "45", 'Pressupost de compra de llibres','Pendent de presentar', 2, 2),
(3, '2021-01-03', NULL, NULL, NULL, NULL, "30", "23", "27", 'Pressupost de compra de llibres','Pendent de presentar', 3, 3),
(4, '2021-01-04', NULL, NULL, NULL, NULL, "40", "43", "38", 'Pressupost de compra de llibres','Pendent de presentar', 4, 4),
(5, '2021-01-05', NULL, NULL, NULL, NULL, "20", "5", "19", 'Pressupost de compra de llibres','Pendent de presentar', 5, 5),
(6, '2021-01-06', NULL, NULL, NULL, NULL, "50", "8", "45", 'Pressupost de compra de llibres','Pendent de presentar', 6, 1),
(7, '2021-01-07', NULL, NULL, NULL, NULL, "30", "9", "27", 'Pressupost de compra de llibres','Pendent de presentar', 7, 2),
(8, '2021-01-08', NULL, NULL, NULL, NULL, "40", "12", "38", 'Pressupost de compra de llibres','Pendent de presentar', 8, 3),
(9, '2021-01-09', NULL, NULL, NULL, NULL, "20", "2", "19", 'Pressupost de compra de llibres','Pendent de presentar', 9, 4),
(10, '2021-01-10', NULL, NULL, NULL, NULL, "50", "46", "45", 'Pressupost de compra de llibres','Pendent de presentar', 10, 5),
/* PRESSUPOSTS PRESENTATS*/
(11, '2021-01-01', '2021-01-03', NULL, NULL, NULL, "20", "40", "19", 'Pressupost de compra de llibres','Presentat', 1, 1),
(12, '2021-01-02', '2021-01-04', NULL, NULL, NULL, "50", "12", "45", 'Pressupost de compra de llibres','Presentat', 2, 2),
(13, '2021-01-03', '2021-01-05', NULL, NULL, NULL, "30", "23", "27", 'Pressupost de compra de llibres','Presentat', 3, 3),
(14, '2021-01-04', '2021-01-06', NULL, NULL, NULL, "40", "43", "38", 'Pressupost de compra de llibres','Presentat', 4, 4),
(15, '2021-01-05', '2021-01-07', NULL, NULL, NULL, "20", "5", "19", 'Pressupost de compra de llibres','Presentat', 5, 5),
(16, '2021-01-06', '2021-01-08', NULL, NULL, NULL, "50", "8", "45", 'Pressupost de compra de llibres','Presentat', 6, 1),
(17, '2021-01-07', '2021-01-09', NULL, NULL, NULL, "30", "9", "27", 'Pressupost de compra de llibres','Presentat', 7, 2),
(18, '2021-01-08', '2021-01-10', NULL, NULL, NULL, "40", "12", "38", 'Pressupost de compra de llibres','Presentat', 8, 3),
(19, '2021-01-09', '2021-01-11', NULL, NULL, NULL, "20", "2", "19", 'Pressupost de compra de llibres','Presentat', 9, 4),
(20, '2021-01-10', '2021-01-12', NULL, NULL, NULL, "50", "46", "45", 'Pressupost de compra de llibres','Presentat', 10, 5),
/* PRESSUPOSTS VENÇUTS*/
(21, '2021-01-01', '2021-01-03', '2021-01-13', NULL, NULL, "20", "40", "19", 'Pressupost de compra de llibres','Vençut', 1, 1),
(22, '2021-01-02', '2021-01-04', '2021-01-14', NULL, NULL, "50", "12", "45", 'Pressupost de compra de llibres','Vençut', 2, 2),
(23, '2021-01-03', '2021-01-05', '2021-01-15', NULL, NULL, "30", "23", "27", 'Pressupost de compra de llibres','Vençut', 3, 3),
(24, '2021-01-04', '2021-01-06', '2021-01-16', NULL, NULL, "40", "43", "38", 'Pressupost de compra de llibres','Vençut', 4, 4),
(25, '2021-01-05', '2021-01-07', '2021-01-17', NULL, NULL, "20", "5", "19", 'Pressupost de compra de llibres','Vençut', 5, 5),
(26, '2021-01-06', '2021-01-08', '2021-01-18', NULL, NULL, "50", "8", "45", 'Pressupost de compra de llibres','Vençut', 6, 1),
(27, '2021-01-07', '2021-01-09', '2021-01-19', NULL, NULL, "30", "9", "27", 'Pressupost de compra de llibres','Vençut', 7, 2),
(28, '2021-01-08', '2021-01-10', '2021-01-20', NULL, NULL, "40", "12", "38", 'Pressupost de compra de llibres','Vençut', 8, 3),
(29, '2021-01-09', '2021-01-11', '2021-01-21', NULL, NULL, "20", "2", "19", 'Pressupost de compra de llibres','Vençut', 9, 4),
(30, '2021-01-10', '2021-01-12', '2021-01-22', NULL, NULL, "50", "46", "45", 'Pressupost de compra de llibres','Vençut', 10, 5),
/* PRESSUPOSTS ACEPTATS*/
(31, '2021-01-01', '2021-01-03', NULL, '2021-01-13', NULL, "20", "40", "19", 'Pressupost de compra de llibres','Aceptat', 1, 1),
(32, '2021-01-02', '2021-01-04', NULL, '2021-01-14', NULL, "50", "12", "45", 'Pressupost de compra de llibres','Aceptat', 2, 2),
(33, '2021-01-03', '2021-01-05', NULL, '2021-01-15', NULL, "30", "23", "27", 'Pressupost de compra de llibres','Aceptat', 3, 3),
(34, '2021-01-04', '2021-01-06', NULL, '2021-01-16', NULL, "40", "43", "38", 'Pressupost de compra de llibres','Aceptat', 4, 4),
(35, '2021-01-05', '2021-01-07', NULL, '2021-01-17', NULL, "20", "5", "19", 'Pressupost de compra de llibres','Aceptat', 5, 5),
(36, '2021-01-06', '2021-01-08', NULL, '2021-01-18', NULL, "50", "8", "45", 'Pressupost de compra de llibres','Aceptat', 6, 1),
(37, '2021-01-07', '2021-01-09', NULL, '2021-01-19', NULL, "30", "9", "27", 'Pressupost de compra de llibres','Aceptat', 7, 2),
(38, '2021-01-08', '2021-01-10', NULL, '2021-01-20', NULL, "40", "12", "38", 'Pressupost de compra de llibres','Aceptat', 8, 3),
(39, '2021-01-09', '2021-01-11', NULL, '2021-01-21', NULL, "20", "2", "19", 'Pressupost de compra de llibres','Aceptat', 9, 4),
(40, '2021-01-10', '2021-01-12', NULL, '2021-01-22', NULL, "50", "46", "45", 'Pressupost de compra de llibres','Aceptat', 10, 5),
/* PRESSUPOSTS REBURJATS*/
(41, '2021-01-01', '2021-01-03', NULL, NULL, '2021-01-13', "20", "40", "19", 'Pressupost de compra de llibres','Rebutjat', 1, 1),
(42, '2021-01-02', '2021-01-04', NULL, NULL, '2021-01-14', "50", "12", "45", 'Pressupost de compra de llibres','Rebutjat', 2, 2),
(43, '2021-01-03', '2021-01-05', NULL, NULL, '2021-01-15', "30", "23", "27", 'Pressupost de compra de llibres','Rebutjat', 3, 3),
(44, '2021-01-04', '2021-01-06', NULL, NULL, '2021-01-16', "40", "43", "38", 'Pressupost de compra de llibres','Rebutjat', 4, 4),
(45, '2021-01-05', '2021-01-07', NULL, NULL, '2021-01-17', "20", "5", "19", 'Pressupost de compra de llibres','Rebutjat', 5, 5),
(46, '2021-01-06', '2021-01-08', NULL, NULL, '2021-01-18', "50", "8", "45", 'Pressupost de compra de llibres','Rebutjat', 6, 1),
(47, '2021-01-07', '2021-01-09', NULL, NULL, '2021-01-19', "30", "9", "27", 'Pressupost de compra de llibres','Rebutjat', 7, 2),
(48, '2021-01-08', '2021-01-10', NULL, NULL, '2021-01-20', "40", "12", "38", 'Pressupost de compra de llibres','Rebutjat', 8, 3),
(49, '2021-01-09', '2021-01-11', NULL, NULL, '2021-01-21', "20", "2", "19", 'Pressupost de compra de llibres','Rebutjat', 9, 4),
(50, '2021-01-10', '2021-01-12', NULL, NULL, '2021-01-22', "50", "46", "45", 'Pressupost de compra de llibres','Rebutjat', 10, 5);


 /* Taula pressupostos_linies */
CREATE TABLE tb_pressupostos_linies (
    id_pressupost_linia INT PRIMARY KEY AUTO_INCREMENT,
    descripcio VARCHAR(200),
    quantitat DOUBLE,
    preu_unitat DOUBLE,
    total DOUBLE,
    id_pressupost INT,
    FOREIGN KEY (id_pressupost) REFERENCES tb_pressupostos(id_pressupost)
);

INSERT INTO tb_pressupostos_linies VALUES
(1, 'Las aventuras del oso', 1, 20, 20, 1),
(2, 'La gota que colmó el vaso', 1, 20, 20, 2),
(3, 'El racismo existe!', 1, 20, 20, 3),
(4, 'Las luciérnagas', 1, 20, 20, 4),
(5, 'Minecraft', 1, 20, 20, 5),
(6, 'La historia de Ibai Llanos', 1, 20, 20, 6),
(7, 'Las redes sociales', 1, 20, 20, 7),
(8, 'Los efectos de la marihuana', 1, 20, 20, 8),
(9, 'Blancanieves y los 15 enanitos', 1, 20, 20, 9),
(10, 'La bala que dobló la esquina', 1, 20, 20, 10),
(11, 'Vaya dos patas para un banco', 1, 20, 20, 11),
(12, 'Zorrito, el campeon de la redbull', 1, 20, 20, 12),
(13, 'Dos pistolas para un manco', 1, 20, 20, 13),
(14, 'El COVID-24', 1, 20, 20, 14),
(15, 'Youtubers y Andorra', 1, 20, 20, 15),
(16, 'La casa de las cinco mariposas', 1, 20, 20, 16),
(17, '¿Poner un muro es ético?', 1, 20, 20, 17),
(18, 'Drill, el nuevo estilo de música', 1, 20, 20, 18),
(19, 'El crack del 29', 1, 20, 20, 19),
(20, 'La segunda guerra mundial', 1, 20, 20, 20),
(21, 'Las aventuras del oso', 1, 20, 20, 21),
(22, 'La gota que colmó el vaso', 1, 20, 20, 22),
(23, 'El racismo existe!', 1, 20, 20, 23),
(24, 'Las luciérnagas', 1, 20, 20, 24),
(25, 'Minecraft', 1, 20, 20, 25),
(26, 'La historia de Ibai Llanos', 1, 20, 20, 26),
(27, 'Las redes sociales', 1, 20, 20, 27),
(28, 'Los efectos de la marihuana', 1, 20, 20, 28),
(29, 'Blancanieves y los 15 enanitos', 1, 20, 20, 29),
(30, 'La bala que dobló la esquina', 1, 20, 20, 30),
(31, 'Vaya dos patas para un banco', 1, 20, 20, 31),
(32, 'Zorrito, el campeon de la redbull', 1, 20, 20, 32),
(33, 'Dos pistolas para un manco', 1, 20, 20, 33),
(34, 'El COVID-24', 1, 20, 20, 34),
(35, 'Youtubers y Andorra', 1, 20, 20, 35),
(36, 'La casa de las cinco mariposas', 1, 20, 20, 36),
(37, '¿Poner un muro es ético?', 1, 20, 20, 37),
(38, 'Drill, el nuevo estilo de música', 1, 20, 20, 38),
(39, 'El crack del 29', 1, 20, 20, 39),
(40, 'La segunda guerra mundial', 1, 20, 20, 40),
(41, 'Las aventuras del oso', 1, 20, 20, 41),
(42, 'La gota que colmó el vaso', 1, 20, 20, 42),
(43, 'El racismo existe!', 1, 20, 20, 43),
(44, 'Las luciérnagas', 1, 20, 20, 44),
(45, 'Minecraft', 1, 20, 20, 45),
(46, 'La historia de Ibai Llanos', 1, 20, 20, 46),
(47, 'Las redes sociales', 1, 20, 20, 47),
(48, 'Los efectos de la marihuana', 1, 20, 20, 48),
(49, 'Blancanieves y los 15 enanitos', 1, 20, 20, 49),
(50, 'La bala que dobló la esquina', 1, 20, 20, 50);