<?php

namespace App\Controllers;

use App\Models\OscModel;
use App\Models\DomainModel;
use App\Models\CategoryModel;
use App\Models\ReclamationModel;
use App\Models\UserModel;
use App\Models\OfficeModel;
use App\Models\ContactModel;
use CodeIgniter\Exceptions\PageNotFoundException;

use function PHPUnit\Framework\isEmpty;

class Osc extends BaseController
{
    public function index()
    {
        $oscModel = model(OscModel::class);

        $data = [
            'news'  => $oscModel->getOsc(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }

    public function view($id = null)
    {
        $oscModel = model(OscModel::class);
        $contactModel = model(ContactModel::class);
        $data['osc'] = $oscModel->getOsc($id);
        $data['osc']["email"] = "";
        $data['title'] = "Détails sur l'OSC";
        $data['tap'] = "about";
        if ($data['osc']["officeId"]) {
            $data['osc']["phones"] = $contactModel->getOfficeContactByType($data['osc']["officeId"], "phone");
            $data['osc']["emails"] = $contactModel->getOfficeContactByType($data['osc']["officeId"], "email");
        }
        return view('osc/details', $data);
    }

    


    public function getByDomain($domainId)
    {
        $oscModel = model(OscModel::class);
        $categoryModel = model(CategoryModel::class);
        $domainModel = model(DomainModel::class);
        $data = [
            'categories'  => $categoryModel->getCategory(),
            'domains'  => $domainModel->getDomain(),
            "miniSearchInput" => '',
            "searchInput" => '',
            'oscs' =>  $oscModel->getByDomain($domainId),
            'title' => "Affichage par domaine",
        ];
        return view('home/home', $data);
    }


    public function getByCategory($categoryId)
    {
        $oscModel = model(OscModel::class);
        $categoryModel = model(CategoryModel::class);
        $domainModel = model(DomainModel::class);
        $data = [
            'categories'  => $categoryModel->getCategory(),
            'domains'  => $domainModel->getDomain(),
            "searchInput" => '',
            "miniSearchInput" => '',
            'oscs' =>  $oscModel->getByCategory($categoryId),
            'title' => "Affichage par Catégorie",
        ];
        return view('home/home', $data);
    }


    public function create($step = 1, $oscId = "none", $isPrev = 0)
    {

        helper(['form', 'url']);
        helper('cookie');

        $validation = \Config\Services::validation();
        $domainModel = model(DomainModel::class);
        $categoryModel = model(CategoryModel::class);
        $reclamationModel = model(ReclamationModel::class);
        $oscModel = model(OscModel::class);
        $userModel = model(UserModel::class);
        $officeModel = model(OfficeModel::class);
        $contactModel = model(ContactModel::class);

        $data["oscId"] = $oscId;
        if (!$this->request->is('post')) {
            if ($isPrev == 0) {
                if ($oscId != "none") {
                    $osc = $oscModel->getOsc($oscId);
                    if ($osc) {
                        try {
                            set_cookie('name', $osc["name"]);
                            set_cookie('matricule', $osc["matricule"]);
                            set_cookie('category', $osc["category_name"]);
                            set_cookie('domain', $osc["domain_name"]);
                            set_cookie('creationDate', $osc["creationDate"]);
                            set_cookie('webSite', $osc["webSite"]);
                            set_cookie('country', $osc["country"]);
                        } catch (\Throwable $th) {
                        }
                    }
                }
                $data["step"] = $step;
                $data["domains"] = $domainModel->getDomain();
                $data["categories"] = $categoryModel->getCategory();
                $data["title"] = "Creer une Organisation";
                return view('form/osc/create1', $data);
            }
        }

        $post = $this->request->getPost(['name', 'matricule', 'creationDate', 'category', 'domain', 'phoneNumber1', "phoneNumber2", "webSite", "oscEmail", 'country', "city", 'location', 'long', 'lat', "fullname", "position", "email"]);
        switch ($step) {
            case 1: {
                    if ($isPrev == 0) {
                        if (!$validation->run($post, 'step1')) {
                            $data["step"] = $step;
                            $data["domains"] = $domainModel->getDomain();
                            $data["categories"] = $categoryModel->getCategory();
                            $data["title"] = "Creer une Organisation";
                            return view('form/osc/create1', $data);
                        } else {
                            set_cookie('name', $post["name"]);
                            set_cookie('matricule', $post["matricule"]);
                            set_cookie('category', $post["category"]);
                            set_cookie('domain', $post["domain"]);
                            set_cookie('creationDate', $post["creationDate"]);
                            $data["oscId"] = $oscId;
                            $data["step"] = $step + 1;
                            $data["title"] = "Creer une Organisation";
                            return view('form/osc/create2', $data);
                        }
                    } else {
                        $data["step"] = $step;
                        $data["domains"] = $domainModel->getDomain();
                        $data["categories"] = $categoryModel->getCategory();
                        $data["title"] = "Creer une Organisation";
                        return view('form/osc/create1', $data);
                    }
                }
                break;
            case 2: {
                    if ($isPrev == 0) {
                        if (!$validation->run($post, 'step2')) {
                            $data["step"] = $step;
                            $data["title"] = "Creer une Organisation";
                            return view('form/osc/create2', $data);
                        } else {
                            set_cookie('phoneNumber1', $post["phoneNumber1"]);
                            set_cookie('phoneNumber2', $post["phoneNumber2"]);
                            set_cookie('webSite', $post["webSite"]);
                            set_cookie('oscEmail', $post["oscEmail"]);
                            $data["step"] = $step + 1;
                            $data["title"] = "Creer une Organisation";
                            return view('form/osc/create3', $data);
                        }
                    } else {
                        $data["step"] = $step;
                        $data["title"] = "Creer une Organisation";
                        return view('form/osc/create2', $data);
                    }
                }
                break;
            case 3: {
                    if ($isPrev == 0) {
                        if (!$validation->run($post, 'step3')) {
                            $data["step"] = $step;
                            $data["title"] = "Creer une Organisation";
                            return view('form/osc/create3', $data);
                        } else {
                            set_cookie('country', $post["country"]);
                            set_cookie('city', $post["city"]);
                            set_cookie('location', $post["location"]);
                            $data["step"] = $step + 1;
                            $data["title"] = "Creer une Organisation";
                            return view('form/osc/create4', $data);
                        }
                    } else {
                        $data["step"] = $step;
                        $data["title"] = "Creer une Organisation";
                        return view('form/osc/create3', $data);
                    }
                }
                break;
            case 4: {
                    if ($isPrev == 0) {
                        if (!$validation->run($post, 'step4')) {
                            $data["step"] = $step;
                            $data["title"] = "Creer une Organisation";
                            return view('form/osc/create4', $data);
                        } else {
                            set_cookie('long', $post["long"]);
                            set_cookie('lat', $post["lat"]);
                            $data["step"] = $step + 1;
                            $data["title"] = "Creer une Organisation";
                            return view('form/osc/create5', $data);
                        }
                    } else {
                        $data["step"] = $step;
                        $data["title"] = "Creer une Organisation";
                        return view('form/osc/create4', $data);
                    }
                }
                break;
            case 5: {
                    if (!$validation->run($post, 'step5')) {
                        $data["step"] = $step;
                        $data["title"] = "Creer une Organisation";
                        return view('form/osc/create5', $data);
                    } else {
                        $data["step"] = $step + 1;
                        $data["title"] = "Creer une Organisation";
                        set_cookie('fullname', $post["fullname"]);
                        set_cookie('position', $post["position"]);
                        set_cookie('email', $post["email"]);
                        $userModel->save([
                            "fullname" => $post["fullname"],
                            "position" => $post["position"],
                            "email" => $post["email"],
                        ]);
                        $userId = $userModel->insertID();
                        if ($oscId == "none") {
                            $oscModel->save([
                                'name' => get_cookie("name"),
                                'isVerify' => 0,
                                'matricule' => get_cookie("matricule"),
                                'creationDate' => get_cookie("creationDate"),
                                'webSite' => get_cookie("webSite"),
                                'categoryId' => get_cookie("category"),
                                'domainId' => get_cookie("domain"),
                                'userId' => $userId,
                            ]);
                            $lastOscId = $oscModel->insertID();
                            $officeModel->save([
                                'location' => get_cookie("location"),
                                'country' => get_cookie("country"),
                                'city' => get_cookie("city"),
                                'long' => get_cookie("long"),
                                'lat' => get_cookie("lat"),
                                'oscId' => $lastOscId,
                                'isHeadOffice' => 1,
                            ]);
                            $officeId = $officeModel->insertID();
                            $contacts = [
                                [
                                    'value' => get_cookie("phoneNumber1"),
                                    'type' => 'phone',
                                    'officeId' => $officeId,
                                ],
                                [
                                    'value' => get_cookie("phoneNumber2"),
                                    'type' => 'phone',
                                    'officeId' => $officeId,
                                ],
                                [
                                    'value' => get_cookie("oscEmail"),
                                    'type' => 'email',
                                    'officeId' => $officeId,
                                ],
                            ];
                            foreach ($contacts as $key => $value) {
                                $contactModel->save($value);
                            }
                        } else {
                            $reclamationModel->save([
                                'name' => get_cookie("name"),
                                'matricule' => get_cookie("matricule"),
                                'creationDate' => get_cookie("creationDate"),
                                'categoryId' => get_cookie("category"),
                                'domainId' => get_cookie("domain"),
                                'phoneNumber1' => get_cookie("phoneNumber1"),
                                'phoneNumber2' => get_cookie("phoneNumber2"),
                                'webSite' => get_cookie("webSite"),
                                'email' => get_cookie("oscEmail"),
                                'country' => get_cookie("country"),
                                'city' => get_cookie("city"),
                                'location' => get_cookie("location"),
                                'long' => get_cookie("long"),
                                'lat' => get_cookie("lat"),
                                'userId' => $userId,
                            ]);
                        }
                        // delete_cookie("fullname");
                        // delete_cookie("position");
                        // delete_cookie("email");
                        // delete_cookie("name");
                        // delete_cookie("matricule");
                        // delete_cookie("creationDate");
                        // delete_cookie("category");
                        // delete_cookie("domain");
                        // delete_cookie("phoneNumber1");
                        // delete_cookie("phoneNumber2");
                        // delete_cookie("webSite");
                        // delete_cookie("oscEmail");
                        // delete_cookie("country");
                        // delete_cookie("city");
                        // delete_cookie("location");
                        // delete_cookie("long");
                        // delete_cookie("lat");
                        return view('form/osc/finish', $data);
                    }
                }
                break;
            default:
                break;
        }
    }


    public function goTo($to = false)
    {
        helper(['form', 'url']);

        echo "Je suis ici la 
skjdnbsdfnmns
asdsjknbndjkbnsfdhjbnwesi
hjbrjefgdihjbwshknbjgqhekbgfihkwjbgq
eihwjbvgiheqkwbsdghjbwgfs
qhjvdgiyhkqbw";
        $data["step"] = $to;
        $data["title"] = "Creer une Organisation";
        return redirect()->back()->withInput();
        // return redirect()->to('form/osc/create'.$to);

    }
}
