<?php
namespace Openlab\Arrivals\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArrivalResource extends JsonResource {
    public function toArray($request) {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'name' => $this->name,
            'surname' => $this->surname,
            'arrival' => $this->arrival,
        ];
    }
}