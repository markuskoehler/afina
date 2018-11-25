<?php

namespace App\Models\Hibiscus;

use App\Models\BaseModel;

class Konto extends BaseModel
{
    protected $connection = 'hibiscus';

    protected $table = 'konto';

    public function umsaetze() {
        return $this->hasMany(Umsatz::class);
    }
}
