CREATE DATABASE lkpp;

CREATE TABLE pekerja (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    nokp VARCHAR(20),
    noTel VARCHAR(15)
);

CREATE TABLE infoPekerja (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tarikhLahir DATE,
    negeri VARCHAR(50),
    institusi VARCHAR(100),
    tahun INT,
    pencapaian VARCHAR(255),
    pekerjaId INT,
    FOREIGN KEY (pekerjaId) REFERENCES pekerja(id)
);
