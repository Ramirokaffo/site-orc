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
    switch ($segment) {
        case "osc":
        $oscModel = model(OscModel::class);
        $data["oscs"] = $oscModel->getOsc()->paginate(21);
        $data["pager"] = $oscModel->pager;
        $data["searchInput"] = "";
        break;
        case "reclamation":
            $reclamationModel = model(ReclamationModel::class);
            $data["reclamations"] = $reclamationModel->getReclamation()->paginate(21);
            $data["pager"] = $reclamationModel->pager;
            $data["searchInput"] = "";
            break;        
        case "user":
            $usersModel = model(UsersModel::class);
            $data["users"] = $usersModel->paginate(21);
            $data["pager"] = $usersModel->pager;
            $data["searchInput"] = "";
            break;        
        default:
            break;
    }

    // return view('Highcharts-Dashboards-1.0.2/index.html',  $data);
    return view('dashboard/'.$segment,  $data);
    }


    public function search($searchIn)
    {
        helper(['form']);
        $searchInput = $this->request->getVar("searchInput");
        switch ($searchIn) {
            case 'osc':
                $oscModel = model(OscModel::class);
                $data["segment"] = "osc";
                $data["searchInput"] = $searchInput;
                $data["oscs"] = $oscModel->getSearchResult($searchInput)->paginate(21);
                $data["pager"] = $oscModel->pager;
            return view('dashboard/osc',  $data);
            case 'reclamation':
            $reclamationModel = model(ReclamationModel::class);
                $data["segment"] = "osc";
                $data["searchInput"] = $searchInput;
                $data["reclamation"] = $reclamationModel->getSearchResult($searchInput)->paginate(21);
                $data["pager"] = $reclamationModel->pager;
            return view('dashboard/osc',  $data);
            case 'user':
            $reclamationModel = model(ReclamationModel::class);
                $data["segment"] = "user";
                $data["searchInput"] = $searchInput;
                $data["reclamation"] = $reclamationModel->getSearchResult($searchInput)->paginate(21);
                $data["pager"] = $reclamationModel->pager;
            return view('dashboard/osc',  $data);
            
            default:
                # code...
                break;
        }


    }




}
