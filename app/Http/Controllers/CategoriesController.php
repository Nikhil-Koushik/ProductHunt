<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\works_services;
use App\Models\works_apps;

class CategoriesController extends Controller
{
    private $services = ["Ad blockers",
        "App switcher",
        "Calendar apps",
        "Customer support",
        "Email clients",
        "E-signature",
        "File storage and sharing",
        "Hiring software",
        "Knowledge base software",
        "Legal services",
        'Meeting software',
        'Note and writing apps',
        "Password managers",
        "PDF Editor",
        "Presentation Software",
        "Project management software",
        "Resume tools",
        "Scheduling software",
        "Screenshots and screen recording apps",
        "Search",
        "Spreadsheets",
        "Team collaboration software",
        "Time tracking apps",
        "Video conferencing",
        "Virtual office platforms",
        "Web browsers",
        "Writing assistants"];
        private $apps = [[
            "name" => "Rely.io",
            "logo" => "https://ph-files.imgix.net/6bc200fe-4882-4e91-931d-661aba5b21cd.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1",
            "review_count" => 114,
            "description" => "Rely.io's Internal Developer Portal enables engineering teams to consolidate and unify their engineering stack and gain automated visibility into their software ecosystem. Rely then provides a custom AI assistant trained on the data available in their software catalog so they can automate tasks throughout the software delivery life cycle (SDLC) to 10x their engineering productivity."
        ],
          [
            "name" => "The Free Website Guys",
            "logo" => "https://ph-files.imgix.net/c00fabc4-483c-4087-9621-a5de409efb26.jpeg?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1",
            "review_count" => 152,
            "description" => "The Free Website Guys is a popular website development agency that is famous for its free website program. To date, it has helped over 10,000+ entrepreneurs get a professional website. It does not charge for this work, instead using its free website program as a way to create trust and build connections with business owners, a percentage of whom later hire the company for larger paid projects further down the line. It is rated the #1 web agency on Clutch, G2, TrustPilot, UpCity, and Good Firms."
          ],
          [
            "name" => "Zipy",
            "logo" => "https://ph-files.imgix.net/6bc200fe-4882-4e91-931d-661aba5b21cd.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1",
            "review_count" => 134,
            "description" => "Zipy is a debugging platform with user session replay, frontend and network monitoring in one. ⏰ Install in a min ▶️ Replay error sessions in real time 🚀 Dev tools, Stack Trace, Console & Network Logs Have questions? Ask the Maker"
          ],
          [
            "name" => "Mage",
            "logo" => "https://ph-files.imgix.net/a7c3630b-4967-42e8-ae59-fdf7d0117360.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1",
            "review_count" => 63,
            "description" => "Open-source data pipeline tool for transforming and integrating data. The modern replacement for Airflow. - Integrate and synchronize data from 3rd party sources - Build real-time and batch pipelines to transform data using Python, SQL, and R - Run, monitor, and orchestrate thousands of pipelines without losing sleep"
          ],
          [
            "name" => "Graphite",
            "logo" => "https://ph-files.imgix.net/6bc200fe-4882-4e91-931d-661aba5b21cd.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1",
            "review_count" => 61,
            "description" => "Ship code faster with Graphite. Stay unblocked on code review with “stacking” - the workflow engineers at top companies use to accelerate their development. Now available to anyone with a GitHub account."
          ],
          [
            "name" => "SingleStore Kai™",
            "logo" => "https://ph-files.imgix.net/4ea949e7-7b4a-4dc8-86ae-397c3be0db85.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1",
            "review_count" => 105,
            "description" => "SingleStore Kai enables up to 100x faster analytics on JSON data within existing MongoDB applications. The easy-to use-API for MongoDB enables developers to use familiar MongoDB commands to achieve real-time analytics for their applications."
          ],
          [
            "name" => "Wewaat",
            "logo" => "https://ph-files.imgix.net/a7c3630b-4967-42e8-ae59-fdf7d0117360.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1",
            "review_count" => 35,
            "description" => "One directory for all your no code needs, plus marketing and sales tools to help you launch, market and sell. Search and discover tools based on your project requirements or your budget with more than 30 different categories of tools."
          ],
          [
            "name" => "Albato",
            "logo" => "https://ph-files.imgix.net/4ea949e7-7b4a-4dc8-86ae-397c3be0db85.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1",
            "review_count" => 261,
            "description" => "Albato - No-code Automation platform. A single platform for all business automations. You can connect any apps without coders. If you didn't find the app, just add it! By the way, we have solutions for Saas. Any Saas can take embedded connectors. Enjoy!"
          ]];
        private $items = [
            "Products" => [
                "title" => "Products",
                "items" => ["Work & Productivity", "Engineering & Development", "Design & Creative", "Social and Community", "Finance","Marketing and Sales","Travel","Health & Fitness","Platfroms","Product add-ons","Web3","Physical Products","AI","Ecommerce","Family","Lifestyle"]
            ],
            "Categories" => [
                "title" => "Categories",
                "items" => ["Work & Productivity", "Engineering & Development", "Design & Creative", "Social and Community", "Finance"]
            ],
            "Community" => [
                "title" => "Community",
                "items" => ["Work & Productivity", "Engineering & Development", "Design & Creative", "Social and Community", "Finance"]
            ],
            "Marketplace" => [
                "title" => "Marketplace",
                "items" => ["Work & Productivity", "Engineering & Development", "Design & Creative", "Social and Community", "Finance"]
            ],
            "About" => [
                "title" => "About",
                "items" => ["Work & Productivity", "Engineering & Development", "Design & Creative", "Social and Community", "Finance"]
            ],
            "Advertise" => [
                "title" => "Advertise",
                "items" => ["Work & Productivity", "Engineering & Development", "Design & Creative", "Social and Community", "Finance"]
            ],
            "How to post?" => [
                "title" => "How to post?",
                "items" => ["Work & Productivity", "Engineering & Development", "Design & Creative", "Social and Community", "Finance"]
            ],
            "Signin" => [
                "title" => "Signin",
                "items" => ["Work & Productivity", "Engineering & Development", "Design & Creative", "Social and Community", "Finance"]
            ]
        ];
        private $var = 1;

    public function work(){
        $heading = "Work & Productivity";
        $services = $this->services;
        $apps = $this->apps;
        $items = $this->items;
        $var = $this->var;
        return view('navbar.categories.index', compact('services','heading','apps','items','var'));
    }
    public function engg(){
        $heading = "Engineering & Development";
        $services = $this->services;
        $apps = $this->apps;
        $items = $this->items;
        $var = $this->var;
        return view('navbar.categories.index', compact('services','heading','apps','items','var'));
    }
    public function design(){
        $heading = "Design & Creative"; 
        $services = $this->services;
        $apps = $this->apps;
        $items = $this->items;
        $var = $this->var;
        return view('navbar.categories.index', compact('services','heading','apps','items','var'));
    }
    public function social(){
        $heading = "Social and Community";
        $services = $this->services;
        $apps = $this->apps;
        $items = $this->items;
        $var = $this->var;
        return view('navbar.categories.index', compact('services','heading','apps','items','var'));
    }
    public function finance(){
        $heading = "Finance";
        $services = $this->services;
        $apps = $this->apps;
        $items = $this->items;
        $var = $this->var;
        return view('navbar.categories.index', compact('services','heading','apps','items','var'));
    }
}
