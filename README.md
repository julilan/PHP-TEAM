# PHP-TEAM

Dev environment setup and GitHub repository for Programming PHP Team project.

## Setup

In terminal:

```
docker-compose up
```

## Usage

### Projects

- [Team Projects Landing Page](http://localhost:8006/)

### Project 1: Metrics

- [Metrics Landing Page](http://localhost:8006/project1-metrics/project1-landing.php)
- [Mass Converter](http://localhost:8006/project1-metrics/mass.php)
- [Speed Converter](http://localhost:8006/project1-metrics/speed.php)
- [Temperature Converter](http://localhost:8006/project1-metrics/temperature.php)

### Project 2: Form

- [Contact form](http://localhost:8006/project1-form/webform.php)

### Project 3: Todo App

- [Todo Home Page](http://localhost:8006/project3-todo/home.php)

In db.php file connect to current database by filling the correct database name

```php
$host = 'db';
$dbname = 'lionDB'; // replace with the correct dbname
```

Example create statements for todos table:

```sql
--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int NOT NULL,
  `todoTitle` varchar(50) NOT NULL,
  `todoDescription` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

## Source

- Dev setup: [PHP-MAMP](https://github.com/kalwar/PHP-MAMP) @kalwar

## Authors

Team Alpha:

- @julilan Julianna Molnár
- @stacknatic Michael Akerele
- @sahilt2 Sahil Thapa
- @maheshbhandari433 Mahesh Bhandari
