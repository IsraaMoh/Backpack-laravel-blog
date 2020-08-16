<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Post::create([
            
            'title' => 'A New Hope',
            'body' => 'The Fear.

            One of the first things that came to mind for me as my eyes opened to the newness … will this be the year I get sick?   Will this be the decade that I die?  Statistically speaking, probably.  Yet, that’s no way to “fresh start.”
            
            I shake off the worries and take a deep breath.
            
            When you live with unknown of stage 4 cancer wide open possibilities are tinged with fear.   Dreaming of the future is hard… our oldest son graduates from high school in just three years… will I be there?  New Year’s resolution- Be healthy… Don’t die.   What new talent would you like to learn?  Ukulele – seems manageable given my time constraints. Only 15 more years until retirement dreams are realized … should I even consider this as a possibility?  Lighthearted New Years conversations – daggers in my heart.
            
            And, my biggest heartbreak… the reality that as time slips away so does this chapter of good health, adventure & laughter.   This past decade was a warp speed roller coaster.  Some days seemed to last forever (like those spent waiting for doctor appointments).  Despite the pain we laughed and traveled and loved. Years slipped by in the blink of an eye.  Our little boys grew taller than me.  “Mama, Mama, Mama”  transformed from an annoyance to an echo I long to hear just once more.
            
            ',
            'active' => true,
            ]);

        App\Post::create([
            
            'title' => 'Happy life',
            'body' => 'We all have our wishes. Someone wants to be rich. Someone wants to be happy. Someone maybe just wants to live. I think wishes are some really good things we humans have. Unlike any other being it is a cause of our existence. Without it we will be like a ship without radar.

            I think there is no one without a dream. The wishes may be small. Sometimes so small we ignore them without thinking twice. Let me give a little example.
            
            Suppose you are walking in a road and you see a old man is selling some foods. The foods can be anything you see everyday. But sometimes you may want to taste them.
            
            But usually these ',
            'active' => true,
        ]);
    }
}
