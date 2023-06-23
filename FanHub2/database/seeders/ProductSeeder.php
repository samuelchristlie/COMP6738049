<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Coldplay
        Product::insert([
            'userId' => 1,
            'productName' => 'T-Shirt - Music of The Spheres',
            'description' => 'MUSIC OF THE SPHERES ALBUM ARTWORK PRINTED WITH ECO-FRIENDLY INKS ON THE FRONT, MUSIC OF THE SPHERES ON THE RIGHT SLEEVE, AND COLDPLAY LOGO ON THE BACK OF A BLACK, SUSTAINABLE UNISEX T-SHIRT, 100% COTTON.',
            'price' => 450000,
            'stock' => 100,
            'productImage' => "images/Coldplay/Merchandise/1.jpg"
        ]);

        Product::insert([
            'userId' => 1,
            'productName' => 'Hoodie - Music of The Spheres',
            'description' => 'MUSIC OF THE SPHERES ALBUM ARTWORK PRINTED WITH ECO-FRIENDLY INKS ON THE FRONT, COLDPLAY LOGO ON THE BACK OF A BLACK, SUSTAINABLE UNISEX PULLOVER HOODIE, 100% COTTON',
            'price' => 975000,
            'stock' => 100,
            'productImage' => "images/Coldplay/Merchandise/2.jpg"
        ]);

        Product::insert([
            'userId' => 1,
            'productName' => 'Hat - Music of The Spheres',
            'description' => 'COLDPLAY, MUSIC OF THE SPHERES BLACK HAT, FEATURES COLOR-BLOCKED RAINBOW, EMBROIDERED ARTWORK. COLDPLAY ON THE FRONT OF THE HAT. MUSIC OF THE SPHERES, AND INFINITY SYMBOL ON THE SIDES OF THE HAT. MUSIC OF THE SPHERES SYMBOLS ON THE BACK OF THE HAT. ADJUSTABLE CLOSURE, INFINITY STATION SUSTAINABLE BLACK HAT, GOTS CERTIFIED I00% COTTON.',
            'price' => 540000,
            'stock' => 100,
            'productImage' => "images/Coldplay/Merchandise/3.jpg"
        ]);

        Product::insert([
            'userId' => 1,
            'productName' => 'CD - Music of The Spheres',
            'description' => "MUSIC OF THE SPHERES - 12-TRACK ALBUM ON CD.

            THE NEW COLDPLAY ALBUM, OUT NOW.
            
            MUSIC OF THE SPHERES TRACKLIST:
            
            🪐
            HIGHER POWER
            HUMANKIND
            ✨
            LET SOMEBODY GO (WITH SELENA GOMEZ)
            ❤️ (WITH WE ARE KING AND JACOB COLLIER)
            PEOPLE OF THE PRIDE
            BIUTYFUL
            🌎
            MY UNIVERSE (WITH BTS)
            ♾️
            COLORATURA
            
            PACKAGED IN A RIGID BOARD OUTER SLEEVE, WITH CIRCULAR DIE-CUT TO FRONT COVER, REVEALING A 4-PAGE MAP OF THE SPHERES INSERT
            
            CD IS HOUSED IN A CARD WALLET WITH SPOT GLOSS VARNISH
            
            28-PAGE BOOKLET WITH ADDITIONAL ARTWORK, LYRICS AND CREDITS. 
            
            MANUFACTURED USING FSC CERTIFIED BOARD.
            
            DUE TO SUSTAINABILITY EFFORTS, CDS ARE NOT SHRINK WRAPPED IN PLASTIC",
            'price' => 185000,
            'stock' => 100,
            'productImage' => "images/Coldplay/Merchandise/4.jpg"
        ]);

        Product::insert([
            'userId' => 1,
            'productName' => 'Bracelet - Music of The Spheres',
            'description' => 'MUSIC OF THE SPHERES WOVEN BRACELET WITH TASSELS. FSC CERTIFIED, RECYCLED CARD PACKAGING.',
            'price' => 75000,
            'stock' => 100,
            'productImage' => "images/Coldplay/Merchandise/5.jpg"
        ]);

        //Lyodora
        Product::insert([
            'userId' => 2,
            'productName' => 'Lyodra 3rd Mini Album [The Billage of perception]',
            'description' => "The eight-track album, which dropped last Friday (May 16), followed the release of four singles:Gemintang Hatiku, Mengapa Kita, Tentang Kamu, and Sabda Rindu. The albums release was also accompanied by a music video for Kalau Bosan",
            'price' => 360000,
            'stock' => 100,
            'productImage' => "images/Lyodra/Merchandise/1.jpg"
        ]);

        Product::insert([
            'userId' => 2,
            'productName' => 'Sang Dewi Crew Neck Tee',
            'description' => "The crew neck T-shirt is simply designed, with Lyodra face.",
            'price' => 170000,
            'stock' => 100,
            'productImage' => "images/Lyodra/Merchandise/2.jpg"
        ]);

        Product::insert([
            'userId' => 2,
            'productName' => 'Mylyodra Charm Chain Shoulder STrap',
            'description' => 'The chain shoulder strap features detachables charms designed with the letters X and G.',
            'price' => 120000,
            'stock' => 100,
            'productImage' => "images/Lyodra/Merchandise/3.jpg"
        ]);

        Product::insert([
            'userId' => 2,
            'productName' => 'Mylyodra Season Greetings',
            'description' => 'Consist of: Outbox/Desk Calender/Diary/Photobook/Paper Holder/Mini Poster Set',
            'price' => 500000,
            'stock' => 100,
            'productImage' => "images/Lyodra/Merchandise/4.jpg"
        ]);

        Product::insert([
            'userId' => 2,
            'productName' => 'Lyodra Camp Ball Cap',
            'description' => 'A ball cap adorned with the embroidered logo of Lyodra.',
            'price' => 450000,
            'stock' => 100,
            'productImage' => "images/Lyodra/Merchandise/5.jpg"
        ]);

        //Seventeen
        Product::insert([
            'userId' => 3,
            'productName' => 'Can Badge',
            'description' => 'Seventeen members have donned uniforms for these can badges and they look dazzling! There is one badge for each member, which means there are 12 versions in total.',
            'price' => 69000,
            'stock' => 100,
            'productImage' => "images/Seventeen/Merchandise/1.jpg"
        ]);

        Product::insert([
            'userId' => 3,
            'productName' => 'Premium Photo',
            'description' => 'Members standing against the rose quartz background! A total of 14 premium photos are available, consisting of 1 group photo and 13 individual member photos.',
            'price' => 103000,
            'stock' => 100,
            'productImage' => "images/Seventeen/Merchandise/2.jpg"
        ]);

        Product::insert([
            'userId' => 3,
            'productName' => 'Official Light Stick Ver.3',
            'description' => 'The ebony-colored body has been coated with holographic colors via deposition process adding a touch of sophistication.',
            'price' => 560000,
            'stock' => 100,
            'productImage' => "images/Seventeen/Merchandise/3.jpg"
        ]);

        Product::insert([
            'userId' => 3,
            'productName' => '1st Album [First Love & Letter (SET)',
            'description' => 'The album includes 10 tracks and focuses on themes such as the experience of a first love.',
            'price' => 425000,
            'stock' => 100,
            'productImage' => "images/Seventeen/Merchandise/4.jpg"
        ]);

        Product::insert([
            'userId' => 3,
            'productName' => 'Seventeen Lyrics Inside',
            'description' => 'Cherish the messages of the songs written in your own handwriting. The handwriting note is only included in the first edition!',
            'price' => 368000,
            'stock' => 100,
            'productImage' => "images/Seventeen/Merchandise/5.jpg"
        ]);

        //Taylor Swift
        Product::insert([
            'userId' => 4,
            'productName' => 'Midnight - CD',
            'description' => "Taylor Swift's 10th studio album Midnights was released on October 21, 2022. It's a collection of music written in the middle of the night, a journey through terrors and sweet dreams. The floors we pace and the demons we face - the stories of 13 sleepless nights scattered throughout Taylor's life.",
            'price' => 150000,
            'stock' => 100,
            'productImage' => "images/Taylor Swift/Merchandise/1.jpg"
        ]);

        Product::insert([
            'userId' => 4,
            'productName' => 'Taylor Swift: A Little Golden Book',
            'description' => "Help your little one dream big with a Little Golden Book biography about Taylor Swift, the Grammy Award winning and multiplatinum artist. Little Golden Book biographies are the perfect introduction to nonfiction for preschoolers!

            This Little Golden Book about Taylor Swift--the singer and songwriter whose distinctive talent for storytelling has made her one of the biggest superstars in both country and pop music--is an inspiring read-aloud for young children as well as their Swiftie parents!",
            'price' => 60000,
            'stock' => 100,
            'productImage' => "images/Taylor Swift/Merchandise/2.jpg"
        ]);

        Product::insert([
            'userId' => 4,
            'productName' => 'Reputation - CD',
            'description' => "2017 release, the sixth studio album from the pop singer/songwriter. Reputation is the long-awaited follow-up to her 2014 album 1989. The album's lead single, quot;Look What You Made Me Doquot;, was released on August 25, 2017. One of the leading contemporary recording artists, Taylor is known for narrative songs about her personal life, which have received widespread media coverage. As a songwriter, Swift has received awards from the Nashville Songwriters Association and the Songwriters Hall of Fame, and was included in Rolling Stone's 100 Greatest Songwriters of All Time in 2015. She is also the recipient of 10 Grammy Awards, five Guinness World Records, one Emmy Award, 21 Billboard Music Awards, 11 Country Music Association Awards, eight Academy of Country Music Awards, and one Brit Award. Swift is one of the best-selling music artists of all time, having sold more than 40 million albums-including 27.8 million in the US-and 130 million single downloads.",
            'price' => 255000,
            'stock' => 100,
            'productImage' => "images/Taylor Swift/Merchandise/3.jpg"
        ]);

        Product::insert([
            'userId' => 4,
            'productName' => 'Speak Now - Tape',
            'description' => "Each Tape album includes:
            22 Songs. Including 6 previously unreleased Songs From The Vault. Collectible Tape album in jewel case with unique front and back cover art. 2 Disc album with unique collectible disc artwork. A collectible lyric booklet with never-before-seen photos",
            'price' => 225000,
            'stock' => 100,
            'productImage' => "images/Taylor Swift/Merchandise/4.jpg"
        ]);

        Product::insert([
            'userId' => 4,
            'productName' => 'Speak Now - CD',
            'description' => "Each CD album includes:
            22 Songs. Including 6 previously unreleased Songs From The Vault. Collectible CD album in jewel case with unique front and back cover art. 2 Disc album with unique collectible disc artwork. A collectible lyric booklet with never-before-seen photos",
            'price' => 300000,
            'stock' => 100,
            'productImage' => "images/Taylor Swift/Merchandise/5.jpg"
        ]);

        //Treasure  
        Product::insert([
            'userId' => 5,
            'productName' => 'Treasure 트레저 2022 WELCOMING COLLECTION -WINTER CAMP in EVERLAND',
            'description' => "Immerse yourself in the world of TREASURE with their exclusive 2022 Welcoming Collection [Package + Digital Code Card]. This must-have merchandise includes a captivating photobook and a specially curated calendar, providing fans with a visual feast and a way to stay connected with the group throughout the year.",
            'price' => 250000,
            'stock' => 100,
            'productImage' => "images/Treasure/Merchandise/1.jpg"
        ]);

        Product::insert([
            'userId' => 5,
            'productName' => '[YOURGREEN] TREASURE RE-CYCLED POUCH',
            'description' => "Introducing the [YOURGREEN] TREASURE Re-cycled Pouch, a stylish and eco-friendly accessory for TREASURE fans. Made from recycled materials, this pouch features a trendy design adorned with TREASURE's logo, providing a practical and fashionable way to carry your essentials while showing your support for the group.",
            'price' => 500000,
            'stock' => 100,
            'productImage' => "images/Treasure/Merchandise/2.jpg"
        ]);

        Product::insert([
            'userId' => 5,
            'productName' => '[HELLO] TREASURE LANYARD SET',
            'description' => "Introducing the [HELLO] TREASURE Lanyard Set, the perfect accessory for TREASURE fans. This set includes a premium-quality lanyard featuring TREASURE's logo and a detachable keychain, allowing you to showcase your fandom while keeping your keys or ID card securely in place.",
            'price' => 180000,
            'stock' => 100,
            'productImage' => "images/Treasure/Merchandise/3.jpg"
        ]);

        Product::insert([
            'userId' => 5,
            'productName' => 'Treasure Official Light Stick',
            'description' => "Introducing the official TREASURE K-pop Boy Band Light Stick! Join the TREASURE fandom with this beautifully designed light stick, perfect for illuminating concerts, fan meetings, and your overall K-pop experience. This sleek and ergonomic light stick features the group's logo in vibrant colors, emitting a mesmerizing glow that syncs with their performances, creating an immersive concert atmosphere. With concert mode, Bluetooth connectivity for interactive features, customizable settings for brightness and colors, and a long-lasting rechargeable battery, this light stick is a must-have for any dedicated TREASURE fan. Get ready to light up the stage and show your support for TREASURE!",
            'price' => 540000,
            'stock' => 100,
            'productImage' => "images/Treasure/Merchandise/4.jpg"
        ]);

        Product::insert([
            'userId' => 5,
            'productName' => '[HELLOTOUR] TREASURE ACRYLIC PHOTO CARD HOLDER',
            'description' => "Introducing the [HELLOTOUR] TREASURE Acrylic Photo Card Holder, a stylish and practical way to organize and display your TREASURE photo cards. Made of high-quality acrylic, this photo card holder showcases the group's logo and can hold multiple cards, keeping them safe from damage while allowing you to enjoy your favorite TREASURE moments wherever you go.",
            'price' => 250000,
            'stock' => 100,
            'productImage' => "images/Treasure/Merchandise/5.jpg"
        ]);
    }
}
