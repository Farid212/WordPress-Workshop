## Partie 7 : Annexes

### Ressources

#### Comment déployer son site Wordpress sur un serveur en ligne

Pour installer WordPress en ligne vous avez besoin de :
- Un serveur web (voir liste de suggestions plus bas)
- Un nom de domaine (DNS) - exemple: http://www.supersite.be
- Une base de données (MySQL)
- Un logiciel FTP qui permet de transférer les fichiers de votre ordinateur vers votre serveur en ligne (par exemple FileZilla Client - gratuit) (https://filezilla-project.org/)


**Nom de domaine**

Un nom de domaine ou DNS est un nom unique que vous choisissez pour votre site afin de lui conférer une identité sur internet. Il s'agit de l'adresse url de votre site, c'est donc à grâce à elle que vos utilisateurs vont pouvoir vous trouver. Il est donc important qu'elle soit facile à retenir, ne prête pas à confusion dans sa manière d'être orthographiée, ne soit pas trop longue.

Un nom de domaine se compose de deux parties:

* le nom: par exemple "supersite"
tout est possible le nom peut se composer de deux ou plusieurs signes, il peut comporter des lettres de aà z, des chiffres de 0 à 9 ou d'un tiret.
* l'extension ou TLD (Top Level Domain) (la parite qui suit le point): ex: .be, .fr; .com, .eu etc...
Il existe de nombreuses extensions. Certaines sont liées au pays (.be, .fr., .ca, ...), d'autres aux type d'activités de votre site (.com, .biz, .net, .info, .org, ...)

Voici quelques articles qui vous apporterons de précieux conseils dans l'étape cruciale du choix de votre nom de do


**Hébergement**

Vous pouvez choisir un hébergeur qui respecte les 2 conditions suivantes : le serveur doit être capable de lire le langage PHP et le langage de base de données MySQL.

Les recommandation du site WordPress.org en matière d'hébergement sont les suivantes, elle ne représente pas une limitation mais bien une recommandation pour une meilleure securité:

Serveur Apache ou NGinx
PHP version 7.2 ou supérieure
MySQL version 5.6 or supérieur OU MariaDB version 10.0 ou supérieur
support du HTTPS

Configuration minimale de votre hébergeur pour un site WordPress:

PHP 5.4 ou supérieure
MySQL 5.5 ou supérieure

Attention ce type de configuration vous expose à des failles de sécurité connues et non colmatées dans ces versions et à un éffondrement des performances de votre site.

Voici quelques articles qui pourront vous aider dans le choix de votre hébergeur en fonction de vos besoins: (hébergement sur un serveur mutualisé, dédié VPS ou spécialement conçu pour WordPress)

https://wpmarmite.com/hebergement-wordpress/
https://www.mister-wp.com/guests/quel-hebergeur-web/
https://wpformation.com/choisir-hebergement-wordpress/

Par expérience, je vous déconseille les offres d'hébergement gratuites qui souvent offrent de piètres performances mais surtout qui en cas de problème vous offre un support quasi inexistant. Les offres payantes ne signifie pas de se ruiner, certaines offre débute à 2.41€/mois auquel il faudra ajouter le prix de votre nom de domaine (https://www.dnsbelgium.be/fr/nom-de-domaine) au alentour de 10€


Les hébergeurs que je vous conseille:

- OVH (https://www.ovh.com/fr/) - payant - leader du marché - prix bas mais peu être complexe et support mail lent mais rapide par téléphone

- One.com (https://www.one.com/fr/) - payant - prix très attractif,2.41€ TTC/mois) interface en français et très claire et accès directement via l'interface du site à votre DB - support en ligne 24h/24 - Website Builder 5 pages gratuits inclus dans l'offre. Nom de domaine pouvant également être commander sur le site (prix à partir de 8€, 9€ pour un .be)

- O2swithc (https://www.o2switch.fr/)


Je vous recommande de consulter cet article concernant les meilleurs hébergements de sites WordPress pour 2018 : https://hebergement-wp.info/comparatif-hebergements-wordpress/

Pour les sites de eCommerce qui se doivent d'être toujours accessible et sécurisé, le choix d'un hébergement de qualité est primordiale. Je vous recommande de consulter cet article concernant plus spécifiquement le top 5 des meilleurs hébergements WooCommerce pour 2017 : https://hebergement-wp.info/comparatif-hebergements-woocommerce/


Voici un article qui poura vous aider dans le choix de votre hébergeur en fonction de vos besoins:

https://wpformation.com/choisir-hebergement-wordpress/


Lorsque vous souscrivez à une formule d'hébergement, vous recevez un mail de votre hébergeur contenant les codes d'accès (adresse, identifiant, mot de passe, port) nécessaires pour mettre votre site en ligne sur votre espace d'hébergement.

Selon les hébergeurs, les instructions seront peut-être légèrement différentes, mais généralement, vous devrez placer le contenu de votre dossier wordpress (pas le dossier mais uniquement son contenu) dans le dossier nommé "www" ou directement à la racine de votre espace d'hébergement.![Installation WP - etape 2](install wp 2.jpg)


#### Les sites traitant de WordPress pour vous tenir au courant et en apprendre plus

* WP Marmite (https://wpmarmite.com) :  Un site en français très bien conçu pour les débutants, qui vous permettra de gagner rapidement en compétences et de répondre à la majorité des questions que vous pouvez vous poser lorsque vous débuter avec WordPress. On vous prends par la main et on vous explique tout ;)


#### Glossaire des termes wordPress

https://wpmarmite.com/glossaire/
