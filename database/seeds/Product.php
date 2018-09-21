<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product= new App\Product([
        	'imagePath'=>'https://images-na.ssl-images-amazon.com/images/I/51rdG8GERfL._SX323_BO1,204,203,200_.jpg',
        	'title'=>'Why men love bitches',
        	'description'=>'Awesome',
        	'price'=>120
        ]);
        $product->save();
         $product= new App\Product([
        	'imagePath'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1475447615i/32333457._UX1200_SR1200,630_.jpg',
        	'title'=>'The Richest Man Babel',
        	'description'=>'Super Cool',
        	'price'=>100
        ]);
        $product->save();
         $product= new App\Product([
        	'imagePath'=>'http://inspirationboost.com/wp-content/uploads/2012/09/110-Stephen-R-Covey-The-7-Habits-of-Highly-Effective-People.png',
        	'title'=>'The-7-Habits-of-Highly-Effective-People',
        	'description'=>'Perfect',
        	'price'=>80
        ]);
        $product->save();
         $product= new App\Product([
        	'imagePath'=>'https://images-na.ssl-images-amazon.com/images/I/811qKQxWMKL.jpg',
        	'title'=>'Rich Dad , Poor Dad',
        	'description'=>'Cool',
        	'price'=>90
        ]);
        $product->save();
         $product= new App\Product([
        	'imagePath'=>'https://upload.wikimedia.org/wikipedia/ar/archive/7/79/20170619015006%21%D9%81%D9%8A_%D9%82%D9%84%D8%A8%D9%8A_%D8%A3%D9%86%D8%AB%D9%89_%D8%B9%D8%A8%D8%B1%D9%8A%D8%A9.jpg',
        	'title'=>'a princess in my heart',
        	'description'=>'Super Cool - at least as a child',
        	'price'=>150
        ]);
        $product->save();
         $product= new App\Product([
        	'imagePath'=>'https://image.slidesharecdn.com/abs-thesecretrevealedabookbylazarangelov-161116104049/95/abs-the-secret-revealed-a-book-by-lazar-angelov-1-638.jpg?cb=1479292887',
        	'title'=>'abs-the-secret-revealed',
        	'description'=>'Super Cool - at least for Atheletics',
        	'price'=>180
        ]);
        $product->save();
    }
}
