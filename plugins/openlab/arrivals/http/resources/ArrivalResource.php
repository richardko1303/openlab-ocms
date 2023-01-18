<?php
namespace Openlab\Arrivals\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArrivalResource extends JsonResource {
    public function toArray($request) {
        return [
            'user' => $this->user,
        ];
    }
}