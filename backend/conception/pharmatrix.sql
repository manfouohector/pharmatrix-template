DROP DATABASE if exists pharmatrix-template;
CREATE DATABASE  pharmatrix-template character set utf8;
use pharmatrix-template;



CREATE TABLE all_medicament(
    all_medicament_id  INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(126),
    description VARCHAR(126),
    PRIMARY KEY(all_medicament_id)
);

CREATE TABLE pharmacie(
    pharmacie_id INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(126),
    `location` VARCHAR(126),
    phone INT ,
    PRIMARY KEY (pharmacie_id)
);

CREATE TABLE medicament(
    medicament_id  INT NOT NULL AUTO_INCREMENT,
    all_medicament_id INT NOT NULL,
    pharmacie_id INT NOT NULL,
    price INT,
    quantite INT,
    PRIMARY KEY (medicament_id),
    FOREIGN KEY (all_medicament_id) REFERENCES all_medicament(all_medicament_id),
    FOREIGN KEY (pharmacie_id) REFERENCES pharmacie(pharmacie_id)
);

CREATE TABLE users(
    id_users INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(126),
    last_name VARCHAR(126),
    phone INT,
    location VARCHAR(126),
    email VARCHAR(126),
    `password` VARCHAR(126),
    `role` VARCHAR(126),
    PRIMARY KEY (id_users)
);

CREATE TABLE coupon (
    coupon_id INT NOT NULL AUTO_INCREMENT,
    id_users INT NOT NULL,
    reference VARCHAR(126),
    create_at VARCHAR(126),
    PRIMARY KEY (coupon_id),
    FOREIGN KEY (id_users) REFERENCES users(id_users)
);

CREATE TABLE user_pharmacie (
    id_users INT NOT NULL,
    pharmacie_id INT NOT NULL,
    PRIMARY KEY (id_users, pharmacie_id),
    FOREIGN KEY (id_users) REFERENCES users (id_users),
    FOREIGN KEY (pharmacie_id) REFERENCES pharmacie (pharmacie_id)
);

CREATE TABLE coupon_mediament (
    medicament_id  INT NOT NULL AUTO_INCREMENT,
    coupon_id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (medicament_id, coupon_id),
    FOREIGN KEY (medicament_id) REFERENCES medicament (medicament_id),
    FOREIGN KEY (coupon_id) REFERENCES coupon (coupon_id)
);