--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 8.0.80.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 13.12.2018 17:01:17
-- Версия сервера: 5.6.41
-- Версия клиента: 4.1
--


SET NAMES 'utf8';

INSERT INTO ortodont.certs(id, name, img, img_alt, img_title, order_id, link, created_at, updated_at) VALUES
(1, '', '/cert/1.jpg', 'ертификат1', 'лицензия 1', 1, '/cert/1big.jpg', NULL, NULL),
(2, '', '/cert/1.jpg', 'ертификат1', 'лицензия 1', 2, '/cert/1big.jpg', NULL, NULL),
(3, '', '/cert/1.jpg', 'ертификат1', 'лицензия 1', 3, '/cert/1big.jpg', NULL, NULL),
(4, '', '/cert/1.jpg', 'ертификат1', 'лицензия 1', 4, '/cert/1big.jpg', NULL, NULL),
(5, '', '/cert/1.jpg', 'ертификат1', 'лицензия 1', 5, '/cert/1big.jpg', NULL, NULL),
(6, '', '/cert/1.jpg', 'ертификат1', 'лицензия 1', 6, '/cert/1big.jpg', NULL, NULL),
(7, '', '/cert/1.jpg', 'ертификат1', 'лицензия 1', 7, '/cert/1big.jpg', NULL, NULL);


INSERT INTO ortodont.crews(id, name, img, img_alt, img_title, order_id, link, man_name, `desc`, created_at, updated_at) VALUES
(1, '', '/crew/1.png', 'Стоматолог-терапевт, ортопед детский стоматолог Андрющенко Виктория Константиновна', 'Андрющенко Виктория Константиновна', 0, '/specialisty/andryuschenko-viktorija-konstantinovna/', 'Андрющенко Виктория Константиновна', 'Стоматолог-терапевт, ортопед детский стоматолог', NULL, NULL),
(2, '', '/crew/1.png', 'Стоматолог-терапевт, ортопед детский стоматолог Андрющенко Виктория Константиновна', 'Андрющенко Виктория Константиновна', 2, '/specialisty/andryuschenko-viktorija-konstantinovna/', 'Андрющенко Виктория Константиновна', 'Стоматолог-терапевт, ортопед детский стоматолог', NULL, NULL),
(3, '', '/crew/1.png', 'Стоматолог-терапевт, ортопед детский стоматолог Андрющенко Виктория Константиновна', 'Андрющенко Виктория Константиновна', 3, '/specialisty/andryuschenko-viktorija-konstantinovna/', 'Андрющенко Виктория Константиновна', 'Стоматолог-терапевт, ортопед детский стоматолог', NULL, NULL),
(4, '', '/crew/1.png', 'Стоматолог-терапевт, ортопед детский стоматолог Андрющенко Виктория Константиновна', 'Андрющенко Виктория Константиновна', 4, '/specialisty/andryuschenko-viktorija-konstantinovna/', 'Андрющенко Виктория Константиновна', 'Стоматолог-терапевт, ортопед детский стоматолог', NULL, NULL),
(5, '', '/crew/1.png', 'Стоматолог-терапевт, ортопед детский стоматолог Андрющенко Виктория Константиновна', 'Андрющенко Виктория Константиновна', 5, '/specialisty/andryuschenko-viktorija-konstantinovna/', 'Андрющенко Виктория Константиновна', 'Стоматолог-терапевт, ортопед детский стоматолог', NULL, NULL),
(6, '', '/crew/1.png', 'Стоматолог-терапевт, ортопед детский стоматолог Андрющенко Виктория Константиновна', 'Андрющенко Виктория Константиновна', 6, '/specialisty/andryuschenko-viktorija-konstantinovna/', 'Андрющенко Виктория Константиновна', 'Стоматолог-терапевт, ортопед детский стоматолог', NULL, NULL);


