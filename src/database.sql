CREATE DATABASE db_inflabs;

USE db_inflabs;

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
    NIM CHAR(9) NOT NULL,
    Nama_praktikan VARCHAR(50) NOT NULL,
    ID_praktikum INT NOT NULL,
    PRIMARY KEY (NIM),
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

insert into praktikum VALUES (
    '1', 'Sistem Operasi', 'A', 'Senin', '08:00', 'Jehian'),
    ('2', 'Sistem Operasi', 'B', 'Selasa', '08:00', 'Jehian'),
    ('3', 'Sistem Operasi', 'C', 'Rabu', '08:00', 'Fawwaz'),
    ('4', 'Sistem Operasi', 'D', 'Kamis', '08:00', 'Fawwaz'),
    ('5', 'Sistem Operasi', 'E', 'Jumat', '08:00', 'Hendra'),
    ('6', 'Sistem Operasi', 'F', 'Sabtu', '08:00', 'Hendra'),
    ('7', 'Struktur Data', 'A', 'Senin', '13:00', 'Luthfi'),
    ('8', 'Struktur Data', 'B', 'Selasa', '13:00', 'Luthfi'),
    ('9', 'Struktur Data', 'C', 'Rabu', '13:00', 'Renggo'),
    ('10', 'Struktur Data', 'D', 'Kamis', '13:00', 'Renggo'),
    ('11', 'Struktur Data', 'E', 'Jumat', '13:00', 'Athallah'),
    ('12', 'Struktur Data', 'F', 'Sabtu', '13:00', 'Athallah');