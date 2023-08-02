<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $step1 = [
        'name' => 'required|max_length[255]',
        'matricule'  => 'max_length[5000]',
        'creationDate'  => 'max_length[5000]',
        'category'  => 'required',
        'domain'  => 'required'
    ];

    public $step2 = [
        'phoneNumber1' => 'required|max_length[20]',
        'phoneNumber2'  => 'max_length[20]',
        'webSite'  => 'max_length[100]',
        'email'  => 'max_length[50]',
    ];

    public $step3 = [
        'country' => 'max_length[50]',
        'city'  => 'max_length[50]',
        'location'  => 'max_length[50]',
    ];

    public $step4 = [
        'long' => 'max_length[10]',
        'lat'  => 'max_length[10]',
    ];

    public $step5 = [
        'fullname' => 'required|max_length[50]',
        'position'  => 'max_length[50]',
        'email'  => 'required|max_length[30]',
    ];
}