INSERT INTO ortodont.feedback(id, name, img, img_alt, img_title, order_id, link, `from`, value, created_at, updated_at) VALUES
(1, 'Голлум ака "моя прелесть"', '/feedback/1.jpg', NULL, NULL, 1, '/feedback/1', 'Голлум ака "моя прелесть"', 'теперь мой последний оставшийся зуб выглядит как новый!', NULL, NULL),
(2, 'Голлум ака "моя прелесть"', '/feedback/1.jpg', NULL, NULL, 2, '/feedback/1', 'Голлум ака "моя прелесть"', 'теперь мой последний оставшийся зуб выглядит как новый!', NULL, NULL),
(3, 'Голлум ака "моя прелесть"', '/feedback/1.jpg', NULL, NULL, 3, '/feedback/1', 'Голлум ака "моя прелесть"', 'теперь мой последний оставшийся зуб выглядит как новый!', NULL, NULL),
(4, 'Голлум ака "моя прелесть"', '/feedback/1.jpg', NULL, NULL, 4, '/feedback/1', 'Голлум ака "моя прелесть"', 'теперь мой последний оставшийся зуб выглядит как новый!', NULL, NULL),
(5, 'Голлум ака "моя прелесть"', '/feedback/1.jpg', NULL, NULL, 5, '/feedback/1', 'Голлум ака "моя прелесть"', 'теперь мой последний оставшийся зуб выглядит как новый!', NULL, NULL),
(6, 'Голлум ака "моя прелесть"', '/feedback/1.jpg', NULL, NULL, 6, '/feedback/1', 'Голлум ака "моя прелесть"', 'теперь мой последний оставшийся зуб выглядит как новый!', NULL, NULL);


INSERT INTO ortodont.galleries(id, name, img, img_alt, img_title, img_big, img_big_alt, order_id, link, created_at, updated_at) VALUES
(1, '', '/gallery/1.jpg', '1', '1', '/gallery/1big.jpg', '1', 1, '', NULL, NULL),
(2, '', '/gallery/1.jpg', '2', '2', '/gallery/1big.jpg', '2', 2, '', NULL, NULL),
(3, '', '/gallery/1.jpg', '3', '3', '/gallery/1big.jpg', '4', 3, '', NULL, NULL),
(4, '', '/gallery/1.jpg', '4', '4', '/gallery/1big.jpg', '5', 4, '', NULL, NULL),
(5, '', '/gallery/1.jpg', '5', '5', '/gallery/1big.jpg', '6', 5, '', NULL, NULL),
(6, '', '/gallery/1.jpg', '6', '6', '/gallery/1big.jpg', '7', 6, '', NULL, NULL);


INSERT INTO ortodont.menus(id, name, value, order_id, level, parent_id, link, created_at, updated_at) VALUES
(1, 'top_menu', 'Услуги', 1, 0, 0, '', NULL, NULL),
(2, 'top_menu', 'Пациентам', 2, 0, 0, '', NULL, NULL),
(3, 'top_menu', 'Врачи', 3, 0, 0, '', NULL, NULL),
(4, 'top_menu', 'Контакты', 4, 0, 0, '/kontakty/', NULL, NULL),
(5, 'top_menu', 'Акции', 5, 0, 0, '/akcii-i-specpredlozhenija/', NULL, NULL),
(6, 'top_menu', 'Прайс-лист', 6, 0, 0, '/prais-list/', NULL, NULL),
(7, 'top_menu', 'Ортодонтическая стоматология', 1, 1, 1, '/uslugi/ortodontija/', NULL, NULL),
(8, 'top_menu', 'Терапевтическая стоматология', 2, 1, 1, '/uslugi/lechenie-zubov/', NULL, NULL),
(9, 'top_menu', 'Ортопедическая стоматология', 3, 1, 1, '/uslugi/protezirovanie-zubov/', NULL, NULL),
(10, 'top_menu', 'Новости и акции', 1, 1, 2, '/novosti/', NULL, NULL),
(11, 'top_menu', 'Отзывы пациентов', 2, 1, 2, '/otzyvy/', NULL, NULL),
(12, 'top_menu', 'Фотогалерея', 3, 1, 2, '/photos/', NULL, NULL),
(13, 'top_menu', 'Никитина Юлия Ивановна', 1, 1, 3, '/specialisty/nikitina-yulija-ivanovna/', NULL, NULL),
(14, 'top_menu', 'Андрющенко Виктория Константиновна', 2, 1, 3, '/specialisty/andryuschenko-viktorija-konstantinovna/', NULL, NULL),
(15, 'top_menu', 'Миенко Юлия Александровна', 3, 1, 3, '/specialisty/mienko-yulija-aleksandrovna/', NULL, NULL);


