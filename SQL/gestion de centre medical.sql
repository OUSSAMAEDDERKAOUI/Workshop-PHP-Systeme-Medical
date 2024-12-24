create table utilisateurs (
id_utilisateurs int auto_increment primry key , 
nom varchar(50) not null,
prenom varchar(50) not null,  
type_utilisateur enum ('patient', 'medecin')
)

CREATE TABLE    rendez_vous 
(id_rdv int  AUTO_INCREMENT PRIMARY KEY ,
 id_patient int(50)  ,
 id_medecin int(50)  ,
 date_rdv DATE NOT NULL ,
 status ENUM ('confirmé','non confirmé'),
FOREIGN KEY (id_patient) REFERENCES utilisateurs(id_utilisateur),
 FOREIGN KEY (id_medecin) REFERENCES utilisateurs(id_utilisateur)
);
 
 
 CREATE TABLE    factures 
(id_facture int  AUTO_INCREMENT PRIMARY KEY ,
 id_rdv int(50)  ,
 montant int(50)  ,
 date_facture DATE NOT NULL ,
 FOREIGN KEY  (id_rdv) REFERENCES rendez_vous (id_rdv)
) 


INSERT INTO utilisateurs (nom , prenom , type_utilisateur)
 values('oussama', 'edderkaoui', 'medecin'),
 ('mohamed', 'ali', 'medecin' ),
 ('brahim', 'diaz', 'medecin'), 
('ahmed' ,'talbi', 'patient'), 
('achref', 'hakimi', 'patient' ), 
('badr', 'bannoun', 'patient'), 
('hakim' ,'zeyach' ,'patient'),
 ('soufiane', 'amrabte', 'patient' );



INSERT INTO rendez_vous (id_medecin,id_patient,date_rdv,status)
VALUES (1,1,'2025-01-21','confirmé'),
(1,2,'2025-01-21','confirmé'),
(1,3,'2025-02-21','confirmé'),
(2,4,'2025-03-11','non confirmé'),
(2,5,'2025-03-01','confirmé'),
(3,6,'2025-04-10','non confirmé'),
(3,7,'2025-01-01','non confirmé'),
(3,8,'2025-11-10','confirmé');



EXERCICE 3 :

 1) 
SELECT * FROM rendez_vous 
WHERE id_patient=2;
2)
select utilisateurs.nom,utilisateurs.prenom,rendez_vous.date_rdv,factures.montant, rendez_vous.status
from rendez_vous 
JOIN utilisateurs on utilisateurs.id_utilisateur=rendez_vous.id_patient
JOIN factures on rendez_vous.id_rdv=factures.id_rdv
WHERE rendez_vous.status='confirmé'AND utilisateurs.type_utilisateur='patient';
3)

SELECT *
FROM rendez_vous join utilisateurs ON rendez_vous.id_patient=utilisateurs.id_utilisateur ;


SELECT utilisateurs.nom,utilisateurs.prenom, utilisateurs.type_utilisateur ,rendez_vous.date_rdv, rendez_vous.status
FROM rendez_vous join utilisateurs ON rendez_vous.id_patient=utilisateurs.id_utilisateur ;

EXERCICE 4 :

UPDATE rendez_vous 
SET status ='non confirmé' where id_patient=8;

EXERCICE 5 :

DELETE FROM rendez_vous 
where id_patient=8;

exercice 6 :
1)
SELECT utilisateurs.nom,utilisateurs.prenom , COUNT(rendez_vous.id_rdv) as nbr_rdv

FROM rendez_vous JOIN utilisateurs on rendez_vous.id_patient=utilisateurs.id_utilisateur
GROUP BY utilisateurs.nom ;
2)

SELECT utilisateurs.nom,utilisateurs.prenom , COUNT(rendez_vous.id_rdv) as nbr_rdv , SUM(factures.montant) as sum_montant

FROM rendez_vous JOIN utilisateurs on rendez_vous.id_patient=utilisateurs.id_utilisateur
JOIN factures on rendez_vous.id_rdv=factures.id_rdv
GROUP BY utilisateurs.nom ;
3)

SELECT  AVG(factures.montant) as AVG_montant

FROM rendez_vous JOIN utilisateurs on rendez_vous.id_patient=utilisateurs.id_utilisateur
JOIN factures on rendez_vous.id_rdv=factures.id_rdv
WHERE rendez_vous.status='confirmé';

4)

SELECT rendez_vous.date_rdv from rendez_vous 
GROUP BY rendez_vous.date_rdv 
ORDER BY rendez_vous.date_rdv
LIMIT 1;


SELECT rendez_vous.date_rdv from rendez_vous 
GROUP BY rendez_vous.date_rdv 
ORDER BY rendez_vous.date_rdv DESC
LIMIT 1;



SELECT rendez_vous.date_rdv from rendez_vous 
WHERE rendez_vous.date_rdv <now()
GROUP BY rendez_vous.date_rdv 
ORDER BY rendez_vous.date_rdv 
LIMIT 1;

SELECT rendez_vous.date_rdv from rendez_vous 
WHERE rendez_vous.date_rdv >now()
GROUP BY rendez_vous.date_rdv 
ORDER BY rendez_vous.date_rdv DESC
LIMIT 1;

5)

SELECT utilisateurs.nom, utilisateurs.prenom, COUNT(rendez_vous.id_rdv) AS nbr_rdv_confirmés
FROM utilisateurs
JOIN rendez_vous ON utilisateurs.id_utilisateur = rendez_vous.id_medecin
WHERE rendez_vous.status = 'confirmé'
GROUP BY utilisateurs.nom, utilisateurs.prenom
ORDER BY nbr_rdv_confirmés DESC;





SELECT CITY, LENGTH(CITY) AS length
FROM STATION
WHERE LENGTH(CITY) = (
    SELECT MIN(LENGTH(CITY))
    FROM STATION
)
ORDER BY CITY
LIMIT 1;


SELECT CITY, LENGTH(CITY) AS length
FROM STATION
WHERE LENGTH(CITY) = (
    SELECT MAX(LENGTH(CITY))
    FROM STATION
)
ORDER BY CITY
LIMIT 1;



