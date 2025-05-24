<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;


    public function definition()
    {
        return [
            //
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => '1',
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄々谷マンション101',
            'category_id' => '1',
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の交換をお願いします。',
        ];
    }
}
