<?php

class Controller
{

    const BASE_URL = 'http://localhost/paypal-php/shopping-cart/';

    public function showCart()
    {
        require_once('layout/views/cart.php');
    }

    public function showProducts()
    {
        require_once('layout/views/products.php');
    }

    public function addToCart($id)
    {
        // add to cart
        return header("Location: " . self::BASE_URL . '?action=cart');
    }

    public function removeFromCart($id)
    {
        // remove from cart
        return header("Location: " . self::BASE_URL . '?action=cart');
    }

    public function checkout()
    {
        require_once('layout/views/checkout.php');
    }

    public function updateQuantities($post)
    {
        // update quantities
        return header("Location: " . self::BASE_URL . '?action=cart');
    }

    public function login(){
        return header("Location: " . self::BASE_URL);

    }

    public function logout(){
        return header("Location: " . self::BASE_URL);
        
    }
}
