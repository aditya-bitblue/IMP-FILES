<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function mobappdevelopment()
    {
        return view('services/mobappdevelopment');
    }
    public function webappdevelopment()
    {
        return view('services/webappdevelopment');
    }
    public function Softwaredevelopmentconsulting()
    {
        return view('services/Softwaredevelopmentconsulting');
    }
    public function ProductDesign()
    {
        return view('services/ProductDesign');
    }
    public function StartupDNA()
    {
        return view('services/StartupDNA');
    }
    public function SoftwareModernization()
    {
        return view('services/SoftwareModernization');
    }
    public function MachineLearningAI()
    {
        return view('services/MachineLearningAI');
    }
    public function DedicatedProductTeam()
    {
        return view('services/DedicatedProductTeam');
    }
    public function TeamAugmentation()
    {
        return view('services/TeamAugmentation');
    }
}
