create database ONG;
use ONG;

create table usuario(
AT_UserID int primary key auto_increment,
AT_Name varchar(900),
AT_Username varchar(40),
AT_Password varchar(100),
AT_Cep int,
AT_Bairro varchar(40),
AT_Street varchar(40),
AT_PhoneOne int(11),
AT_PhoneTwo int(11)
);