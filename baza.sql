create table korisnik(
	korisnik_id int primary key not null auto_increment,
	username varchar(50),
	password varchar(50)
);

create table igra(
	igra_id int primary key not null auto_increment,
	ime varchar(20),
	studio varchar(20)
);

create table komentar(
	tekst varchar(255),
    igra_id int,
    korisnik_id int
);

alter table komentar add foreign key (igra_id) references igra(igra_id);

alter table komentar add foreign key (korisnik_id) references korisnik(korisnik_id);

insert into korisnik(username,password) values ('Ivor','lozinka');

insert into igra(ime,studio) values ('igra 1','studio 1'),('igra 2','studio 2'),('igra 3','studio 3'),('igra 4','studio 4'),('igra 5','studio 5');