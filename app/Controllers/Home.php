<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'DevsGWA - Where Developers Build the Future of Africa',
            'meta_description' => 'DevsGWA - A place where developers live and create innovative technology solutions for Africa. Custom software development, API integration, and digital transformation services.',
            'services' => [
                [
                    'title' => 'Custom Software Development',
                    'description' => 'Tailored solutions for web, mobile, desktop, and embedded applications based on client business needs',
                    'icon' => 'code',
                    'tech_stack' => ['React', 'Node.js', 'Python', 'Flutter']
                ],
                [
                    'title' => 'API Development & Integration',
                    'description' => 'Building and integrating third-party services including payment gateways, CRMs, mapping services, and other APIs',
                    'icon' => 'api',
                    'tech_stack' => ['REST', 'GraphQL', 'Microservices', 'Docker']
                ],
                [
                    'title' => 'UI/UX Design',
                    'description' => 'User-centered interface and experience design focused on improving usability and user retention',
                    'icon' => 'design',
                    'tech_stack' => ['Figma', 'Adobe XD', 'Tailwind', 'Framer']
                ],
                [
                    'title' => 'Software Maintenance & Support',
                    'description' => 'Ongoing updates, bug fixes, compatibility upgrades, and comprehensive technical support',
                    'icon' => 'support',
                    'tech_stack' => ['DevOps', 'CI/CD', 'Monitoring', 'Testing']
                ],
                [
                    'title' => 'Technical Consulting & IT Strategy',
                    'description' => 'Strategic guidance to help customers define technology roadmaps and digital transition strategies',
                    'icon' => 'consulting',
                    'tech_stack' => ['Cloud', 'Architecture', 'Security', 'Scalability']
                ],
                [
                    'title' => 'Training & Onboarding',
                    'description' => 'User enablement through documentation, live training sessions, and online courses',
                    'icon' => 'training',
                    'tech_stack' => ['Workshops', 'Documentation', 'Video Courses', 'Mentoring']
                ]
            ],
            'portfolio' => [
                [
                    'title' => 'E-Commerce Platform',
                    'description' => 'Modern e-commerce solution with mobile app and admin dashboard',
                    'image' => 'ecommerce-project.jpg',
                    'tech_stack' => ['React', 'Node.js', 'MongoDB', 'Flutter'],
                    'category' => 'Web Development'
                ],
                [
                    'title' => 'FinTech Mobile App',
                    'description' => 'Secure mobile banking application with biometric authentication',
                    'image' => 'fintech-app.jpg',
                    'tech_stack' => ['Flutter', 'Firebase', 'Blockchain', 'AI/ML'],
                    'category' => 'Mobile Development'
                ],
                [
                    'title' => 'Healthcare Management System',
                    'description' => 'Comprehensive hospital management system with patient portal',
                    'image' => 'healthcare-system.jpg',
                    'tech_stack' => ['Vue.js', 'Laravel', 'MySQL', 'Docker'],
                    'category' => 'Enterprise Software'
                ],
                [
                    'title' => 'AgriTech IoT Solution',
                    'description' => 'Smart farming solution with IoT sensors and data analytics',
                    'image' => 'agritech-iot.jpg',
                    'tech_stack' => ['Python', 'IoT', 'Machine Learning', 'AWS'],
                    'category' => 'IoT & Analytics'
                ],
                [
                    'title' => 'EdTech Learning Platform',
                    'description' => 'Interactive online learning platform with video streaming',
                    'image' => 'edtech-platform.jpg',
                    'tech_stack' => ['Next.js', 'PostgreSQL', 'WebRTC', 'Redis'],
                    'category' => 'Education Technology'
                ],
                [
                    'title' => 'Logistics Tracking System',
                    'description' => 'Real-time package tracking with GPS integration',
                    'image' => 'logistics-system.jpg',
                    'tech_stack' => ['Angular', 'Spring Boot', 'Google Maps', 'Kafka'],
                    'category' => 'Logistics & Transport'
                ]
            ]
        ];

        return view('landing_page', $data);
    }



    public function sitemap()
    {
        $this->response->setContentType('application/xml');

        $urls = [
            [
                'loc' => base_url(),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '1.0'
            ],
            [
                'loc' => base_url() . '#services',
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.9'
            ],
            [
                'loc' => base_url() . '#portfolio',
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '0.8'
            ],
            [
                'loc' => base_url() . '#about',
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => base_url() . '#contact',
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ]
        ];

        return view('sitemap', ['urls' => $urls]);
    }

    public function robots()
    {
        $this->response->setContentType('text/plain');

        $robots = "# DevsGWA - Software Development Company\n";
        $robots .= "# " . base_url() . "\n\n";
        $robots .= "User-agent: *\n";
        $robots .= "Allow: /\n";
        $robots .= "Disallow: /app/\n";
        $robots .= "Disallow: /system/\n";
        $robots .= "Disallow: /writable/\n";
        $robots .= "Disallow: /tests/\n";
        $robots .= "Disallow: /*.log$\n";
        $robots .= "Disallow: /env\n";
        $robots .= "Disallow: /composer.json\n";
        $robots .= "Disallow: /composer.lock\n\n";
        $robots .= "# Allow important files\n";
        $robots .= "Allow: /assets/\n";
        $robots .= "Allow: /sitemap.xml\n";
        $robots .= "Allow: /favicon.ico\n\n";
        $robots .= "# Sitemap location\n";
        $robots .= "Sitemap: " . base_url('sitemap.xml') . "\n\n";
        $robots .= "# Crawl delay (optional)\n";
        $robots .= "Crawl-delay: 1\n";

        return $robots;
    }
}
