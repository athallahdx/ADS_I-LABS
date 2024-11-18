CREATE DATABASE db_inf;

USE latihan_1;

CREATE TABLE `tbl_users` (
    `namalengkap` varchar(50),
    `nim` char(9),
    `prodi` varchar(50),
    `email` varchar(50),
    `password` varchar(20),
    PRIMARY KEY (`nim`)
);

CREATE TABLE praktikum (
    ID_praktikum INT NOT NULL AUTO_INCREMENT,
    Nama_praktikum VARCHAR(50) NOT NULL,
    Shift CHAR(1) NOT NULL,
    Hari VARCHAR(10) NOT NULL,
    Jam VARCHAR(10) NOT NULL,
    Asprak VARCHAR(50) NOT NULL,
    PRIMARY KEY (ID_praktikum),
);

CREATE TABLE praktikan (
    ID_praktikan INT NOT NULL AUTO_INCREMENT,
    Nama_praktikan VARCHAR(50) NOT NULL,
    NIM CHAR(9) NOT NULL,
    ID_praktikum INT NOT NULL,
    PRIMARY KEY (ID_praktikan),
    FOREIGN KEY (ID_praktikum) REFERENCES praktikum(ID_praktikum)
);  

CREATE TABLE tugas (
    ID_tugas INT NOT NULL AUTO_INCREMENT,
    Nama_tugas VARCHAR(50) NOT NULL,
    Deadline DATE NOT NULL,
    Status VARCHAR(50) NOT NULL,
    ID_praktikum INT NOT NULL,
    PRIMARY KEY (ID_tugas),
    FOREIGN KEY (ID_praktikum) REFERENCES praktikum(ID_praktikum)
);

CREATE TABLE materi (
    ID_materi INT NOT NULL AUTO_INCREMENT,
    Nama_materi VARCHAR(50) NOT NULL,
    BAB VARCHAR(50) NOT NULL,
    ID_praktikum INT NOT NULL,
    PRIMARY KEY (ID_materi),
    FOREIGN KEY (ID_praktikum) REFERENCES praktikum(ID_praktikum)
);

CREATE TABLE asprak (
    ID_asprak INT NOT NULL AUTO_INCREMENT,
    Nama_asprak VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY (ID_asprak),
);