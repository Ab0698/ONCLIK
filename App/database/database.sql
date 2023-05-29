CREATE TABLE modele (
    id_modele int NOT NULL,
    PRIMARY KEY (id_modele)
);

CREATE TABLE cv (
    id_cv int NOT NULL AUTO_INCREMENT,
    id_modele int NOT NULL,
   Titre  varchar(255),
    PRIMARY KEY (id_cv),
    FOREIGN KEY (id_modele) REFERENCES modele(id_modele)
);

CREATE TABLE reference(
    id_reference int NOT NULL AUTO_INCREMENT,
    phone int ,
    email varchar(255),
    nom_de_l_entreprise varchar(255),
    id_cv int NOT NULL,
    PRIMARY KEY (id_reference),
    FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
);

CREATE TABLE experience(
    id_experience int NOT NULL  AUTO_INCREMENT,
    tache varchar(255),
    annee date ,
    position_occupee  varchar(255),
    nom_de_l_entreprise varchar(255),
    id_cv int NOT NULL,
    PRIMARY KEY (id_experience),
    FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
);
CREATE TABLE contact (
    id_contact int NOT NULL AUTO_INCREMENT,
    phone int NOT NULL ,
    email varchar(255) ,
    addresse varchar(255),
    id_cv int NOT NULL,
    PRIMARY KEY (id_contact),
    FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
);

CREATE TABLE education (
    id_education int NOT NULL AUTO_INCREMENT,
    nom_de_l_institution varchar(255),
    annee date ,
    nom_du_diplome varchar(255),
    id_cv int NOT NULL,
    PRIMARY KEY (id_education),
    FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
);

CREATE TABLE expertise (
    id_expertise int NOT NULL AUTO_INCREMENT ,
    domaine_d_expertise varchar(255),
    id_cv int NOT NULL,
    PRIMARY KEY (id_expertise),
    FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
);

CREATE TABLE langue (
    id_langue int NOT NULL AUTO_INCREMENT ,
    langue_parle varchar(255),
    id_cv int NOT NULL,
    PRIMARY KEY (id_langue),
    FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
);

CREATE TABLE profil (
    id_profil int NOT NULL AUTO_INCREMENT,
    nom varchar(255) ,
    prenom varchar(255) ,
    proffession varchar(255) ,
    description_profil varchar(255) ,
    photo varchar(255) ,
    PRIMARY KEY (id_profil)
);
CREATE TABLE user (
    id_user int NOT NULL  AUTO_INCREMENT,
    nom varchar(255),
    email varchar(255),
    pwd varchar(255),
    niveau varchar(255),
    PRIMARY KEY (id_user)
);
CREATE TABLE client (
    id_client int NOT NULL AUTO_INCREMENT,
    id_user int NOT NULL ,
    PRIMARY KEY (id_client),
    FOREIGN KEY (id_user) REFERENCES user(id_user)
);
CREATE TABLE admin (
    id_admin int NOT NULL AUTO_INCREMENT,
    id_user int NOT NULL ,
    PRIMARY KEY (id_admin),
    FOREIGN KEY (id_user) REFERENCES user(id_user)
);






