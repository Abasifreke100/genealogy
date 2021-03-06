<?php

namespace App\Http\Controllers\enso\Localisation\Language;

use App\Forms\Builders\enso\Localisation\LanguageForm;
use App\Models\enso\Localisation\Language;
use Illuminate\Routing\Controller;

class Edit extends Controller
{
    public function __invoke(Language $language, LanguageForm $form)
    {
        return ['form' => $form->edit($language)];
    }
}
