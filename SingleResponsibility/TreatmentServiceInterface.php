<?php

namespace SingleResponsibility;

interface TreatmentService
{
    public function create(array $treatmentData);

    public function update(Treatment $treatment);

    public function find($id);

}