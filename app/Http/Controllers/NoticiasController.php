<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;


class NoticiasController extends Controller
{

    public function index(Request $request)
    {
        $page = $request->get('page') ? $request->get('page') : '1';
        $pesquisa = "?page=" . $page;
        if ($request->get('pesquisa')) {
            $param = "?pesquisa=" . $request->get('pesquisa');
            $pesquisa = $param;
        }
        $client = new Client([
            'base_uri' => 'http://www.marcha.cnm.org.br/webservice/noticias'.$pesquisa,
            'timeout' => 2.0,
        ]);
        $response = $client->request('GET');
        $noticias = json_decode($response->getBody()->getContents());
        $paginated = $this->pagination($noticias->noticias ? $noticias->noticias : []);
        return view('noticias.index', ['noticias' => $paginated]);
    }

    public function pagination($noticias)
    {
        // Get current page form url e.x. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Create a new Laravel collection from the array data
        $itemCollection = collect($noticias);

        // Define how many items we want to be visible in each page
        $perPage = 10;

        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        // set url path for generted links
        $paginatedItems->setPath('noticias');

        return  $paginatedItems;
    }


}



