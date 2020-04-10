
Create Database blogmasters;
use blogmasters;


create table Attachment (
idAttachment int primary key not null auto_increment,
attachment mediumblob not null
);
create table Region (
	idRegion int primary key  auto_increment ,
	name varchar(45)
);
create table User (
	idUser int primary key auto_increment ,
    fistName varchar(50) not null ,
    LastName varchar(75) not null ,
    email varchar(100) not null ,
    password varchar(200) not null ,
    birthDate date not null ,
    registrationDate datetime not null ,
    idAttachment int not null,
    idRegion int not null ,
    constraint fk_AttachmentUser foreign key (idAttachment) references Attachment(idAttachment),
    constraint fk_RegionUser foreign key (idRegion)  references Region(idRegion)
);



