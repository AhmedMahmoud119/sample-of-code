<?php

namespace App\Domains\Form\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FieldResponseResource extends JsonResource
{
    public function toArray($request)
    {
        return ResponseResource::collection($this);
    }
}
