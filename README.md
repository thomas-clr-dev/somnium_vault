# Somnium Vault

Somnium Vault est une application communautaire dédiée au partage de rêves. Ce projet modernisé combine un back-end robuste en **Laravel** (v9 ou supérieur) et un front-end dynamique en **React.js** avec TypeScript (TSX). Le back-office est géré via **Filament**, offrant une administration rapide et ergonomique.

---

## Table des Matières

- [Fonctionnalités](#fonctionnalités)
- [Architecture](#architecture)
  - [Back-end (Laravel)](#back-end-laravel)
  - [Front-end (React TSX)](#front-end-react-tsx)
  - [Back-office (Filament)](#back-office-filament)
- [Installation](#installation)
  - [Configuration du Back-end](#configuration-du-back-end)
  - [Configuration du Front-end](#configuration-du-front-end)
- [Environnement de Développement](#environnement-de-développement)
- [Utilisation](#utilisation)
- [Add-ons Possibles](#add-ons-possibles)
- [Contribuer](#contribuer)
- [Licence](#licence)
- [Contact](#contact)

---

## Fonctionnalités

### Fonctionnalités Gratuites
- **Gestion de Compte**
  - Inscription, authentification et récupération de mot de passe sécurisés via Laravel Auth.
- **Gestion des Rêves**
  - Création, modification et suppression des publications.
  - Consultation, recherche et filtrage des rêves via des API.
- **Interactions Communautaires**
  - Commentaires, réactions (likes, émotions, etc.) et partage de rêves.
  - Création de groupes privés pour des échanges ciblés.

### Fonctionnalités Payantes
- **Génération de Médias**
  - Médias visuels générés par une API d’IA intégrée dans Laravel.
  - Médias personnalisés par des graphistes avec options audio.
- **Fonctionnalités Avancées**
  - Création de groupes publics illimités.
  - Outils de personnalisation et d’enrichissement de contenu pour abonnés premium.

---

## Architecture

### Back-end (Laravel)
- Développement d'API REST/GraphQL pour la gestion des utilisateurs, rêves, commentaires, groupes, médias et abonnements.
- Utilisation d’Eloquent pour l'interaction avec une base de données MySQL ou PostgreSQL.
- Intégration d’API externes (ex. OpenAI, Stable Diffusion) pour la génération de médias.
- Mise en place de Redis pour le caching et l'optimisation des performances.

### Front-end (React TSX)
- Interface utilisateur moderne, fluide et responsive développée en React avec TypeScript.
- Communication avec le back-end via des appels API REST ou GraphQL.
- Mise en œuvre d’animations et d'interactions dynamiques pour améliorer l'expérience utilisateur.

### Back-office (Filament)
- Panneau d’administration complet permettant la gestion des utilisateurs, contenus, abonnements et retours.
- Interface ergonomique facilitant la modération et le suivi des données.

---

## Installation

### Configuration du Back-end
1. **Cloner le dépôt et installer les dépendances**
   ```bash
   git clone <repository_url>
   cd somniumvault-back
   composer install

### Configuration de l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

Configurez le fichier `.env` pour la base de données MySQL, les services mail, etc.

### Migration de la base de données

```bash
php artisan migrate
```

### Installation de Filament (Back-office)

```bash
composer require filament/filament
php artisan filament:install
```

### Configuration du Front-end

#### Créer le projet React TSX

```bash
npx create-react-app somniumvault-front --template typescript
```

#### Installer les dépendances et démarrer le serveur

```bash
cd somniumvault-front
npm install
npm start
```

---

## Environnement de Développement

- **PHP** (>= 8.x) et **Composer** pour le back-end Laravel.
- **Node.js** (>= 14.x) et **npm** pour le front-end React TSX.
- **MySQL** ou **PostgreSQL** pour la base de données.
- **Redis** pour le caching.
- Outils de versioning : **Git**.

---

## Utilisation

- **API Back-end** : Accessible via des endpoints sous `/api/*`.
- **Panneau d'administration** : Accessible via `/admin` (Filament).
- **Interface Front-end** : L'application React consomme les API pour afficher les rêves, gérer les interactions et proposer des services premium.

---

## Add-ons Possibles

- **Notifications Push** : Intégration avec Firebase Cloud Messaging.
- **Mode Hors Ligne** : Mise en cache pour la consultation sans connexion.
- **Tableau de Bord Analytique** : Suivi de l'activité et de la popularité des rêves.
- **Chat en Temps Réel** : Utilisation de Laravel Echo et WebSocket.
- **Accessibilité** : Modules pour améliorer l'expérience des utilisateurs en situation de handicap.

---

## Contribuer

Les contributions sont les bienvenues !

1. Forkez ce dépôt.
2. Créez une branche pour votre fonctionnalité (`git checkout -b feature/ma-fonctionnalité`).
3. Committez vos modifications (`git commit -am 'Ajout de ma fonctionnalité'`).
4. Poussez sur la branche (`git push origin feature/ma-fonctionnalité`).
5. Ouvrez une Pull Request.

---

## Licence

Ce projet est sous licence **MIT**.

---

## Contact

Pour toute question ou support, contactez-nous à :  
**contact@somniumvault.com**