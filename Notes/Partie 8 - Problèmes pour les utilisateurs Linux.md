# Problèmes pour les utilisateurs Linux

## Demande de paramètre FTP pour mettre à jour des extensions lors d’un développement de site WordPress en local (localhost)

Pour certains utilisateurs de Linux sous Ubuntu, WordPress demande de passer par FTP pour pouvoir faire les mises à jour. Ce n’est pas normal, mais il y a une solution ! Il s’agit d’un problème de droit d’écriture pour l’utilisateur sur le dossier WordPress.


![Problème FTP mise à jour localhost](interface_barre_menus_probleme_FTP.jpg)


Étape à suivre uniquement pour les utilisateurs qui rencontrent le problème FTP lors de la mise à jour des extensions WordPress

*	Récupérer le fichier test.php dans le repo github dédié au workshop (dossier installation/Étape 3 - Solution demande FTP install en local sous Ubuntu/test.php)

*	Placer ce fichier test.php à la racine du dossier courant de votre serveur Apache (HTML ou htdocs selon les cas)

*	Ouvrez un nouvel onglet dans votre navigateur à l’adresse localhost et cliquez sur test.php pour l’exécuter.

*	Contenu du fichier test.php à placer directement à la racine de votre dossier local (htdocs ou html) sur votre ordinateur :

```PHP
<?php
echo(exec("whoami"));
?>
```

*	Lancer le fichier dans votre navigateur. Un mot apparait à l’écran (il peut s’agir de daemon ou de www-data ou autre), copier ce mot (Ctrl+C)

*	Ensuite, aller vous positionner sur le dossier htdocs ou HTML de votre serveur Apache dans votre explorateur de fichiers

*	Faites un clic droit sur le dossier et dans le menu déroulant sélectionner « Open in terminal »

*	Vous devriez avoir dans votre console un chemin ressemblant à cela :

```
user@nb25:/var/www/html$
```

ou
```
user@nb25:/opt/lampp/htdocs$
```

*	Taper maintenant la commande suivante dans votre console (attention remplacer www-data par le mot obtenu avec le fichier test.php et remplacer wp_workshop par le nom du dossier WordPress sur lequel vous travailler)

```
sudo chown -R www-data : wp_workshop
```

Attention : Cette opération devra être répétée à chaque fois que vous créez un nouveau dossier WordPress pour éviter ce problème de demande de FTP lorsque vous développez en local et que vous tentez de faire des mises à jour d’extensions.
Retourner sur l’onglet où se trouve l’interface d’administration de votre WordPress. Important : RAFRAICHISSEZ LA PAGE. Aller dans « Extensions » et cliquer sur mise à jour pour les extensions qui le demande. En principe la mise à jour se déroule maintenant sans problèmes.
Voici la procédure détaillée dans un tuto : https://medrhamnia.wordpress.com/2011/06/18/pourquoi-wordpress-demande-les-parametres-de-connexion-ftp-en-local/

## Accorder les droits administrateur sur un dossier verrouillé (cadenas)

Pour les utilisateurs de Linux: si vous avez un souci pour créer un dossier ou un fichier dans un dossier présentant un petit cadenas sur son icone, c'est que vous n'avez pas les droits administrateur sur votre dossier. On va arranger cela.

1.	Aller dans le dossier de votre serveur où se trouve le dossier de votre site en local.

2.	Click droit "Open in terminal"

3.	Vous devriez avoir un chemin dans la console qui ressembler à ça

```
user@nb25:~/Desktop/html$
```

ou

```
user@nb25:/opt/lampp/htdocs$
```

4.	Taper la commande suivante

```
sudo chmod -R 775 wp_workshop
```

Si la commande précédente ne fonctionne pas ou ne déverrouille pas les fichiers et sous-dossiers du dossier verrouillé, et qu’en faisant un clic droit dans le dossier de votre site WordPress dans le dossier de votre serveur local, vous n’avez pas accès au menu contextuel qui vous permet de créer un nouveau dossier ou un nouveau fichier, essayer alors cette commande : 

```
sudo chmod -R 777 wp_workshop
```

Ces 2 commandes vous donnent les droits administrateur sur votre dossier WordPress. La commande 

5.	Vous pouvez à présent créer un dossier "twentyseventeen_child" dans wp-content --> themes
