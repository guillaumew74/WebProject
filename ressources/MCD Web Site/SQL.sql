#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


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
        updapted_at   TimeStamp NOT NULL ,
        idcomments    Int NOT NULL ,
        idPhotos      Int NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (idUsers)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Events
#------------------------------------------------------------

CREATE TABLE Events(
        idEvent    Int  Auto_increment  NOT NULL ,
        owner      Varchar (255) NOT NULL ,
        date       Date NOT NULL ,
        descrition Varchar (255) NOT NULL ,
        validated  Bool NOT NULL ,
        imageLink  Varchar (255) NOT NULL ,
        like       TinyText NOT NULL ,
        vote       Int NOT NULL ,
        idUsers    Int NOT NULL
	,CONSTRAINT Events_PK PRIMARY KEY (idEvent)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Photos
#------------------------------------------------------------

CREATE TABLE Photos(
        idPhotos Int  Auto_increment  NOT NULL ,
        link     Varchar (255) NOT NULL ,
        idEvent  Int NOT NULL
	,CONSTRAINT Photos_PK PRIMARY KEY (idPhotos)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Comments
#------------------------------------------------------------

CREATE TABLE Comments(
        idcomments Int  Auto_increment  NOT NULL ,
        comments   Varchar (255) NOT NULL ,
        idPhotos   Int NOT NULL
	,CONSTRAINT Comments_PK PRIMARY KEY (idcomments)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Buy
#------------------------------------------------------------

CREATE TABLE Buy(
        idUsers    Int NOT NULL ,
        idArticles Int NOT NULL
	,CONSTRAINT Buy_PK PRIMARY KEY (idUsers,idArticles)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Subscribe
#------------------------------------------------------------

CREATE TABLE Subscribe(
        idEvent Int NOT NULL ,
        idUsers Int NOT NULL
	,CONSTRAINT Subscribe_PK PRIMARY KEY (idEvent,idUsers)
)ENGINE=InnoDB;




ALTER TABLE User
	ADD CONSTRAINT User_Comments0_FK
	FOREIGN KEY (idcomments)
	REFERENCES Comments(idcomments);

ALTER TABLE User
	ADD CONSTRAINT User_Photos1_FK
	FOREIGN KEY (idPhotos)
	REFERENCES Photos(idPhotos);

ALTER TABLE Events
	ADD CONSTRAINT Events_User0_FK
	FOREIGN KEY (idUsers)
	REFERENCES User(idUsers);

ALTER TABLE Photos
	ADD CONSTRAINT Photos_Events0_FK
	FOREIGN KEY (idEvent)
	REFERENCES Events(idEvent);

ALTER TABLE Comments
	ADD CONSTRAINT Comments_Photos0_FK
	FOREIGN KEY (idPhotos)
	REFERENCES Photos(idPhotos);

ALTER TABLE Buy
	ADD CONSTRAINT Buy_User0_FK
	FOREIGN KEY (idUsers)
	REFERENCES User(idUsers);

ALTER TABLE Buy
	ADD CONSTRAINT Buy_Article1_FK
	FOREIGN KEY (idArticles)
	REFERENCES Article(idArticles);

ALTER TABLE Subscribe
	ADD CONSTRAINT Subscribe_Events0_FK
	FOREIGN KEY (idEvent)
	REFERENCES Events(idEvent);

ALTER TABLE Subscribe
	ADD CONSTRAINT Subscribe_User1_FK
	FOREIGN KEY (idUsers)
	REFERENCES User(idUsers);
