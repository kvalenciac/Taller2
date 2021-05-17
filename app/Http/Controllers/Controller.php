<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static $quotes = array("The Black Knight Always Triumphs! - Monty Python", 
        "Anyone who has never made a mistake has never tried anything new - Albert Einstein",
        "Never Stop Exploring - The North Face",
        "Be yourself; everyone else is already taken - Oscar Wilde",
        "So many books, so little time - Frank Zappa",
        "Be the change that you wish to see in the world - Mahatma Gandhi",
    );

    public function index()
    {
        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomQuote = Controller::$quotes[$randomNumber];
        return response()->json(['quote' => $randomQuote]);
    }
    
    public static $images = array(
        "https://taller2bucket.s3.amazonaws.com/Meme1.jpeg",
        "https://taller2bucket.s3.amazonaws.com/Meme2.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme3.jpeg",
        "https://taller2bucket.s3.amazonaws.com/Meme4.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme5.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme6.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme7.png",
        "https://taller2bucket.s3.amazonaws.com/Meme8.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme9.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme10.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme11.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme12.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme13.jpg",
        "https://taller2bucket.s3.amazonaws.com/Meme14.jpeg",
        "https://taller2bucket.s3.amazonaws.com/Meme15.jpg",
    );

    public function randomimage()
    {
        $totalImages = (count(Controller::$images));
        $randomNumber = (rand(0,($totalImages-1)));
        $randomImage = Controller::$images[$randomNumber];
        return view('image')->with("image", $randomImage);
    }
}