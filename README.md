# Laravel 12 Projekt ToDo-Liste 

Eine einfach Aufgabenverwaltungs-Tool (ToDo-Liste) auf Basis von **Laravel 12** und **Bootstrap 5** – ideal zum Lernen und Ausprobieren.

---

## ✅ Features

- Benutzer-Authentifizierung (Login, Registrierung)
- Aufgaben erstellen, bearbeiten, löschen
- Aufgaben als "erledigt" markieren
- Nur eingeloggte Nutzer sehen ihre Aufgaben
- Bootstrap 5 für ein schnelles und responsives Frontend

---

## 🔧 Voraussetzungen

- [DDev](https://ddev.com/) (Anwesoft is an official sponsor of that great Docker-based PHP development environment ;-)

---

## 🚀 Installation

```bash
git clone https://github.com/anwesoft/laravel-todo.git

cd laravel-todo

//create DDev configuration
ddev config

//edit /.ddev/config.ymal (optional)

//install phpMyadmin & restart DDev
ddev add-on get ddev/ddev-phpmyadmin
ddev restart

//log in DDev SSH
ddev ssh

//install composer dependencies
php composer install

//run Laravel migrations and seed demo data
php artisan migrate:fresh --seed

```

---

## 🚀 Wichtige Befehle

```bash
cd laravel-todo

//start DDev project
ddev start

//list URLs of DDev project
ddev describe

//restart DDev
ddev restart

```

---

## 🔐 Test-Zugang

- URL: https://laravel-todo.ddev.site/
- **E-Mail:** test@example.com  
- **Passwort:** password

## 💻 Projektstruktur

| Pfad                  | Beschreibung                         |
|-----------------------|--------------------------------------|
| `routes/web.php`      | Alle Webrouten inkl. Middleware      |
| `resources/views/`    | Blade-Templates mit Bootstrap 5      |
| `app/Models/TaskItem` | Aufgaben-Modell                      |
| `database/seeders/`   | Seeder für Testdaten                 |

---

## 📦 Verwendete Technologien

- Laravel 12 (PHP Framework)
- Bootstrap 5 (CSS-Framework)
- Blade Templates
- Laravel Auto-CRUD
---

## 📌 History

Dieses Projekt nutzt [Semantic Versioning 2.0.0](https://semver.org):

```
MAJOR.MINOR.PATCH
```

| Datum      | Version | Bemerkung                 |
|------------|---------|---------------------------|
| 09.05.2025 | 1.1.0   | Dokumentation + Demodaten |
| 02.05.2025 | 1.0.0   | Initiale Version          |


## 📄 Lizenz

Dieses Projekt ist unter der MIT-Lizenz veröffentlicht.

---

## 👤 Autor

Erstellt mit ❤️ von [Anwesoft](https://github.com/company/anwesoft) :)
