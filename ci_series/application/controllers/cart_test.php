<?php

class Cart_test extends Controller
{
    function add()
    {
        $data=array(
            'id'=>'42',
        'name'=> 'pants',
        'qty' => 1,
        'price'=>19.00,
        'options'=>array('Size'=>'medium')
    );
        $this->cart->insert($data);
        echo "add() called";

    }


function show()
{
    $cart = $this->cart->contents();
    echo "<pre>";
    print_r($cart);
}
}
