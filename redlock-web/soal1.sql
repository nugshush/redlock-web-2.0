CREATE TABLE users (
  ID INT PRIMARY KEY AUTO_INCREMENT,
  Nama VARCHAR(255) not null,
  Alamat VARCHAR(255) not null,
  Jabatan VARCHAR(255) not null
);

INSERT INTO users (Nama, Alamat, Jabatan)
VALUES ('Mila', 'Bali', 'CEO'),
       ('Aprilia', 'Bandung', 'Supervisor'),
       ('Daniel', 'Jakarta', 'Manager'),
       ('Joana', 'Balikpapan', 'Staff');