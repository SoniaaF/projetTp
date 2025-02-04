#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Test
#------------------------------------------------------------

CREATE TABLE Test(
        id         Int  Auto_increment  NOT NULL ,
        Question   Text NOT NULL ,
        Answer1    Varchar (50) NOT NULL ,
        Answer2    Varchar (50) NOT NULL ,
        Answer3    Varchar (50) NOT NULL ,
        Answer4    Varchar (50) NOT NULL ,
        TrueAnswer Varchar (50) NOT NULL
	,CONSTRAINT Test_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id        Int  Auto_increment  NOT NULL ,
        lastName  Varchar (50) NOT NULL ,
        firstName Varchar (50) NOT NULL ,
        Mail      Varchar (50) NOT NULL ,
        password  Varchar (60) NOT NULL ,
        security  Int NOT NULL ,
        id_Test   Int NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id)

	,CONSTRAINT User_Test_FK FOREIGN KEY (id_Test) REFERENCES Test(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Lesson
#------------------------------------------------------------

CREATE TABLE Lesson(
        id       Int  Auto_increment  NOT NULL ,
        Name     Varchar (50) NOT NULL ,
        Schedule Varchar (50) NOT NULL
	,CONSTRAINT Lesson_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

