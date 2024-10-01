<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
       $places = [
    [
        'name' => 'Annapurna Base Camp Trek',
        'link' => '/content/page1',
        'price' => 799,
        'description' => 'Witness a breathtaking sunrise over the Annapurna ranges from the stunning vantage point of Poon Hill. The early morning trek to this remarkable location will undoubtedly make the effort worthwhile.',
        'duration' => 12,
        'image' => 'images/anna.jpg', // Replace with actual image path
    ],
    [
        'name' => 'Kathmandu Trek',
        'link' => '/content/page2',
        'price' => 599,
        'description' => 'Discover the beauty of the Kathmandu Valley with this exclusive trekking package. Enjoy the perfect blend of culture, nature, and adventure as you explore the hills and traditional villages around the ancient city.',
        'duration' => 7,
        'image' => 'images/kath-main.jpg', // Replace with actual image path
    ],
    [
        'name' => 'Langtang Valley Trek (10 – 19 October 2024)',
        'link' => '/content/page3',
        'price' => 749,
        'description' => 'The Langtang Valley Trek offers a breathtaking journey through the heart of the Himalayas in Nepal. Beginning in Syabrubesi, trekkers ascend through diverse landscapes, including lush forests and charming villages, while experiencing the rich culture of the Tamang and Sherpa communities.',
        'duration' => 10,
        'image' => 'images/langtang-main.jpg', // Replace with actual image path
    ],

];


        return view('content.programs', compact('places'));
    }
}
