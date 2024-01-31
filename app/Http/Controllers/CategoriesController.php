<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\works_services;
use App\Models\works_apps;

class CategoriesController extends Controller
{
    public function work(){
        $services = works_services::all();
        $apps = works_apps::all();
        $heading = "Work & Productivity";
        return view('navbar.categories.index', compact('services','heading','apps'));
    }
    public function engg(){
        $services = works_services::all();
        $apps = works_apps::all();
        $heading = "Engineering & Development";
        $items = [
            "Products" => [
                "title" => "Products",
                "items" => ['g','g']
            ],
            "Categories" => [
                "title" => "Categories",
                "items" => ["Work & Productivity", "Engineering & Development", "Design & Creative", "Social and Community", "Finance"]
            ],
            "Community" => [
                "title" => "Community",
                "items" => []
            ],
            "Marketplace" => [
                "title" => "Marketplace",
                "items" => []
            ],
            "About" => [
                "title" => "About",
                "items" => []
            ]
        ];

        // $items = ["li":{"title":"Hello"}, "Categories", "Community", "Marketplace", "About", "How to post?", "Sign in"];
        return view('navbar.categories.index', compact('services','heading','apps','items'));
    }
    public function design(){
        $services = works_services::all();
        $apps = works_apps::all();
        $heading = "Design & Creative";
        return view('navbar.categories.index', compact('services','heading','apps'));
    }
    public function social(){
        $services = works_services::all();
        $apps = works_apps::all();
        $heading = "Social and Community";
        return view('navbar.categories.index', compact('services','heading','apps'));
    }
    public function finance(){
        $services = works_services::all();
        $apps = works_apps::all();
        $heading = "Finance";
        return view('navbar.categories.index', compact('services','heading','apps'));
    }
}
