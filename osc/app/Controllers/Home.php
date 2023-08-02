<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DomainModel;
use App\Models\ReclamationModel;


class Home extends BaseController
{
    public function index()
    {
        $categoryModel = model(CategoryModel::class);
        $domainModel = model(DomainModel::class);
        $reclamationModel = model(ReclamationModel::class);
            $data = [
                'categories'  => $categoryModel->getCategory(),
                'domains'  => $domainModel->getDomain(),
                "miniSearchInput" => '',
                // "searchInput" => '',
                'reclamations' => $reclamationModel->select('reclamation.*, category.name as category_name')
                    ->join('category', 'category.id = reclamation.categoryId', 'left')
                    ->getReclamation(),
                'title' => "Page d'acceuil YOONU",
            ];
        return view('home/home', $data);
    }


    public function search()
    {
        helper(['form']);
        $categoryModel = model(CategoryModel::class);
        $domainModel = model(DomainModel::class);
        $reclamationModel = model(ReclamationModel::class);

        
        $searchInput = $this->request->getVar('searchInput');
            $data = [
                'categories'  => $categoryModel->getSearchResult($searchInput),
                "miniSearchInput" => $searchInput,
                'domains'  => $domainModel->getSearchResult($searchInput),
                'reclamations' => $reclamationModel->select('reclamation.*, category.name as category_name')
                    ->join('category', 'category.id = reclamation.categoryId', 'left')
                    ->getReclamation(),
                'title' => "Resultat de recherche",
            ];
            return view('home/home', $data);
    }
}
