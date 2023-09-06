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

![schema](https://github.com/GitCGuillaume/Inception/assets/34135668/0b30db45-e8a1-49ed-a0dc-cf75458b4a73)

Schéma des différents services obligatoires.

![wordpress](https://github.com/GitCGuillaume/Inception/assets/34135668/3c082f36-00ec-479b-bd95-3294747b985c)

Site Wordpress
![adminer](https://github.com/GitCGuillaume/Inception/assets/34135668/a2dc3a9b-3add-48af-930a-c537901185cf)
Adminer, une interface graphique pour gérer les bases de données
