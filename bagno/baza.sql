CREATE DATABASE dziennik12;

USE dziennik12;

CREATE TABLE uczniowie (`id` INT PRIMARY KEY AUTO_INCREMENT, `imie` VARCHAR(30) NOT NULL, 
`nazwisko` VARCHAR(30) NOT NULL, `email` VARCHAR(100) NOT NULL, `wiek` INT(2) NOT NULL);


INSERT INTO uczniowie (imie, nazwisko, email, wiek) VALUES
('Braian', 'Kropidłowski', 'Protoplast@gmail.com', '19'),
('Karol', 'Ramach', 'Karolek@gmail.com', '18'),
('Aleks', 'Smigielski', 'Aleksiej@gmail.com', '15'),
('Oskar', 'Kloskowski', 'Klocek@gmail.com', '16'),
('Janek', 'Snopkowski', 'Snopinio@gmail.com', '13'),
('Piotrek', 'Tocki', 'Trocki@gmail.com', '8'),
('Mateusz', 'Nowak', 'Nowaczkiewicz@gmail.com', '11'),
('Darek', 'Kownacki', 'Darus@gmail.com', '5'),
('Waldek', 'Kowalewski', 'Waldi@gmail.com', '27'),
('Lukasz', 'Makowski', 'Luki@gmail.com', '24');
