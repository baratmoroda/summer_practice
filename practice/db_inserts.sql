INSERT INTO PEOPLE (FullName, PassportData) VALUES
    ('Пушкин Александр Сергеевич', '1111-232433'),
    ('Достоевский Фёдор Михайлович', '2222-435321'),
    ('Гоголь Николай Васильевич', '3333-700283'),
    ('Замятин Евгений Иванович', '4444-028093'),
    ('Ахматова Анна Андреевна', '5555-237480'),
    ('Есенин Сергей Александрович', '6666-203083'),
    ('Крылов Иван Андреевич', '7777-329073'),
    ('Куприн Александр Иванович', '8888-576821'),
    ('Маяковский Владимир Владимирович', '9999-026373'),
    ('Цветаева Марина Ивановна', '1010-293490');

INSERT INTO CARS (Model, Year, LicensePlate, InsuranceCost, OwnerID) VALUES
    ('Renault', 2014, 'М567ОР', 550000, 1),
    ('Volvo', 2014, 'Е890УК', 700000, 2),
    ('Peugeot', 2018, 'С123АТ', 400000, 3),
    ('Fiat', 2016, 'В456НС', 750000, 4),
    ('Mazda', 2021, 'А789ЕХ', 1050000, 5),
    ('Subaru', 2015, 'У012ТМ', 1190000, 6),
    ('Kia', 2020, 'Н345МО', 1800000, 7),
    ('Lada', 2018, 'Р678УХ', 380000, 8),
    ('Skoda', 2019, 'К901АН', 450000, 9),
    ('Opel', 2017, 'В234ЕР', 620000, 10);

INSERT INTO VIOLATION_TYPES (ViolationType, FineAmount) VALUES
    ('Превышение скорости', 1500),
    ('Неправильная парковка', 500),
    ('Проезд на красный свет', 5000),
    ('Нарушение разметки', 400),
    ('Отсутствие ремня безопасности', 2000),
    ('Использование мобильного телефона за рулем', 2000),
    ('Невыполнение требований к детским устройствам', 1000),
    ('Движение по встречной полосе', 5000),
    ('Разворот в неположенном месте', 5000),
    ('Остановка в неположенном месте', 1000);


INSERT INTO VIOLATION_FACTS (ViolationDate, DriverID, CarID, ViolationTypeID) VALUES
    ('2023-03-01', 1, 1, 1),
    ('2023-03-02', 2, 2, 3),
    ('2023-03-03', 3, 3, 5),
    ('2023-03-04', 4, 4, 7),
    ('2023-03-05', 5, 5, 9),
    ('2023-03-01', 6, 1, 2),
    ('2023-03-02', 7, 2, 4),
    ('2023-03-03', 8, 3, 6),
    ('2023-03-04', 9, 4, 8),
    ('2023-03-05', 10, 5, 10),
    ('2023-06-01', 1, 1, 1),
    ('2023-06-02', 2, 2, 3),
    ('2023-06-03', 3, 3, 5),
    ('2023-06-04', 4, 4, 7),
    ('2023-06-05', 5, 5, 9),
    ('2023-06-01', 6, 1, 2),
    ('2023-06-02', 7, 2, 4),
    ('2023-06-03', 8, 3, 6),
    ('2023-06-04', 9, 4, 8),
    ('2023-06-05', 10, 5, 10),
    ('2023-07-01', 1, 1, 1),
    ('2023-07-02', 2, 2, 3),
    ('2023-07-03', 3, 3, 5),
    ('2023-07-04', 4, 4, 7),
    ('2023-07-05', 5, 5, 9),
    ('2023-07-01', 6, 1, 2),
    ('2023-07-02', 7, 2, 4),
    ('2023-07-03', 8, 3, 6),
    ('2023-07-04', 9, 4, 8),
    ('2023-07-05', 10, 5, 10),
    ('2023-08-01', 1, 1, 1),
    ('2023-08-02', 2, 2, 3),
    ('2023-08-03', 3, 3, 5),
    ('2023-08-04', 4, 4, 7),
    ('2023-08-05', 5, 5, 9),
    ('2023-08-01', 6, 1, 2),
    ('2023-08-02', 7, 2, 4),
    ('2023-08-03', 8, 3, 6),
    ('2023-08-04', 9, 4, 8),
    ('2023-08-05', 10, 5, 10),
    ('2023-10-01', 1, 1, 1),
    ('2023-10-02', 2, 2, 3),
    ('2023-10-03', 3, 3, 5),
    ('2023-10-04', 4, 4, 7),
    ('2023-10-05', 5, 5, 9),
    ('2023-10-01', 6, 1, 2),
    ('2023-10-02', 7, 2, 4),
    ('2023-10-03', 8, 3, 6),
    ('2023-10-04', 9, 4, 8),
    ('2023-10-05', 10, 5, 10);
