
/*
DANIEL PK
DATABASE FOR PHP SQL PROJECT
06.10.2020

This script creates tables and records for the Classic shop database
*/
-- -----------------------------------------------------

-- this command is for avoiding problems with foreign keys constrains (i.e. makes things easier)--
set foreign_key_checks=0;

-- Drop table in case it exist in the database
DROP TABLE IF EXISTS ARTIST;


CREATE TABLE Artist (
	ArtistID int NOT NULL,
    FirstName VARCHAR(32) NOT NULL,
    LastName VARCHAR(32) NOT NULL,
    Country VARCHAR(15) NOT NULL,
    PRIMARY KEY (ArtistID)
    );
		


	

-- Drop table in case it exist in the database
DROP TABLE IF EXISTS PERIOD;
	
	CREATE TABLE Period (
	PeriodID int NOT NULL,
    Period VARCHAR(30) NOT NULL,
    PRIMARY KEY (PeriodID)
    );
	
	
	
	
	
-- Drop table in case it exist in the database
DROP TABLE IF EXISTS ALBUM;	
	
	
	CREATE TABLE Album (
	AlbumID int NOT NULL,
	ArtistID int NOT NULL,
    Album_Name VARCHAR(30) NOT NULL,
	Code varchar(100) NOT NULL,
    Album_Length VARCHAR(15),
    PeriodID int NOT NULL,
    Released DATE,
	Price DOUBLE(8,2) NOT NULL,
	Image VARCHAR(30),
	
	UNIQUE KEY Code (Code),
    PRIMARY KEY (AlbumID),
	FOREIGN KEY(ArtistID) REFERENCES Artist(ArtistID),
	FOREIGN KEY(PeriodID) REFERENCES Period(PeriodID)
    );	
	
	


	
	
-- Drop table in case it exist in the database
DROP TABLE IF EXISTS CLIENT;	
	
	CREATE TABLE Client (
	ClientID int NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(32) NOT NULL,
    LastName VARCHAR(32) NOT NULL,
	Email varchar(32) NOT NULL,
	Address varchar(32) NOT NULL,
	City varchar(32) NOT NULL,	
    Country VARCHAR(30) NOT NULL,
	Zip varchar(12) NOT NULL,
	NameOncard varchar(32) NOT NULL,
	cardNumber varchar(32) NOT NULL,
	ExpMonth varchar(12) NOT NULL,
	ExpYear varchar(12) NOT NULL,
	cvv varchar(5) NOT NULL,
    PRIMARY KEY (ClientID)
    );



-- Drop table in case it exist in the database
DROP TABLE IF EXISTS ORDERS;	
	
	
	CREATE TABLE Orders (
	OrdersID int NOT NULL AUTO_INCREMENT,
	ClientID int NOT NULL,         
    Sold TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	Total DOUBLE(8,2) NOT NULL,	
	
    PRIMARY KEY (OrdersID),
	FOREIGN KEY(ClientID) REFERENCES Client(ClientID)	
    );
	
	
/*I will not use this table for the project after all


-- Drop table in case it exist in the database
DROP TABLE IF EXISTS ORDERSALBUM;	
	
	
	CREATE TABLE OrdersAlbum (
	OrdersID int NOT NULL,
	AlbumID int NOT NULL,         
    Quantity int,
	Price DOUBLE(8,2),	
	
    PRIMARY KEY (OrdersID, AlbumID),
	INDEX (AlbumID, OrdersID)
    )ENGINE=InnoDB;
		
*/	



--Inserting new records for table
INSERT INTO ARTIST VALUES
(1, 'Robert', 'Schumann', 'Germany'),
(2, 'Amadeus', 'Mozart', 'Austria'),
(3, 'Ludvig', 'Beethoven', 'Germany'),
(4, 'Johann', 'Bach', 'Germany'),
(5, 'Camille', 'Saint-Saens', 'France'),
(6, 'Jean', 'Sibelius', 'Finland'),
(7, 'Gioachino', 'Rossini', 'Italy'),
(8, 'Felix', 'Mendelssohn', 'Germany'),
(9, 'Pyotr', 'Tchaikovsky', 'Russia'),
(10,'Marc-Antoine', 'Charpentier', 'France'),
(11, 'John', 'Williams', 'USA'),
(12, 'Antonio', 'Vivaldi', 'Italy'),
(13, 'Joseph', 'Haydn', 'Austria'),
(14, 'George', 'Handel', 'Germany');




-- Inserting new records for table
INSERT INTO ALBUM VALUES
(1, 2, 'Mozart Masterworks', '01:58', 2 ,'2015-08-14', '15,90', 'mozart1.jpg'),
(2, 7, 'Rossini Overtures', '00:57', 2, '2012-04-02', '19,90', 'rossini.jpg'),
(3, 1, 'Best Symphonies', '02:41', 3, '2015-12-04', '15,90', 'schumann.jpg'),
(4, 8, 'The best of Mendelssohn', '02:58', 3, '2017-12-29', '17,90','mendelssohn.jpg'),
(5, 3, 'Symphonies 1-9', '03:14', 3, '2012-05-01', '22,90', 'beethoven.jpg'),
(6, 4, 'Bach Masterworks', '02:36', 1, '2009-06-15', '14,90', 'bach.jpg'),
(7, 5, 'Saint-Saens symphonies', '02:48', 3, '2011-12-15', '17,90', 'camille.jpg'),
(8, 6, 'Jean Sibelius Works', '01:39', 3, '2016-04-01', '18,90', 'sibelius.jpg'),
(9, 10, 'Te Deum in D Major', '02:30', 1, '2013-09-22', '17,90', 'tedeum.jpg'),
(10, 11, '40 Years Of Film Music', '03:00', 4, '2007-09-25', '17,90', '40years.jpg'),
(11, 12, 'The four seasons', '59:00', 1, '2011-01-01', '12,90', '4seasons.jpg'),
(12, 2, 'Requiem', '52:00', 2, '2007-09-25', '15,90', 'requiem.jpg'),
(13, 3, 'Piano concertos 1-5', '03:05', 3, '2014-04-01', '20,90', 'beetpianoconcertos.jpg'),
(14, 9, 'Violin concerto', '01:15', 3, '2010-12-01', '18,90', 'tchaikovski_violin.jpg'),
(15, 3, 'Violin concerto D major', '01:08', 3, '2008-01-01', '22,90', 'beethoven_violin.jpg'),
(16, 4, 'Brandenburg concertos', '02:05', 1, '2006-12-25', '18,90', 'brandenburg.jpg'),
(17, 2, 'Horn concertos', '59:00', 2, '2018-02-20', '17,90', 'mozart_horn.jpg'),
(18, 5, 'Organ symphony', '01:03', 3, '2016-12-01', '19,80', 'camille_organ.jpg'),
(19, 13, 'Symphony No. 104', '01:05', 2 ,'2012-10-15', '16,50', 'haydn104.jpg'),
(20, 14, 'Coronation anthem No. 1', '59:00', 1, '2009-11-25', '19,90', 'handel_coronation.jpg');




-- Inserting new records for table
INSERT INTO PERIOD VALUES
(1, 'Barroch'),
(2, 'Classical'),
(3, 'Romantic'),
(4, 'Contemporary'),
(5, 'Medieval');


--The records for tables Client and Orders need to be filled by the client him/herself




	
	
