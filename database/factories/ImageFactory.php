<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Helpers\FakerHelper;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $f = new FakerHelper();
        $height = rand(600, 900);
        $width = intval($height * 2 / 3);

        return [
            'url' => $f->imageUrl($width, $height, 'NOT USED', false),
        ];
    }
}
