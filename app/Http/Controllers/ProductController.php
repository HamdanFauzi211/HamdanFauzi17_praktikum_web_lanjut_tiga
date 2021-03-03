<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller {

    function marbeledugames() {
    return 'https://www.educastudio.com/category/marbel-edu-games';
}
    function marbelandfriendskidsgames() {
    return 'https://www.educastudio.com/category/marbel-and-friends-kids-games';
}

    function riristorybook() {
    return 'https://www.educastudio.com/category/riri-story-books';
}

    function kolakkidssong() {
    return 'https://www.educastudio.com/category/kolak-kids-songs';
}
}