<?php

namespace App\Http\Controllers\Individual;

use App\Individual;
use App\Forms\Builders\IndividualForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateIndividualRequest;


class IndividualController extends Controller
{
    public function create(IndividualForm $form)
    {
        return ['form' => $form->create()];
    }

    public function store(ValidateIndividualRequest $request)
    {
        $individual = Individual::create($request->all());

        return [
            'message' => __('The individual was successfully created'),
            'redirect' => 'individual.edit',
            'param' => ['individual' => $individual->id],
        ];
    }

    public function show(Individual $individual)
    {
        return ['individual' => $individual];
    }

    public function edit(Individual $individual, IndividualForm $form)
    {
        return ['form' => $form->edit($individual)];
    }

    public function update(ValidateIndividualRequest $request, Individual $individual)
    {
        $individual->update($request->all());

        return ['message' => __('The individual was successfully updated')];
    }

    public function destroy(Individual $individual)
    {
        $individual->delete();

        return [
            'message' => __('The individual was successfully deleted'),
            'redirect' => 'individual.index',
        ];
    }
}
