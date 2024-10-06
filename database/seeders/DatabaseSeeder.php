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
                'summary' => 'Witness a breathtaking sunrise over the Annapurna ranges from the stunning vantage point of Poon Hill. The early morning trek to this remarkable location will undoubtedly make the effort worthwhile.',
                'description' => '<p>Embark on an unforgettable journey to the Annapurna Base Camp. Experience breathtaking views and rich culture.</p>

                <h2>Highlights:</h2>
                <ul>
                <li>Stunning mountain views</li>
                <li>Diverse landscapes</li>
                <li>Traditional Gurung villages</li>
                <li>Experienced local guides</li>
                </ul>

                <h2>Itinerary:</h2>
                <p><strong>12 Days:</strong> Arrival in Pokhara, trek to Ghandruk, Chhomrong, Machapuchare Base Camp, Annapurna Base Camp, and return.</p>

                <h2>Price:</h2>
                <p>From <strong>$799 per person</strong>. Includes accommodation, meals, and transportation.</p>

                <h2>Best Time:</h2>
                <p><strong>Spring (Mar-May)</strong> and <strong>Autumn (Sep-Nov)</strong> are ideal for trekking.</p>',
                'duration' => 12,
                'image' => 'images/anna.jpg',
            ],
            [
                'name' => 'Kathmandu Trek',
                'link' => '/content/page2',
                'price' => 599,
                'summary' => 'Embark on an unforgettable adventure through the enchanting landscapes of Kathmandu. Experience the rich cultural heritage as you explore ancient temples and vibrant local markets.',
                'description' => '<p>Explore the beauty of the Kathmandu Valley with our trekking package. Experience culture, nature, and adventure.</p>

                <h2>Highlights:</h2>
                <ul>
                <li>UNESCO World Heritage Sites</li>
                <li>Himalayan views</li>
                <li>Traditional villages</li>
                <li>Experienced local guides</li>
                </ul>

                <h2>Itinerary:</h2>
                <p><strong>7 Days:</strong> Arrival, city tour, trek to Chisapani, Nagarkot, Dhulikhel, farewell dinner, departure.</p>

                <h2>Price:</h2>
                <p>From <strong>$599 per person</strong>. Includes accommodation, meals, and transportation.</p>

                <h2>Best Time:</h2>
                <p><strong>Spring (Mar-May)</strong> and <strong>Autumn (Sep-Nov)</strong> are ideal for trekking.</p>',

                'duration' => 7,
                'image' => 'images/kath-main.jpg',
            ],
            [
                'name' => 'Langtang Valley Trek',
                'link' => '/content/page3',
                'price' => 799,
                'summary' => 'Discover the breathtaking beauty of the Langtang Valley where stunning alpine landscapes meet rich cultural heritage. This trek takes you through picturesque villages lush forests and serene glacial lakes offering an immersive experience in nature\'s splendor.',
                'description' => '<p>Embark on an adventure in the Langtang Valley with our trekking package. Experience the natural beauty and vibrant culture of the region.</p>

                <h2>Highlights:</h2>
                <ul>
                <li>Panoramic views of Langtang Lirung</li>
                <li>Glacial lakes and lush forests</li>
                <li>Traditional Tamang villages</li>
                <li>Experienced local guides</li>
                </ul>

                <h2>Itinerary:</h2>
                <p><strong>10 Days:</strong> Arrival in Kathmandu city tour trek to Syabrubesi Lama Hotel Langtang Valley Kyanjin Gompa exploration farewell dinner and departure.</p>

                <h2>Price:</h2>
                <p>From <strong>$799 per person</strong>. Includes accommodation meals and transportation.</p>

                <h2>Best Time:</h2>
                <p><strong>Spring (Mar-May)</strong> and <strong>Autumn (Sep-Nov)</strong> are ideal for trekking.</p>',

                'duration' => 10,
                'image' => 'images/langtang-main.jpg',
            ],


        ];

        // Create each package with the overridden values
        foreach ($packages as $package) {
            Package::factory()->create($package);
        }
    }
}
