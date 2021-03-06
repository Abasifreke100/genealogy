<?php

namespace App\Http\Controllers\enso\people;

use App\Forms\Builders\PersonForm;
use App\Person;
use Illuminate\Routing\Controller;

class Edit extends Controller
{
    public function __invoke(Person $person, PersonForm $form)
    {
        return ['form' => $form->edit($person)];
    }
}
