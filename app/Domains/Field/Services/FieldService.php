<?php

namespace App\Domains\Field\Services;

use App\Domains\Field\Interfaces\FieldRepositoryInterface;
use App\Domains\Field\Models\EnumFieldTypes;

class FieldService
{
    public function __construct(private FieldRepositoryInterface $fieldRepository)
    {
    }
    public function list()
    {
        return $this->fieldRepository->list();
    }
    public function findById($id)
    {
        return $this->fieldRepository->findById($id);
    }

    public function delete($id)
    {
        return $this->fieldRepository->delete($id);
    }

    public function create($request)
    {
        return $this->fieldRepository->store($request);
    }

    public function update($id,$request)
    {
        return $this->fieldRepository->update($id,$request);
    }
    public function listFieldTypes()
    {
        $fieldTypes = array_column(EnumFieldTypes::cases(), 'value');

        return $fieldTypes;
    }

}
