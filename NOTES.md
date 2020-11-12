# Beginner PHP

Launch a server.
`php -S localhost:8888`

- Uses double quotes " for interpolation
  - Convention often adds curly braces around interpolated vars
- concatenate strings with . "Hello " . "World"

- if a file is 100% php, you can omit the closing tag

  - but if you have a mix, you need to add the closing tag

- "super globals" are like execution context globals such as `$_GET['query-string-key-here']` (for accessing query strings in the url for example).

- alias for `<?php echo "Hello World ?>` is `<?= "Hello World" ?>`

- `htmlspecialchars` is the sanitizer for html

- generally, you separate PHP logic from the view

- `require index.view.php` ==> pull in everything from index.view.php

- Arrays in PHP is a primitive collection of related things.

```
foreach ($array as $item) {
    // do stuff
}
```

Syntax similar to handlebars inside php:

```
<?php foreach ($names as $name) : ?>
    <li>{$name}</li>;
<?php endforeach; ?>
```

- Associative Arrays

```
[
    'age' => 31,
    'hair' => 'brown'
    'career' => 'web developer'
]

// ... later ...

foreach ($person as $feature => $val) {

}
```

- echo expects a string, so you cant echo arrays directly
  - use `var_dump` instead
  - `var_dump($person);`

### MySQL 101

```bash
# login
mysql -uroot

# list dbs
show databases;

# create db
create database mytodos;

show tables;

create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL);

# show details about table
describe todos;

drop table todos;

insert into todos (description, completed) values('go to store', false);

select * from todos;
```


### Classes 101
```php

class Task {
    protected $description;
    public $completed = false;

    public function __construct($description) {
        // automatically triggered on instantiation
        $this->description = $description;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function complete() {
        $this->completed = true;
    }

    public static function myStaticMethod() {
        // do stuff
    }
}

$task = new Task('My task description goes here');

$task->description; // this will not work because it's protected!
$task->completed; // this does work because it's public!

// call a static method with double colons
Task::myStaticMethod();
```

### PDO
A class: "PHP Data Objects". An interface to connect a database.

In the constructor we provide a DSN (connection string).

```php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
} catch (PDOException $e) {
    die('could not connect to db');
}
```

### Array Functions
```php
array_map(function ($myarg) {
    return 'something';
}, $myArray);

```



---

# Laravel 6 from Scratch

## Basic Architecture

Laravel routes requests using routes.php to a `controller`. Controller receives a req and provides a response.

`Eloquent Model` stores domain specific logic and is ORM around SQL database.

`view` receives the data from the model (Eloquent) and loads a `blade.php` template to send to the user.

```
routes.php --> controller.php --> model.php
                    |
                    |
    response  <-- view.blade.php
```

`php artisan serve` is like `yarn run start`

Laravel Valet configures NGINX / DNS stuff.

### Blade

```
In controller...
return view('myview', [
    'name' => $name
])

In HTML...
{{ $name }}
```

### Tips From the Team

```php
dd() // die and dump useful for debugging
```

"route model binding": (Laravel adds route params into the argument of the controller and queries "findById" if you include the data type with the parameter)
