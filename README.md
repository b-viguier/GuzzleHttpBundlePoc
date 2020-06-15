# Guzzle Bundle POC

A quick POC to test https://github.com/M6Web/GuzzleHttpBundle.

## Install

```bash
git clone git@github.com:b-viguier/GuzzleHttpBundlePoc.git
cd  GuzzleHttpBundlePoc
composer install
```

## Usage
```bash
php -S localhost:8000 -t ./public
```

Visit http://localhost:8000 , it will perform an HTTP request and display the HTTP status, and the corresponding timing.
