<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DomainModel;
use App\Models\OscModel;
use App\Models\ReclamationModel;


class Home extends BaseController
{
    public function index()
    {
        $categoryModel = model(CategoryModel::class);
        $domainModel = model(DomainModel::class);
        $oscModel = model(OscModel::class);
            $data = [
                'categories'  => $categoryModel->getCategory(),
                'domains'  => $domainModel->getDomain(),
                "miniSearchInput" => '',
                "searchInput" => '',
                "selectedCatgoryId" => 'none',
                "selectedDomainId" => 'none',
                "verifyOscCount" => $oscModel->getOscByStatus(1)->countAllResults(),
                "unVerifyOscCount" => $oscModel->getOscByStatus(0)->countAllResults(),
                'oscs' => $oscModel->getOsc()->paginate(10),
                'pager' => $oscModel->pager,
                'title' => "Page d'acceuil YOONU",
            ];
        return view('home/home', $data);
    }


    public function search()
    {
        helper(['form']);
        $categoryModel = model(CategoryModel::class);
        $domainModel = model(DomainModel::class);
        $oscModel = model(OscModel::class);

        
        $miniSearchInput = $this->request->getVar('miniSearchInput');
        $searchInput = $this->request->getVar("searchInput");
            if (!$searchInput) {
                $data = [
                    'categories'  => $categoryModel->getSearchResult($miniSearchInput),
                    "miniSearchInput" => $miniSearchInput,
                    "searchInput" => $searchInput,
                    'domains'  => $domainModel->getSearchResult($miniSearchInput),
                    'title' => "Resultat de recherche",
                    "selectedCatgoryId" => 'none',
                    "selectedDomainId" => 'none',
                    "verifyOscCount" => $oscModel->getOscByStatus(1)->countAllResults(),
                    "unVerifyOscCount" => $oscModel->getOscByStatus(0)->countAllResults(),
                    'oscs' =>  $oscModel->getOsc()->paginate(10),
                    'pager' =>  $oscModel->pager,
                ];
        } else {
            $data = [
                'categories'  => $categoryModel->getCategory(),
                "miniSearchInput" => $miniSearchInput,
                "searchInput" => $searchInput,
                "selectedCatgoryId" => 'none',
                "selectedDomainId" => 'none',
                'domains'  => $domainModel->getDomain(),
                "verifyOscCount" => $oscModel->getOscByStatus(1)->countAllResults(),
                "unVerifyOscCount" => $oscModel->getOscByStatus(0)->countAllResults(),
                'title' => "Resultat de recherche",
                'oscs' =>  $oscModel->getSearchResult($searchInput)->paginate(10),
                'pager' =>  $oscModel->pager,
            ];
        }  
            return view('home/home', $data);
    }

    
}
