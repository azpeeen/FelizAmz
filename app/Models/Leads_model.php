<?php

namespace App\Models;

use CoffeeCode\DataLayer\DataLayer;

class Leads_model extends DataLayer
{
    public function __construct()
    {
        parent::__construct("leads", ["formulario", "nome", "email", "consentimento"], "id");
    }
}
