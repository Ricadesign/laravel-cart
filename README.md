# Laravel Cart Package

Welcome to the Laravel Cart Package! This package provides a complete solution for adding cart functionality to your Laravel application. It also includes pre-configured endpoints so you can consume the cart quickly and easily.

## Installation

You can install this package using Composer. Run the following command in your terminal:

```
composer require ricadesign/laravel-cart
```

You can publish the package configuration (useful if you plan to have full control), run the following command:

```
php artisan vendor:publish --provider="Darryldecode\Cart\CartServiceProvider\LaravelCart\CartServiceProvider" --tag="config"
```

## Configuration

By default, the cart is stored in the user's session. However, if you want to change this configuration to store the cart in the database, you need to add the following line to the `config/shopping_cart.php` configuration file:

```php
'storage' => 'Ricadesign\LaravelCart\DBStorage',
```

## Endpoints

This package includes a set of pre-configured endpoints that allow you to manage the cart quickly and easily. The endpoints are protected by default authentication, so only authenticated users can perform actions on the cart.

- `GET /api/cart`: returns the contents of the cart.
- `POST /api/cart`: adds a product to the cart. The request body must include the product `id`, `name`, `price`, `quantity` and optionally an array of options.
- `PUT /api/cart`: updates the quantity of a product in the cart.
- `PUT /api/cart/increment`: updates the quantity of a product in the cart.
- `DELETE /api/cart`: removes a product from the cart.

## Contributions

If you want to contribute to this package, you can fork the repository on GitHub and send a pull request with your changes. We also appreciate you reporting any issues or bugs you find in the issues section of the repository.
