<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Stay::truncate();

        $stays = [
            [
                'title' => 'Villa Azure • Private Architectural Pool Sanctuary',
                'subtitle' => 'Minimalist Design Villa & Sunset Infinity Pool',
                'category' => 'villa',
                'category_label' => 'Boutique Villa',
                'location' => 'Yilan, Taiwan',
                'image' => '/images/stays/stay-2-luxury-pool.jpg',
                'gallery' => [
                    '/images/stays/stay-2-luxury-pool.jpg',
                    '/images/stays/stay-1-hotel-interior.jpg',
                    '/images/stays/stay-3-aesthetic-bedroom.jpg',
                ],
                'rating' => '4.98 / 5.0',
                'views_count' => '380K+ Views',
                'highlights' => ['Private Infinity Pool', 'Limestone Architecture', 'Golden Hour Lighting', 'Artisanal Breakfast'],
                'description' => 'A pristine minimalist villa set amidst serene countryside landscapes, blending soft natural light with warm limestone textures. April crafted a cinematic short-form Reel capturing the slow-living poolside moments, driving over 3,800 shares and a surge in direct room reservations in its first week.',
                'instagram_url' => 'https://www.instagram.com/bnb_chiao',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'The Cliff Sanctuary • Panoramic Ocean Balcony Suite',
                'subtitle' => 'Oceanfront Horizon Retreat & Freestanding Tub',
                'category' => 'ocean',
                'category_label' => 'Ocean & Nature',
                'location' => 'Hualien, Taiwan',
                'image' => '/images/stays/stay-4-ocean-balcony.jpg',
                'gallery' => [
                    '/images/stays/stay-4-ocean-balcony.jpg',
                    '/images/hero-suite.png',
                    '/images/stays/stay-5-tropical-resort.jpg',
                ],
                'rating' => '4.96 / 5.0',
                'views_count' => '520K+ Views',
                'highlights' => ['180° Pacific Ocean Panorama', 'Open-Air Balcony Tub', 'Sunrise Golden Glow', 'Stargazing Lounge'],
                'description' => 'Perched high on the dramatic coastal cliffs where morning sunlight gently illuminates warm linen sheets. Utilizing cinema-grade camera work and drone framing, April captured the rhythm of the waves and intimate luxury vibes, producing one of the year’s top-performing oceanfront travel features.',
                'instagram_url' => 'https://www.instagram.com/bnb_chiao',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Maison de Sérénité • Quiet Luxury & Wabi-Sabi Suite',
                'subtitle' => 'Warm Linen Aesthetic, Soft Tones & Parisian Flair',
                'category' => 'villa',
                'category_label' => 'Boutique Villa',
                'location' => 'Tainan, Taiwan',
                'image' => '/images/stays/stay-3-aesthetic-bedroom.jpg',
                'gallery' => [
                    '/images/stays/stay-3-aesthetic-bedroom.jpg',
                    '/images/stays/stay-6-luxury-lounge.jpg',
                    '/images/stays/stay-1-hotel-interior.jpg',
                ],
                'rating' => '4.95 / 5.0',
                'views_count' => '290K+ Views',
                'highlights' => ['French Lifestyle Aesthetic', 'Earthy Minimalist Palette', 'Handmade Ceramics & Scents', 'Private Chef Experience'],
                'description' => 'A poetic, tranquil haven where every ray of afternoon sun creates a cinematic frame. April seamlessly intertwined effortless lifestyle styling with interior design nuances, delivering an organic UGC narrative that connected deeply with high-taste design enthusiasts.',
                'instagram_url' => 'https://www.instagram.com/bnb_chiao',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'The Grand Heritage • High-End Executive Master Suite',
                'subtitle' => 'Five-Star Urban Luxury & Bespoke Architectural Detail',
                'category' => 'resort',
                'category_label' => 'Luxury Resorts',
                'location' => 'Taipei, Taiwan',
                'image' => '/images/stays/stay-1-hotel-interior.jpg',
                'gallery' => [
                    '/images/stays/stay-1-hotel-interior.jpg',
                    '/images/stays/stay-6-luxury-lounge.jpg',
                    '/images/stays/stay-2-luxury-pool.jpg',
                ],
                'rating' => '4.99 / 5.0',
                'views_count' => '410K+ Views',
                'highlights' => ['Double Marble Vanity Bath', 'Bespoke Butler Service', 'Premium Linen Bedding', 'Executive Club Privilege'],
                'description' => 'A premier visual campaign tailored for luxury hospitality brands. From curated room amenities to spatial flow and ambient evening lighting, April highlighted the pinnacle of metropolitan five-star hospitality with refined camera movement and elevated storytelling.',
                'instagram_url' => 'https://www.instagram.com/bnb_chiao',
                'is_featured' => false,
                'sort_order' => 4,
            ],
            [
                'title' => 'Palm Haven • Tropical Island Lagoon Resort',
                'subtitle' => 'Secluded Tropical Villa & Sunlit Swimming Pool',
                'category' => 'ocean',
                'category_label' => 'Ocean & Nature',
                'location' => 'Kenting, Taiwan',
                'image' => '/images/stays/stay-5-tropical-resort.jpg',
                'gallery' => [
                    '/images/stays/stay-5-tropical-resort.jpg',
                    '/images/stays/stay-2-luxury-pool.jpg',
                    '/images/hero-suite.png',
                ],
                'rating' => '4.94 / 5.0',
                'views_count' => '330K+ Views',
                'highlights' => ['Palm Tree Oasis', 'Crystal Turquoise Pool', 'Sunset Cocktail Hour', 'Romantic Couple Getaway'],
                'description' => 'An idyllic tropical getaway filled with warm southern sunlight, gentle sea breezes, and azure waters. Featuring authentic couple travel moments, April naturally highlighted the resort experience alongside nearby secret spots to drive high booking intent.',
                'instagram_url' => 'https://www.instagram.com/bnb_chiao',
                'is_featured' => false,
                'sort_order' => 5,
            ],
            [
                'title' => 'The Skyline Lounge • Private Glasshouse Panoramic Space',
                'subtitle' => 'Floor-to-Ceiling Windows & Modernist Artistry',
                'category' => 'resort',
                'category_label' => 'Luxury Resorts',
                'location' => 'Taichung, Taiwan',
                'image' => '/images/stays/stay-6-luxury-lounge.jpg',
                'gallery' => [
                    '/images/stays/stay-6-luxury-lounge.jpg',
                    '/images/stays/stay-3-aesthetic-bedroom.jpg',
                    '/images/stays/stay-1-hotel-interior.jpg',
                ],
                'rating' => '4.97 / 5.0',
                'views_count' => '270K+ Views',
                'highlights' => ['Panoramic City Glass Walls', 'Curated Art Decor', 'Champagne Tasting Corner', 'Exclusive Social Setting'],
                'description' => 'A signature visual showcase uniting modernist architectural form and exclusive social atmospheres. With precise color grading and rhythmic pacing, the video emphasized spatial texture and privacy, making it a sought-after destination for luxury brand events.',
                'instagram_url' => 'https://www.instagram.com/bnb_chiao',
                'is_featured' => false,
                'sort_order' => 6,
            ],
        ];

        foreach ($stays as $stay) {
            \App\Models\Stay::create($stay);
        }
    }
}
