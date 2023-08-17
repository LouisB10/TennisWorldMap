CREATE TABLE admin_profile(
        id             Int  Auto_increment  NOT NULL ,
        admin_login    Varchar (10) NOT NULL ,
        admin_password Varchar (60) NOT NULL
	,CONSTRAINT admin_profile_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


INSERT INTO `admin_profile` (`admin_id`, `admin_password`) VALUES
('louisb10', 'b6Ve4bC4U39Zaf4FZL6i5pVYhwjD7r4Gkhn734mPNrHfY4i66YbWD8bQ532C');


CREATE TABLE messages(
        id               Int  Auto_increment  NOT NULL ,
        admin_id         Int NOT NULL ,
        nom              Varchar (50) NOT NULL ,
        prenom           Varchar (50) NOT NULL ,
        email            Varchar (100) NOT NULL ,
        message          Varchar (500) NOT NULL ,
        date_envoi       TimeStamp NOT NULL ,
        type_message     Int NOT NULL ,
        id_admin_profile Int
	,CONSTRAINT messages_PK PRIMARY KEY (id)

	,CONSTRAINT messages_admin_profile_FK FOREIGN KEY (id_admin_profile) REFERENCES admin_profile(id)
)ENGINE=InnoDB;

INSERT INTO `messages` (`id`, `nom`, `prenom`, `email`, `message`, `date_envoi`, `type_message`) VALUES
(1, 'exemple', 'exemple', 'exemple@courrier.fr', 'message exemple', '2023-04-17 19:58:35', 1),
(2, 'exemple', 'exemple', 'adresse@exemple.fr', 'message archivé', '2023-04-12 14:18:35', 2),
(3 'exemple', 'exemlpe', 'exemple@mail.com', 'message supprimé', '2023-04-12 15:34:45', 3),
COMMIT;