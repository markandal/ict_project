<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Annapurna Base Camp Trek',
            'link' => '/content/page1',
            'price' => 799,
            'description' => 'Witness a breathtaking sunrise over the Annapurna ranges from the stunning vantage point of Poon Hill. The early morning trek to this remarkable location will undoubtedly make the effort worthwhile.',
            'duration' => 12,
            'image' => 'images/anna.jpg',
        ];
    }
}
