<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'orderNumber' => $this->orderNumber,
            'status' => $this->status,
            'totalCost' => $this->totalCost,
            'finance' => $this->finance,
            'monthsFinanced' => $this->monthsFinanced,
            'downPayment' => $this->downPayment,
            'monthlyCost' => $this->monthlyCost,
            'carId' => $this->car_id,
            'userId' => $this->user_id
        ];
    }
}
