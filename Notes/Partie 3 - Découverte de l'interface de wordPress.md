# Partie 3 : Découverte de l'interface de WordPress

## Note préliminaire pour les utilisateurs de Mac

Lorsque dans la suite de ce cours je fais référence à la touche raccourci clavier Ctrl, celle-ci doit être remplacée par la touche "commande" pour les utilisateurs de Mac. Exemple: Ctrt + C

Afin d'avoir un affichage optimal et de pouvoir switché facilement entre l'interface d'administration de votre site et l'aperçu de celui-ci. Je vous conseille d'ouvrir 2 onglets dans votre navigateur. Le premier avec l'interface de WordPress et le second en cliquant dans la barre d'outils (en haut) sur "Aller sur site" en maintenant la touche Ctrl enfoncée pour l'ouvrir dans un autre onglet.

## L'interface de WP - Les différentes parties de la console d'administration de WordPress (Tableau de bord)

Comment accéder à l'interface de WordPress (console d'administration ou Dashboard). Entrez l'adresse de votre site dans votre navigateur suivie de /wp-admin (exemple:votre-nom-de-domaine.com/wp-admin). Si vous travaillez en local et que votre site n'est pas encore en ligne (exemple:http://localhost/nom_de_votre_site/wp-admin/). Dans notre cas nous allons donc taper l'url:http://localhost/wp_workshop/wp-admin/ pour accéder à l'interface d'administration.

![Interface administration WordPress](Intro_WP_interface WordPress.jpg)

Voici l'interface d'administration de votre site WordPress. C'est à partir d'ici que vous allez pouvoir personnaliser votre site, y ajouter des pages, des articles et paramétrer les options, installer de nouveaux plug-ins ...

L'interface d'administration de votre site WordPress est conçue de manière responsive,. Son contenu s'adaptera en fonction de la largeur de votre écran ou de la fenêtre du navigateur qui affiche la page d'interface. Vous pourrez donc gérer votre site web avec votre ordinateur, mais également avec votre tablette ou votre téléphone portable.


L'interface d'administration de WordPress est composée de 3 zones principales:

1. La barre des outils dans la partie supérieure
2. La barre des menus sur la gauche
3. La partie centrale de gestion de l'administration

Quelle que soit la partie de l'administration dans laquelle vous vous trouverez (choix avec barre des menus), vous aurez toujours en haut à droite juste sous la barre des outils, deux onglets:

* **Options de l'écran** qui vous permet d'afficher ou de masquer les modules présents dans la zone centrale de l'administration.

* **Aide** qui vous offre un aide contextuelle en fonction de la partie de l'administration dans laquelle vous vous trouvez.

## La barre d'Outils

La barre d'outils se trouve dans le haut de la page. Elle est présente par défaut dans l'interface d'administration, mais également dans la prévisualisation de votre site (ce qui peut être pratique pour un ajout rapide, mais gênant pour avoir un aperçu réel du site publié). Pour masquer la barre d'outils dans la prévisualisation du site, Allez dans la barre de menus - Utilisateurs - Votre profil et décoché la case"Afficher la barre d’outils lorsque vous visitez le site". N'oubliez pas d'enregister vos modifications en cliquant en bas le bouton "Mettre à jour le profil". Actualiser la page d'aperçu de votre site, la barre d'outils à disparu.

La barre d'outils présente différentes parties :

### Le menu WordPress

![Barre d'outils - Menu WordPress](images/interface_barre_outils_menu_wordpress.jpg)

#### À propos de WordPress

Affiche un écran reprenant toutes les nouveautés de la version de WordPress installée. (Nouveautés)- Les personnes ayant contribués à la création de cette version de WordPress (Crédits) - Des informations concernant la nature open source et licence GPL de WordPress (Liberté) - une indication vous informant de l'envoi de données à WordPress.org concernant la version et les plugins utilisés sur votre site à visée essentiellement statistique (Vie privée)

#### Site de WordPress-FR

Lien vers le site : https://wpfr.net/ qui reprend un grand nombre d'informations sur la communauté WordPress francophone. Vous pourrez trouvez ici des informations très intéressantes si vous désirez apprendre WordPress ou obtenir une aide ou un support vi a différents Forums dédiés (WordPress, WooCommerce, thèmes, extensions, multisite ...). Vous pourrez également y trouver de nombreuses actualités sur WordPress et sur les évènements à venir (ex: WordCamp). Vous pourrez également adhérer à l'association WPFR où vous serez invité à prendre part à de nombreux projets et pourrez bénéficier d'offres spéciales auprès des partenaires de l'association.Vous pouvez aussi vous abonner à la newsletter.

#### Documentation

Accès au Codex de WordPress (en anglais : https://codex.wordpress.org/) .Ici est rassemblée toute la documentation de WordPress. Une version française est également disponible ici (https://codex.wordpress.org/fr:Accueil). Cette version est partiellement traduite. Vous pouvez contribuer à sa traduction (https://codex.wordpress.org/Codex:Contributing)

#### Forums d'entraide

Vous redirige vers les forums d'entraide du site de la communauté francophone de WordPress (https://wpfr.net/support/)

**Remarque**

Ce lien renvoie vers la section "Support" du site américain https://wordpress.org/



### Le menu du site

![Barre d'outils - Menu site](images/interface_barre_outils_ menu_site.jpg)

Le lien reprend le nom du site défini à l'installation. L'unique élément de ce menu s'appelle toujours "Aller sur le site". Il vous permet d'afficher votre site tel qu'il sera vu par vos visiteurs (basculer de l'administration vers la partie visible du site).
Petite astuce. Cliquer sur le lien "Aller sur le site" en appuyant en même temps sur la touche Ctrl de votre clavier. Cela permet d'ouvrir le visuel de votres site dans un nouvel onglet et de garder le tableau de bord ouvert dans un autre onglet. C'est plus pratique pour voir les modifications.

### Menu mises à jour

![Barre d'outils - Mise à jour](images/interface_barre_outils_mise_a_jour.jpg)

Cette partie est importante. Elle vous indique si des mises à jour sont disponibles pour WordPress, mais également pour les extensions que vous avez installées sur votre site (plugins et thèmes).

Lorsque vous cliquez sur l'icône, celle-ci affiche dans la zone principale de l'interface d'administration les mises à jour disponibles et vous permet de choisir ou non de les installer. Je vous conseille vivement d'installer toutes les mises à jour, car celles-ci contribuent énormément à la sécurité de votre site en corrigeant par exemple des failles de sécurité ou des bugs.

![Barre d'outils - Mise à jour 2](images/interface_barre_outils_mise_a_jour2.jpg)

Les mises à jour disponibles s'affichent également sous la forme d'un rond orange avec le nombre de mises à jour disponible dans la barre latérale. En cliquant sur "Mises à jour" la partie principale de l'interface affiche la même page que lorsque vous cliquez sur l'icône de mise à jour dans la barre d'outils en haut. Par contre lorsque vous cliquez sur Extensions dans la barre latérale qui mentionne qu'une mise à jour est disponible pour une ou plusieurs extensions, cela affiche dans la zone principale la liste de toutes les extensions utilisée et vous indique qu'une nouvelle version est disponible avec une petite zone de notification orange. Vous pouvez également effectuer la mise à jour à cet endroit en cliquant sur "Mettre à jour maintenant".

![Barre d'outils - Mise à jour 2](images/interface_barre_outils_mise_a_jour3.jpg)


![Barre d'outils - Mise à jour 2](images/interface_barre_outils_mise_a_jour4.jpg)

**Remarque concernant les mises à jour:**

Certaines mises à jour mettent un certain temps pour s'effectuer. Il faut savoir que durant cette période, votre site apparaitra comme indisponible pour la consultation par vos utilisateurs. Je vous conseille donc dans la mesure du possible d'effectuer ces mises à jour à une période de faibles affluences sur votre site (par exemple tôt le matin ou tard le soir)

### Menu des commentaires

![Barre d'outils - Commentaires](images/interface_barre_outils_commentaires.jpg)

Le menu des commentaires indique si des commentaires sont en attente de modération. Au départ WordPress a été conçu comme un CMS orienté blog (ce qui explique le système de page, article et commentaires). Un commentaire en attente de modération est un commentaire qui est en attente de savoir ce qu'on va faire de lui. (désapprouver, répondre, modifier, placer dans la zone indésirable ou placer dans la corbeille). Nous verrons cela plus en détails plus tard.

### Le menu des nouveaux contenus (+ Créer)

![Barre d'outils - Nouveaux contenus](images/interface_barre_outils_nouveaux_contenus.jpg)

Ce menu permet d'accéder rapidement à la création de nouveaux contenus (Article, Fichier media, Page, Utilistateur). Nous verrons plus en détail l'ajout de chacun de ces contenus lors de la présentation de la barre latérale qui reprend un lien "Pages", "Articles", "Médias" et "Utilisateurs". Il s'agit juste ici d'une sorte de raccourci qui mène exactement au même endroit dans l'interface d'administration que lorsque vous cliquez sur les liens de la barre latérale.

### Le menu de connexion (tout à fait à droite)

![Barre d'outils - menu connexion](images/interface_barre_outils_menu_connexion.jpg)

WordPress vous salue avec votre identifiant de connexion (admin). Cette partie de la barre d'outils permet de modifier votre profil.

#### admin et Modifier mon profil

Ces deux liens affiche votre Profil dans la partie principale de l'interface et vous permettent de modifier différentes options.

![Barre d'outils - modifier profil](images/interface_barre_outils_modifier_profil.jpg)

Vous pouvez dans cette section laisser la majorité des réglages par défaut, cependant certains d'entre eux doivent être modifiés. Vous pourrez également remplir par après les informations personnelles comme un lien vers votre site web personnel (porte-folio ou site d'entreprise), renseignements biographiques, illustration du profil, Nom, Prénom, etc.

Il est conseillé de changer l'identifiant qui jusqu'à présent était admin. Pour réaliser cela malgré la notification indiquant que les identifiants ne peuvent pas être modifiés, je vous renvoie à ce tutoriel (https://korben.info/securiser-wordpress-changer-nom-compte-admin.html)
Attention en changeant votre identifiant, il faut savoir que c'est à présent ce nouvel identifiant que vous devrez utiliser pour vous connecter à l'interface de WordPress donc noter-le dans un endroit sécurisé avec votre mot de passe de connexion.

Il est également conseillé d'indiquer un pseudonyme. Celui-ci sera utilisé pour signer les articles que vous allez rédiger et pourra donc être visible par les utilisateurs de votre site si vous décidez d'afficher l'auteur des articles. Une fois un pseudonyme choisit, vous verrez que celui-ci viendra s'ajouter dans la liste déroulante des Noms à afficher publiquement. Sélectionner maintenant votre pseudo au lieu d'admin pour ne pas faciliter la tâche à d'éventuels pirates qui si vous n'avez pas indiquer de pseudo, auront déjà dès le départ le nom de votre login, il ne leur restera plus qu'à tenter de trouver votre mot de passe. Un pseudo, nom affiché publiquement différent de votre identifiant est un barrage de sécurité en plus.

![Barre d'outils - menu connexion](images/interface_barre_outils_pseudo_nom_public.jpg)

C'est également à cet endroit que vous pourrez "générer un nouveau mot de passe" si vous pensez que votre mot de passe a été compromis et vous "déconnecter partout ailleurs"  ou si vous avez oublié de vous déconnecter d'un ordinateur public.

N'oubliez pas de cliquer sur le bouton "Mettre à jour le profil" pour que les modifications soient prises en compte.

#### Se déconnecter

Le lien "Se déconnecter" vous permet comme son nom l'indique de vous déconnecter  de l'interface d'administration de WordPress. Une fois que vous avez terminé de travailler dans votre site, n'oubliez pas de quitter l'administration en utilisant "Se déconnecter". Éviter de fermer la fenêtre ou l'onglet par la croix de fermeture ou de quitter votre navigateur directement, car la connexion ne serait alors pas effectuée correctement et permettrait une reconnexion sans indiquer le login et mot de passe. Cela peut vous sembler pratique, mais cela signifie aussi que toute personne qui utiliserait votre ordinateur ou en cas de vol, aurait accès à l'administration de votre site.


## La barre des menus (barre latérale gauche)

La barre des menus permet de gérer la totalité de votre site web.

Cette barre de menus est divisée en 3 parties:

* Tableau de bord (tableau de bord)
* Gestion des contenus (Articles, Médias, Pages, Commentaires)
* Gestion du site (Apparence, Extensions, Utilisateurs, Outils, Réglages)

Pour gagner de la place sur les petits écrans, vous pouvez réduire cette barre de menus à une simple barre d'Icones en cliquant sur "Réduire le menu". Cette réduction se fait automatiquement si vous réduisez la taille de la fenêtre (responsive,). Pour retrouver la barre de menu sous sa forme traditionnelle, cliquez sur l'icône avec la flèche toute en bas de la barre de menu.

Les différentes parties du menu s'ouvrent au simple survol de celles-ci pour révéler les sous-menus. Cliquer sur le menu pour laisser afficher le sous-menu.

Vous ne pouvez disposer que d'un menu ouvert à la fois. Lorsque vous cliquez sur un élément du sous-menu celui-ci apparait en blanc et la totalité du sous-menu se place sous l'élément de menu dans la barre latérale.

![Barre menus - Affichage sous-menus](images/interface_barre_menus_affichage_sous_menu.jpg)

Chaque élément de menu permet d'accéder à des fonctionnalités qui lui sont propres. Ces fonctionnalités peuvent être présentées sous la forme de zones encadrées appelées modules. Chaque module peut être masqué ou affiché en cliquant sur la petite flèche qui se trouve dans son coin supérieur droit. Vous pouvez également les déplacer si vous souhaitez réorganiser à votre façon par exemple la page Acccueil du Tableau de bord. Il vous suffit de cliquer/ glisser/déposer le module à l'endroit où vous souhaiter les déplacer. Éviter de le faire dans l'immédiat afin d'avoir une interface identique à celle utilisée pour les exemples pour mieux vous y retrouver. Vous aurez tout le temps de personnaliser par après.

Exemple: module Format de l'élément Ajouter du menu articles

![Barre menus - Affichage sous-menus](images/interface_barre_menus_modules.jpg)

Pratiquement tous les écrans de l'administration peuvent être personnalisés. Vous pouvez décider d'afficher ou non tel ou tel module et paramétrer les affichages de certains tableaux de données. Ce paramétrage se fait avec le bouton "Options de l'écran" situé juste sous la barre des outils (en haut à droite)

![Barre menus - Option de l'écran](images/interface_barre_menus_options_ecran.jpg)

Selon que vous soyez sur le tableau de bord, les articles, les pages ... vous aurez des options différentes présentes dans les options d'écran.

![Barre menus - Option de l'écran2](images/interface_barre_menus_options_ecran2.jpg)

### Tableau de bord

#### Accueil

Vous ramène à la page d'accueil de l'interface d'administration de WordPress. Cette page affiche un résumé de tout ce qui se passe sur votre site dans la zone principale.

Vous avez le module de bienvenue, qui offre un accès rapide et très pratique à la majorité des actions courantes que l'on effectue lors de la création d'un site WordPress.

Il y a bien entendu l'énorme bouton "Personnaliser votre site" qui vous amène directement aux options de personnalisation du thème installé par défaut sur WordPress (actuellement Twenty Seventeen). Nous y reviendrons plus tard.

Ainsi que des raccourcis vers les actions suivantes:

* Écrivez votre premier article (lien vers la section articles)

* Ajouter une page "À propos" (lien vers la section pages)

* Afficher votre site (accès direct à l'adresse de votre site - également via la barre d'outils)

* Gérer vos widgets ou vos menus (lien vers la section apparence/widgets et apparence/Menus)

* Activez ou désactivez les commentaires (lien vers la section commentaires)

* Plus d'informations pour bien démarrer (lien vers le codex (documentation) de WordPress - premiers pas)

Chacun de ses raccourcis mène à une page qu'il vous est possible d'atteindre grâce à la barre d'outils ou à la barre des menus. Vous pouvez décider de masquer ce module en cliquant sur la petite croix "fermer" en haut à droite du module. Il vous sera possible d'afficher à nouveau ce module avec les "Options de l'écran" en cochant la case "Bienvenue".


#### Mise à jour

Vous ramène à la page des mises à jour disponible pour votre version de WordPress ainsi que pour les extensions que vous avez installées comme lorsque vous cliquer sur l'icône mise à jour dans la barre d'outils (en haut).

WordPress, ainsi que les plugins sont très régulièrement mis à jour. Il est absolument primordial pour des raisons de sécurité de réaliser les mises à jour régulièrement tant de WordPress que des plugins et de votre thème. De plus les mises à jour vous permettent généralement de bénéficier non seulement d'une sécurité accrue et de la correction de certains bugs, mais également de nouvelles fonctionnalités.

WordPress nous indique qu'une mise à jour est disponible pour l'extension Akismet Anti-Spam (qui est un plugin très pratique installé par défaut avec WordPress). Je vous conseille de le garder pour protéger votre site du spam. Il faudra cependant penser à activer cette extension. Nous verrons comment faire lorsque nous verrons la partie extensions de la barre de menus.

![Barre menus - Tableau bord - mise à jour](images/interface_barre_menus_tableaubord_miseajour.jpg)

Sélectionner les Extensions que vous désirez mettre à jour et cliquer sur le bouton "Mettre à jour les extensions"

Pour certains utilisateurs de Linux sous Ubuntu, WordPress demande de passer par FTP pour pouvoir faire les mises à jour. Ce n'est pas normal, mais il y a une solution ! Il s'agit d'un problème de droit d'écriture pour l'utilisateur sur le dossier WordPress.

![Barre menus - problème_FTP_Ubuntu](images/interface_barre_menus_probleme_FTP.jpg)

#### Étape à suivre uniquement pour les utilisateurs qui rencontrent le problème FTP lors de la mise à jour des extensions WordPress

* Récupérer le fichier test.php dans le repo github dédié au workshop (dossier installation/Étape 3 - Solution demande FTP install en local sous Ubuntu/test.php)

* Placer ce fichier test.php à la racine du dossier courant de votre serveur Apache (HTML ou htdocs selon les cas)

* Ouvrez un nouvel onglet dans votre navigateur à l'adresse localhost et cliquez sur test.php pour l'exécuter.

* Un mot apparait à l'écran (il peut s'agir de daemon ou de www-data ou autre), copier ce mot (Ctrl+C)

* Ensuite, aller vous positionner sur le dossier htdocs ou HTML de votre serveur Apache dans votre explorateur de fichiers

* Faite un click droit sur le dossier et dans le menu déroulant selectionner Open in terminal"

* Vous devriez avoir dans votre console un chemin ressemblant à cela :

```
user@nb25:/var/www/html$
```

ou

````
user@nb25:/opt/lampp/htdocs$
````
* Taper maintenant la commande suivante dans votre console (attention remplacer www-data par le mot obtenu avec le fichier test.php et remplacer wp_workshop par le nom du dossier WordPress sur lequel vous travailler)

````
sudo chown -R www-data: wp_workshop
````

Attention : Cette opération devra être répétée à chaque fois que vous créez un nouveau dossier WordPress pour éviter ce problème de demande de FTP lorsque vous développez en local et que vous tentez de faire des mises à jour d'extensions.

Retourner sur l'onglet où se trouve l'interface d'administration de votre WordPress.Important: RAFRAICHISSEZ LA PAGE. Aller dans "Extensions" et cliquer sur mise à jour pour les extensions qui le demande. En principe la mise à jour se déroule maintenant sans problèmes.

Voici la procédure détaillée dans un tuto : https://medrhamnia.wordpress.com/2011/06/18/pourquoi-wordpress-demande-les-parametres-de-connexion-ftp-en-local/

### Différences entre pages et Articles

Les pages sont comme des articles, en cela qu’elles ont un titre, un contenu et des métadonnées associées ; mais elles diffèrent en cela qu’elles ne font pas partie du flux chronologique du blog - un peu comme des articles permanents.

Les pages servent à gérer le contenu informatif de votre site (informations générales, page de contact, présentation de projet, présentation statique de la structure de votre entreprise...). C'est ce que l'on appelle l'actualité froide dans le monde de la presse.

Les articles permettent de gérer le contenu régulier de votre site tel que les actualités courantes, quotidiennes ou hebdomadaires selon la fréquence de publication de votre site. C'est ce que l'on nomme dans la presse "l'Actualité chaude" dans le monde de la presse.

Les pages ne sont pas catégorisées et ne reçoivent pas d’étiquettes, mais peuvent disposer d’une hiérarchie. En effet, vous pouvez imbriquer des pages sous d’autres pages, faisant de ces dernières les « parentes » des premières, créant ainsi un groupement de pages.


### Articles

![Articles](images/interface_barre_menus_articles.png)

Dans cette section vous pourrez visionner, ajouter, supprimer, modifier les articles (opérations CRUD) de votre site.

Dans WordPress il existe deux types de contenus rédactionnels: les articles et les pages.

Les articles permettent de gérer le contenu régulier de votre site tel que les actualités courantes, quotidiennes ou hebdomadaires selon la fréquence de publication de votre site. C'est ce que l'on nomme dans la presse "l'Actualité chaude".

Dans de nombreux thèmes, les articles seront affichés dans la partie centrale de votre site, les uns au-dessus des autres de manière chronologique. Le dernier article, le plus récent sera affiché en premier en haut de la zone d'affichage des articles, suivront ensuite les articles de plus en plus anciens.

Par défaut, à titre d'exemple un article est créé lors de l'installation de WordPress, il porte de titre "Bonjour tout le monde!" et vous souhaite la bienvenue. Grâce à sa présence vous pouvez immédiatement voir de quelle manière vont s'afficher les articles en fonction du thème que vous avez choisi. On peut voir la date de publication de l'article ainsi que son auteur et éventuellement le nombre de commentaires portant sur celui-ci selon le thème et le paramétrage que vous aurez effectué.

#### Tous les articles

![Articles - Tous les articles](images/interface_barre_menus_articles_tous_les_articles.png)

Tous les articles vous affiche la liste de tous les articles avec une serie d'options (que vous pouvez choisir d'afficher ou de masquer avec l'onglet "Option de l'écran"). Vous pouvez ainsi voir son auteur, sa catégorie, ses étiquettes, ses commentaires, et sa date de publication.

Lors du survol de l'un des articles, vous pourrez voir apparaitre plusieurs liens vous permettant de nouvelles actions (Modifier, Modification rapide, Corbeille, Afficher)


![Articles - survol - options](images/interface_barre_menus_articles_survol.png)


![Articles - modifier](images/interface_barre_menus_articles_modifier.png)


![Articles - modification rapide](interface_barre_menus_articles_modification_rapide.png)

Sachez que si vous placez un article dans la corbeille, il n'aura pas encore été définitivement supprimé. Il faudra encore vous rendre dans le lien corbeille et soit survoler l'article pour voir apparaitre de nouvelles options (supprimer définitivement, rétablir) soit sélectionner dans le menu déroulant "Actions groupées" l'option "Supprimer définitivement" ou cliquer sur le bouton "Vider la corbeille". Tans que vous n'avez pas fait cela il vous est toujours possible de sélectionner l'article dans la corbeille et de sélectionner "Rétablir" dans le menu déroulant pour qu'il soit à nouveau présent sur votre site. N'oubliez pas de cliquer sur le bouton appliquer pour que les modifications soient effectuées.

Pour visualiser à nouveau les articles qui ne sont pas dans la corbeille cliquez sur le lien "Tous" qui vous indique entre parenthèses le nombre d'articles de votre site.

Dans l'écran principal lorsque l'on est dans Articles -  tous les articles, on peut filtrer les résultats selon la date de parution, la catégorie et faire une recherche par nom dans le champ de recherche. On peut trier par ordre alphabétique par titre et par ordre chronologique par date.

Au-dessus on peut également choisir d'afficher les articles selon leur état (Publiés, Brouillon, En attente de relecture, Corbeille)

#### Ajouter

![Articles - Ajouter](images/interface_barre_menus_articles_ajouter.png)

Dans la page ajouter un article, on retrouve les champs principaux, Titre et contenu, mais on y trouve également plusieurs modules (Publier, Format, Categories, Etiquettes, Image mise en avant). On peut également accéder à cette page via la barre d'outils (en haut) et cliquer sur "Créer" puis sur "Article", cela revient exactement à la même chose.

Une fois que l'on a introduit le titre de l'article, juste en dessous apparait un permalien (c'est l'adresse URL pour l'affichage de cet article sur une page qui lui est dédié et qui contient souvent quelques informations complémentaires (étiquettes, commentaires, etc.) par rapport à l'affichage de la page classique qui affiche tous les articles). On y accède en cliquant sur le titre de l'article. Pour optimiser le référencement et rendre plus propre les URL, il est possible de modifier cette URL en enlevant par exemple les mots liens qui n'apporte aucune valeur sémantique à l'URL, la rendre plus complexe et nuise au référencement. (SEO). Une bonne gestion des permaliens (URL) de vos articles permet une optimisation de l'indexation des pages de votre site et un meilleur référencement.

![Modification permalien](images/interface_barre_menus_articles_modification_permalien.png)

![Modification permalien](images/interface_barre_menus_articles_modification_permalien2.png)

Ne pas oubliez de cliquer sur le bouton "Publier" ou "Mettre à jour" pour voir l'URL modifiée dans l'aperçu du site.


**Le module Publier**

![Articles - module publier](images/interface_barre_menus_articles_module_publier.png)

* On peut enregister en tant que brouillon pour ne pas publier immédiatement et revenir plus tard à la rédaction de l'article avant sa publication. Les articles enregistrer en tant que brouillon apparaissent dans la liste de tous les articles avec leur titre suivi de -Brouillon.

* On peut également en cliquant sur état brouillon dans le module Publier, passer du mode brouillon (c'est le rédacteur qui doit revoir son article) à celui de "en attente de relecture" (c'est une autre personne qui doit revoir l'article).Puis cliquer sur le bouton "Mettre à relire". Dans la liste de tous les articles, ceux en attente de relecture ont leur titre suivi de la mention - En attente.

Si par erreur on a cliqué sur "Publier" sur un brouillon ou un article à relire, on peut également à cet endroit passer de l'état "Publié" à celui de "Brouillon" ou "en attente de relecture"

* On peut afficher un aperçu de l'article avant de le Publier

* On peut modifier la visibilité de l'article: sélectionner Public et choisir de mettre cet article en avant sur la page d'accueil (il apparaitra toujours en premier donc tout en haut de la page indépendamment de la chronologie de sa date de publication), mais on peut également le protégé par mot de passe pour ne permettre qu'à certains utilisateurs d'en visionner le contenu (c'est à vous de déterminer le mot de passe et le communiquer aux personnes autorisées à voir ce contenu), où encore lui donné la visibilité privé. C'est-à-dire que les utilisateurs ne pourront pas le voir jusqu'à ce que l'on change ce statut en public (seules les personnes ayant accès à l'interface d'administration pourront le voir). Toujours cliquer sur le bouton "Ok" pour valider les modifications des options de validation.

* On peut même planifier la date et l'heure à laquelle on veut que cet article soit publié en cliquant sur le lien "Modifier" situé juste après la phrase "Publier tout de suite". Cliquez sur le bouton "Planifier" et l'article sera publié automatiquement à date et heure indiquée.

* On peut également grâce à cette option antidater la date de parution d'un article . Cliquer sur le bouton "Mise à jour"

* On peut bien entendu également déplacer un article dans la Corbeille pour le supprimer définitivement par après.

**Le module Format**

![Articles - Format - module](images/interface_barre_menus_articles_module_format.png)

Le module format permet d'accéder à différentes mises en forme proposées par le thème que vous avez choisi. Elle permet d'appliquer un style prédéfini selon le type de contenu présent dans votre article.

Le format désigne la manière dont votre thème doit afficher un article donné. Par exemple, vous pourriez vouloir utiliser le format par défaut pour afficher titre et contenu, ou le format En passant pour ne pas utiliser le titre et n’afficher qu’un court texte.

Lisez la documentation du Codex pour obtenir une description de chaque format d’article (en): https://codex.wordpress.org/Post_Formats#Supported_Formats.

Attention, il est possible que votre thème ne reconnaisse qu’une partie des 10 formats possibles.

**Le module Categories**

![Articles - Categories - module](images/interface_barre_menus_articles_module_categories.png)

Lorque l'on crée un article on doit le ranger dans une catégorie. Il est encore possible de créer de nouvelle catégorie au moment de l'ajout ou de la modification d'un article en cliquant sur le lien "+ ajouter une nouvelle catégorie"

On peut sélectionner plusieurs catégories pour un même article.



**Le module Étiquettes**

![Articles - Etiquettes - module](images/interface_barre_menus_articles_module_etiquettes.png)

Lorsque l'on crée un article, on peut si on le souhaite y associer des étiquettes (éviter de n'en associer qu'une ou plus de 5 et veiller à ce que les étiquettes utilisées soient communes à plusieurs articles)

Comme pour le module catégorie, il est également possible d'ajouter de nouvelles étiquettes, lors de la rédaction d'un nouvel article. Pour cela il suffit de taper le nom d'une étiquette qui n'existe pas encore dans le champ et elle sera automatiquement ajoutée. Les étiquettes sont séparées par une virgule. Lorsque l'on clique sur le bouton Ajouter, les étiquettes encodées s'ajoutent en dessous avec une petite croix qui permet de les supprimer séparément si on le désire.

De plus pour vous faciliter la vie WordPress vous propose automatiquement les étiquettes correspondantes aux premières lettres que vous tapez dans le champ. Vous pouvez ainsi plus facilement retrouver des étiquettes déjà utilisées et ne pas créer de doublons (par exemple : photo et photos). Le lien "Choisir parmi les étiquettes les plus utilisées" permet de retrouver plus facilement le nom des étiquettes utilisées fréquemment.

**Le module Image mise en avant**

Vous pouvez associer une image à votre article, sans pour autant l’y insérer. Cela ne sert vraiment que si votre thème fait usage de cette fonctionnalité, sous la forme d’une miniature pour la page d’accueil, d’un en-tête personnalisé, etc.


N'oubliez pas de cliquer sur le bouton "Publier" pour enregister vos modifications et publier votre article.



#### Categories

![Articles - Categories](images/interface_barre_menus_articles_categories.png)

Il est important de comprendre la notion de catégorie lorsque l'on rédige des articles dans WordPress. En effet, pour chaque article WordPress il faut définir impérativement classé cet article dans une catégorie. C'est obligatoire.

Les catégories ont deux fonctions principales:

* Pour les rédacteurs de contenus, elles permettent de filtrer les résultats de recherche selon une catégorie définie dans l'administration des Articles

* Pour les visiteurs du site, cela va permettre de n'afficher que les articles d'une catégorie déterminée. Cet affichage va se faire par un simple clic sur le nom d'une catégorie.

Il s'agit donc d'une fonctionnalité essentielle dans la bonne gestion des articles de votre site.

Dans un premier temps, créez les catégories que l'on souhaite pour son site en fonction du type d'articles que celui-ci va contenir. Lorsque l'on créera un article, on le rangera dans une des catégories que l'on a créées.

Lorsque l'on créer une catégorie, on lui choisi un nom. Il faudra être attentif au libellé de ses catégories, car elles vont apparaitre à différents endroits du site selon le thème que l'on va utiliser. Les visiteurs verront ces libellés, soyez donc attentif à l'orthographe, majuscule, accents ...

La science de la classification s'appelle la taxinomie. Si vous entendez parler de la taxinomie dans WordPress, c'est qu'il s'agit donc de cette manière de classer des contenus.

Pour créer une nouvelle catégorie, aller dans le menu "Articles"--> "Categories". Sur la droite se trouve la liste des catégories déjà existantes (la catégorie Non classé est installée par défaut lors de l'installation de WordPress). Sur la gauche se trouve le formulaire qui va permettre de créer une catégorie.

Dans le champ "Nom", on peut indiquer par exemple "CMS"

Le champ libellé correspond à une version sans majuscule, ni espace, ni caractère accentué du nom de votre catégorie. C'est ce libellé qui sera utilisé dans l'URL de votre site lorsque l'utilisateur cliquera sur une catégorie pour afficher les articles correspondants.

On peut laisser WordPress créer lui-même un libellé à partir du nom de la catégorie, dans ce cas laissé le champ vide.

Ou on peut choisir de créer un libelle personnalisé en supprimant tout espaces, majuscule ou caractère accentué et en ne gardant que les lettres minuscules non accentuées, trait d'union et chiffres. Cette option peut être utilisée pour une parfaite optimisation de la recherche sur internet (SEO).

Grâce au champ parent, on peut créer une hiérarchie des catégories en lui appliquant une catégorie parent et en la transformant du même coup en une catégorie enfant. Cette option n'est pas obligatoire et ne sera utilisée que selon vos besoins. Cela peut introduire de la complexité dans la classification de vos articles, mais permet lorsque cela est nécessaire d'effectuer un tri plus précis.(exemple: Recette de cuisine - Desserts)

La description, décrit la catégorie. Elle pourra apparaitre dans le site côté visiteur selon le thème que vous utilisez.

Ensuite on clique sur "Ajouter une catégorie". Celle-ci vient s'ajouter dans la liste de droite où il sera encore possible de la modifier, de la supprimer ou de l'afficher.

On peut gérer l'affichage des catégories en les triant par ordre alphabétique en fonction de leurs nom , description, identifiant ou compte (nbr d'article qui appartiennent à cette catégorie) en cliquant sur le titre des colonnes. On peut également effectuer une recherche d'une catégorie via le champ de recherche.

Attention si vous supprimez une catégorie associée à des articles, ceux-ci ne sont pas supprimés, mais la catégorie par défaut "Non classé" leur est automatiquement attribuée. De la même manière si un rédacteur n'attribue pas de catégorie à un article qu'il a rédigé, la catégorie "Non classé " lui sera également automatiquement attribué.  La catégorie par défaut "Non classé" ne peut donc pas être supprimée pour cette raison.

Il est cependant possible de modifier cette catégorie par défaut dans le menu "Réglages" --> "Ecriture" en choisissant une catégorie dans le menu déroulant "Categorie par défaut des articles". Choisissez dans ce cas une catégorie généraliste puisque c'est celle-ci qui sera appliquée si aucune catégorie n'a été renseignée pour un article.


#### Étiquettes

![Articles - Etiquettes](images/interface_barre_menus_articles_etiquettes.png)

Étiquettes = mots-clefs

Les étiquettes sont en quelque sorte assez proches des hashtags utilisés sur Twitter.

Les étiquettes permettent de catégoriser les articles en utilisant des mots-clefs sachant que ces mots clefs ne font pas forcément partie du contenu rédactionnel de l'article.

Le but est d'associé des mots clés qui caractérisent les articles.

L'usage des étiquettes à l'inverse des catégories n'est pas obligatoire lors de la rédaction d'un article. Il serait cependant dommage de s'en priver, car ils sont très pratiques pour les utilisateurs de votre site. Les utilisateurs pourront lister tous les articles qui partagent les mêmes étiquettes.

Quelques règles du bon usage des étiquettes:

* Éviter de n'associer qu'une seule étiquette à un article (pas pertinent pour la sélection des articles)

* Éviter d'associer trop d'étiquettes à un article, car cela va compliquer le filtrage des articles

* Un nombre d'étiquettes pertinent se situe autour de 5

* Associer donc plusieurs mots clefs dont certains sont communs à plusieurs articles

* Le libellé des étiquettes sera visible par les visiteurs (soigné l'orthographe)

La disposition de l'interface centrale pour les étiquettes est en tout point similaire à celles des catégories et propose les mêmes fonctionnalités de tri et de recherche ainsi que les mêmes champs à remplir.

![Usage des étiquettes](images/usage_etiquettes.png)


### Médias

![Medias](images/interface_barre_menus_Medias.png)

Dans cette section vous pourrez ajouter toute une série de médias.

Un média peut être une image, un son ou musique, une vidéo ou un fichier à télécharger par vos visiteurs via un lien comme un fichier PDF ou texte.

La taille maximal pour les fichiers est de 2MB.

Pour les images, les formats autorisés par WordPress sont jpeg, png et gif. Optimiser vos images pour le web afin d'assurer un téléchargement rapide et un bon référencement même sur les supports mobiles qui pourraient consulter votre site via la 4G moins performante et rapide que le wifi ou la connexion directe à un modem.


**Attention:**

Renseignez-vous bien sur les droits d'auteurs avant d'utiliser sur votre site des contenus provenant d'internet, car il serait dommage de voir votre site être fermé pour un non-respect de la législation en la matière. Par défaut, si il n'est pas précisé explicitement qu'un média est libre de droits, elle ne l'est pas. Méfiez-vous également des fichiers libres de droits pour un usage privé, mais qui deviennent payants pour un usage commercial.

#### Bibliothèque

![Medias - Bibliothèques](images/interface_barre_menus_Medias_Bibliotheque1.png)

La bibliothèque est l'endroit dans WordPress où sont stockés tous vos fichiers médias. C'est ici que vous pourrez modifier les paramètres qui y sont rattachés (titre, légende, description, texte alternatif, etc.).

On peut choisir si on désire voir les médias affichés sous forme de liste ou sous forme de miniatures. Filtrer le type de médias que l'on voir afficher (image, son, vidéo, non-attaché (pas utilisé dans le site)). On peut également les classé par date de téléchargement (mois année) et effectuer une "Sélection en masse", c'est à dire une sélection multiple en cochant plusieurs images. Il est également possible de faire une recherche sur le titre, la légende ou la description d'un média ce qui peut s'avérer très utile lorsque le site devient plus conséquent (d'où l'importance de nommer ces images intelligemment).

Il est recommandé d'optimiser vos images pour le web (Photoshop ou pixlr https://pixlr.com/editor/ (outil gratuit en ligne)) et vos fichiers afin de réduire leurs tailles au maximum pour améliorer les performances de votre site et du même coup améliorer votre référencement qui dépend également de la vitesse de chargement de votre page. Pour insérer une vidéo dans vos contenus, positionner votre curseur à l'endroit où vous voulez insérer la vidéo et copier-coller l'URL de la vidéo à cet endroit. Une prévisualisation avec un lecteur s'affiche automatiquement à la place du lien dans votre contenu. Sauvegarder votre page ou votre article.

Par souci d'économie de votre espace d'hébergement, il est également conseillé si vous désirez intégrer des vidéos dans vos articles ou vos pages de le faire via une URL plutôt que de stocker vos vidéos dans votre bibliothèque.

En cliquant sur l'un des médias, vous aurez accès à toute une série d'informations comme :

* Nom du fichier : apprendre.png

* Type du fichier : image/png

* Téléversé le : 21 mars 2018

* Taille du fichier : 8 KB

* Dimensions : 347 × 145

#### Ajouter

Vous pouvez ajouter plusieurs médias en même temps par une sélection multiple ou par un glisser-déposer de plusieurs fichiers sur la zone en pointillés.

Vous pouvez ajouter des médias via le menu "Medias", mais vous pouvez aussi ajouter des médias à la bibliothèque directement lors de la rédaction d'une page ou d'un article en cliquant sur le bouton "Ajouter un média" se trouvant juste au-dessus de l'éditeur de texte. Dans ce cas le média sera "lié" à votre page, ce qui peut être nécessaire pour certains plugins permettant par exemple de présenter vos fichiers PDF à télécharger sous forme d'une icône plutôt que sous la forme d'un lien texte.

![Medias - Bibliothèques](images/interface_barre_menus_Medias_ Ajouter.png)

![Medias - Bibliothèques](images/interface_barre_menus_Medias_Ajouter2.png)

Vous pourrez insérer un contenu provenant de votre disque dur ou provenant directement d'internet en indiquant simplement son URL (attention aux droits d'auteur et licence d'utilisation).

Attention la taille maximum pour vos fichiers est de 2MB. Si votre fichier dépasse cette taille, il est préférable de les stocker sur un espace en ligne et de proposer son téléchargement via un lien dans une page ou un article de votre site.


![Medias - Bibliothèques](images/interface_barre_menus_Medias_Ajouter2.png)

Il est très important de remplir quelques informations concernant les fichiers de votre bibliothèque. Prenez l'habitude de le faire dès que vous téléchargez un nouveau fichier dans votre bibliothèque.

Vous avez accès à ces informations en cliquant sur l'icône de votre fichier dans la bibliothèque.

Adresse web: C'est l'URL auquel correspond votre média (il n'est pas nécessaire et risqué de la modifier sous peine de rencontrer des problèmes d'affichage)

Titre : Le titre par défaut sera celui du nom du fichier que vous avez téléchargé. Il peut être très intéressant de le modifier pour utiliser des mots qui le définissent bien et qui auront un bon impact sur votre référencement en fonction de votre domaine d'activité. Ce titre généré automatiquement est rarement "propre", lui ajouter une majuscule, remplacer les underscore par des espaces ou des tirets rende le titre de l'image plus lisible. Choisissez un nom court et clair. Ce champ peut contenir des majuscules, minuscules, plusieurs mots, des chiffres ... Certains plugins affiche le titre de votre fichier donc soigné l'orthographe et la lisibilité. (exemple: titre de fichier PDF)

Légende: Ce champ n'est pas obligatoire et s'affichera ou non selon le thème et les réglages du thème que vous utiliserez.

Texte alternatif: Ce champ est très important. Il correspond à l'option alt pour la balise image en HTML. Il s'agit du texte qui s'affichera si votre image n'est pas disponible et qui assure une meilleure accessibilité aux personnes handicapées. Utiliser un texte court et clair. Dans tous les cas, remplissez ce champ. Par facilité, vous pouvez faire un copier-coller du titre de votre média.

Description: Ce champ n'est pas obligatoire et s'affichera ou non selon le thème et les réglages du thème que vous utiliserez.

En dessous vous trouverez les liens:

**Voir la page du fichier joint**

Cela affiche la page dédiée seulement à la photo, mais dans le cadre du thème appliqué à votre site

**Indiquer plus de détails**

L'image est affichée en plus grand si sa taille le permet. on retrouve sur le côté les informations techniques et sous l'image les champs Légende, Texte alternatif et Description. Mais cette fois, on a la possibilité de mettre en forme le texte de Description (gras, italique, liste à puces, code, etc.). La mise en forme apparait dans le champ sous sa forme HTML, mais la mise en forme avec les balises se fait automatiquement en fonction des boutons de mise en forme sélectionnés. Si modifications, n'oubliez pas de mettre à jour.  


**Supprimer définitivement une image**

L'intitulé est clair. Si vous cliquez sur le lien vous supprimez définitivement le média de la bibliothèque et donc également partout où celui-ci aurait pu être intégré dans vos contenus.

Toutes les modifications faites dans cette zone sont automatiquement enregistrées sans que vous deviez cliquer sur un bouton d'enregistrement.

Vous pouvez également à cet endroit apporter des modifications à votre image directement dans l'interface de WordPress en cliquant sur le bouton se trouvant juste sous la prévisualisation de celle-ci "Modifier l'image". Vous avez alors la possibilité d'effectuer un recadrage, des rotations (vertical ou horizontal) des symétries (axe vertical ou horizontal). Vous pourrez également redimensionner votre image en indiquant de nouvelles dimensions pour celle-ci (les valeurs de hauteur et largeur sont liées pour éviter la déformation de votre image). Vous pouvez également recadrer votre image. Le moyen le plus simple pour procéder au recadrage est de cliquer sur l'image et de délimiter la zone à recadrer par cliquer-glisser. Cette solution est pratique et rapide, mais il est préférable d'effectuer ses modifications dans un logiciel dédié à la retouche d'image avant de l'importer dans la bibliothèque de votre site.


![Medias - modifier image](interface_barre_menus_Medias_ Modifier.png)


Quelques autres exemples de définition des infos pour différent type de média:

![Medias - Bibliothèques](images/interface_barre_menus_Medias_Ajouter3.png)


![Medias - Bibliothèques](images/interface_barre_menus_Medias_Ajouter4.png)


![Medias - Bibliothèques](images/interface_barre_menus_Medias_Ajouter5.png)


![Medias - Bibliothèques](images/interface_barre_menus_Medias_Ajouter6.png)



### Pages

![Pages](images/interface_barre_menus_Pages.png)

Dans cette partie vous pourrez ajouter de nouvelles pages à votre site.

#### Toutes les pages

![Pages - Toutes les pages](images/interface_barre_menus_Pages_Toutes_les_pages.png)

Ici sont listées toutes les pages de votre site. Vous pouvez au survol de celle-ci accéder à des options supplémentaires (Modifier, Modification rapide, Corbeille, Afficher). WordPress installe par défaut une page appelée "Page d'exemple". Lorsque vous aurez créé vos propres pages, vous pourrez la supprimer. Elle n'a pour but que de vous montrer les fonctionnalités de base possible dans les pages.

Vous pouvez également voir le nom du créateur de la page (celui que vous avez indiqué dans votre nom d'administrateur dans votre profil), ainsi que sa date de création.

Vous pouvez les classer par ordre alphabétique en cliquant sur le "Titre" de la colonne. Vous pouvez également les classer en fonction de leur date de création en cliquant sur "Date".

![Pages - Modifier pages](images/interface_barre_menus_Pages_Modifier_la_page.png)

La section modifier du menu "Pages" vous permet d'accéder à toutes les options auxquelles vous avez accès lorsque vous créez une nouvelle page. Vous pouvez ainsi y modifier ce que vous souhaitez.

![Pages - Previsuliser pages](images/interface_barre_menus_Pages_Prévisualiser_la_page.png)

Permets de visualiser la page

#### Ajouter

![Pages - Ajouter](images/interface_barre_menus_Pages_Ajouter.png)

**Astuce WorkShop :**

Générer du faux-texte (Lorem Ipsum) : http://www.faux-texte.com/ ou pour ceux qui veulent un peu d'originalité dans leurs faux textes: https://blog.shevarezo.fr/post/2015/06/02/generateurs-textes-plus-cools-lorem-ipsum

Ou vous pouvez aller dans le dossier "Lorem Ipsum" du repository github de ce workshop où vous trouverez un fichier texte avec 10 paragraphes de faux texte à copier et coller pour générer rapidement plusieurs articles et pages.

Adresse vidéo à insérer dans WordPress : https://www.youtube.com/watch?v=cOPWhAYil48


Dans la section "Ajouter", vous avez accès à toutes les options de la page:

**Titre:** veillez à ce qu'il ne soit pas trop long (il sera utilisé comme intitulé dans les menus) et pensez à y inclure des termes utiles pour votre référencement et suffisamment explicites pour que vos utilisateurs sachent ce qu'ils vont pouvoir y trouver comme informations.

**Permalien :** Permets de modifier l'adresse URL de votre page (cette manipulation est délicate et peut poser des problèmes de lien brisé. Je vous conseille donc de toujours faire une sauvegarde avec updraftplus avant de modifier quoi que ce soit dans les permaliens). Il peut être intéressant de retirer de l'adresse URL tous les mots liens inutiles qui n'apportent rien à vos utilisateurs ni au moteur de recherche. Faites cette opération avant de rédiger votre contenu et d'y insérer des médias, car sinon il y a un risque de problème d'affichage par après.

**Bouton ajouter un média:** permet d'ajouter un média dans la bibliothèque. Ce média sera lié à votre page (utile pour certains plug-ins d'affichage de lien de téléchargement de fichiers sous forme d'icône par exemple). Cette liaison peut être faite également via les options si vous cliquez sur le média dans votre article, une fois dans la bibliothèque, vous pourrez voir dans les infos de l'image que vous aurez sélectionné une section "Réglages de l'affichage du fichier joint". Vous pourrez y déterminer l'alignement de votre média par rapport au texte (flottant à droite ou à gauche ou centrer.

Lier à permet de définir l'action à réaliser lorsque l'utilisateur va cliquer sur l'image. Aucun, Fichier média (affichage de l'image toute seule dans la fenêtre du navigateur) , page du fichier joint (ouvre un page avec l'image en grande taille sa légende et sa description),

Lien personnalisé permet d'ouvrir un lien dont l'adresse doit être mentionnée juste en dessous quand l'utilisateur va cliquer sur l'image

Taille: miniature, moyenne ou taille originale définit l'une des 3 tailles d'image générée automatiquement par WordPress choisie pour l'affichage dans votre article ou votre page.

Pour modifier une image Degas, insérer dans un contenu, cliquer sur l'image et sélectionner l'icône du petit crayon pour avoir accès aux options de l'image.

**L'éditeur de texte:**  vous permet de mettre le texte en forme Titre, paragraphe, gras,italique, lise à puce, alignement gauche droite centré justifié (2e ligne d'outils), citation (dont l'affichage l'aspect dépend du thème utilisé), insérer un lien, insérer une balise lire la suite ...
Si vous cliquer sur la dernière icône vous aurez accès à d'autres options de mise en forme supplémentaires: texte barré, ligne horizontale, couleur du texte, nettoyer le formatage (enlève tout formatage lors d'un copier-coller à partir d'un logiciel de traitement de texte --> texte brut), caractères spéciaux, diminuer ou augmenter l'indentation, annuler ou rétablir une modification, un bouton ? reprenant tous les raccourcis de mise en forme) ?

**Pour insérer une galerie d'image dans un article ou une page**

* Se positionner avec le curseur dans l'article ou la page à l'endroit où on veut insérer la galerie.
* Cliquer sur le bouton "Ajouter un média"

* Choisir dans la colonne de gauche "Créer une galerie"

* Selectionner les photos que l'on veut insérer dans la galerie ou en télécharger d'autre (ne pas oublier de modifier titre et texte alternatif des images téléchargées)


![Création galerie 1](images/creation_galerie1.png)


* Choisir le nombre de colonnes, le type d'action au click sur l'image, si l'ordre des images est aléatoire ainsi que l'une des 3 tailles d'images. On peut également ajouter une description juste en dessous de chaque image.

* On peut modifier l'ordre des images dans la galerie par cliquer-glisser

* Cliquer sur le bouton "Créer une galerie" pour valider vos paramètres


![Création galerie 2](images/creation_galerie2.png)



Si le texte copier a déjà une mise en forme (police, taille, graisse, italique, couleur, etc.), le bouton "coller en texte"(dans le second étage de la barre d'outils de l'éditeur auquel on accède en cliquant sur la dernière icône de la barre de mise en forme de l'éditeur texte WordPress)permet de coller tout texte automatiquement sans mise en forme. Une fois le bouton cliqué, celui-ci reste enfoncé et la fonction reste active jusqu'à ce que l'on clique à nouveau sur le bouton.


Si l'éditeur de texte de WordPress est trop basic pour vos rédacteurs, sachez qu'il existe des plugins qui permettent non seulement d'ajouter de très nombreuses fonctions à l'éditeur de texte par défaut de WordPress, mais également de définir avec précision selon le type dutilisateurs quel sont les fonctions d'édition (les boutons) auquel les rédacteurs ont accès. Cela permet par exemple de ne pas donner accès au changement de couleur de texte qui placer dans de mauvaises mains pourrait très vite transformer votre charte graphique conçue avec amour en un arc-en-ciel textuel du plus mauvais goût. Le plugin que je vous conseille se nomme TinyMCE Advanced (https://fr.wordpress.org/plugins/tinymce-advanced/), il permet également la réalisation de tableaux et de plein d'autres mise en forme avancées.

Pour la rédaction même si elle se fait directement dans l'interface de WordPress, il est conseillé de saisir le texte au kilomètre et une fois seulement l'encodage terminé réalisé la mise en forme de tout le texte. C'est une pratique qui permet d'éviter des problèmes de mise en forme.

Dans le bas de l'éditeur de texte de WordPress, vous avez un compteur de mots ainsi qu'une indication de la dernière modification effectuée et par quel utilisateur.

Pour les amoureux du code ou si vous avez du texte déjà formaté en HTML que vous désirez utiliser, vous pouvez cliquer sur l'onglet" Texte (jusqu'à présent nous étions dans l'onglet "Visuel"), où vous pourrez retrouver toute votre mise en forme en HTML.

Dans la mise en forme du contenu du texte, il est préférable de n'utiliser que des titres de niveau T2 à T6, car le niveau T1 est plutôt réservé au titre de l'article. Vous obtiendrez ainsi une hiérarchie cohérente de votre titrage. N'oubliez pas que tous les mots qui sont indiqués dans des titres sont particulièrement bien indexés, choisissez-les donc bien en fonction des mots clefs sur lesquels vous voulez être bien référencé sur les moteurs de recherche.

Pour vous concentrer uniquement sur l'aspect rédactionnel et masquer le reste de l'interface de WordPress, vous pouvez passer en mode "Ecriture sans distraction" en cliquant en haut à droite de l'éditeur de texte sur l'icône représentant un petit carré entouré de flèche pointant vers l'extérieur.

Il est possible de faire également des liens hypertext au sein de vos articles et de vos pages en positionnant votre curseur à l'endroit où vous voulez insérer le lien ou en sélectionnant la partie de texte sur laquelle vous désirez que les utilisateurs puissent cliquer. Cliquez ensuite sur l'icône représentant des mailles de chaînes. Un champ vous permettant d'insérer une URL apparait. Cliquer sur l'icône d'engrenage sur le côté du champ pour accéder à plus d'options. Vous êtes à présent sur le formulaire "Insérer/modifier un lien". Vous pouvez choisir soit de faire un lien vers un site externe et dans ce cas de cocher la case "Ouvrir le lien dans un nouvel onglet", soit créer un lien vers un autre contenu de votre propre site (ne cochez pas la case ouvrir le lien dans un nouvel onglet dans ce cas) et sélectionner dans la liste des articles et pages de votre site le contenu vers lequel le lien va pointer. L'adresse web et le texte du lien dans le cas d'un contenu interne se remplissent automatiquement.

![Insérer/modifier un lien](images/inserer_modifier_lien.png)

Pour supprimer un lien dans un article, sélectionner le lien et cliquer sur l'icône du maillon de chaine brisé dans la barre d'outils de l'éditeur de texte de WordPress.

On peut également utiliser les extraits (Options de l'écran - cocher la case "Extrait"). Sous le contenu de mon texte s'affiche un nouveau module appelé extrait dans lequel je vais pouvoir afficher un court résumé de mon article qui donne envie au visiteur de lire la suite et qui en principe est affiché sur la page d'accueil de votre site. Attention certains thèmes ne prennent pas en charge la fonction "extrait". Si lorsque l'on va sur le site publié on ne voit pas de changement, c'est que le thème ne prend pas cette fonctionnalité en charge. Dans ce cas on peut utiliser une astuce en rédigeant comme première partie de son article, un bref résumé de son contenu (on appelle cela un chapeau dans le domaine de la presse) et placer juste après celui-ci dans mon article une balise "Lire la suite". Lorsque j'affiche la page, seule la partie précédent la balise "Lire la suite est affichée", il faut cliquer sur le bouton lire la suite ou le titre de l'article pour avoir accès à la totalité de son contenu. La page d'accueil est moins encombrée et plus clair pour le visiteur et permet en un coup d'oeil de percevoir plus d'article et de cerner rapidement leur contenu pour savoir si on désire en continuer la lecture.

Si vous rencontrez un problème ou que vous ne savez pas comment mettre votre texte en forme, référez-vous à l'onglet Aide (en haut à droite sous la barre d'outils) qui vous offrira une aide contextuelle sur tout ce qui concerne les pages.

![Pages - Ajout page et aide](images/interface_barre_menus_Pages_ajout_page_aide.png)

Pour ajouter un média dans votre page il vous suffit de placer votre curseur dans l'éditeur de texte à l'endroit où vous souhaitez insérer le média et de cliquer sur le bouton "Ajouter un média" qui vous redirigera automatiquement vers la bibliothèque ou vous pourrez utiliser des fichiers déjà téléchargés, en télécharger de nouveau ou insérer un média directement à partir d'une adresse URL

![Pages - media mise en forme](images/interface_barre_menus_Pages_ajout_media_mise_en_forme.png)

![Pages - nouveau media 1](images/interface_barre_menus_Pages_téleverser_nouveau_fichier.png)

![Pages - nouveau media - image ](images/interface_barre_menus_Pages_téleverser_nouveau_fichier2.png)

![Pages - nouveau media - video](images/interface_barre_menus_Pages_téleverser_nouveau_fichier3.png)

![Pages - nouveau media - son](images/interface_barre_menus_Pages_téleverser_nouveau_fichier4.png)

Voici donc le résultat de notre page contenant différents types de médias:

![Pages - resultat - multimedia](images/interface_barre_menus_Pages_multi_medias.png)


#### Le module "Publier"

Le module "Publier" des pages est en tout point similaire à celui utiliser dans la section des articles il permet les mêmes options.


#### Le module Attributs de pages

Vous permet de créer une hiérarchie entre vos pages et pour certains thèmes appliquer à votre page un modèle précis particulier.

Parent — Vous pouvez arranger vos pages en hiérarchies. Par exemple, vous pourriez avoir une page « À propos », avec comme sous-pages « Ma vie » et « Mon œuvre ». Il n’y a pas de limite à la profondeur des sous-pages. Cela sera utile lorsque nous verrons la gestion des menus.

Modèle — certains thèmes utilisent des modèles spéciaux que vous pouvez appliquer à pages des pages précises, avec des fonctionnalités supplémentaires ou une mise en page qui leur est propre. Si c’est le cas, vous les verrez dans ce menu déroulant.

Ordre — Les pages sont généralement affichées par ordre alphabétique, mais vous pouvez indiquer un nombre dans ce champ pour modifier l’ordre d’apparition : 1 pour premier, etc. dans le menu de navigation.

#### Image mise en avant

Ce champ n'est pas obligatoire, il permet de choisir une image qui symbolisera le mieux le sujet de votre page et qui sera utilisée différemment selon votre thème. Généralement il affiche l'image en grand sur toute la largeur dans le haut de votre page avant son contenu.

Veillez à employer des images de taille suffisante, car certains thèmes les affichent sur toute la largeur de la page ce qui peut provoquer une pixelisation de l'image si celle-ci est de petite taille. Bien sûr, optimiser pour le web votre image avant de la télécharger dans la bibliothèque.


### Commentaires

![Commentaires](images/interface_barre_menus_Commentaires.png)

C'est dans cette section que vous allez pouvoir gérer les commentaires portant sur les articles de votre site. C'est ici que vont s'afficher la liste des commentaires et les informations qui s'y rattachent (Auteur, en réponse à , envoyé le).

Vous pouvez choisir le nombre de commentaires affichés par page dans les "Options de l'écran"(en haut à droite sous barre d'outils) ainsi que si vous désirez afficher les commentaire en mode liste ou liste avec extraits.

Vous pouvez désactiver la possibilité pour les utilisateurs de laisser des commentaires soit pour toutes les pages soit pour une ou plusieurs pages uniquement. Vous avez également accès à toute une série de réglages concernant les commentaires dans le menu "Réglages" --> "Discussion". (cfr cette section pour plus d'information)

**Pour désactiver les commentaires sur toutes les pages.**

* Aller dans le menu "Pages"--> "Toutes les pages".

* Cliquer sur la case à cocher à côté du mot titre (toutes les pages sont selectionnées d'un seul coup).

* Aller ensuite dans le menu déroulant "Actions groupées" et selectionnez "Modifier".

* Dans la page qui s'affiche vous verrai les pages sélectionnées ainsi que plusieurs opérations que vous pourrez effectué sur toutes les pages en même temps telles que : changer le nom de l'auteur, changer la page parent, autoriser au refuser les commentaires (c'est la partie qui nous intéresse) et enfin modifier l'état (publié, brouillon, ...)

* Choisissez dans la liste déroulante "commentaires"  l'option "refuser"

* N'oubliez pas de cliquer sur le bouton Mettre à jour.


**Pour désactiver les commentaires sur une page précise :**

Vous pouvez utiliser l'option la plus pratique en allant dans le menu "Articles" , en ouvrant l'article puis "Options de l'écran" (en haut à droite sous barre d'outils), cocher "Discussion" . Sous l'éditeur de texte de votre article est apparu un nouveau module "Discussion", dans lequel il vous est très facile, simplement en cochant ou non une case d'autorisée ou de refuser les commentaires uniquement sur cette page et d'autorisé ou non les rétroliens et pings sur cette page.


* Survoler le titre de la page dans la liste "Toutes les pages"
Cliquer sur "Modification rapide" et cocher ou non la case "Autorisé les commentaires"

* N'oubliez pas de cliquer sur le bouton "Mettre à jour"

* Alternative: Vous pouvez aussi après activé la modification rapide sur la page où vous voulez désactiver les commentaires, aller dans les options de l'écran (sous la barre d'outils à droite) et décocher la case "commentaires" puis "Appliquer".

Vous pouvez gérer l'ordre dans lequel apparaissent les commentaires dans la liste de votre interface en cliquant sur les titres de colonnes.

En ce qui concerne la gestion des commentaires, au survol de ceux-ci apparait un menu supplémentaire (Désapprouver/ Approuver, Répondre, Modification rapide, Modifier, Indésirable, Corbeille)

Les raccourcis clavier pour gérer plus rapidement vos commentaires:
https://codex.wordpress.org/fr:Raccourcis_Clavier

Un article intéressant sur les motivations des spammeurs à déposer des liens vers leur site dans les commentaires de votre site et la nécessité de les supprimer: https://codex.wordpress.org/fr:Commentaire_Ind%C3%A9sirable

Quelques conseils pour répondre aux commentaires négatifs ou malveillants: https://www.webmarketing-com.com/2015/06/15/38270-repondre-a-commentaire-negatif-laisse-ligne

Nous pouvons simuler le dépôt d'un commentaire par un utilisateur lambda en allant sur notre site sans être connectés en tant qu'administrateurs pour commenter un article. On peut le faire facilement en ouvrant un autre navigateur (exemple: Firefox) et se connecter à l'adresse http://localhost/wp_workshop/. Si on sélectionne un article et que l'on clique sur ton titre ou le lien "Continuer la lecture", on voit qu'il est possible de laisser un commentaire sur cet article. Les champs obligatoires sont mentionnés par l'étoile à côté du nom du champ. Indiquer un Nom et une adresse de messagerie pour pouvoir "Laisser un commentaire" est une option qui a été définie dans le menu  "Réglages" --> "Discussion" afin d'éviter les commentaires anonymes.

Le commentaire est ajouté dans le site entre l'article et la zone "Laisser un commentaire", il porte la mention très importante "Votre commentaire est en attente de modération" ce qui signifie qu'il n'est visible jusqu'à ce qu'il soit validé par l'administrateur que par la personne qui a rédigé ce commentaire et non par tous les visiteurs du site.

![commentaire utilisateur attente validation sur le site](images/commentaire_utilisateur_attente_validation.png)

Lorsque l'on retourne dans le navigateur dans lequel on est logger en tant qu'administrateur on peut voir que le nouveau commentaire à été ajouté dans la liste et est en attente de validation. Pour les approuver, passer au survol sur le commentaire et cliquer sur Approuver. Il est également possible de répondre, d'effectuer une modification rapide, une modification standard, de placer le commentaire dans les indésirables ou dans la corbeille. Lorsque vous avez des commentaires en attente de modération, vous pouvez le voir dans le tableau de bord dans le module "Activité" et dans la barre d'outils par un chiffre à côté de l'icône du phylactère (petite bulle) et aussi dans la barre des menus avec une petite pastille orange avec le chiffre 2 indiquant le nombre de commentaires en attente de modération.

Grâce au filtre au-dessus de la liste des commentaires dans l'interface d'administration dans le menu "Commentaires" vous pouvez afficher soit tous les commentaires, soit uniquement ceux en attente, approuvée, indésirable ou mise à la corbeille. Vous avez également la possibilité d'effectuer une recherche. Dans le menu déroulant "Tous les types de commentaires", vous pouvez aussi filtrer l'affichage entre les commentaires et les pings.

Dans la liste dans la colonne auteur vous pourrez voir le nom de l'utilisateur, son email ainsi que son adresse IP.

Les commentaires validés seront à présent visibles dans le site et les autres utilisateurs pourront à présent y répondre. Dans l'administration le nombre de commentaires validés s'indique dans la petite bulle de la liste.

On peut également répondre au commentaire. La réponse appaitra sous le commentaire original.

On peut modifier un commentaire Nom, mail et même contenu du commentaire. Cela pose bien entendu un problème d'éthique de savoir si on décide de laisser les commentaires ouverts on s'expose à des commentaires qui peuvent être négatifs. On peut alors soit les publier (car il s'agit du droit d'expression de vos utilisateurs si les propose ne sont pas injurieux bien entendu) soit les placer dans les indésirables ou à la corbeille. Modifier le contenu d'un commentaire écrit par une personne ne me parait pas correct.

Un article placé dans les indésirables provoquera automatiquement le placement d'un autre commentaire du même auteur dans les indésirables. Vérifier donc les commentaires indésirables avant de la mettre à la corbeille et de les supprimer.

Le widget commentaires récents qui permet d'afficher les derniers commentaires dans la zone de widgets sur votre site dispose de différents paramètres. Pour régler ceux-ci. Rendez-vous dans "Apparence"-->"Widgets". Lorsque vous déroulez les options de ce widget s’il est déjà placé dans une des zones de widgets, on peut afficher un titre et définir le nombre de commentaires à afficher.

Dans le widget Méta, il existe également une option "RSS des commentaires" qui permettra à vos utilisateurs de s'abonner aux commentaires de votre site. Il est d'ailleurs dans ce même widget possible pour vos utilisateurs de s'abonner à votre Flux RSS des articles pour recevoir tous les articles publiés sur votre site.

### Apparence

![Apparence](images/interface_barre_menus_Apparence.png)

C’est à cet endroit que sont réunies toutes les différentes options qui vont vous permettre de gérer l'affichage de votre site (thème, menus, widgets ...)

#### Thèmes

![Apparence - themes](images/interface_barre_menus_Apparence_themes.png)

Les thème se charge de l'affichage des fonctionnalités du core de WordPress, mais également de tous les plugins qui lui ont été ajouter pour augmenter ses fonctionnalités.

Le choix d'un thème est particulièrement important, car c'est lui qui va déterminer quelles seront les fonctionnalités prises en charge pour l'affichage. C'est le premier contact visuel qu'auront vos visiteurs lorsqu'ils viendront visiter votre site. De plus certains thèmes ajoutent également leurs propres fonctionnalités qui peut être intéressants d'analyser de voir si la prise en main de ce thème ne sera pas trop complexe.

Pour le choix d'un thème, vous aurez l'embarras du choix (au sens strict du terme). La multitude de sites proposer sur internet tant gratuits que payants n'aide pas à choisir et fait souvent tourner la tête des débutants de WordPress tant l'offre est variée et cependant inégale dans sa qualité et dans les fonctionnalités proposées.

**Thèmes gratuits vs Thèmes payants vs Thèmes personnalisés**

Les thèmes gratuits:
Avantage: la gratuité
Inconvénients: Pas toujours de grandes qualités pour le design, pas toujours mis à jour, possibilité de personnalisation souvent plus limitée, très utilisés et donc manque d'originalité, publicité imposé, voir du code masqué

Les thèmes payants:
Avantage: prix modique le plus souvent (gain de temps donc gain d'argent), design de qualité, mise à jour régulière, possibilité de personnalisation plus importante, moins utilisée donc plus originale, support technique en cas de problème, pas de publicité ni de code masqué

Les thèmes personnalisés:
Avantages: correspond totalement à vos besoins, puisque construits sur mesure, vous connaissez parfaitement le code source et pouvez le manipuler selon vos besoins.
Inconvénients: peut présenté des failles de sécurité, nécessite du temps pour la mise à jour du code au fil de l'évolution de WordPress, nécessite des compétences et des connaissances techniques poussées en graphisme, codage et en ergonomie pour offrir un thème à la fois beau et fonctionnel. Il est possible également de faire appel à des développeurs spécialisés pour développer ce thème sur mesure.

**Choisir un thème et l'activer**

Pour choisir le thème que vous désirez appliqué à votre site, rendez-vous dans le menu "Apparence"--> "Thèmes".

Les thèmes installés sur votre site apparaissent sous forme de vignette avec juste dessous leur nom affiché. Le thème activé actuellement est en principe le premier de la liste et indique la mention "Activé" juste avant son nom, ainsi qu'un bouton "Personnaliser" qui vous permet d'accéder à ces réglages (qui varie d'un thème à l'autre, généralement les thèmes payant offre des réglages et paramétrages plus nombreux et précis que les thèmes gratuits qui nécessite de devoir réaliser des modifications directement via le code dans un thème enfant)

Cliquez sur le bouton "Personnaliser"


####Personnaliser

Vous avez accès à toute une liste de zones qu'il vous est possible de modifier de manière intuitive sans connaissance du code. Ajouter un logo,changer le titre du site, changer le slogan du site, sélectionner la taille des Icones ...). Mais aussi une personnalisation des couleurs,

![Apparence - personnaliser](images/interface_barre_menus_Apparence_personnaliser.png)

Vous pouvez également avoir un aperçu de l'affichage selon la taille de l'écran en cliquant sur les différentes Icones ordinateur, tablette, GSM en bas de la colonne de gauche.

![Apparence - personnaliser2](images/interface_barre_menus_Apparence_personnaliser2.png)

![Apparence - personnaliser3](images/interface_barre_menus_Apparence_personnaliser3.png)


Vous pouvez également personnaliser l'entête en y plaçant une autre image ou même une vidéo soit extraite de votre bibliothèque (max 2 MB) soit d'une URL YouTube (exemple: https://www.youtube.com/watch?v=pGbIOC83-So). Le temps du chargement de la vidéo, c'est l'image qui sera affichée.

**Photos gratuites :**

https://unsplash.com/

https://pixabay.com/

https://picjumbo.com/


**Vidéos gratuites :**

https://videos.pexels.com/

Vous pouvez également modifier les menus (options identiques que dans le menu "Menus"), les widgets (options identiques que dans le menu "Widgets"), Réglage de la page d'accueil (vous pouvez choisir si la page d'accueil sera une page statique que vous choisissez ou la page d'affichage des articles par défaut).

Il y a aussi la possibilité de CSS additionnel qui vous permet d'ajouter votre propre code CSS pour personnaliser l'apparence et la mise en page de votre site. La syntaxe du code est mise automatiquement en surbrillance. Mais comme préciser précédemment avant d'effectuer toute modification sur votre code faites une sauvegarde updraftplus. Et dans la mesure du possible effectuez les modifications dans le fichier style.css de votre thème enfant que vous aurez préalablement activé sur votre site. Car toutes les modifications effectuées dans cette zone ne sont pas enregistrées dans le fichier style de votre thème enfant, mais dans le thème parent. Les modifications seront donc effacées dès la prochaine mise à jour du thème parent.

**Choisir et télécharger un nouveau thème sur le site de wordpress.org**

Menu "Apparence" --> "Thèmes" : cliquer sur le bouton "Ajouter" (en haut). Vous pouvez voir les thèmes qui sont déjà installés sur votre site (ils apparaissent en surbrillance avec la mention "Installé"). Vous pouvez également voir tous les autres thèmes présents sur le site de Wordpress.org et les afficher selon différents critères (mis en avant, Populaires, Derniers en date, Favoris). Vous pouvez également choisir de cliquer sur le bouton "Filtre de fonctionnalités" qui va-vous afficher les thèmes en fonction de leurs thématiques (Blog, E-Commerce, Education, Divertissement, Nourriture et Boisson, Vacances, ...) ou en fonction de leurs fonctionnalités (optimisé pour l'accessibilité, arrière plan personnalisé, couleur personnalisée, personnalisation de l'en-tête, éditeur de style, images mises en avant, modèle pleine largeur...) ou encore selon leur arrangement (Style en grille, une colonne, deux colonnes, colonne latérale gauche ou droite ...)

Vous pouvez voir un aperçu de ces thèmes et choisir de les installer en cliquant sur le bouton "installer". Il ne vous restera plus qu'à les appliquer si vous souhaitez appliquer ce thème à l'affichage de votre site. Attention: selon les thèmes certaines fonctionnalités peuvent ne plus être prises en charge et donc provoqué le non-affichage de certains éléments de vote site.

Indépendamment des thèmes proposés par WordPress.org, vous trouverez sur internet une multitude de sites proposant des thèmes de prix et de qualité divers. Les plus connus sont :

Elegant Themes : https://www.elegantthemes.com/
Créateur du très célèbre thème DIVI (cher, mais aux fonctionnalités de personnalisation quasiment sans limites)

Theme forest : https://themeforest.net/
Avec un petit article pour éviter de se faire avoir :https://wpmarmite.com/guide-themeforest/

WooThemes : https://woocommerce.com/
Spécialisé dans les thèmes WooCommerce

Voici un article plus détaillé proposant des thèmes gratuits sélectionnés:

https://wpmarmite.com/theme-wordpress-gratuit/

Il est également possible de faire une recherche sur le site wordpress.org dans la rubrique thème, de télécharger le fichier sur son ordinateur et ensuite à l'aide du bouton "Ajouter" puis "Téléverser" d'importer ce fichier thème dans l'interface d'administration de WordPress.

Pour désactiver un thème,il suffit d'en activer un autre.

Pour supprimer un thème, commencer par le désactiver (en activant un autre thème) puis cliquer sur le thème (en bas à droite vous trouverez un lien "Supprimer")


#### Widgets

![Apparence - Widgets](images/interface_barre_menus_Apparence_widgets.png)

Les **widgets** sont des composants de navigation qui permettent de faciliter la vie des utilisateurs de votre site. (Exemple: articles récents, Archives, Categories...)

Ces widgets permettent d'avoir un accès direct aux articles récents, aux différentes catégories, etc. c'est en cela qu'il facilite et simplifie la navigation sur votre site.

Voici les widgets proposés par défaut par WordPress:

* Archives (archive mensuelle des articles de votre site)

* Articles récents (les articles les plus récents de votre site)

* Calendrier (un calendrier des articles de votre site)

* Catégories (une liste ou un menu déroulant des catégories)

* Commentaires récents (les commentaires les plus récents de votre site)

* Flux (les entrées depuis n’importe quel flux RSS ou Atom)

* Galerie (affiche une galerie d’images)

* HTML personnalisés (Code HTML arbitraire)

* Image (Affichage d'une image)

* Menu de navigation (ajoutez un menu de navigation pour votre colonne latérale)

* Méta (Connexion, flux RSS et liens WordPress.org)

* Nuage d'étiquettes (Un nuage de vos étiquettes les plus utilisées - attention les mots clefs le plus utilisés seront affichés en plus grand que les autres)

* Pages (une liste des pages de votre site)

* Rechercher (un formulaire de recherche pour votre site)

* Son (Affichage d'un lecteur audio)

* Texte (Texte arbitraire)

* Vidéo (Affichage d'une vidéo depuis votre bibliothèque, Youtube, Vimeo ou un autre fournisseur)

Avec quelques compétences de codage, vous pourrez également créer vos propres widgets pour WordPress.


Selon le thème que vous avez choisi, **les widgets s'afficheront dans des zones précises de votre page spécialement conçues pour les accueillir**. Dans la partie droite de l'écran, vous pouvez voir les zones qui peuvent accueillir des widgets dans votre thème.(Exemple: Colonne latérale du blog, Pied de page 1, Pied de page 2)

Lors de l'installation de WordPress, une série de widgets seront placés dans une des zones (la zone par défaut), vous pouvez les retirer, en ajouter ou en changer l'ordre ou les répartir autrement sur les autres zones de widgets disponibles fournies par votre thème.

La partie gauche de l'écran reprend tous les **widgets disponibles** avec un bref descriptif de chacun d'eux.

Sous la liste des widgets disponibles se trouvent les widgets désactivés. Les widgets placés ici sont désactivés et n'apparaissent plus sur l'écran de vos visiteurs, mais il garde cependant tous les réglages que vous avez pu leur apporter.

Cette partie de l'administration fonctionne par glisser-déplacer. C'est très simple. Pour ajouter un widget disponible ou un widget désactivés dans l'une des zones définies pour les accueillir dans votre thème, il suffit de cliquer et glisser le "bloc" portant le nom du widget sur la zone voulue. Le bloc permet alors d'accéder à ces options comme le titre, et d'autres options spécifiques à chaque bloc de widgets. Il n'est pas obligatoire de donner un titre personnalisé à vos widgets, si vous n'indiquez rien, c'est le titre du widget qui sera utilisé par défaut.

Pour ajouter un widget à une zone définie, il est aussi possible de cliquer sur son titre dans la colonne de gauche et de choisir dans le menu déroulant la zone voulue.

Pour réorganiser l'ordre des widgets les uns par rapport aux autres, il vous suffit d'utiliser le cliquer-déposer et de les réorganiser selon vos désirs.

Attention, il est possible de glisser un même widget plusieurs fois dans une même zone. Veillez à ne pas avoir de doublons. Par contre il peut être utile d'avoir un même widget dans des zones différentes pour faciliter la navigation (exemple: catégorie dans barre latérale et dans pied de page).

N'oublier pas d'enregister vos modifications pour qu'elles s'affichent dans votre site.

Pour supprimer un widget d'une zone, soit vous cliquer sur son nom dans zone et lorsque ses options se déroulent, vous cliquer sur le lien "Supprimer". Soit vous cliquer et le déposer sur la colonne des widgets disponibles (vos paramétrages ne seront pas conservés), soit sur la partie Widgets désactivés (vos paramétrages seront conservés pour un usage ultérieur)

En cliquant sur le lien "terminer", vous masquez tout simplement les options du widget.

En cliquant sur Activer le mode « Accessibilité », via les options d’écrans( onglet sous la barre d'outils), vous autorisez l’utilisation des boutons « Ajouter » et « Modifier » à la place du glisser/déposer. De cette manière les options du widget s'ouvriront dans une fenêtre dédiée dans l'administration au lieu de s'afficher sous le nom du widget. Cette option est moins ergonomique et intuitive que le clique déposer. Pour la désactiver, retournez dans les "Options de l'écran" (onglet juste sous la barre d'outils)

**Remarque importante:**

En **changeant de thèmes**, il y a souvent des variations sur le nombre et l’agencement des zones de widgets et des barres latérales, et parfois tout cela entre en conflit, rendant la transition moins aisée. Si vous avec changé de thème et que **certains widgets semblent manquer**, faites défiler cet écran jusqu’en bas pour les retrouver **dans la zone des widgets inactifs**, où ils ont été conservés avec leurs derniers réglages.


#### Menus

![Apparence - Menus](images/interface_barre_menus_Apparence_Menus.png)

Les menus permettent à vos utilisateurs de naviguer parmi vos pages. L'emplacement et le nombre de menus dépendront du thème que vous aurez choisi.

Par défaut à chaque fois que vous créez une nouvelle page, elle est automatiquement ajoutée à la barre des menus de votre site.

**Pour créer notre propre menu**

* Aller dans "Apparence"--> "Menus"

* Dans la partie droite de l'écran indiquez le Nom du menu (exemple: Menu principal)

* Cliquer sur le bouton "Créer le menu"

* Maintenant que le menu est créé, on va pouvoir créer la structure du menu en y ajoutant les pages que l'on souhaite en cochant dans le module Pages (à gauche) les pages que je veux ajouter au menu. Puis cliqué sur "Ajouter au menu"

* Les pages ajoutées se positionnent dans la Structure du menu. Maintenant cliquer en haut à droite sur le bouton "Enregister le menu"


Vous pouvez modifier l'ordre des différents éléments du menu par glisser-déposer en faisant remonter ou descendre des éléments.

**Création d'un menu déroulant**

Si vous décalez légèrement un des éléments vers la droite, vous créer un sous-menu ce qui sera utile si votre thème permet l'usage de menu déroulant (ce n'est pas toujours le cas). Il est possible de remettre tous les éléments au même niveau en les déplaçant légèrement vers la gauche. Il n'y a rien d'autre à faire, aller ensuite dans votre site et rafraichissez la page pour voir si le menu déroulant s'est effectivement appliqué à votre menu.

**Réglages du menu**

En dessous de la liste vous pouvez cocher **"Ajouter automatiquement les pages de premier niveau au menu"** cela vous évitera de devoir le faire manuellement à chaque nouvel ajout de page. Si cela ne vous convient pas, vous pourrez modifier cela en supprimant la page de votre menu à cet endroit.

Juste en dessous **Afficher l'emplacement** vous permet de choisir à quel endroit prévu par votre thème vous choisissez d'afficher votre menu dans votre site.

N'oubliez pas "Enregister le menu" et visualisez le résultat dans votre page. (http://localhost/wp_workshop/)

**Les options de gestion de page dans les menus**

En cliquant sur la flèche située à côté de Page dans l'un des éléments du menu, on pourra voir apparaitre une série d'options:

* Titre de la navigation :  C'est le titre qui sera affiché dans la navigation qui par défaut reprend le titre de la page. Il est cependant possible grâce à cette option de changer ce titre dans la navigation si par exemple le titre de la page est trop long.

* Déplacer (Un cran vers le haut, descendre d'un cran , Sortir de sous Qui sommes-nous ?) : cela peut aussi être fait par glisser-déposer haut bas gauche droite

* Original: Nos projets (c’est le titre original utilisé au départ dans le menu avant modification - bref le titre de la page)

* Retirer (retirer la page du menu) - Annuler (annuler les modifications)

Attention: N'oubliez pas d'enregister le menu pour que les modifications soient prises en compte.

L'utilisation principale des pages est d'être placé dans des menus pour faciliter la navigation dans le site et gérer les contenus du site en en les plaçant dans différentes pages pour faciliter l'accès au contenu rechercher par les visiteurs dans le site.

#### Il n'y a pas que les pages qui peuvent devenir des éléments de menus

Dans la section "Apparence"-->"Menu" on voit que l'on a le module "Pages" à gauche, mais également juste en dessous, le module "Articles","Liens personnalisés" et "Categories"

**Articles**

Permets de créer des éléments de menu menant directement à des articles.

**Liens personnalisés**

Un usage pratique lorsque l'on place un lien dans le menu est que l'on peut par exemple placer un lien vers la page d'accueil dans le menu en indiquant tout simplement son adresse URL(Attention celle-ci changera entre la version en local et lorsque vous mettrez votre site en ligne). Titre de la navigation indique le nom qu'aura ce lien dans le menu (par exemple : Accueil) . Cela permet d'avoir un autre accès à la page d'accueil qu'en cliquant sur le titre du site. On peut également faire des liens vers des sites externes. Si on veut effectuer des modifications. Dans les "Options de l'écran" coché la case "Cible du lien" qui permet si cette case est cochée dans l'élément de votre menu d'ouvrir la page web dans un nouvel onglet, et donc de garder votre site ouvert. On peut également cliquer sur la case "Classes CSS" qui permet d'ajouter par exemple une icône ou de mettre une petite maison pour remplacer le mot accueil.

**Catégories**

Permets de créer des éléments de menu menant directement à des catégories.

D'autres options sont disponibles en cochant des cases dans "Options de l'écran". (Étiquette, Format)


#### En-tête

![Apparence - En-tête](images/interface_barre_menus_Apparence_entete.png)

#### Éditeur

![Apparence - Editeur](images/interface_barre_menus_Apparence_editeur.png)



### Extensions

![Extensions](images/interface_barre_menus_Extensions.png))

Les fonctionnalités de base du core (coeur) de WordPress ainsi que les fonctionnalités qui lui sont ajoutées par les plugins seront vues au travers du thème choisi qui gère tout l'affichage de l'interface utilisateur de votre site.

![Wp plugins theme](wp_plugins_theme.png)

Les extensions (plugins) étendent les fonctionnalités de WordPress. Une fois une extension installée, vous pouvez l’activer, la désactiver ou la supprimer à cet endroit. Vous pourrez également faire une recherche de plugins directement à partir de l'interface de WordPress et installer ceux qui vous intéressent très facilement.

C'est également ici que vous aurez accès aux réglages de vos extensions (plugins). Attention cependant certains plugins ajoutent des nouveaux sous-menus avec des réglages à d'autres endroits de la barre de menu de WordPress. Par exemple, UpdraftPlus que nous utilisons pour la sauvegarde de notre site, ajoute lors de son installation et activation, un nouveau sous-menu "Sauvegardes UpdraftPlus" dans le menu Réglages.(Vous pouvez y accéder facilement en cliquant sur le lien réglages dans la liste des extensions au survol de UpdraftPlus qui vous redirige directement au bon endroit).


#### Extensions installées

![Extensions - Extensions installées](images/interface_barre_menus_Extensions_installees.png)

Ce menu affiche la liste de toutes les installations installées sur votre site qu'elle soit activée ou désactivée.

Pour activer à l'activation, la désactivation, les réglages et la suppression d'un plugins, il suffit de survoler celui-ci et de choisir l'option voulue dans le menu supplémentaire qui apparait sous son nom.

Vous pouvez par exemple supprimer le plugin "Hello Dolly" qui est installé par défaut avec WordPress à titre d'exemple.

Attention: Un plugin même désactivé laisse maigres tous accès à votre site via d'éventuelles failles. Il est donc fortement recommandé non seulement de désactivé les plugins que vous n'utiliser pas, mais également de les supprimer totalement (gain d'espace de stockage et sécurité accrue)

Attention pour désinstaller une extension de WordPress, il est obligatoire d'abord la désactivé pour pouvoir ensuite la supprimer. Il est parfois demandé également si on veut également supprimer les données qui y sont associées. N'oubliez pas de les supprimer également. "Oui, supprimez ces fichiers et les données"

Vous ave également accès aux réglages de vos plugins à cet endroit. Chaque plugins offrent des options et un paramétrage différents. Pour en savoir davantage sur la manière de faire, consulter la documentation du plug-in (installation, capture d'écran, FAQ, etc.) que vous pouvez retrouver sur la page dédié au plugin sur le site de WordPress ou encore sur le site du plugin. Les réglages et le support sont parfois accessibles directement via l'interface d'administration juste sous le nom du plugin dans la liste des plugins installés.


#### Ajouter

![Extensions - Ajouter](images/interface_barre_menus_Extensions_ajouter.png)

**Chercher une extension et l'installer à partir de l'interface de WordPress**

Vous pouvez rechercher un plugin en fonction de son nom, de son auteur ou de son étiquette dans le champ rechercher incorporé à l'interface de WordPress dans la section "Extensions" --> "Ajouter" . Un tri est également possible au-dessus (mises en avant, Populaires, Recommandées, Favorites).

Le nombre de téléchargements d'un plugin, la date de sa dernière mise à jour et l'indication de sa compatibilité avec votre version de WordPress vous assurent généralement de la qualité d'un plugin. De plus si un plugin est très populaire et mis régulièrement à jour vous pourrez très certainement profiter d'une large communauté et des réponses du développeur en cas de problème, ainsi que des tutoriaux sur internet pour vous expliquer son fonctionnement et son paramétrage.

Une fois le plugin trouvé, vous pouvez cliquer sur son nom pour obtenir davantage d'information (version, dernière mise à jour, version minimale de WordPress, compatibilité WP, avis des utilisateurs, moyenne des notes, nb d'installation active, note moyenne et avis des utilisateurs). Vous avez également accès à d'autres informations concernant le plugin comme la "Page WordPress.org de l'extension et le Site web de l'extension. Cela vous permettra de vous faire une idée plus précise avant de décider de l'installer ou non. Une rapide recherche sur internet peut également vous permettre de glaner des renseignements intéressants notamment concernant d'éventuels conflits avec d'autres plugins qui sont peut-être installés sur votre site. N'hésitez pas à consulter les différents onglets (Description, Installation, FAQ, Liste des modifications, Avis, capture d'écran) sur l'écran qui s'affiche quand vous cliquer sur le nom du plugin qui vous intéresse avant de l'installer.

Éviter d'installer trop de plugins, non seulement cela alourdit votre site, mais en plus cela offre un risque de failles de sécurité et de problème de sécurité supplémentaire. Avant d'installer un plugin, demandez-vous si aucune fonction native de WordPress n'est déjà capable de vous fournir la fonctionnalité que vous recherchez.

Si les informations recueillies vous ont convaincus, cliquer sur le bouton "Installer". L'installation se lance automatiquement. Le bouton "Installer" est alors remplacé par le bouton "Activer". N'oubliez pas de cliquer dessus pour rendre le plugin opérationnel sur votre site.


**Chercher une extension et l'installer à partir du site de WordPress**

Vous pouvez également aller sur le site de WordPress https://fr.wordpress.org/plugins/ et télécharger le fichiez zip  de l'extension. Ensuite, rendez-vous dans l'interface de votre site dans "Extensions" --> "Ajouter" et en haut de la page cliquer sur le bouton "Téléverser une extension" et indiquer l'emplacement où le fichier zip à été téléchargé sur votre ordinateur. Ensuite, installer et activer l'extension. Cette option peut être pratique si vous n'avez pas accès à internet et voulez développer en local tout en disposant des fichiers de vos extensions pour les installer. Elle présente le désavantage de ne pas offrir les dernières versions des plugins et donc de nécessiter davantage de mise à jour lors de la connexion à internet.

### Plugins testé et approuvé:

Contact Form (gérer les formulaires) : https://fr.wordpress.org/plugins/contact-form-7/

Yoast SEO (optimiser votre référencement): https://fr.wordpress.org/plugins/wordpress-seo/

Akismet anti-spam) : https://fr.wordpress.org/plugins/akismet/

WooCommerce(commerce en ligne): https://fr.wordpress.org/plugins/woocommerce/

TinyMCE Advanced (personnalisation éditeur texte): https://fr.wordpress.org/plugins/tinymce-advanced/

Wordfence (sécurité) : https://fr.wordpress.org/plugins/wordfence/

WP Rocket - payant (optimisation vitesse chargement): https://wp-rocket.me/

UpdraftPlus WordPress Backup Plugin (sauvegarde restauration): https://fr.wordpress.org/plugins/updraftplus/

Duplicator (migration - clonage de site) : https://fr.wordpress.org/plugins/duplicator/

Page Builder par SiteOrigin (page builder wysiwyg) : https://fr.wordpress.org/plugins/siteorigin-panels/

MetaSlider (slideshow): https://fr.wordpress.org/plugins/ml-slider/

Google Analytics (analyse des statistiques de votre site - SEO): https://fr.wordpress.org/plugins/googleanalytics/

WPML to Polylang (traduction de votre site en plusieurs langues): https://fr.wordpress.org/plugins/wpml-to-polylang/

Le répertoire où sont stockées vos sauvegardes de Updraft est:  /wp_workshop/wp-content/updraft. Ne le placez pas dans vos répertoires uploads ou plugins, ceci provoquerait une récursion (sauvegardes de sauvegardes de sauvegardes...).


#### Éditeur

![Extensions - Éditeur](images/interface_barre_menus_Extensions_editeur.png)

Cette partie vous permet de modifier directement le code à partir de l'interface de WordPress. Cette option est déconseillée et risquée.

Vous avez ici accès directement à l'arborescence des fichiers qui constituent votre plugins (à droite - Fichiers de l'extension) et à gauche à l'éditeur de code.

Si on n’effectue aucune modification, cette zone peut être utile pour visualiser le code et l'arborescence des fichiers constituant le plug-in sans devoir quitter l'interface d'administration. Les dossiers originaux se trouvent dans le dossier wp-content plugins de votre site internet. C'est à cet endroit que vous pourrez copier vos fichiers pour en faire une sauvegarde avant d'effectuer une éventuelle modification du code.

Réaliser toujours une sauvegarde de votre site si vous devez absolument utiliser cette option et suivez les conseils du message d'avertissement qui s'affiche à l'écran.

Attention effectué des changements dans les extensions actives n'est pas recommandé. Désactivé les au préalable.

```
Faites attention !
Il semble que vous soyez en train de modifier directement votre thème dans le tableau de bord de WordPress. Ce n’est pas recommandé ! Modifier directement les extensions peut introduire des incompatibilités futures qui pourraient casser votre site et vos modifications risquent d’être perdues lors de futures mises à jour.

Si vous devez absolument modifier directement cette extension, utilisez un gestionnaire de fichiers pour en créer une copie avec un autre nom et gardez-le près du code original. Ainsi, vous pourrez réactiver une version fonctionnelle si quelque chose tourne mal."
```

### Utilisateurs

C'est vous qui avez installé votre site WordPress (en local ou directement en ligne), vous avez donc le statut d'administrateur (utilisateur rôle administrateur) et avez accès sans restrictions à tous les menus de WordPress. Vous avez les pleins pouvoirs sur votre site et aurez également la possibilité de créer d'autre compte utilisateurs ayant soit également le rôle d'administrateur soit un autre rôle offrant des privilèges plus réduits sur l'interface de WordPress.

![Utilisateurs](images/interface_barre_menus_Utilisateurs.png)

#### Tous les utilisateurs

![Utilisateurs - tous les utilisateurs](images/interface_barre_menus_Utilisateurs_tous_les_utilisateurs.png)

Affiche la liste de tous les utilisateurs enregistrer sur votre site avec toutes les informations s'y rapportant. Par défaut il n'y a au départ que votre profil d'administrateur créer lors de l'installation de WordPress.

#### Ajouter

![Utilisateurs - Ajouter](images/interface_barre_menus_Utilisateurs_ajouter.png)

Permets d'ajouter de nouvel utilisateur en mentionnant toutes les infos nécessaires le concernant et surtout en définissant avec prudence et réflexion son Rôle (Abonné, contributeur, Auteur, Editeur, Administrateur)

#### Votre profil

![Utilisateurs - Votre profil](images/interface_barre_menus_Utilisateurs_votre_profil.png)

Permets de gérer toutes les informations relatives à votre profil. Il est important de changer ici le pseudonyme et le Nom à afficher publiquement pour ne pas faciliter la tâche des pirates qui voudrait avoir prendre le pouvoir sur l'administration de votre site.

Dans l'idéal on n’utilise pas le nom admin comme nom d'administrateur, car il est trop courant. Pour changer cela, vous pouvez aller dans "Ajouter" dans le menu "Utilisateurs" et créer un nouvel administrateur avec un autre nom moins évident et un mot de passe sécurisé en gardant les deux précieusement et lui donné le rôle administrateur. Vous pouvez ensuite supprimer l'ancien utilisateur appelé admin.

Dorénavant vous vous ne pourrez plus vous connecter avec le nom "admin" et votre ancien mot de passe. Il vous faudra entrer votre nouveau nom d'administrateur et votre nouveau mot de passe sécurisé.


### Outils

![Outils](images/interface_barre_menus_Outils.png)

Vous pourrez trouver ici un outil déjà installé.

#### Outils disponibles

![Outils - Outils disponibles](images/interface_barre_menus_Outils_disponibles.png)

Il s'agit de la liste des outils déjà installés

#### Importer

![Outils - Importer](images/interface_barre_menus_Outils_importer.png)

Vous trouverez ici tous les outils que vous pouvez télécharger avec une explication brève de leur fonctionnalité.

#### Exporter

![Outils - Exporter](images/interface_barre_menus_Outils_exporter.png)

Cliquez sur ce bouton pour que WordPress crée un fichier XML que vous pourrez enregistrer sur votre ordinateur.

Ce format, que nous appelons WordPress eXtended RSS (ou WXR), contient tous vos articles, pages, commentaires, champs personnalisés, catégories et étiquettes.

Une fois que le fichier téléchargé a été enregistré, vous pouvez utiliser la fonction Importer d’un autre site WordPress pour importer ce fichier dans cet autre site.


### Réglages

![Reglages](images/interface_barre_menus_Reglages.png)

#### Général

![Reglages - Général](images/interface_barre_menus_Reglages_general.png)

**Titre:** il s’agit du titre de votre site qui a déjà été déterminé lors de l'installation de WordPress. Si celui-ci ne vous convient pas, vous avez la possibilité de le changer ici.

**Slogan:** il est généré automatiquement par WordPress "Un site utilisant WordPress", je vous conseille de le changer.

Selon le thème que vous choisirez, le titre et le slogan de votre site seront affichés ou non pour vos utilisateurs. Pensez également à choisir des mots qui sont utiles selon votre secteur d'activité pour votre référencement SEO. Généralement les thèmes affichent le slogan juste sous le titre du site.

Si on bascule vers l'onglet qui affiche notre site on voit effectivement que le titre et le slogan sont affichés. Si on désire effectuer des modifications, ne pas oublier de cliquer en bas sur le bouton "Enregistrer les modifications" puis basculer sur l'onglet qui affiche notre site pour voir le résultat après un rafraichissement (actualisation) de la page (Ctrl+F5).

**Adress web de WordPress (URL):** L'adresse qui permet d'accéder au dossier qui contient tous les fichiers WordPress de votre site.

**Adresse web du site (URL):** Permet d'indiquer une URL différente de la précédente. Cela peut être utile pour indiquer une adresse simplifiée. Sinon indiquer la même adresse que celle renseignée dans le champ précédent.

**Adresse de messagerie :** utilisée pour l'administration (vous tenir informé de l'inscription d'un nouvel utilisateur par exemple, ...). C'est l'adresse mail que vous avez renseignée lorsque vous avez installé WordPress. Vous pouvez la modifier, mais n'oubliez pas de la confirmer pour l'activer grâce au message qui vous sera envoyé à la nouvelle adresse mail.

**Inscription :** Ne cocher pas cette option si vous voulez garder un certain pouvoir sur votre site au début. Elle est utile uniquement si vous créez un site qui permet par exemple aux utilisateurs de s'enregistrer pour publier des contenus. Dans ce cas soyer particulièrement attentif à l'option qui suit, celui du rôle par défaut de tout nouvel utilisateur sous peine d'avoir de grosses surprises.

**Rôle par défaut de tout nouvel utilisateur :** Abonné, contributeur, auteur, éditeur, administrateur.

**Langue du site:** Français

**Fuseau horaire:** plutôt que d'indiqué UTC+1, je vous conseille de sélectionner dans la liste déroulante la ville de Paris. Cela permettra une mise à jour automatique de l'heure d'hivers et d'été.

**Format de date :** On peut indiquer le format de date souhaité qui sera par exemple utilisé pour dater la date de publication d'un contenu. Vous pouvez également le personnalisé avec le format de date PHP.

**Format d'heure :** On peut indiquer le format d'heure souhaitée et qui peut également être personnalisée avec le format d'heure en PHP

**La semaine débute le :** lundi

Ne pas oublier de cliquer sur le bouton "Enregistrer les modifications".



#### Écriture

![Reglages - Ecriture](images/interface_barre_menus_Reglages_ecriture.png)

Cette section reprend toutes les options concernant les formats par défaut des catégories et des articles.

C'est également à cet endroit que vous pouvez définir les paramètres pour vous permettre de publier dans WordPress directement à partir d'un mail. Le contenu du mail sera publié sur le site. C'est utile si pour une raison ou l'autre on n'a pas la possibilité de se connecter à l'interface de WordPress, mais que l'on doit y publier du contenu.

N"oubliez pas d'enregistrer les modifications.

#### Lecture

![Reglages - Lecture](images/interface_barre_menus_Reglages_lecture.png)

Cette section rassemble toutes les options d'affichage de votre site (ce que doit afficher la page d'accueil, le nombre d'articles que doivent afficher les pages, le nombre d'éléments à afficher par les flux de syndication (flux RSS) et si le texte des flux doit être affiché au complet ou juste un extrait)

C'est aussi à cet endroit que l'on peut cocher ou décocher la case " Demander aux moteurs de recherche de ne pas indexer ce site" sachant que
certains moteurs de recherche peuvent décider de l’indexer malgré tout.


#### Discussion

![Reglages - Discussion](images/interface_barre_menus_Reglages_discussion.png)

C'est à cet endroit que l'on va gérer les paramètres liés aux commentaires sur notre site.

Les autres options permettent de:

*  Tenter de notifier les sites liés depuis le contenu des articles : Si vous cochez cette case, WordPress enverra un ping à un site ou un article

* Autoriser les liens de notification d’autres blogs (pings et rétroliens) sur les nouveaux articles : cochez cette case pour que WordPress accepte ou décline les pings d'autres sites qui pourraient référencer votre site ou un article sur votre site.

* Autoriser les lecteurs à publier des commentaires sur les nouveaux articles
(Ces réglages peuvent être modifiés pour chaque article.) :  est cochée par défaut, les commentaires sont donc par défaut autorisés sur la totalité des articles de votre site WordPress. Il est option est cochée il est possible de ne pas autoriser les commentaires sur certains articles seulement. Cela fonctionne aussi si vous décochez l'option, vous pouvez faire une ou plusieurs exceptions en autorisant les commentaires sur certains articles seulement.

*  L’auteur d’un commentaire doit renseigner son nom et son adresse de messagerie : évite les messages anonymes

* Un utilisateur doit être enregistré et connecté pour publier des commentaires : autorise uniquement les utilisateurs enregistrés et connectés à publier des Commentaires

* Fermer automatiquement les commentaires pour les articles vieux de plus de 14 jours : évite d'avoir des réactions sur des articles obsolètes

* Permet une hiérarchisation des commentaires et des réponses précises à certaines partie des commentaires.

* Diviser les commentaires en pages, avec 50 commentaires de premier niveau par page et la dernière page affichée par défaut : nombre de commentaires par page et ordre chronologique de ceux-ci.

* Les commentaires doivent être affichés avec le plus  en premier: ordre chronologique de l'affichage des commentaires

* M’envoyer un message lorsqu’un nouveau commentaire est publié

* M’envoyer un message lorsqu’un commentaire est en attente de modération

* Avant la publication d’un commentaire,  le commentaire doit être approuvé manuellement : attention exige le travail très régulier d'un modérateur pour approuvé ou non la publication des commentaires

* Avant la publication d’un commentaire, l’auteur d’un commentaire doit avoir déjà au moins un commentaire approuvé

* Modération de commentaires : vise à limiter au maximum les spams dans les commentaires qui contiennent généralement plusieurs liens et les places alors automatiquement dans la file de modération. Il est également possible d'indiquer ici des adresses IP, ou des mots (lié à la pornographie, racisme, vente illégale de produits en tout genre, mots grossiers ou insultes ...) qui si ils sont repérés dans un commentaire les placeront automatiquement en file de modération . Attention n'indiquer qu’une adresse IP ou un mot clef par ligne.

* Liste noire pour les commentaires : Lorsqu’un commentaire contient l’un de ces mots dans son contenu, son nom, son URL, son adresse de messagerie, ou son adresse IP, il sera mis à la corbeille. Un seul mot ou une seule adresse IP par ligne. Cette fonction reconnaît l’intérieur des mots, donc « press » suffira pour reconnaître « WordPress ».

* Avatars
  * Afficher les Avatars
  * Classement maximal  G — Visibles par tous
                        PG — Possiblement offensants, réservés normalement aux personnes de 13 ans et plus
                        R — Réservés aux personnes de plus de 17 ans
                        X — Réservés aux adultes

* Avatar par défaut : choisissez un avatar par défaut si l'utilisateur n'en choisit pas un lui-même

Attention: Vous devez cliquer sur « Enregistrer les modifications » en bas de l’écran pour que les nouveaux réglages prennent effet.



#### Médias

![Reglages - Medias](images/interface_barre_menus_Reglages_medias.png)

Lorsque vous télécharger une image dans la bibliothèque de WordPress, celui génère automatiquement 3 tailles d'images différentes qui seront tout accessibles lors de leur insertion dans les contenus (articles ou pages). Vous pouvez déterminer les dimensions exactes des trois tailles (miniatures (par défaut 150x150), moyenne (par défaut 300 x 300) et grandes (par défaut 1024 x 1024)) qui seront générées par WordPress pour vos images en allant dans le menu "Réglages"--> "Médias". L'image sera tronquée pour correspondre à ces mesures. Pour les images qui ne sont pas carrées, WordPress adaptera au mieux le recadrage en fonction de la hauteur ou de la largeur de votre image.

Certains thèmes utilisent une taille précise pour assurer un affichage optimal de vos images. Consulter la documentation de votre thème pour savoir quelle devrait être la taille de vos images pour assurer un meilleur résultat.

Toutes les images (format original + 3 tailles générées par WordPress) sont placées dans l'arborescence de votre site WordPress dans un dossier appelé "uploads". Si vous avez coché la case " Organiser mes fichiers envoyés dans des dossiers mensuels et annuels" les images seront placées à cet endroit dans des sous-dossiers portant le nom de l'année et du mois durant lequel elles ont été téléchargées.Je vous conseille de laisser cette case cochée, car elle facilite la recherche d'une image précise.

Si vous apporter des modifications au réglage médias, n'oubliez pas d'enregistre vos modifications.

#### Permaliens (A manipuler avec précaution)

Attention avant de modifier les permaliens que se soit via le menu "Réglages" ou directement dans la modification d'article, FAITES TOUJOURS UNE SAUVEGARDE DE VOTRE SITE !!! Les modifications dans les permaliens peuvent parfois causer des problèmes et empêchent l'affichage correct des articles. Donc ayez à portée de main une sauvegarde prête à être restaurée en cas de problème (plugin updraftplus)

Les permaliens sont la partie visible de l’adresse Web, qui vient après votre nom de domaine, et qui pointe vers les messages et les pages de votre site.

Modifier les permaliens sur un site en place peut être risqué. Vous devez être absolument sûr de vouloir faire ce changement, car il peut avoir un impact sur votre référencement. Cela peut aussi causer beaucoup d’erreurs et de liens rompus si la modification n’est pas faite correctement.

Les permaliens ont plusieurs fonctions:

* Ils permettent à vos lecteurs d’obtenir une compréhension sommaire du sujet traité dans l’article ou la page sans regarder le contenu.

* Ils sont utilisés par les moteurs de recherche pour découvrir le sujet de l’article ou de la page à partir de l’URL.

* Ils fournissent un emplacement permanent à vos visiteurs et aux moteurs de recherche pour accéder à votre contenu.

* Ils sont essentiellement un identifiant unique pour chaque élément de contenu que vous créez.

Lorsque vous avez choisi la syntaxe, vous allez utiliser, il est temps d’aller dans le menu permaliens de votre tableau de bord et d’effectuer les changements.

Attention: L’ensemble de vos URL internes sera mis à jour avec la nouvelle syntaxe, si elles ont été ajoutées dans le cadre de WordPress. Tous les autres liens devront être mis à jour manuellement.

Attention: Notez cependant que tous les liens vers votre site provenant des moteurs de recherche, des rétroliens, etc… sont à présent brisés et le contenu indexé par les moteurs de recherche ne pointera plus vers les articles correspondants.

![Reglages - Permaliens](images/interface_barre_menus_Reglages_permaliens.png)

La fonction des permaliens de WordPress c'est ce qui permet de construire des URL optimisées.

Par défaut, l'URL de la page dédiée à l'affichage de vos articles sera du type (valeur par défaut):

http://localhost/wp_workshop/?p=123

Le p dans ce cas fait référence à l'identifiant du post (c'est à dire de l'article).

Ce type de permalien est tout à fait déconseillé si vous désirez optimiser votre site pour le référencement (SEO), car il n'est absolument pas optimisé, car elle ne contient aucun mot clef susceptible d'être employé par vos utilisateurs dans un moteur de recherche.

Une meilleure option est de choisir "Nom de l'article" ainsi tous les termes utiliser dans le titre seront repris dans l'URL. On obtiendra une URL du type:

http://localhost/wp_workshop/wordpress-cest-la-simplicite/

Pour créer automatiquement cet URL à partir du titre, WordPress a supprimé la ponctuation (, ! ?, ...), les espaces ont été remplacés par des tirets, les majuscules ont été converties en minuscule et les apostrophes ont également été supprimées. Les caractères accentués seront transformés en leur équivalent non accentué é --> e.

Pour un site d'actualité pour laquelle la date de publication peut être une information importante, je vous conseille de choisir plutôt l'option "Structure personnalisée" et d'indiquer une date (jour/mois/année) avant le nom du post. Ces informations sont importantes, car elles peuvent indiquer si un article est toujours d'actualité ou peut comporter des informations qui ne seront pas toujours très récentes.

On obtient alors une URL de ce type:

http://localhost/wp_workshop/wordpress-simplicite/

On peut aller encore plus loin dans la personnalisation de nos permaliens en allant directement dans "Articles" --> "Tous les articles" et en cliquant sur un des articles de la liste. Sous le titre,on voit s'affiche le permalien. Cliquer sur le petit bouton "Modifier" et supprimer dans le lien tous les mots liens inutiles qui n'ont rien de pertinent dans une recherche internet, pour simplifier au maximum l'URL. Attention respecter les règles de nommage (que des minuscules, chiffres, trait d'union, pas d'espace ni de majuscules ni de caractère accentués). N'oubliez pas de mettre à jour votre article.

On obtient alors une URL de ce type:

http://localhost/wp_workshop/20/03/2018/bonjour-tout-le-monde/

## Problème de liens cassés - page 404 lorsque permaliens passés en option "Nom de l'article"

Le problème est identique loque l'on choisit "structure personnalisée" et que l'on indique juste "/%postname%/", ce cela revient au même que l'option "Nom de l'article" et donc est modifié en "Nom de l'article" automatiquement lors de l'enregistrement.

Voici la marche à suivre pour optimiser malgré tout vos liens. Choisissez "Structure personnalisée" et copiez dans le champ le code suivant:

```
/index.php/%postname%/
```

Enregistrer les modifications. Revenez sur la page d'accueil de votre site (http://localhost/wp_workshop/), rafraichissez la page et cliquer sur le titre d'un de vos articles. Il devrait à présent s'afficher avec une adresse URL du type : http://localhost/wp_workshop/index.php/bonjour-tout-le-monde/

Le rajout de index.php dans l'URL n'est pas idéal, mais permet de contourner le problème et surtout d'indiqué une URL contenant le titre de votre article plutôt qu'un numéro d'ID qui n'apporte aucune info à vos visiteurs, ni au moteurs de recherche et donc nuit à votre référencement (SEO).

Le contenu du fichier .htaccess situé à la racine du dossier de votre site (créer lors de la modification des permaliens) reflète ce changement (fichier caché auquel on ne peut avoir accès en écriture qu'en mode administrateur (sudo))

```
# BEGIN WordPress

<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /wp_workshop/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /wp_workshop/index.php [L]
</IfModule>

# END WordPress
```


## connaitre le thème et les plugins utilisés sur un site WordPress**

Rendez-vous à l'adresse : http://whatwpthemeisthat.com/
Tapez l'URL du site concerné dans le champ de recherche et voilà !!!!
Pour tester, taper l'adresse: http://www.tinkeringmonkey.com/work/



## Outils de commerce en ligne

### Woocommerce (gratuit):

Pour qui: PME et startups

Avantages:

* pouvoir communiquer avec les clients (possibilité création blogs) pour établir réelle communication client.

* Prise en main rapide

* API fournie de base

* Beaucoup de plugins gratuits

Inconvénients:

* Gestion des produits devenant problématique quand beaucoup d'Articles

* Manque de classification des produits par dossiers ou Catégories

Exemple: https://www.archisain.be/ (photo credits Daniel De Vos)

### Prestashop (gratuit):

Pour qui: Pour les PME et société plus importantes (moins de services orientés client - plus service orienté vente uniquement)

Avantages: Ce plugin d'e-commmerce assure même avec un grand nombre d'articles

Prise en main intuitive

Inconvénients:

La plupart des plugins sont payants

Exemple: https://shop.bonnegueule.fr/

### Magento:

Pour qui: Pour les grosses sociétés de e-commerce

Avantages:

Une fois maitriser permet de réaliser un site de e-commerce très performant

Inconvénients:

Prise en main complexe, très nombreux réglages, peu intuitifs

Exemple : http://www.kookai.co.uk/



Petits comparatifs

https://www.mister-wp.com/plugin/woocommerce/

https://monsieurecommerce.com/shopify-woocommerce-magento-prestashop-comment-choisir/




## Traduction de vos sites multilingues

Pour traduire vos sites en plusieurs langues, je vous conseille d'utiliser un plugin dédié tel que WPML to Polylang (traduction de votre site en plusieurs langues): https://fr.wordpress.org/plugins/wpml-to-polylang/

Deux articles intéressants pour vous aider à choisir le bon plugin selon vos besoins:

https://www.lafabriquedunet.fr/creation-site-vitrine/articles/plugins-wordpress-traduire-site-internet/

https://blog.lws-hosting.com/creation-de-sites-web/3-meilleurs-plugins-creer-site-multilingue-wordpress



## Bonnes pratiques dans l'usage de WordPress

* Effacer les fichiers et articles inutiles dans WordPress après installation - supprimer certains réglages par défaut (settings/permalinks; supprimer fichier readme.html (à la racine), supprimer tagline settings/general et remplacer par theme du site pour le SEO, modifier footer (fièrement propulsé par WordPress + hook avec mise à jour automatique de l'année))

* Mettre à jour régulièrement son site tant la version de WordPress que les plugins (sécurité)

* Faire des sauvegardes régulières de son site sur son ordinateur + support distant (usage plugin udpdraft Plugins)

* Éviter l'abus de plugins pour ne pas limiter les performances de votre site et limiter le risque d'erreurs

* Penser à l'optimisation SEO à chaque étape de la conception de votre site (du choix du nom de domaine à la rédaction de contenu, jusqu'au nommage des images)

* Veillez à effectuer une gestion des droits utilisateurs intelligente qui à la fois permet aux rédacteurs et collaborateurs d'avoir accès à ce dont ils ont besoin tout en limitant l'accès aux autres parties du site (masquage de certaines zones de contrôles selon les utilisateurs)- activé akismet fournit par défaut (anti-spam)

* Mettez en place un plug-in de sécurité pour contrer les failles les plus courantes liées au succès de ce CMS. (secu-press - Julio potier)

* Ne donnez pas accès à trop d'options de customisation à vos utilisateurs rédacteurs sous peine de voir votre charte graphique devenir très vite chaotique (accès à la couleur, à des polices fantaisie, etc.)

* Veillez à toujours optimiser vos images et vos vidéos pour le web avant de les intégrer dans la bibliothèque de votre site. Le poids des images et autres éléments graphiques peut peser très lourd dans la balance en matière de performance et de rapidité de votre site.

* Ne plongez pas systématiquement sur les ressources gratuites en matière de thème ou de plug-ins, car ce type d'offre ne vous apporte souvent pas un bon support client et limite vos possibilités de personnalisations. Investir un peu d'argent peut vous faire gagner un temps précieux et vous éviter beaucoup de soucis.

* Vérifier toujours la compatibilité des plugins avec la version de WordPress que vous utilisez et vérifier également si le développeur met toujours à jour régulièrement le plugin qui vous intéresse. En cliquant sur le plugin dans la page https://wordpress.org/plugins/, exemple : https://wordpress.org/plugins/akismet/, on peut constater dans la colonne de droite que la dernière mise à jour (Last update: 3 weeks ago) date d'il y a 3 semaines. De plus vu le nombre d'installations actives  (5+ millions) de ce plugin, il est fort à parier qu'en cas de bug, celui-ci sera très vite réparer et que vous pourrez également trouverer de l'aide auprès d'autres personnes unissant ce même plugin sur leur site.

* Changer votre pseudonyme et le nom afficher publiquement dans la section modifier mon profil de la barre d'outils en haut de l'interface d'administration WordPress. Vous pouvez également changer votre identifiant afin de compliquer la tâche des pirates informatiques (voir procédure : https://korben.info/securiser-wordpress-changer-nom-compte-admin.html )

* Dans les extensions, supprimer le plugin Hello Dolly qui n'est là qu'à titre d'exemple et de remplissage.

* Activer l'extension Akismet (Anti-Spam) dans la section "Extensions" et veiller à sa mise à jour régulière. Ce plugin est installé par défaut directement lors de votre installation de WordPress, mais il faut encore l'activer pour le rendre opérationnel.

* Voici encore quelques astuces qui vont vous permettre de rendre votre site WordPress plus professionnel rapidement : https://wpmarmite.com/site-wordpress-professionnel/

* Modifier les permaliens (URL) de vos articles afin d'avoir des URL propres et dépourvues de mots liens inutiles. Une bonne gestion des permaliens (URL) de vos articles permet une optimisation de l'indexation des pages de votre site et un meilleur référencement.

* Ne pas se contenter de désactiver les plugins que l'on n’utilise pas, mais les désinstaller, car ils offrent malgré leur désactivation une porte d'entrée pour les pirates sur votre site si une faille est découverte dans leur code.
