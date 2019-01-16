#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        idUsers       Int  Auto_increment  NOT NULL ,
        name          Varchar (255) NOT NULL ,
        lastName      Varchar (255) NOT NULL ,
        location      Varchar (255) NOT NULL ,
        email         Varchar (255) NOT NULL ,
        password      Varchar (60) NOT NULL ,
        state         TinyINT NOT NULL ,
        rememberToken Varchar (100) NOT NULL ,
        created_at    TimeStamp NOT NULL ,
        updapted_at   TimeStamp NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (idUsers)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Events
#------------------------------------------------------------

CREATE TABLE Events(
        id         Int  Auto_increment  NOT NULL ,
        owner      Varchar (255) NOT NULL ,
        date       Date NOT NULL ,
        descrition Varchar (255) NOT NULL ,
        validated  Bool NOT NULL ,
        imageLink  Varchar (255) NOT NULL ,
        like       TinyText NOT NULL ,
        vote       Int NOT NULL ,
        idUsers    Int NOT NULL
	,CONSTRAINT Events_PK PRIMARY KEY (id)

	,CONSTRAINT Events_User_FK FOREIGN KEY (idUsers) REFERENCES User(idUsers)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        idArticles Int  Auto_increment  NOT NULL ,
        name       Varchar (255) NOT NULL ,
        quantity   Int NOT NULL ,
        price      Int NOT NULL ,
        imageLink  Varchar (255) NOT NULL ,
        categorie  Varchar (255) NOT NULL
	,CONSTRAINT Article_PK PRIMARY KEY (idArticles)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Photos
#------------------------------------------------------------

CREATE TABLE Photos(
        idPhotos Int  Auto_increment  NOT NULL ,
        link     Varchar (255) NOT NULL ,
        id       Int NOT NULL
	,CONSTRAINT Photos_PK PRIMARY KEY (idPhotos)

	,CONSTRAINT Photos_Events_FK FOREIGN KEY (id) REFERENCES Events(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Comments
#------------------------------------------------------------

CREATE TABLE Comments(
        idcomments Int  Auto_increment  NOT NULL ,
        comments   Varchar (255) NOT NULL ,
        idPhotos   Int NOT NULL
	,CONSTRAINT Comments_PK PRIMARY KEY (idcomments)

	,CONSTRAINT Comments_Photos_FK FOREIGN KEY (idPhotos) REFERENCES Photos(idPhotos)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Buy
#------------------------------------------------------------

CREATE TABLE Buy(
        idUsers    Int NOT NULL ,
        idArticles Int NOT NULL
	,CONSTRAINT Buy_PK PRIMARY KEY (idUsers,idArticles)

	,CONSTRAINT Buy_User_FK FOREIGN KEY (idUsers) REFERENCES User(idUsers)
	,CONSTRAINT Buy_Article0_FK FOREIGN KEY (idArticles) REFERENCES Article(idArticles)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Subscribe
#------------------------------------------------------------

CREATE TABLE Subscribe(
        id      Int NOT NULL ,
        idUsers Int NOT NULL
	,CONSTRAINT Subscribe_PK PRIMARY KEY (id,idUsers)

	,CONSTRAINT Subscribe_Events_FK FOREIGN KEY (id) REFERENCES Events(id)
	,CONSTRAINT Subscribe_User0_FK FOREIGN KEY (idUsers) REFERENCES User(idUsers)
)ENGINE=InnoDB;

