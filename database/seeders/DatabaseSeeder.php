<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Package;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@test.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Staff One',
            'email' => 'staff1@test.com',
            'role' => 'staff',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Staff Two',
            'email' => 'staff2@test.com',
            'role' => 'staff',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@test.com',
            'role' => 'guest',
            'password' => Hash::make('password'),
        ]);

        $packages = [
            [
                'name' => 'Annapurna Base Camp Trek',
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
                'main_image' => 'images/annapurna-main.jpg',
                'additional_images' => json_encode(['images/annapurna-1.jpg', 'images/annapurna-2.jpg', 'images/annapurna-3.jpg']),
            ],
            [
                'name' => 'Kathmandu Trek',
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
                'main_image' => 'images/kath-main.jpg',
                'additional_images' => json_encode(['images/kath-1.jpg', 'images/kath-2.jpg', 'images/kath-3.jpg']),
            ],
            [
                'name' => 'Langtang Valley Trek',
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
                'main_image' => 'images/langtang-main.jpg',
                'additional_images' => json_encode(['images/langtang-1.jpg', 'images/langtang-2.jpg', 'images/langtang-3.jpg']),
            ],

        ];

        // Create each package with the overridden values
        foreach ($packages as $package) {
            Package::factory()->create($package);
        }
    }
}
