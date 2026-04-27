<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Download an image from a URL and save it to storage/app/public/armada/.
     * Returns the relative path (e.g. "armada/avanza-1.png") for use in the DB.
     */
    private function downloadImage(string $url, string $filename): string
    {
        $dir = storage_path('app/public/armada');

        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $path = $dir . '/' . $filename;

        if (!file_exists($path)) {
            $context = stream_context_create([
                'http' => [
                    'timeout'          => 30,
                    'follow_location'  => true,
                    'user_agent'       => 'Mozilla/5.0 (compatible; Laravel Seeder)',
                ],
                'ssl' => [
                    'verify_peer'      => false,
                    'verify_peer_name' => false,
                ],
            ]);

            $content = @file_get_contents($url, false, $context);

            if ($content !== false) {
                file_put_contents($path, $content);
                $this->command->info("  Downloaded: {$filename}");
            } else {
                $this->command->warn("  Failed to download: {$url}");
                return '';
            }
        } else {
            $this->command->line("  Skipped (exists): {$filename}");
        }

        return '/storage/armada/' . $filename;
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // ──────────────────────────────────────────────
        // Download & seed Armada
        // ──────────────────────────────────────────────
        $this->command->info('Downloading armada images...');

        $armada = [

            // 1. All New Avanza Matic
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/likzlRjuihyujSmqQ7eVXUjaPcPswfXxLtJFUsJo.png',
                        'avanza-1.png'
                    ),
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/oW5ESKTWEfSV5X1igFQTLv1J2MHE9NpeBwlIdElq.png',
                        'avanza-2.png'
                    ),
                ];
                return [
                    'name'                => 'All New Avanza Matic',
                    'brand'               => 'Toyota',
                    'seat'                => 7,
                    'type'                => 'car',
                    'luggage'             => 2,
                    'transmission'        => 'automatic',
                    'fuel'                => '92 ron',
                    'price_hour'          => 40000,
                    'price_day'           => 400000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 3,
                    'used'                => 0,
                    'description'         => 'All New Toyota Avanza Matic 2023 - Nyaman untuk keluarga, transmisi otomatis.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 2. Mitsubishi Xpander Matic
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://www.sunstarmotor.id/wp-content/uploads/elementor/thumbs/New-Xpander-Cross-2025-5-r62i91rvabjj8kco2gayjaddjhquzaqk98fkv175b4.jpg',
                        'xpander-1.jpg'
                    ),
                    $this->downloadImage(
                        'https://www.sunstarmotor.id/wp-content/uploads/elementor/thumbs/New-Xpander-Cross-2025-6-r62i93njnzm3vs9xrh47o9waq9hleoy0xhqjtl4cyo.jpg',
                        'xpander-2.jpg'
                    ),
                ];
                return [
                    'name'                => 'Mitsubishi Xpander Matic',
                    'brand'               => 'Mitsubishi',
                    'seat'                => 7,
                    'type'                => 'car',
                    'luggage'             => 3,
                    'transmission'        => 'automatic',
                    'fuel'                => '92 ron',
                    'price_hour'          => 45000,
                    'price_day'           => 450000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 2,
                    'used'                => 0,
                    'description'         => 'Mitsubishi Xpander Matic - Desain sporty, interior luas, transmisi otomatis.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 3. Toyota Innova Reborn Matic
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/BpPCFL0mM09GLOKfQV3LRIEJZt5nGTmU4bwFa0LC.png',
                        'innova-reborn-1.png'
                    ),
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/8ZS7i21Ekb1ROcTcGOASNRM7RR2rReZFgzJe3Arn.png',
                        'innova-reborn-2.png'
                    ),
                ];
                return [
                    'name'                => 'Toyota Innova Reborn Matic',
                    'brand'               => 'Toyota',
                    'seat'                => 7,
                    'type'                => 'car',
                    'luggage'             => 3,
                    'transmission'        => 'automatic',
                    'fuel'                => 'diesel',
                    'price_hour'          => 60000,
                    'price_day'           => 600000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 2,
                    'used'                => 0,
                    'description'         => 'Toyota Innova Reborn - Gagah, nyaman, pilihan utama perjalanan keluarga premium.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 4. Hyundai Stargazer Matic
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://imgcdn.oto.com/large/gallery/exterior/15/2613/hyundai-stargazer-side-view-122455.jpg?tr=w-510,h-340',
                        'stargazer-1.jpg'
                    ),
                    $this->downloadImage(
                        'https://imgcdn.oto.com/large/gallery/exterior/15/2613/hyundai-stargazer-front-angle-low-view-921839.jpg?tr=w-510,h-340',
                        'stargazer-2.jpg'
                    ),
                    $this->downloadImage(
                        'https://imgcdn.oto.com/large/gallery/exterior/15/2613/hyundai-stargazer-full-front-view-911086.jpg?tr=w-510,h-340',
                        'stargazer-3.jpg'
                    ),
                ];
                return [
                    'name'                => 'Hyundai Stargazer Matic',
                    'brand'               => 'Hyundai',
                    'seat'                => 7,
                    'type'                => 'car',
                    'luggage'             => 3,
                    'transmission'        => 'automatic',
                    'fuel'                => '92 ron',
                    'price_hour'          => 45000,
                    'price_day'           => 450000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 2,
                    'used'                => 0,
                    'description'         => 'Hyundai Stargazer Matic - MPV modern dengan fitur canggih dan kabin luas.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 5. Honda Brio Matic
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://asset.honda-indonesia.com/variants/images/z3IlBtUoQMWNV5YTY13qjt1mt9D8uBUbmRrYVTI5.png',
                        'brio-1.png'
                    ),
                    $this->downloadImage(
                        'https://asset.honda-indonesia.com/variants/images/mWtZtMRT42Cf6o4KdCBTDAtLyLDurQvqg8pkWC4g.png',
                        'brio-2.png'
                    ),
                ];
                return [
                    'name'                => 'Honda Brio Matic',
                    'brand'               => 'Honda',
                    'seat'                => 4,
                    'type'                => 'car',
                    'luggage'             => 1,
                    'transmission'        => 'automatic',
                    'fuel'                => '92 ron',
                    'price_hour'          => 35000,
                    'price_day'           => 350000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 3,
                    'used'                => 0,
                    'description'         => 'Honda Brio Matic - City car compact, irit bahan bakar, mudah dikendarai.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 6. All New Agya Matic
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/rH3kaIUIZhUo7qSiAD9s9kwfuQPcqKv2VbuWBCtG.png',
                        'agya-1.png'
                    ),
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/0Jl2NuyRedoVs4sjHKTtGroq9212xq2MBPkzkXH7.png',
                        'agya-2.png'
                    ),
                ];
                return [
                    'name'                => 'All New Agya Matic',
                    'brand'               => 'Toyota',
                    'seat'                => 4,
                    'type'                => 'car',
                    'luggage'             => 1,
                    'transmission'        => 'automatic',
                    'fuel'                => '92 ron',
                    'price_hour'          => 35000,
                    'price_day'           => 350000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 3,
                    'used'                => 0,
                    'description'         => 'All New Toyota Agya Matic - City car terbaru, hemat, dan nyaman untuk dalam kota.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 7. Toyota Alphard Matic (include driver)
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/0JYpGT0NhwVWjMvjbXOVGdJkUoACMliixF144prp.png',
                        'alphard-1.png'
                    ),
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/f1Qopp4SDeeL3pGE3p9yYjJsHeY41tzW7RyvtQ7D.png',
                        'alphard-2.png'
                    ),
                ];
                return [
                    'name'                => 'Toyota Alphard Matic',
                    'brand'               => 'Toyota',
                    'seat'                => 7,
                    'type'                => 'car',
                    'luggage'             => 4,
                    'transmission'        => 'automatic',
                    'fuel'                => '94 ron',
                    'price_hour'          => 300000,
                    'price_day'           => 3000000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 1,
                    'used'                => 0,
                    'description'         => 'Toyota Alphard Matic - Mewah, prestisius, sudah termasuk driver profesional.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 8. Toyota HiAce Premio (include driver)
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/isfWLzLafSgrtVEjX8Z77kvfNOfvgX6KOSdSbTNs.png',
                        'hiace-1.png'
                    ),
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/uW9Jx499hs82qMH7VL2g6qR4udYGepMLHZT7mxXv.png',
                        'hiace-2.png'
                    ),
                ];
                return [
                    'name'                => 'Toyota HiAce Premio Matic',
                    'brand'               => 'Toyota',
                    'seat'                => 14,
                    'type'                => 'car',
                    'luggage'             => 6,
                    'transmission'        => 'automatic',
                    'fuel'                => 'diesel',
                    'price_hour'          => 170000,
                    'price_day'           => 1700000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 1,
                    'used'                => 0,
                    'description'         => 'Toyota HiAce Premio Matic - Minibus premium kapasitas besar, sudah termasuk driver. Cocok untuk rombongan.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 9. Honda BR-V N7X Edition Matic
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://asset.honda-indonesia.com/variants/images/70ZE6ond42CvWIYgzMXMNCguc4uJN5QQAdvbI9z5.png',
                        'brv-1.png'
                    ),
                    $this->downloadImage(
                        'https://asset.honda-indonesia.com/variants/images/TrPJZuJiZ3WByO0eWi5ZRxHld6HB9SZYvDZ0Rvx5.png',
                        'brv-2.png'
                    ),
                ];
                return [
                    'name'                => 'Honda BR-V N7X Edition Matic',
                    'brand'               => 'Honda',
                    'seat'                => 7,
                    'type'                => 'car',
                    'luggage'             => 3,
                    'transmission'        => 'automatic',
                    'fuel'                => '92 ron',
                    'price_hour'          => 45000,
                    'price_day'           => 450000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 2,
                    'used'                => 0,
                    'description'         => 'Honda BR-V N7X Edition Matic - SUV 7 penumpang bertenaga, tampilan sporty dan modern.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 10. Toyota Innova Zenix Matic (NEW)
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/WEtZQre6rgH4RTrUkJLezJeC444DFCOAX6CScGoA.png',
                        'zenix-1.png'
                    ),
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/XTzwIT4IqX6fsEzHcB805OBji5XGKZCmILUbWX1X.png',
                        'zenix-2.png'
                    ),
                ];
                return [
                    'name'                => 'Toyota Innova Zenix Matic',
                    'brand'               => 'Toyota',
                    'seat'                => 7,
                    'type'                => 'car',
                    'luggage'             => 3,
                    'transmission'        => 'automatic',
                    'fuel'                => '92 ron',
                    'price_hour'          => 150000,
                    'price_day'           => 1500000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 2,
                    'used'                => 0,
                    'description'         => 'Toyota Innova Zenix Matic - Generasi terbaru Innova dengan platform hybrid, interior premium.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 11. Toyota Fortuner Matic (NEW)
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/FqrtpXkbJhLJQDzpgDdicm87dgO1OFKnX6pvlK4A.png',
                        'fortuner-1.png'
                    ),
                    $this->downloadImage(
                        'https://d1g6w7sntckt92.cloudfront.net/public/images/color_option_images/ijZ0N547Q8LSlFv1R0l53XiPHFkpluskHc01ilEH.png',
                        'fortuner-2.png'
                    ),
                ];
                return [
                    'name'                => 'Toyota Fortuner Matic',
                    'brand'               => 'Toyota',
                    'seat'                => 7,
                    'type'                => 'car',
                    'luggage'             => 4,
                    'transmission'        => 'automatic',
                    'fuel'                => 'diesel',
                    'price_hour'          => 150000,
                    'price_day'           => 1500000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 1,
                    'used'                => 0,
                    'description'         => 'Toyota Fortuner Matic - SUV tangguh bertenaga besar, gagah di segala medan.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

            // 12. Mitsubishi Pajero Sport Matic (NEW)
            (function () {
                $imgs = [
                    $this->downloadImage(
                        'https://imgcdn.oto.com/large/gallery/exterior/28/2364/mitsubishi-pajero-sport-front-angle-low-view-216762.jpg',
                        'pajero-1.jpg'
                    ),
                    $this->downloadImage(
                        'https://imgcdn.oto.com/large/gallery/exterior/28/2364/mitsubishi-pajero-sport-full-front-view-643594.jpg',
                        'pajero-2.jpg'
                    ),
                ];
                return [
                    'name'                => 'Mitsubishi Pajero Sport Matic',
                    'brand'               => 'Mitsubishi',
                    'seat'                => 7,
                    'type'                => 'car',
                    'luggage'             => 4,
                    'transmission'        => 'automatic',
                    'fuel'                => 'diesel',
                    'price_hour'          => 150000,
                    'price_day'           => 1500000,
                    'price_otherlocation' => 150000,
                    'price_withdriver'    => 250000,
                    'stock'               => 1,
                    'used'                => 0,
                    'description'         => 'Mitsubishi Pajero Sport Matic - SUV premium bertenaga, cocok untuk perjalanan jauh dan off-road.',
                    'images'              => json_encode(array_filter($imgs)),
                    'thumbnail'           => $imgs[0] ?? null,
                ];
            })(),

        ];

        foreach ($armada as $item) {
            \App\Models\Armada::updateOrCreate(
                ['name' => $item['name'], 'brand' => $item['brand']],
                $item
            );
        }

    //     \App\Models\Websetting::factory(1)->create();

    //    \App\Models\Order::factory(100)->create();

    //     \App\Models\User::create([
    //         'name'     => 'Admin',
    //         'email'    => 'admin@admin.com',
    //         'password' => bcrypt('admin'),
    //         'role'     => 'admin',
    //     ]);

    //     $payments = [
    //         [
    //             'name'        => 'Bank Central Asia',
    //             'icon'        => '/assets/images/bca.png',
    //             'description' => 'BCA 122343948 a/n PT. Karya Mitra Mandiri',
    //             'primary'     => 1,
    //             'status'      => 'active',
    //         ],
    //         [
    //             'name'        => 'Bank Mandiri',
    //             'icon'        => '/assets/images/mandiri.png',
    //             'description' => 'Mandiri 122343948 a/n PT. Karya Mitra Mandiri',
    //             'primary'     => 0,
    //         ],
    //         [
    //             'name'        => 'Cash On Pickup',
    //             'icon'        => '/assets/images/cash.png',
    //             'description' => 'Pay with cash when you pickup your order',
    //         ],
    //     ];

    //     foreach ($payments as $payment) {
    //         \App\Models\PaymentMethod::create($payment);
    //     }
    }
}
