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
	komentar_id int primary key not null auto_increment,
	tekst varchar(255),
    igra_id int,
    korisnik_id int
);

alter table komentar add foreign key (igra_id) references igra(igra_id);

alter table komentar add foreign key (korisnik_id) references korisnik(korisnik_id);

insert into korisnik(username,password) values ('Ivor','lozinka');

insert into igra(ime,studio) values ('igra 1','studio 1'),('igra 2','studio 2'),('igra 3','studio 3'),('igra 4','studio 4'),('igra 5','studio 5');

INSERT INTO `komentar`(`tekst`, `igra_id`, `korisnik_id`) VALUES ('Odlicna igra 10/10',1,1),('Katastrofa 1/10',1,1);

/*
SELECT a.username, b.tekst, c.ime from korisnik a inner join komentar b on a.korisnik_id=b.korisnik_id inner join igra c on b.igra_id=c.igra_id order by a.korisnik_id desc