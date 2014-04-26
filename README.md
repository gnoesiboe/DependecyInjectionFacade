DependecyInjectionFacade
========================

Small setup to test the usage of Laravel like Dependency Injecten Facades with Symfony Dependency Injecten component

## Usage

Run command line: 
```bash
php index.php
```

The clue is that the Gn\Facade\App::handle method is called and underwater ports the request to the ioc container to handle it further. The facade can stay the same at all times while the actually called instance can be changed using the Dependency Injection Container.
