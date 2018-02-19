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

insert into korisnik(username,password) values ('Ivor','lozinka');

insert into igra(ime,studio) values ('igra 1','studio 1'),('igra 2','studio 2'),('igra 3','studio 3'),('igra 4','studio 4'),('igra 5','studio 5');