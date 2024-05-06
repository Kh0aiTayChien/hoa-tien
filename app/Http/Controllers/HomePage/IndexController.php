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
        SEOMeta::setTitle(' Dự án Hoa Tiên Paradise');
        SEOMeta::setDescription('Dự án Hoa Tiên Paradise, thỏa mãn mọi giác quan - đất vàng sinh phú quý.' );

        OpenGraph::setDescription('Dự án Hoa Tiên Paradise, Khu nghỉ dưỡng và sinh thái biển tự nhiên.
        thỏa mãn mọi giác quan - đất vàng sinh phú quý.' );
        OpenGraph::setTitle('Dự án Hoa Tiên Paradise');
        OpenGraph::setUrl('https://hoatienparadisehatinh.vn/');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage('https://hoatienparadisehatinh.vn/images/homepage/section-6/sec6bg.png');

        TwitterCard::setTitle('Dự án Hoa Tiên Paradise');
        TwitterCard::setSite('https://hoatienparadisehatinh.vn/');

        JsonLd::setTitle('Dự án Hoa Tiên Paradise');
        JsonLd::setDescription('Dự án Hoa Tiên Paradise, thỏa mãn mọi giác quan - đất vàng sinh phú quý.' );
        JsonLd::addImage('https://hoatienparadisehatinh.vn/images/homepage/section-6/seo.png');


        return view('pages/home-page/index');
    }

    public function document()
    {
        return view('pages/document/index');
    }
}
