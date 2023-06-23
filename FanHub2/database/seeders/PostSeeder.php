<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Coldplay
        //Non
        Post::insert([
            'userId' => 1,
            'content' => "Lost in the euphoria of Coldplay's captivating concert! 🎶✨ Every beat, every lyric, and every breathtaking moment reminded us why we fell in love with their music. A night filled with pure magic and unforgettable memories. Thank you, Coldplay, for an epic musical journey! 🌟❤️ #ColdplayConcert #MusicalMagic #UnforgettableExperience #LostInTheMusic",
            'picture' => "images/Coldplay/FanArtist/Non/1.jpg"
        ]);
        
        //Ekslusif
        Post::insert([
            'userId' => 1,
            'content' => "An unforgettable night immersed in a symphony of sounds and emotions ✨✨ Coldplay Concert: A breathtaking journey of melodies that touched our souls and ignited a million memories. Thank you, Coldplay, for a truly magical experience! 🎶🌟 #ColdplayConcert #UnforgettableNight #MelodiesAndMemories",
            'picture' => "images/Coldplay/FanArtist/Exclusive/2.jpg"
        ]);

        //Lyodora
        //Non
        Post::insert([
            'userId' => 2,
            'content' => "Short Getaway❤️",
            'picture' => "images/Lyodora/FanArtist/Non/2.jpg"
        ]);
        
        Post::insert([
            'userId' => 2,
            'content' => "Just be Happy",
            'picture' => "images/Lyodora/FanArtist/Non/1.jpg"
        ]);

        //Ekslusif
        Post::insert([
            'userId' => 2,
            'content' => "Show me you are different then let me love you anyway!",
            'picture' => "images/Lyodora/FanArtist/Exclusive/1.jpg"
        ]);

        //Seventeen
        //Non
        Post::insert([
            'userId' => 3,
            'content' => "We are ready for tour",
            'picture' => "images/Seventeen/FanArtist/Non/3.jpg"
        ]);
        
        //Ekslusif
        Post::insert([
            'userId' => 3,
            'content' => "I miss them already 😥",
            'picture' => "images/Seventeen/FanArtist/Exclusive/1.jpg"
        ]);

        Post::insert([
            'userId' => 3,
            'content' => "Happy monthsary!",
            'picture' => "images/Seventeen/FanArtist/Exclusive/2.jpg"
        ]);

        //Taylor Swift
        //Non
        Post::insert([
            'userId' => 4,
            'content' => "Kindness is free, Sprinkle that stuff everywhere✨",
            'picture' => "images/Taylor Swift/FanArtist/Non/3.jpg"
        ]);
        
        //Ekslusif
        Post::insert([
            'userId' => 4,
            'content' => "My heart melts bcs of your smile",
            'picture' => "images/Taylor Swift/FanArtist/Exclusive/1.jpg"
        ]);

        Post::insert([
            'userId' => 4,
            'content' => "Happier than I was ✨",
            'picture' => "images/Taylor Swift/FanArtist/Exclusive/2.jpg"
        ]);

        //Treasure
        //Non
        Post::insert([
            'userId' => 5,
            'content' => "Cute love",
            'picture' => "images/Treasure/FanArtist/Non/1.jpg"
        ]);

        Post::insert([
            'userId' => 5,
            'content' => "Miss youu",
            'picture' => "images/Treasure/FanArtist/Non/4.jpg"
        ]);
        
        //Ekslusif
        Post::insert([
            'userId' => 5,
            'content' => "Hello Concert in Taiwan",
            'picture' => "images/Treasure/FanArtist/Exclusive/2.jpg"
        ]);
    }
}
