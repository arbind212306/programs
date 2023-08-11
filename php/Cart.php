<?php

class Cart {
	private static $cart = [];

	public function add($item){
		self::$cart[$item] = isset(self::$cart[$item]) ? self::$cart[$item] + 1 : 1;
	}

	public function getItemsFromCart() {
		return self::$cart;
	}
}

$cart = new Cart();
$cart->add("rose");
$cart->add("rose");
$cart->add("paper");
$cart->add("rubber");
$cart->add("ruber");
print_r($cart->getItemsFromCart());