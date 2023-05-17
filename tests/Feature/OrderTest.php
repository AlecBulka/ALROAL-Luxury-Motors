<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Order;

class OrderTest extends TestCase
{

    public function testCreateOrder()
    {
        $productData = [
            'orderNumber' => 'ARALM-dk47gv',
            'status' => 'Paid',
            'totalCost' => 2500000,
            'car_id' => 1,
            'user_id' => 1,
        ];

        $this->json('POST', 'api/orders', $productData, ['Accept' => 'application/json'])
        ->assertStatus(201)
        ->assertJsonStructure([
            'status',
            'message',
            'data' => [
                'id',
                'orderNumber',
                'status',
                'totalCost',
                'finance',
                'monthsFinanced',
                'downPayment',
                'monthlyCost',
                'carId',
                'userId',
            ]
        ]);
    }

    public function testShowAllOrders()
    {
        Order::factory()->create();

        $this->json('GET', 'api/orders')
        ->assertStatus(200)
        ->assertJsonStructure([
            'status',
            'data' => [
                [
                    'id',
                    'orderNumber',
                    'status',
                    'totalCost',
                    'finance',
                    'monthsFinanced',
                    'downPayment',
                    'monthlyCost',
                    'carId',
                    'userId',
                ]
            ]
        ]);
    }

    public function testShowSpecificOrder()
    {
        Order::factory()->create();

        $this->json('GET', 'api/orders/ARALM-dk47gv')
        ->assertStatus(200)
        ->assertJsonStructure([
            'status',
            'data' => [
                    'id',
                    'orderNumber',
                    'status',
                    'totalCost',
                    'finance',
                    'monthsFinanced',
                    'downPayment',
                    'monthlyCost',
                    'carId',
                    'userId',
            ]
        ]);
    }

    public function testEditOrder()
    {
        Order::factory()->create();

        $productData = [
            'status' => 'paymentPending'
        ];

        $this->json('PUT', 'api/orders/ARALM-dk47gv', $productData, ['Accept' => 'application/json'])
        ->assertStatus(200)
        ->assertJsonStructure([
            'status',
            'message',
            'data' => [
                    'id',
                    'orderNumber',
                    'status',
                    'totalCost',
                    'finance',
                    'monthsFinanced',
                    'downPayment',
                    'monthlyCost',
                    'carId',
                    'userId',
            ]
        ]);
    }

    public function testDeleteOrder()
    {
        Order::factory()->create();

        $this->json('DELETE', 'api/orders/ARALM-dk47gv')
        ->assertStatus(200)
        ->assertJsonStructure([
            'status',
            'message'
        ]);
    }
}
