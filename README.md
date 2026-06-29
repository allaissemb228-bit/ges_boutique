# 🛍️ Ges Boutique

Une application web développée avec **Laravel** permettant de gérer une boutique en ligne. Elle offre une interface moderne pour administrer les clients, les produits, les commandes et la facturation.

---

## 📖 Description

Gest Boutique est une application de gestion commerciale conçue pour faciliter le suivi des ventes d'une boutique.

Elle permet de :

- Gérer les clients
- Gérer les produits
- Enregistrer les commandes
- Générer les factures
- Consulter un tableau de bord des activités

---

## ✨ Fonctionnalités

### 👤 Gestion des clients

- Ajouter un client
- Modifier un client
- Supprimer un client
- Rechercher un client

### 📦 Gestion des produits

- Ajouter un produit
- Modifier un produit
- Supprimer un produit
- Gestion du stock
- Gestion des prix

### 🛒 Gestion des commandes

- Création d'une commande
- Association d'un ou plusieurs produits
- Calcul automatique du montant total
- Historique des commandes

### 🧾 Facturation

- Génération automatique des factures
- Impression des factures

### 📊 Tableau de bord

- Nombre total de clients
- Nombre de produits
- Nombre de commandes
- Chiffre d'affaires

---

# 🛠️ Technologies utilisées

- Laravel
- PHP 8+
- MySQL
- HTML5
- CSS3
- Bootstrap
- Blade
- JavaScript

---

# 📁 Structure du projet

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

---

# ⚙️ Installation

## 1. Cloner le projet

```bash
git clone https://github.com/VOTRE-NOM-UTILISATEUR/gest_boutique.git
```

---

## 2. Entrer dans le dossier

```bash
cd gest_boutique
```

---

## 3. Installer les dépendances

```bash
composer install
```

---

## 4. Installer les dépendances JavaScript

```bash
npm install
```

---

## 5. Copier le fichier d'environnement

```bash
cp .env.example .env
```

---

## 6. Générer la clé de l'application

```bash
php artisan key:generate
```

---

## 7. Configurer la base de données

Modifier le fichier `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gest_boutique
DB_USERNAME=root
DB_PASSWORD=
```

---

## 8. Exécuter les migrations

```bash
php artisan migrate
```

Si des données de démonstration sont disponibles :

```bash
php artisan db:seed
```

---

## 9. Lancer le serveur

```bash
php artisan serve
```

L'application sera disponible sur :

```
http://127.0.0.1:8000
```

---

# 📂 Base de données

Le projet utilise les tables suivantes :

- clients
- produits
- commandes
- commande_produit

---

# 📷 Aperçu

Vous pouvez ajouter ici des captures d'écran du projet.

Exemple :

```
/screenshots/dashboard.png
/screenshots/produits.png
/screenshots/commandes.png
```

---

# 🚀 Améliorations futures

- Authentification des utilisateurs
- Gestion des rôles (Administrateur, Employé)
- Tableau de bord avancé
- Paiement en ligne
- Notifications
- API REST
- Export PDF
- Export Excel

---

# 👨‍💻 Auteur

**Allaissem Benjamin**

Étudiant en Licence 2 – Génie Informatique

CBS – N'Djamena

GitHub : https://github.com/allaissemb228-bit
# 📜 Licence

Ce projet est distribué sous la licence MIT.
