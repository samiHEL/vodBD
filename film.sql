--
-- PostgreSQL database dump
--

-- Dumped from database version 8.4.13
-- Dumped by pg_dump version 9.0.1
-- Started on 2012-10-19 14:50:07

\c vod
--
-- TOC entry 1499 (class 1259 OID 16467)
-- Dependencies: 1779 5
-- Name: client; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE Film (

    num_film INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titre character varying(50),
    annee integer NOT NULL,
    realisateur character varying(50)
    
);

INSERT INTO Film(titre,annee,realisateur) VALUES ('Blood Brother', 2018, 'John Pogue ');
INSERT INTO Film(titre,annee,realisateur) VALUES ('Okja', 2017, 'Bong Joon Ho');
INSERT INTO Film(titre,annee,realisateur) VALUES ('Invincible', 2014, 'Angelina Jolie');
INSERT INTO Film(titre,annee,realisateur) VALUES ('Colombiana', 2011, 'Olivier Megaton');
INSERT INTO Film(titre,annee,realisateur) VALUES ('Inception', 2010, 'Christopher Nolan');




