<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;


class DatabaseSeeder extends Seeder
{
    // use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $packages = [
           [
                'name' => 'Annapurna Base Camp Trek',
                'link' => '/packages/1',
                'price' => 799,
                'description' => 'Witness a breathtaking sunrise over the Annapurna ranges from the stunning vantage point of Poon Hill. The early morning trek to this remarkable location will undoubtedly make the effort worthwhile.',
                'duration' => 12,
                'image' => 'images/anna.jpg',
            ],
            [
                'name' => 'Kathmandu Trek',
                'link' => '/content/page2',
                'price' => 599,
                'description' => 'Discover the beauty of the Kathmandu Valley with this exclusive trekking package. Enjoy the perfect blend of culture, nature, and adventure as you explore the hills and traditional villages around the ancient city.',
                'duration' => 7,
                'image' => 'images/kath-main.jpg',
            ],
            [
                'name' => 'Langtang Valley Trek (10 – 19 October 2024)',
                'link' => '/content/page3',
                'price' => 749,
                'description' => 'The Langtang Valley Trek offers a breathtaking journey through the heart of the Himalayas in Nepal. Beginning in Syabrubesi, trekkers ascend through diverse landscapes, including lush forests and charming villages, while experiencing the rich culture of the Tamang and Sherpa communities.',
                'duration' => 10,
                'image' => 'images/langtang-main.jpg',
            ],
            [
                'name' => 'Mount Everest Climbing Expedition (1 – 15 April 2025)',
                'link' => '/content/page4',
                'price' => 1000,
                'description' => 'Join us for an unforgettable adventure on our Mount Everest Climbing Expedition! Experience the breathtaking views and extreme challenges of high-altitude climbing as you ascend to the roof of the world. Our program includes rigorous training and expert guidance to ensure your safety and success on this journey.',
                'duration' => 15,
                'image' => 'images/everest-main.jpg',
            ],
            [
                'name' => 'Kathmandu Valley Temple Tour (5 – 12 November 2024)',
                'link' => '/content/kathmandu-temple-tour',
                'price' => 499,
                'description' => 'Explore the rich cultural heritage and stunning architecture of the Kathmandu Valley on this immersive temple tour. Visit iconic sites such as Swayambhunath, Pashupatinath, and Boudhanath, while learning about the history and significance of these ancient landmarks. Enjoy guided tours through vibrant local markets and experience the unique traditions of Nepalese culture.',
                'duration' => 7,
                'image' => 'images/kath-temple.jpg',
            ]
        ];

        // Create each package with the overridden values
        foreach ($packages as $package) {
            Package::factory()->create($package);
        }
    }
}
