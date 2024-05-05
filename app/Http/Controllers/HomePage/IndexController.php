<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use App\Models\Image;
use App\Models\Product;
use App\Models\Session;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        SEOMeta::setTitle(' HOA TIEN sea-golf villas');
        SEOMeta::setDescription('HOA TIEN sea-golf villas, thỏa mãn mọi giác quan - đất vàng sinh phú quý.' );

        OpenGraph::setDescription('HOA TIEN sea-golf villas, Khu nghỉ dưỡng và sinh thái biển tự nhiên.
        thỏa mãn mọi giác quan - đất vàng sinh phú quý.' );
        OpenGraph::setTitle('HOA TIEN sea-golf villas');
        OpenGraph::setUrl('');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage('');

        TwitterCard::setTitle('HOA TIEN sea-golf villas');
        TwitterCard::setSite('');

        JsonLd::setTitle('HOA TIEN sea-golf villas');
        JsonLd::setDescription('HOA TIEN sea-golf villas, thỏa mãn mọi giác quan - đất vàng sinh phú quý.' );
        JsonLd::addImage('');


        return view('pages/home-page/index');
    }

    public function document()
    {
        return view('pages/document/index');
    }
}
