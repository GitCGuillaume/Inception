# Inception
Projet qui consiste à lancer différents services depuis des containers Docker.

La liste des services sont:
* Nginx en HTTPS
* Wordpress
* Une base de données MariaDb(MySql)

En bonus:
* Redis-cache pour Wordpress
* Un server FTP (protocole de transfert de fichiers)
* Un petit site qui tourne en python
* Une interface graphique pour gérer les bases de données
* Rsyslog (Outil de transfert de journaux d'évènements pour système Unix(Linux/Mac OS))
  
Les données doivent être stockées en persistance au redémarrage des services dans des volumes.

![schema](https://github.com/GitCGuillaume/Inception/assets/34135668/9fb2d0c1-20d2-42b2-9aa9-bfa826535764)  
Schéma des différents services obligatoires.

![wordpress](https://github.com/GitCGuillaume/Inception/assets/34135668/cc7755f4-9d92-4292-b3b7-899829dd93a7)  
Site Wordpress, outil de création de site internet

![adminer](https://github.com/GitCGuillaume/Inception/assets/34135668/226966b2-cb11-46f7-933c-cf3d44f53ab7)  
Adminer, une interface graphique pour gérer les bases de données
