drop database if exists garage_250;
create database garage_250;
use garage_250;

create table client
(
    idclient int(3) not null auto_increment,
    nom      varchar(50) not null,
    prenom   varchar(50) not null,
    adresse  varchar(50) not null,
    email    varchar(50) not null,
    mdp      varchar(50) not null,
    tel      varchar(50),
    primary key (idclient)
);
create table technicien
(
    idtechnicien  int(3) not null auto_increment,
    nom           varchar(50) not null,
    prenom        varchar(50) not null,
    qualification varchar(50) not null,
    email         varchar(50) not null,
    mdp           varchar(50) not null,
    tel           varchar(50),
    primary key (idtechnicien)
);
create table vehicule
(
    idvehicule      int(3) not null auto_increment,
    matricule       varchar(50) not null,
    marque          varchar(50) not null,
    datecirculation date,
    nbkm            int,
    idclient        int (3) not null,
    primary key (idvehicule),
    foreign key (idclient) references client (idclient)

);

create table intervention
(
    idintervention int(3) not null auto_increment,
    description    varchar(200) not null,
    dateinter      date,
    prix           float,
    idvehicule     int (3) not null,
    idtechnicien   int (3) not null,
    primary key (idintervention),
    foreign key (idvehicule) references vehicule (idvehicule),
    foreign key (idtechnicien) references technicien (idtechnicien)
);
create table user
(
    iduser int(3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(100),
    mdp varchar(255),
    role enum("admin", "user"),
    primary key(iduser)
);
    insert into user values (null, "Julia", "Dan", "a@gmail.com", "123", "admin"), (null, "Lucas", "Salim", "b@gmail.com", "456", "user");

