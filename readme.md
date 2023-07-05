### How to run the code

Download the code from the github repository

Open it with visual studio code

### Setup Database connection

- Open Laragon HeidiSQL database
- Create a database named `bookstore` that defined in config `app.json`
- Create a table named `book`. You can import `table.sql` file in the root directory to create table and import 20 books autonatically.

Open the terminal and run the following command

```bash
    composer install
    php -S localhost:8000
```

Open the browser and go to the following url

```bash
    http://localhost:8000
```
