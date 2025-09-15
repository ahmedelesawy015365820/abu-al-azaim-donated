<?php

namespace App\Http\Resources\Admin;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id"  => $this->id,
            "description"     => $this->current_translation?->description,
            "address"     => $this->address,
            "email_1"     => $this->email_1,
            "email_2"     => $this->email_2,
            "mobile_1"     => $this->mobile_1,
            "mobile_2"     => $this->mobile_2,
        ];
    }
}
