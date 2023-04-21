CREATE TABLE messages (
  id int(11) NOT NULL AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL,
  email varchar(100)  NOT NULL,
  message varchar(500) NOT NULL,
  date_envoi timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  type_message int(11) NOT NULL,
  PRIMARY KEY (`id`)    
);


CREATE TABLE admin_profile (
  admin_id VARCHAR(10) NOT NULL,
  admin_password VARCHAR(10) NOT NULL     
);

INSERT INTO admin_profile (admin_id, admin_password)
VALUES ('louisb10', 'tennis10');   