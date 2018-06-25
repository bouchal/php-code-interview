# PHP Code Interview Task

For testing all necessary skills what you should know.

## Tested areas

- Orientation in code
- Creating abstract and isolated functionality
- Creating readable code

## Before you start

For running test scripts you need some way how to run PHP 7.1. Here is some options:

### Option 1. - DOCKER *( "pssst ... we like this one more ;-)" )*

There is prepared docker composer with all you need in `docker` folder.

So just install docker with docker composer and run command `docker-compose up` in this folder.

### Option 2. - PHP

Or you can install PHP directly to you machine.

> TIP: Simplest installation for MacOS: https://php-osx.liip.ch

Then just go to `www` directory and run `php -S 127.0.0.1:8080` and __Profit!__
 

## Task assignment

You have prepared service definition `DataPrinter` which use so called
[strategy pattern](https://en.wikipedia.org/wiki/Strategy_pattern).
It's mean that it has bunch of interfaces and it counts for getting objects implements this interfaces to constructor.

This service is really simple. Load data from `IDataLoader`, format it to printable string via `IPrintFormatter`
and then send this string to `IPrinter`. You have already prepared `Printer` class definition.

### 1. Creating data loader

Create abstract class definition of file data loader which will be compatible with `DataPrinter` constructor.

Then create two classes extended this abstract file data loader for loading CSV and XML files.
You can find test data in folder `data`.

Output of this services is array of associative arrays like this:

```
[
    [
        'FirstName' => 'John',
        'LastName' => 'Doe',
        'City' => 'New York'
    ], [...], [...]
]
```

### 2. Creating print formatter

Create class definition of print formatter which will be compatible with `DataPrinter` constructor and will be able
to format output of data loader to JSON string.

### 3. Creating data printer factory

When you have all necessary parts, create factory which will return `DataPrinter` instance and as parameters in `create`
method you pass data file path and which format this file is (XML or CSV).
