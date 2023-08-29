<?php

namespace App\Controllers;

use App\Models\OscModel;
use App\Models\DomainModel;
use App\Models\CategoryModel;
use App\Models\ReclamationModel;
use App\Models\UsersModel;
use App\Models\OfficeModel;
use App\Models\ContactModel;
use App\Models\OscUserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

use function PHPUnit\Framework\isEmpty;


class User extends BaseController
{
    public function index()
    {
        $oscModel = model(OscModel::class);
    }

    public function dashboard($segment = "home")
    {
        $oscModel = model(OscModel::class);
        $allOscCount = $oscModel->getOsc()->countAllResults();
        $data["allOscCount"] = $allOscCount;
        $data["segment"] = $segment;
        // Vérifier si le fichier existe
    // if (!file_exists('Views/dashboard/'.$segment)) {
        // Le fichier n'existe pas, donc renvoyer une erreur 404
    //     throw new \CodeIgniter\Exceptions\PageNotFoundException();
    // }
    if ($segment == "osc") {
        $categoryModel = model(CategoryModel::class);
        $domainModel = model(DomainModel::class);
        $oscModel = model(OscModel::class);
        $data["oscs"] = $oscModel->getOsc()->paginate(21);
        $data["pager"] = $oscModel->pager;
            // $data = [
            //     'categories'  => $categoryModel->getCategory(),
            //     'domains'  => $domainModel->getDomain(),
            //     "miniSearchInput" => '',
            //     "searchInput" => '',
            //     "selectedCatgoryId" => 'none',
            //     "selectedDomainId" => 'none',
            //     "verifyOscCount" => $oscModel->getOscByStatus(1)->countAllResults(),
            //     "unVerifyOscCount" => $oscModel->getOscByStatus(0)->countAllResults(),
            //     'oscs' => $oscModel->getOsc()->paginate(10),
            //     'pager' => $oscModel->pager,
            //     'title' => "Page d'acceuil YOONU",
            // ];
    }

    // Le fichier existe, donc le retourner
    return view('dashboard/'.$segment,  $data);
    }


    public function search($searchIn)
    {
        helper(['form']);
        $searchInput = $this->request->getVar("searchInput");
        if ($searchIn == "osc") {
            $oscModel = model(OscModel::class);
            $data["segment"] = "osc";
            $oscModel = model(OscModel::class);
            $data["oscs"] = $oscModel->getSearchResult($searchInput)->paginate(21);
            $data["pager"] = $oscModel->pager;
        return view('dashboard/osc',  $data);
        }

    }




}
