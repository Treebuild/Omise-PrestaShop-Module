<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class OmisePayment extends PaymentModuleCore
{
    public function __construct()
    {
        $this->name = 'Omise';
        $this->tab = 'payments_gateways';
        $this->version = '1.0';
        $this->author = 'Thanabodee Charoenpiriyakij';

        parent::__construct();

        $this->displayName = $this->l('Omise');
    }
}
