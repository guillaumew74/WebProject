#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        idArticles  Int  Auto_increment  NOT NULL ,
        name        Varchar (255) NOT NULL ,
        quantity    Int NOT NULL ,
        price       Int NOT NULL ,
        imageLink   Varchar (255) NOT NULL ,
        categorie   Varchar (255) NOT NULL ,
        description Varchar (255) NOT NULL ,
        solde       Int NOT NULL
	,CONSTRAINT Article_PK PRIMARY KEY (idArticles)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Orders
#------------------------------------------------------------

CREATE TABLE Orders(
        idOrders Int  Auto_increment  NOT NULL ,
        date     Date NOT NULL
	,CONSTRAINT Orders_PK PRIMARY KEY (idOrders)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contain
#------------------------------------------------------------

CREATE TABLE contain(
        idOrders   Int NOT NULL ,
        idArticles Int NOT NULL
	,CONSTRAINT contain_PK PRIMARY KEY (idOrders,idArticles)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
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
        idPhotos      Int NOT NULL ,
        idOrders      Int
	,CONSTRAINT Users_PK PRIMARY KEY (idUsers)
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
        likes      Int NOT NULL ,
        vote       Int NOT NULL ,
        recurent   Bool NOT NULL ,
        payable    Int NOT NULL ,
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
        idEvent    Int NOT NULL
	,CONSTRAINT Comments_PK PRIMARY KEY (idcomments)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Subscribe
#------------------------------------------------------------

CREATE TABLE Subscribe(
        idEvent Int NOT NULL ,
        idUsers Int NOT NULL
	,CONSTRAINT Subscribe_PK PRIMARY KEY (idEvent,idUsers)
)ENGINE=InnoDB;




ALTER TABLE contain
	ADD CONSTRAINT contain_Orders0_FK
	FOREIGN KEY (idOrders)
	REFERENCES Orders(idOrders);

ALTER TABLE contain
	ADD CONSTRAINT contain_Article1_FK
	FOREIGN KEY (idArticles)
	REFERENCES Article(idArticles);

ALTER TABLE Users
	ADD CONSTRAINT Users_Comments0_FK
	FOREIGN KEY (idcomments)
	REFERENCES Comments(idcomments);

ALTER TABLE Users
	ADD CONSTRAINT Users_Photos1_FK
	FOREIGN KEY (idPhotos)
	REFERENCES Photos(idPhotos);

ALTER TABLE Users
	ADD CONSTRAINT Users_Orders2_FK
	FOREIGN KEY (idOrders)
	REFERENCES Orders(idOrders);

ALTER TABLE Events
	ADD CONSTRAINT Events_Users0_FK
	FOREIGN KEY (idUsers)
	REFERENCES Users(idUsers);

ALTER TABLE Photos
	ADD CONSTRAINT Photos_Events0_FK
	FOREIGN KEY (idEvent)
	REFERENCES Events(idEvent);

ALTER TABLE Comments
	ADD CONSTRAINT Comments_Events0_FK
	FOREIGN KEY (idEvent)




	=======================================================================
	   Désolé, il faut activer cette version pour voir la suite du script ! 
	=======================================================================
