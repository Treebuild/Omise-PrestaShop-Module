<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Omise extends PaymentModule
{
    public function __construct()
    {
        $this->name = 'omise';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->author = 'Thanabodee Charoenpiriyakij';

        parent::__construct();

        $this->displayName = $this->l('Omise Payment Gateway');
    }
}
