<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class AppController extends Controller
{
    protected $apiKey = '9a789ae1fe7a4c8fb11af0b32149c2a7';

    public function paginate($items, $perPage = 7, $page = null, $options = [])

    {

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

    }
    public function home()
    {
        $data = Http::get("https://api.spoonacular.com/food/menuItems/search?query=burger&number=4&apiKey=$this->apiKey");
        $menus = $data->json()['menuItems'];
        return view('home', [
            'menus' => $menus
        ]);
    }
    public function menus()
    {
        $placeholderSearch = 'quel menus recherchez-vous ?';
        $burger = Http::get("https://api.spoonacular.com/food/menuItems/search?query=burger&number=10&apiKey=$this->apiKey")->json()['menuItems'];
        $pasta = Http::get("https://api.spoonacular.com/food/menuItems/search?query=pasta&number=10&apiKey=$this->apiKey")->json()['menuItems'];
        $snickers = Http::get("https://api.spoonacular.com/food/menuItems/search?query=snickers&number=10&apiKey=$this->apiKey")->json()['menuItems'];
        $data [] = [
            'burger'=> $burger, 
            'pasta' => $pasta, 
            'snickers' =>  $snickers
        ];
        return view('menus', [
            'pasta' => $pasta,
            'placeholderSearch' => $placeholderSearch
        ]);
    }
    public function search(Request $request)
    {
        $request->validate([
            'query' => ['required']
        ]);
        $query = $request->query;
        $result = Http::get("https://api.spoonacular.com/food/menuItems/search?query=$query&number=10&apiKey=$this->apiKey")->json()['menuItems'];
        $data = $result;
        return view('search', [
            'data' => $data
        ]);
    }
}
