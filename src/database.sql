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