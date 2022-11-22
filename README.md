# CERIcar

je vais développer une application web dont le contexte applicatif sera le “covoiturage”.

Une proposition d'architecture MVC appuyée sur une programmation orientée objet vous est
présentée pour ce projet. Afin de bien comprendre cette architecture il sera utile de visionner
le code des fichiers évoqués. Un squelette de projet prêt à l’emploi 'squlette_L3.tar

Votre premier objectif est de comprendre cette architecture. Pour cela, n’hésitez pas à ouvrir
les différents fichiers fournis, à commenter le code déjà présent, etc. Prenez le temps de
comprendre

# les étapes a réaliser

\***\*\*\*\*\*\***premiere étape\***\*\*\*\*\*\***

les taches réaliser dans la premiere étape
a-j ai Testé le “helloWorld” pour vérifier son bon fonctionnement.
c. j ai Définie une action “superTest” qui prend deux paramètres dans l’url (param1 et
param2 par exemple) et affichez ce message: “j’ai compris <VALEUR PARAM1> ,
super : <VALEUR PARAM2>”
d. Dans le layout, j ai ajouteé un bandeau de notification permettant d'afficher un
message (de notification ou d'erreur) issu de l'exécution d'une action quelconque.

\***\*\*\*\*\*\***deuxieme étape\***\*\*\*\*\*\***
Dans une architecture MVC, un modèle définit un ensemble d'objets en lien direct avec
l'application visée. Dès lors qu'un objet fera référence à une entité stockée dans la base de
données, nous ferons appel à l'ORM (Object Relational Mapping) Doctrine 2 pour définir cet
objet et le manipuler. L’objectif de cette deuxième étape est de comprendre et implémenter
ce modèle dans son ensemble. Un ensemble d'informations vous permettant d'appréhender
Doctrine 2 est présenté dans l’annexe 2.

Dans le squelette que nous vous avons fourni, le dossier « model » contient les classes
propres à l'application. Pour l'instant, seules les classes « utilisateur » et « utilisateurTable »
sont présentes. La classe « utilisateur » propose un exemple d'annotation brute pour définir
l'entité correspondante. Seules les propriétés sont définies. Aucune relation n'est spécifiée.
La classe « utilisateurTable » contient la méthode permettant à l'utilisateur de se connecter
à son profil par son identifiant et son mot de passe. Vous devez implémenter les classes
d'entités « utilisateur », « trajet », « voyage » et « reservation », puis les classes
fonctionnelles si nécessaire, soit « utilisateurTable », « trajetTable », « voyageTable » et
« reservationTable ». Les méthodes définies dans ces classes seront a priori statiques (à
moins que votre implémentation demande le contraire) et appelées directement sans
instancier d'objet de classes. Concrètement, ces classes font la correspondance entre le
modèle de données et notre application. Elles renverront des instances d’objets construites
à partir des lignes récupérées en base.
Par exemple : la classe voyage représente une instance (= un enregistrement dans la table)
d’un voyage. La table voyageTable est la classe qui permet de récupérer à travers la base
de données des instances de voyage (= représente l’accès à la table). Ces deux classes
fournissent une couche d’abstraction à la base de données et apportent une structure métier
qui colle au modèle de données.

# fonctionnalité ajouter

a. l'ensemble des classes entités manquantes.
b. les méthodes dans le contrôleur vous permettant de tester votre modèle.
c. la classe trajetTable qui devra contenir au minimum :
➢ une méthode getTrajet($depart, $arrivee) permettant de récupérer un objet
du type trajet via une requête récupérant les données de la table trajet.
d. la classe voyageTable qui devra contenir au minimum :
➢ une méthode getVoyagesByTrajet($trajet) permettant de collecter l'ensemble
des voyages correspondant à un trajet, via une requête récupérant les
données de la table voyage. Cette méthode retournera une collection
contenant des objets de type voyage.
e. la classe reservationTable qui devra contenir au minimum :
une méthode getReservationByVoyage($voyage) permettant de collecter
l'ensemble des reservations correspondant à un voyage, via une requête
récupérant les données de la table reservation. Cette méthode retournera
une collection contenant des objets de type reservation.
f. la classe utilisateurTable qui devra contenir au minimum deux méthodes :
➢ l'une d'elle est déjà implémentée et est utilisée pour la connexion d'un
utilisateur à son profil, c'est la méthode « getUserByLoginAndPass ».
➢ une seconde méthode, getUserById($id), est destinée à récupérer les
informations d'un utilisateur selon un identifiant (id).