INSERT INTO ortodont.news(id, name, img, img_alt, img_title, order_id, link, `desc`, created_at, updated_at) VALUES
(1, '', '/news/1.jpg', '1', '1', 1, '/novosti/nashi-ortodonty-posetili-seminar-yevolut.html', 'Правило наших врачей совершенствоваться! Постоянно повышать свою квалификацию. Посещать семинары и курсы, знать все передовые технологии.', NULL, NULL),
(2, '', '/news/1.jpg', '2', '2', 2, '/novosti/nashi-ortodonty-posetili-seminar-yevolut.html', 'Правило наших врачей совершенствоваться! Постоянно повышать свою квалификацию. Посещать семинары и курсы, знать все передовые технологии.', NULL, NULL),
(3, '', '/news/1.jpg', '3', '3', 3, '/novosti/nashi-ortodonty-posetili-seminar-yevolut.html', 'Правило наших врачей совершенствоваться! Постоянно повышать свою квалификацию. Посещать семинары и курсы, знать все передовые технологии.', NULL, NULL),
(4, '', '/news/1.jpg', '4', '4', 4, '/novosti/nashi-ortodonty-posetili-seminar-yevolut.html', 'Правило наших врачей совершенствоваться! Постоянно повышать свою квалификацию. Посещать семинары и курсы, знать все передовые технологии.', NULL, NULL),
(5, '', '/news/1.jpg', '5', '5', 5, '/novosti/nashi-ortodonty-posetili-seminar-yevolut.html', 'Правило наших врачей совершенствоваться! Постоянно повышать свою квалификацию. Посещать семинары и курсы, знать все передовые технологии.', NULL, NULL),
(6, '', '/news/1.jpg', '6', '6', 6, '/novosti/nashi-ortodonty-posetili-seminar-yevolut.html', 'Правило наших врачей совершенствоваться! Постоянно повышать свою квалификацию. Посещать семинары и курсы, знать все передовые технологии.', NULL, NULL);


INSERT INTO ortodont.params(id, name, par_group, par_type, value, created_at, updated_at) VALUES
(1, 'worktime', 'common', 'string', 'Пн.-Вс.: 08:00-20:00', NULL, NULL),
(2, 'email', 'common', 'string', 'ortodont-yug@mail.ru', NULL, NULL),
(3, 'phone', 'common', 'string', ' 8 (800) 250-57-74', NULL, NULL),
(4, 'altphone', 'common', 'string', '+7 (918) 044-66-99', NULL, NULL),
(5, 'city', 'common', 'string', 'г. Краснодар', NULL, NULL),
(6, 'street', 'common', 'string', 'ЦМР, ул. Карасунская, 98', NULL, NULL),
(7, 'workmode', 'common', 'string', 'без перерывов и выходных', NULL, NULL);


INSERT INTO ortodont.services(id, name, value, img, img_cover, img_alt, img_title, order_id, link, created_at, updated_at) VALUES
(1, '', 'Ортодонтия', '/service/2h.png', '/service/2.png', 'Услуги ортодонтии', 'Ортодонтия', 0, '/uslugi/ortodontija', NULL, NULL),
(2, '', 'Ортодонтия', '/service/2h.png', '/service/2.png', 'Услуги ортодонтии', 'Ортодонтия', 1, '/uslugi/ortodontija', NULL, NULL),
(3, '', 'Ортодонтия', '/service/2h.png', '/service/2.png', 'Услуги ортодонтии', 'Ортодонтия', 2, '/uslugi/ortodontija', NULL, NULL),
(4, '', 'Ортодонтия', '/service/2h.png', '/service/2.png', 'Услуги ортодонтии', 'Ортодонтия', 3, '/uslugi/ortodontija', NULL, NULL),
(5, '', 'Ортодонтия', '/service/2h.png', '/service/2.png', 'Услуги ортодонтии', 'Ортодонтия', 4, '/uslugi/ortodontija', NULL, NULL),
(6, '', 'Ортодонтия', '/service/2h.png', '/service/2.png', 'Услуги ортодонтии', 'Ортодонтия', 5, '/uslugi/ortodontija', NULL, NULL),
(7, '', 'Ортодонтия', '/service/2h.png', '/service/2.png', 'Услуги ортодонтии', 'Ортодонтия', 6, '/uslugi/ortodontija', NULL, NULL),
(8, '', 'Ортодонтия', '/service/2h.png', '/service/2.png', 'Услуги ортодонтии', 'Ортодонтия', 7, '/uslugi/ortodontija', NULL, NULL),
(9, '', 'Ортодонтия', '/service/2h.png', '/service/2.png', 'Услуги ортодонтии', 'Ортодонтия', 8, '/uslugi/ortodontija', NULL, NULL);


