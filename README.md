# gestion-des-requetes
il s'agit d'une platteforme qui gere les requêtes ainsi que d'autres fonctionalités comme la gestion des cours, des salles et bien d'autres encore

# 🎓 E-Service Universitaire

Plateforme web universitaire permettant :

- 📂 Le dépôt de dossiers administratifs
- 📝 La gestion des requêtes étudiantes
- 📚 Le partage de supports de cours
- 📰 La publication des actualités du campus
- 👨‍💼 Un espace administrateur sécurisé
- 🔐 Authentification des utilisateurs

# 🚀 Fonctionnalités

## 👨‍🎓 Étudiants

- Création de compte
- Connexion sécurisée
- Dépôt de dossiers
- Consultation des requêtes
- Suivi des demandes
- Téléchargement des supports de cours
- Consultation des actualités

## 👨‍💼 Administrateur

- Gestion des utilisateurs
- Validation/Rejet des dossiers
- Publication des supports de cours
- Publication des actualités
- Gestion des fichiers uploadés

# 🛠️ Technologies utilisées

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- XAMPP

# 📁 Structure du projet

```bash
projet_it_2/
│
├── includes/
│   ├── db.php
│   └── navbar.php
│
├── uploads/
│   ├── cours/
│   └── actus/
│
├── css/
│   └── style.css
│
├── index.php
├── login.php
├── register.php
├── dashboard.php
├── depot.php
├── requetes.php
├── suivi.php
├── supports.php
├── actualites.php
├── admin.php
│
├── traitement_login.php
├── traitement_register.php
├── traitement_support.php
├── traitement_actualite.php
│
├── logout.php
│
└── gestion_requetes.sql

⚙️ Installation

1️⃣ Installer XAMPP

Télécharger XAMPP :

https://www.apachefriends.org/

2️⃣ Cloner le projet

git clone https://github.com/VOTRE_USERNAME/projet_it_2.git

3️⃣ Copier dans htdocs

Déplacer le projet dans :

C:\xampp\htdocs\

4️⃣ Démarrer Apache et MySQL

Depuis le panneau XAMPP :
	•	Apache ✅
	•	MySQL ✅

5️⃣ Importer la base de données

Ouvrir :

http://localhost/phpmyadmin

Créer une base :

gestion_requetes

Importer :

gestion_requetes.sql


⸻

▶️ Lancer le projet

Dans le navigateur :

http://localhost/projet_it_2

🔐 Compte administrateur

Modifier le rôle d’un utilisateur :

UPDATE users
SET role='admin'
WHERE email='admin@gmail.com';


⸻

📌 Auteur

Projet réalisé par Mouafo Wemeni Alan Daniel alias DANIEL DAMS
Étudiant en Génie Informatique

⸻

📄 Licence

Projet académique / éducatif

