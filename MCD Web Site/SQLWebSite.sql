#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        idUser        Int  Auto_increment  NOT NULL ,
        name          Varchar (255) NOT NULL ,
        lastName      Varchar (255) NOT NULL ,
        location      Varchar (255) NOT NULL ,
        email         Varchar (255) NOT NULL ,
        password      Varchar (60) NOT NULL ,
        state         Int NOT NULL ,
        rememberToken Varchar (100) NOT NULL ,
        created_at    TimeStamp NOT NULL ,
        adapted_at    TimeStamp NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Event
#------------------------------------------------------------

CREATE TABLE Event(
        idEvent    Int  Auto_increment  NOT NULL ,
        owner      Varchar (255) NOT NULL ,
        date       Varchar (255) NOT NULL ,
        descrition Varchar (255) NOT NULL ,
        validated  TinyINT NOT NULL ,
        imageLink  Varchar (255) NOT NULL ,
        like       TinyText NOT NULL ,
        notes      Varchar (255) NOT NULL ,
        idUser     Int NOT NULL
	,CONSTRAINT Event_PK PRIMARY KEY (idEvent)

	,CONSTRAINT Event_User_FK FOREIGN KEY (idUser) REFERENCES User(idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        idArticle Int  Auto_increment  NOT NULL ,
        name      Varchar (255) NOT NULL ,
        quantity  Varchar (255) NOT NULL ,
        price     Varchar (255) NOT NULL ,
        urlImage  Varchar (255) NOT NULL
	,CONSTRAINT Article_PK PRIMARY KEY (idArticle)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Photos
#------------------------------------------------------------

CREATE TABLE Photos(
        idPhotos Int  Auto_increment  NOT NULL ,
        link     Varchar (255) NOT NULL ,
        idEvent  Int NOT NULL
	,CONSTRAINT Photos_PK PRIMARY KEY (idPhotos)

	,CONSTRAINT Photos_Event_FK FOREIGN KEY (idEvent) REFERENCES Event(idEvent)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Comments
#------------------------------------------------------------

CREATE TABLE Comments(
        idcomments Int  Auto_increment  NOT NULL ,
        comments   Varchar (255) NOT NULL ,
        idEvent    Int NOT NULL
	,CONSTRAINT Comments_PK PRIMARY KEY (idcomments)

	,CONSTRAINT Comments_Event_FK FOREIGN KEY (idEvent) REFERENCES Event(idEvent)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Buy
#------------------------------------------------------------

CREATE TABLE Buy(
        idUser    Int NOT NULL ,
        idArticle Int NOT NULL
	,CONSTRAINT Buy_PK PRIMARY KEY (idUser,idArticle)

	,CONSTRAINT Buy_User_FK FOREIGN KEY (idUser) REFERENCES User(idUser)
	,CONSTRAINT Buy_Article0_FK FOREIGN KEY (idArticle) REFERENCES Article(idArticle)
)ENGINE=InnoDB;