INSERT INTO ortodont.sliders(id, name, img, img_alt, img_title, order_id, link, link_desc, `desc`, div_classes, block_class, created_at, updated_at) VALUES
(1, 'top', '/slider/1.jpg', '', '', 1, '#feedback', 'Заказать бесплатную консультацию', 'НАША СТОМАТОЛОГИЯ В КРАСНОДАРЕ;ВЫПОЛНЯЕТ ВЕСЬ СПЕКТР СТОМАТОЛОГИЧЕСКИХ УСЛУГ;Компьютерная 3D - томография', 'slider-light;slider-light;slider-light', 'right__text', NULL, NULL),
(2, 'top', '/slider/2.jpg', '', '', 2, '#feedback', 'Заказать бесплатную консультацию', 'НАША СТОМАТОЛОГИЯ В КРАСНОДАРЕ;ВЫПОЛНЯЕТ ВЕСЬ СПЕКТР СТОМАТОЛОГИЧЕСКИХ УСЛУГ;Компьютерная 3D - томография', 'slider-light;slider-light;slider-light', NULL, NULL, NULL),
(3, 'top', '/slider/3.jpg', '', '', 3, '#feedback', 'Заказать бесплатную консультацию', 'НАША СТОМАТОЛОГИЯ В КРАСНОДАРЕ;ВЫПОЛНЯЕТ ВЕСЬ СПЕКТР СТОМАТОЛОГИЧЕСКИХ УСЛУГ;Компьютерная 3D - томография', 'slider-light;slider-light;slider-light', NULL, NULL, NULL);


INSERT INTO ortodont.tours(id, name, img, img_alt, img_title, order_id, link, created_at, updated_at) VALUES
(1, 'Кабинет хирургии и имплантации', '/tour/1.jpg', '3D Тур - Кабинет хирургии и имплантации', 'Кабинет хирургии и имплантации', 1, 'https://ortodont-yug.ru/assets/template/ortodont/ORTODONT/7/index.php', NULL, NULL),
(2, 'Кабинет хирургии и имплантации', '/tour/1.jpg', '3D Тур - Кабинет хирургии и имплантации', 'Кабинет хирургии и имплантации', 2, 'https://ortodont-yug.ru/assets/template/ortodont/ORTODONT/7/index.php', NULL, NULL),
(3, 'Кабинет хирургии и имплантации', '/tour/1.jpg', '3D Тур - Кабинет хирургии и имплантации', 'Кабинет хирургии и имплантации', 3, 'https://ortodont-yug.ru/assets/template/ortodont/ORTODONT/7/index.php', NULL, NULL),
(4, 'Кабинет хирургии и имплантации', '/tour/1.jpg', '3D Тур - Кабинет хирургии и имплантации', 'Кабинет хирургии и имплантации', 4, 'https://ortodont-yug.ru/assets/template/ortodont/ORTODONT/7/index.php', NULL, NULL),
(5, 'Кабинет хирургии и имплантации', '/tour/1.jpg', '3D Тур - Кабинет хирургии и имплантации', 'Кабинет хирургии и имплантации', 5, 'https://ortodont-yug.ru/assets/template/ortodont/ORTODONT/7/index.php', NULL, NULL),
(6, 'Кабинет хирургии и имплантации', '/tour/1.jpg', '3D Тур - Кабинет хирургии и имплантации', 'Кабинет хирургии и имплантации', 6, 'https://ortodont-yug.ru/assets/template/ortodont/ORTODONT/7/index.php', NULL, NULL),
(7, 'Кабинет хирургии и имплантации', '/tour/1.jpg', '3D Тур - Кабинет хирургии и имплантации', 'Кабинет хирургии и имплантации', 7, 'https://ortodont-yug.ru/assets/template/ortodont/ORTODONT/7/index.php', NULL, NULL),
(8, 'Кабинет хирургии и имплантации', '/tour/1.jpg', '3D Тур - Кабинет хирургии и имплантации', 'Кабинет хирургии и имплантации', 8, 'https://ortodont-yug.ru/assets/template/ortodont/ORTODONT/7/index.php', NULL, NULL);