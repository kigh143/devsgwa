<!DOCTYPE html>
<html lang="en" itemscope itemtype="https://schema.org/Organization">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GGDZ3SSXCN"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GGDZ3SSXCN');
    </script>
    <!-- Primary Meta Tags -->
    <title><?= $title ?></title>
    <meta name="title" content="<?= $title ?>">
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="keywords" content="software development Africa, custom software development Uganda, API development Kampala, UI UX design Africa, mobile app development Uganda, web development Kampala, digital transformation Africa, tech consulting Uganda, software company Africa, developers Uganda">
    <meta name="author" content="DevsGWA">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= base_url() ?>">

    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" as="style">
    <link rel="preload" href="https://cdn.tailwindcss.com" as="script">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $meta_description ?>">
    <meta property="og:image" content="<?= base_url('assets/images/devsgwa-og-image.jpg') ?>">
    <meta property="og:image:alt" content="DevsGWA - Software Development Company in Africa">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="DevsGWA">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= base_url() ?>">
    <meta property="twitter:title" content="<?= $title ?>">
    <meta property="twitter:description" content="<?= $meta_description ?>">
    <meta property="twitter:image" content="<?= base_url('assets/images/devsgwa-twitter-image.jpg') ?>">
    <meta property="twitter:image:alt" content="DevsGWA - Where Developers Build Africa's Future">
    <meta property="twitter:creator" content="@DevsGWA">
    <meta property="twitter:site" content="@DevsGWA">

    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#0066FF">
    <meta name="msapplication-TileColor" content="#0066FF">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Geo Tags -->
    <meta name="geo.region" content="UG">
    <meta name="geo.placename" content="Kampala">
    <meta name="geo.position" content="0.3476;32.5825">
    <meta name="ICBM" content="0.3476, 32.5825">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'tech-blue': '#0066FF',
                        'tech-purple': '#6366F1',
                        'tech-cyan': '#06B6D4',
                        'tech-green': '#10B981',
                        'tech-orange': '#F59E0B',
                        'dark-bg': '#0F172A',
                        'dark-card': '#1E293B',
                        'dark-border': '#334155',
                        'light-bg': '#F8FAFC',
                        'light-card': '#FFFFFF',
                        'light-border': '#E2E8F0'
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'gradient': 'gradient 15s ease infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        gradient: {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        }
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet" crossorigin="anonymous">

    <!-- Favicon and App Icons -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/manifest.json') ?>">

    <!-- DNS Prefetch for external resources -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//cdn.tailwindcss.com">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "DevsGWA",
        "alternateName": "Developers GWA",
        "description": "A tech hub where developers create innovative software solutions for African businesses. Specializing in custom software development, API integration, and digital transformation.",
        "url": "<?= base_url() ?>",
        "logo": "<?= base_url('assets/images/devsgwa-logo.png') ?>",
        "image": "<?= base_url('assets/images/devsgwa-og-image.jpg') ?>",
        "foundingDate": "2020",
        "founder": {
            "@type": "Person",
            "name": "DevsGWA Team"
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Kampala",
            "addressLocality": "Kampala",
            "addressRegion": "Central Region",
            "postalCode": "00000",
            "addressCountry": "UG"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+44-7930-068-728",
            "contactType": "customer service",
            "email": "info@devsgwa.com",
            "availableLanguage": ["English"]
        },
        "sameAs": [
            "https://linkedin.com/company/devsgwa",
            "https://twitter.com/devsgwa",
            "https://github.com/devsgwa",
            "https://instagram.com/devsgwa"
        ],
        "areaServed": {
            "@type": "Place",
            "name": "Africa"
        },
        "serviceType": [
            "Custom Software Development",
            "API Development & Integration",
            "UI/UX Design",
            "Software Maintenance & Support",
            "Technical Consulting & IT Strategy",
            "Training & Onboarding"
        ],
        "knowsAbout": [
            "Software Development",
            "Web Development",
            "Mobile App Development",
            "API Integration",
            "Digital Transformation",
            "UI/UX Design",
            "Technical Consulting"
        ]
    }
    </script>

    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "DevsGWA",
        "image": "<?= base_url('assets/images/devsgwa-og-image.jpg') ?>",
        "telephone": "+44-7930-068-728",
        "email": "info@devsgwa.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Kampala",
            "addressLocality": "Kampala",
            "addressRegion": "Central Region",
            "postalCode": "00000",
            "addressCountry": "UG"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 0.3476,
            "longitude": 32.5825
        },
        "url": "<?= base_url() ?>",
        "openingHours": "Mo-Fr 08:00-18:00",
        "priceRange": "$$"
    }
    </script>

    <!-- Website Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "DevsGWA",
        "url": "<?= base_url() ?>",
        "description": "<?= $meta_description ?>",
        "publisher": {
            "@type": "Organization",
            "name": "DevsGWA"
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "<?= base_url() ?>?search={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <style>
        :root {
            --bg-color: #0F172A;
            --card-color: #1E293B;
            --border-color: #334155;
            --text-color: #FFFFFF;
            --text-secondary: #D1D5DB;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --nav-bg: rgba(15, 23, 42, 0.8);
            --grid-pattern: rgba(255, 255, 255, 0.15);
        }

        [data-theme="light"] {
            --bg-color: #F8FAFC;
            --card-color: #FFFFFF;
            --border-color: #E2E8F0;
            --text-color: #1F2937;
            --text-secondary: #6B7280;
            --glass-bg: rgba(255, 255, 255, 0.8);
            --glass-border: rgba(0, 0, 0, 0.1);
            --nav-bg: rgba(248, 250, 252, 0.9);
            --grid-pattern: rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .font-mono { font-family: 'JetBrains Mono', monospace; }
        .gradient-bg { background: linear-gradient(-45deg, #0066FF, #6366F1, #06B6D4, #10B981); }

        /* Tech grid pattern */
        .tech-grid {
            background-image: radial-gradient(circle at 1px 1px, var(--grid-pattern) 1px, transparent 0);
            background-size: 20px 20px;
        }

        /* Glass effects */
        .glass {
            backdrop-filter: blur(10px);
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            transition: all 0.3s ease;
        }

        /* Navigation glass effect */
        .nav-glass {
            backdrop-filter: blur(10px);
            background: var(--nav-bg);
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        /* Theme-aware backgrounds */
        .theme-bg { background-color: var(--bg-color); }
        .theme-card { background-color: var(--card-color); }
        .theme-text { color: var(--text-color); }
        .theme-text-secondary { color: var(--text-secondary); }
        .theme-border { border-color: var(--border-color); }

        /* Hero overlay */
        .hero-overlay {
            background-color: var(--bg-color);
            opacity: 0.8;
        }

        /* Theme toggle button */
        .theme-toggle {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            z-index: 1000;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            color: #0066FF;
        }

        [data-theme="dark"] .theme-toggle {
            color: #FFD700;
        }

        .theme-toggle:hover {
            transform: translateY(-50%) scale(1.1);
        }
    </style>
</head>
<body class="bg-dark-bg text-white transition-colors duration-300">
    <!-- Theme Toggle Button -->
    <button id="theme-toggle" class="theme-toggle" aria-label="Toggle theme">
        <i id="sun-icon" class="fas fa-sun text-xl hidden"></i>
        <i id="moon-icon" class="fas fa-moon text-xl"></i>
    </button>

    <!-- Navigation -->
    <nav class="nav-glass fixed w-full z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center space-x-2">
                            <div class="w-10 h-10 bg-gradient-to-r from-tech-blue to-tech-purple rounded-lg flex items-center justify-center">
                                <i class="fas fa-code text-white text-lg"></i>
                            </div>
                            <div>
                                <h1 class="text-2xl font-bold bg-gradient-to-r from-tech-blue to-tech-purple bg-clip-text text-transparent">DevsGWA</h1>
                                <p class="text-xs text-gray-400 font-mono">where devs live</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="theme-text-secondary hover:text-tech-blue transition duration-300 font-medium">Home</a>
                    <a href="#meaning" class="theme-text-secondary hover:text-tech-blue transition duration-300 font-medium">About</a>
                    <a href="#services" class="theme-text-secondary hover:text-tech-blue transition duration-300 font-medium">Services</a>
                    <a href="#portfolio" class="theme-text-secondary hover:text-tech-blue transition duration-300 font-medium">Portfolio</a>
                    <a href="https://api.whatsapp.com/send/?phone=447930068728&text&type=phone_number&app_absent=0" target="_blank" class="bg-gradient-to-r from-tech-green to-green-600 text-white px-6 py-2 rounded-full hover:shadow-lg hover:shadow-tech-green/25 transition duration-300 font-medium flex items-center">
                        <i class="fab fa-whatsapp mr-2"></i>
                        WhatsApp Us
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="theme-text-secondary hover:text-tech-blue">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden nav-glass theme-border border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 theme-text-secondary hover:text-tech-blue">Home</a>
                <a href="#meaning" class="block px-3 py-2 theme-text-secondary hover:text-tech-blue">About</a>
                <a href="#services" class="block px-3 py-2 theme-text-secondary hover:text-tech-blue">Services</a>
                <a href="#portfolio" class="block px-3 py-2 theme-text-secondary hover:text-tech-blue">Portfolio</a>
                <a href="https://api.whatsapp.com/send/?phone=447930068728&text&type=phone_number&app_absent=0" target="_blank" class="block px-3 py-2 text-tech-green font-semibold flex items-center">
                    <i class="fab fa-whatsapp mr-2"></i>
                    WhatsApp Us
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center relative overflow-hidden">
        <!-- Animated background -->
        <div class="absolute inset-0 gradient-bg animate-gradient tech-grid"></div>
        <div class="absolute inset-0 hero-overlay"></div>

        <!-- Floating elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-tech-blue/20 rounded-full animate-float"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-tech-purple/20 rounded-full animate-float" style="animation-delay: -2s;"></div>
        <div class="absolute bottom-40 left-20 w-12 h-12 bg-tech-cyan/20 rounded-full animate-float" style="animation-delay: -4s;"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <!-- Code-like intro -->
                <div class="font-mono text-tech-cyan mb-4 text-sm md:text-base">
                    <span class="text-gray-500">// Welcome to</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    <span class="bg-gradient-to-r from-tech-blue via-tech-purple to-tech-cyan bg-clip-text text-transparent" itemprop="name">DevsGWA</span>
                    <br>
                    <span class="text-3xl md:text-4xl text-gray-300 font-light">Where Developers</span>
                    <br>
                    <span class="text-3xl md:text-4xl bg-gradient-to-r from-tech-green to-tech-orange bg-clip-text text-transparent">Build Africa's Future</span>
                </h1>

                <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto theme-text-secondary leading-relaxed" itemprop="description">
                    A premier tech hub where innovative developers create cutting-edge software solutions for African businesses.
                    We specialize in custom software development, API integration, and digital transformation services that transform ideas into powerful digital experiences.
                </p>

                <!-- Tech stats -->
                <div class="flex flex-wrap justify-center gap-8 mb-12">
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-tech-blue">50+</div>
                        <div class="text-sm text-gray-400">Projects Deployed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-tech-purple">25+</div>
                        <div class="text-sm text-gray-400">Happy Clients</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-tech-cyan">100%</div>
                        <div class="text-sm text-gray-400">Success Rate</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#portfolio" class="bg-gradient-to-r from-tech-blue to-tech-purple text-white px-8 py-4 rounded-full font-semibold hover:shadow-lg hover:shadow-tech-blue/25 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-rocket mr-2"></i>
                        View Our Work
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=447930068728&text&type=phone_number&app_absent=0" target="_blank" class="glass theme-text px-8 py-4 rounded-full font-semibold hover:bg-white/20 transition duration-300 flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i>
                        WhatsApp Us
                    </a>
                </div>

                <!-- Scroll indicator -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <i class="fas fa-chevron-down text-gray-400 text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- DevsGWA Meaning Section -->
    <section id="meaning" class="py-20 theme-card relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="font-mono text-tech-cyan mb-4">
                    <span class="text-gray-500">// What does DevsGWA mean?</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-tech-blue to-tech-purple bg-clip-text text-transparent">Devs</span>
                    <span class="text-gray-300">+</span>
                    <span class="bg-gradient-to-r from-tech-green to-tech-orange bg-clip-text text-transparent">GWA</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left side - Explanation -->
                <div class="space-y-8">
                    <div class="glass p-8 rounded-2xl">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-tech-blue to-tech-purple rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-code text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-tech-blue">Devs</h3>
                                <p class="text-gray-400 font-mono">Developers</p>
                            </div>
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            The creative minds behind every line of code. Our developers are passionate problem-solvers
                            who turn complex challenges into elegant digital solutions.
                        </p>
                    </div>

                    <div class="glass p-8 rounded-2xl">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-tech-green to-tech-orange rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-home text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-tech-green">GWA</h3>
                                <p class="text-gray-400 font-mono">A place (African slang)</p>
                            </div>
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            In African slang, "GWA" means "place" - a space where people belong, create, and thrive.
                            It represents community, collaboration, and shared purpose.
                        </p>
                    </div>
                </div>

                <!-- Right side - Visual representation -->
                <div class="relative">
                    <div class="glass p-8 rounded-2xl text-center">
                        <div class="mb-8">
                            <div class="text-6xl mb-4">🏠</div>
                            <h3 class="text-3xl font-bold mb-4">
                                <span class="bg-gradient-to-r from-tech-blue via-tech-purple to-tech-cyan bg-clip-text text-transparent">
                                    DevsGWA
                                </span>
                            </h3>
                            <p class="text-xl text-gray-300 mb-6">
                                "A place where developers live"
                            </p>
                        </div>

                        <div class="space-y-4 text-left">
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check-circle text-tech-green mr-3"></i>
                                <span>Collaborative development environment</span>
                            </div>
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check-circle text-tech-green mr-3"></i>
                                <span>Innovation-driven culture</span>
                            </div>
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check-circle text-tech-green mr-3"></i>
                                <span>African-rooted, globally competitive</span>
                            </div>
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check-circle text-tech-green mr-3"></i>
                                <span>Community of tech enthusiasts</span>
                            </div>
                        </div>
                    </div>

                    <!-- Floating code elements -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-tech-blue/20 rounded-lg flex items-center justify-center animate-pulse-slow">
                        <i class="fas fa-laptop-code text-tech-blue"></i>
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-tech-purple/20 rounded-lg flex items-center justify-center animate-pulse-slow" style="animation-delay: -2s;">
                        <i class="fas fa-users text-tech-purple"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 theme-bg relative" itemscope itemtype="https://schema.org/Service">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="text-center mb-16">
                <div class="font-mono text-tech-cyan mb-4">
                    <span class="text-gray-500">// Our expertise</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-tech-blue to-tech-purple bg-clip-text text-transparent">Our Software Development Services</span>
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto" itemprop="description">
                    Comprehensive technology solutions powered by cutting-edge tools and frameworks. We deliver custom software development, API integration, UI/UX design, and technical consulting services across Africa.
                </p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($services as $index => $service): ?>
                <article class="glass rounded-2xl p-8 hover:bg-white/10 transition duration-300 group relative overflow-hidden" itemscope itemtype="https://schema.org/Service">
                    <!-- Gradient border effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-tech-blue via-tech-purple to-tech-cyan opacity-0 group-hover:opacity-20 transition duration-300 rounded-2xl"></div>

                    <div class="relative z-10">
                        <header class="mb-6">
                            <?php
                            $iconMap = [
                                'code' => 'fas fa-code',
                                'api' => 'fas fa-plug',
                                'design' => 'fas fa-palette',
                                'support' => 'fas fa-headset',
                                'consulting' => 'fas fa-lightbulb',
                                'training' => 'fas fa-graduation-cap'
                            ];
                            $iconClass = $iconMap[$service['icon']] ?? 'fas fa-cog';

                            $gradients = [
                                'from-tech-blue to-tech-purple',
                                'from-tech-purple to-tech-cyan',
                                'from-tech-cyan to-tech-green',
                                'from-tech-green to-tech-orange',
                                'from-tech-orange to-tech-blue',
                                'from-tech-purple to-tech-green'
                            ];
                            $gradient = $gradients[$index % count($gradients)];
                            ?>
                            <div class="w-16 h-16 bg-gradient-to-r <?= $gradient ?> rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300">
                                <i class="<?= $iconClass ?> text-2xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-tech-cyan transition duration-300" itemprop="name">
                                <?= esc($service['title']) ?>
                            </h3>
                        </header>

                        <p class="text-gray-300 leading-relaxed mb-6" itemprop="description">
                            <?= esc($service['description']) ?>
                        </p>

                        <!-- Tech stack -->
                        <div class="flex flex-wrap gap-2" itemprop="serviceType">
                            <?php foreach ($service['tech_stack'] as $tech): ?>
                            <span class="px-3 py-1 bg-dark-card rounded-full text-xs font-mono text-tech-cyan border border-dark-border" itemprop="serviceType">
                                <?= esc($tech) ?>
                            </span>
                            <?php endforeach; ?>
                        </div>

                        <!-- Hidden schema data -->
                        <meta itemprop="provider" content="DevsGWA">
                        <meta itemprop="areaServed" content="Africa">
                        <meta itemprop="serviceOutput" content="Software Solution">
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-dark-card relative" itemscope itemtype="https://schema.org/CreativeWork">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb Navigation -->
            <nav aria-label="Breadcrumb" class="mb-8">
                <ol class="flex items-center space-x-2 text-sm text-gray-400" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="#home" class="hover:text-tech-cyan transition duration-300" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class="text-gray-600">/</li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span class="text-tech-cyan" itemprop="name">Portfolio</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </nav>

            <header class="text-center mb-16">
                <div class="font-mono text-tech-cyan mb-4">
                    <span class="text-gray-500">// Our work</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-tech-blue to-tech-purple bg-clip-text text-transparent">Our Software Development Portfolio</span>
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto" itemprop="description">
                    Showcasing innovative software solutions we've built for businesses across Africa. From e-commerce platforms to fintech applications, discover our expertise in custom software development.
                </p>
            </header>

            <!-- Portfolio Filter -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="portfolio-filter active px-6 py-2 rounded-full bg-gradient-to-r from-tech-blue to-tech-purple text-white font-medium transition duration-300" data-filter="all">
                    All Projects
                </button>
                <button class="portfolio-filter px-6 py-2 rounded-full glass text-gray-300 hover:text-white font-medium transition duration-300" data-filter="web">
                    Web Development
                </button>
                <button class="portfolio-filter px-6 py-2 rounded-full glass text-gray-300 hover:text-white font-medium transition duration-300" data-filter="mobile">
                    Mobile Development
                </button>
                <button class="portfolio-filter px-6 py-2 rounded-full glass text-gray-300 hover:text-white font-medium transition duration-300" data-filter="enterprise">
                    Enterprise Software
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($portfolio as $index => $project): ?>
                <div class="portfolio-item glass rounded-2xl overflow-hidden hover:bg-white/10 transition duration-300 group"
                     data-category="<?= strtolower(str_replace(' ', '', explode(' ', $project['category'])[0])) ?>">
                    <!-- Project Image Placeholder -->
                    <div class="h-48 bg-gradient-to-br from-tech-blue/20 to-tech-purple/20 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <?php
                                $categoryIcons = [
                                    'Web Development' => 'fas fa-globe',
                                    'Mobile Development' => 'fas fa-mobile-alt',
                                    'Enterprise Software' => 'fas fa-building',
                                    'IoT & Analytics' => 'fas fa-chart-line',
                                    'Education Technology' => 'fas fa-graduation-cap',
                                    'Logistics & Transport' => 'fas fa-truck'
                                ];
                                $icon = $categoryIcons[$project['category']] ?? 'fas fa-code';
                                ?>
                                <i class="<?= $icon ?> text-4xl text-white/50 mb-2"></i>
                                <p class="text-white/70 text-sm font-mono"><?= esc($project['category']) ?></p>
                            </div>
                        </div>
                        <!-- Hover overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-tech-blue/80 to-tech-purple/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-eye text-2xl text-white mb-2"></i>
                                <p class="text-white font-medium">View Details</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-tech-cyan transition duration-300">
                            <?= esc($project['title']) ?>
                        </h3>
                        <p class="text-gray-300 mb-4 leading-relaxed">
                            <?= esc($project['description']) ?>
                        </p>

                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($project['tech_stack'] as $tech): ?>
                            <span class="px-2 py-1 bg-dark-bg rounded text-xs font-mono text-tech-cyan border border-dark-border">
                                <?= esc($tech) ?>
                            </span>
                            <?php endforeach; ?>
                        </div>

                        <!-- Project Links -->
                        <div class="flex space-x-3">
                            <a href="<?= esc($project['link']) ?>"
                               target="_blank"
                               class="flex-1 bg-gradient-to-r from-tech-blue to-tech-purple text-white px-4 py-2 rounded-lg font-medium hover:shadow-lg hover:shadow-tech-blue/25 transition duration-300 text-center">
                                View Project
                            </a>
                            <a class="px-4 py-2 glass theme-text-secondary hover:text-white rounded-lg transition duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-12">
                <a href="#contact" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-tech-green to-tech-orange text-white rounded-full font-semibold hover:shadow-lg hover:shadow-tech-green/25 transition duration-300">
                    <i class="fas fa-plus mr-2"></i>
                    Start Your Project
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-dark-bg relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="font-mono text-tech-cyan mb-4">
                    <span class="text-gray-500">// About us</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-tech-blue to-tech-purple bg-clip-text text-transparent">Our Mission</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-6">Bridging Africa's Digital Divide</h3>
                    <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                        DevsGWA is more than a software company - we're a tech community dedicated to transforming Africa's digital landscape.
                        We create innovative solutions that empower businesses to thrive in the digital age.
                    </p>
                    <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                        Our mission is to bridge the digital divide by providing world-class technology services tailored to African markets.
                        We combine cutting-edge technology with deep local understanding to deliver solutions that make a real impact.
                    </p>

                    <!-- Tech Metrics -->
                    <div class="grid grid-cols-3 gap-6 mb-8">
                        <div class="text-center glass p-4 rounded-xl">
                            <div class="text-2xl font-bold text-tech-blue mb-1">50+</div>
                            <div class="text-gray-400 text-sm">Projects</div>
                        </div>
                        <div class="text-center glass p-4 rounded-xl">
                            <div class="text-2xl font-bold text-tech-purple mb-1">25+</div>
                            <div class="text-gray-400 text-sm">Clients</div>
                        </div>
                        <div class="text-center glass p-4 rounded-xl">
                            <div class="text-2xl font-bold text-tech-cyan mb-1">100%</div>
                            <div class="text-gray-400 text-sm">Success</div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="glass p-8 rounded-2xl">
                        <h3 class="text-2xl font-bold text-white mb-6">Why Choose DevsGWA?</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-r from-tech-blue to-tech-purple rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-rocket text-white text-sm"></i>
                                </div>
                                <span class="text-gray-300">Cutting-edge technology stack</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-r from-tech-purple to-tech-cyan rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-globe-africa text-white text-sm"></i>
                                </div>
                                <span class="text-gray-300">Deep African market knowledge</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-r from-tech-cyan to-tech-green rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-users text-white text-sm"></i>
                                </div>
                                <span class="text-gray-300">Collaborative development approach</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-r from-tech-green to-tech-orange rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-shield-alt text-white text-sm"></i>
                                </div>
                                <span class="text-gray-300">Enterprise-grade security & support</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-r from-tech-orange to-tech-blue rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-chart-line text-white text-sm"></i>
                                </div>
                                <span class="text-gray-300">Proven track record of success</span>
                            </div>
                        </div>
                    </div>

                    <!-- Floating elements -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-tech-blue/20 rounded-full animate-pulse-slow"></div>
                    <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-tech-purple/20 rounded-full animate-pulse-slow" style="animation-delay: -2s;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-dark-card dark:bg-dark-card light:bg-light-card relative" itemscope itemtype="https://schema.org/ContactPage">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="text-center mb-16">
                <div class="font-mono text-tech-cyan mb-4">
                    <span class="text-gray-500 dark:text-gray-500 light:text-gray-600">// Let's build something amazing</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-tech-blue to-tech-purple bg-clip-text text-transparent">Contact DevsGWA</span>
                </h2>
                <p class="text-xl text-gray-300 dark:text-gray-300 light:text-gray-700 max-w-3xl mx-auto" itemprop="description">
                    Ready to transform your business with cutting-edge technology? Contact our expert software development team in Kampala, Uganda via WhatsApp for instant communication.
                </p>
            </header>

            <div class="max-w-4xl mx-auto">
                <!-- WhatsApp Contact Card -->
                <div class="glass p-12 rounded-3xl text-center">
                    <div class="w-24 h-24 bg-gradient-to-r from-tech-green to-green-600 rounded-full flex items-center justify-center mx-auto mb-8">
                        <i class="fab fa-whatsapp text-4xl text-white"></i>
                    </div>

                    <h3 class="text-3xl font-bold text-white dark:text-white light:text-gray-900 mb-4">
                        Let's Chat on WhatsApp
                    </h3>

                    <p class="text-lg text-gray-300 dark:text-gray-300 light:text-gray-700 mb-8 max-w-2xl mx-auto">
                        Get instant responses to your software development inquiries. Chat with our team directly on WhatsApp for quick project discussions, quotes, and consultations.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                        <div class="flex items-center theme-text-secondary">
                            <i class="fas fa-phone text-tech-cyan mr-3"></i>
                            <span class="font-mono">+44 7930 068 728</span>
                        </div>
                        <div class="flex items-center theme-text-secondary">
                            <i class="fas fa-clock text-tech-cyan mr-3"></i>
                            <span>Available 24/7</span>
                        </div>
                    </div>

                    <a href="https://api.whatsapp.com/send/?phone=447930068728&text&type=phone_number&app_absent=0"
                       target="_blank"
                       class="inline-flex items-center bg-gradient-to-r from-tech-green to-green-600 text-white px-12 py-4 rounded-full text-xl font-semibold hover:shadow-lg hover:shadow-tech-green/25 transition duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp text-2xl mr-3"></i>
                        Start WhatsApp Chat
                    </a>

                    <div class="mt-8 pt-8 border-t border-gray-200 dark:border-dark-border">
                        <p class="text-sm text-gray-400 dark:text-gray-400 light:text-gray-600">
                            Or reach us via email: <a href="mailto:info@devsgwa.com" class="text-tech-cyan hover:underline">info@devsgwa.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Schema (Hidden) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What services does DevsGWA offer?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "DevsGWA offers comprehensive software development services including custom software development, API development & integration, UI/UX design, software maintenance & support, technical consulting & IT strategy, and training & onboarding services."
                }
            },
            {
                "@type": "Question",
                "name": "Where is DevsGWA located?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "DevsGWA is located in Kampala, Uganda, serving clients across Africa with world-class software development services."
                }
            },
            {
                "@type": "Question",
                "name": "What does DevsGWA mean?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "DevsGWA means 'Developers GWA' where 'Devs' stands for Developers and 'GWA' is African slang for 'place'. It represents a place where developers live, create, and collaborate to build innovative software solutions."
                }
            },
            {
                "@type": "Question",
                "name": "What technologies does DevsGWA use?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "DevsGWA uses cutting-edge technologies including React, Node.js, Python, Flutter, Vue.js, Laravel, Docker, AWS, and many other modern frameworks and tools to deliver high-quality software solutions."
                }
            },
            {
                "@type": "Question",
                "name": "How can I contact DevsGWA for a project?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You can contact DevsGWA by email at info@devsgwa.com, phone at +44 7930 068 728, or via WhatsApp for instant communication. We're based in Kampala, Uganda and serve clients across Africa."
                }
            }
        ]
    }
    </script>

    <!-- Footer -->
    <footer class="bg-dark-bg dark:bg-dark-bg light:bg-light-bg border-t border-dark-border dark:border-dark-border light:border-light-border py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-tech-blue to-tech-purple rounded-xl flex items-center justify-center">
                            <i class="fas fa-code text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold bg-gradient-to-r from-tech-blue to-tech-purple bg-clip-text text-transparent">DevsGWA</h3>
                            <p class="text-xs text-gray-400 font-mono">where devs live</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 max-w-md leading-relaxed">
                        A tech hub where innovative developers create cutting-edge solutions for African businesses.
                        Building the future, one line of code at a time.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/company/devsgwa-software-agency" class="w-10 h-10 bg-gradient-to-r from-tech-blue to-tech-purple rounded-lg flex items-center justify-center text-white hover:shadow-lg hover:shadow-tech-blue/25 transition duration-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.x.com/devsgwa" class="w-10 h-10 bg-gradient-to-r from-tech-purple to-tech-cyan rounded-lg flex items-center justify-center text-white hover:shadow-lg hover:shadow-tech-purple/25 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                    
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-6 text-white">Services</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="#services" class="hover:text-tech-cyan transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-tech-blue"></i>Custom Software Development</a></li>
                        <li><a href="#services" class="hover:text-tech-cyan transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-tech-blue"></i>API Integration</a></li>
                        <li><a href="#services" class="hover:text-tech-cyan transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-tech-blue"></i>UI/UX Design</a></li>
                        <li><a href="#services" class="hover:text-tech-cyan transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-tech-blue"></i>Technical Consulting</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-6 text-white">Get In Touch</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-tech-cyan mr-3"></i>
                            <span class="font-mono text-sm">info@devsgwa.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-tech-cyan mr-3"></i>
                            <span class="font-mono text-sm">+44 7930 068 728</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt text-tech-cyan mr-3"></i>
                            <span>Kampala, Uganda</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-dark-border mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">
                        &copy; <?= date('Y') ?> DevsGWA. All rights reserved. Built with ❤️ in Africa.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-tech-cyan text-sm transition duration-300">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-tech-cyan text-sm transition duration-300">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-tech-cyan text-sm transition duration-300">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for modern interactions -->
    <script>
        // Theme Management
        const themeToggle = document.getElementById('theme-toggle');
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');
        const html = document.documentElement;

        // Check for saved theme preference or default to system preference
        const savedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        // Set initial theme
        let currentTheme = 'dark'; // default
        if (savedTheme) {
            currentTheme = savedTheme;
        } else if (!systemPrefersDark) {
            currentTheme = 'light';
        }

        // Apply theme
        function applyTheme(theme) {
            html.setAttribute('data-theme', theme);
            if (theme === 'light') {
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            } else {
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            }
        }

        // Initialize theme
        applyTheme(currentTheme);

        // Theme toggle functionality
        themeToggle.addEventListener('click', () => {
            currentTheme = currentTheme === 'dark' ? 'light' : 'dark';
            applyTheme(currentTheme);
            localStorage.setItem('theme', currentTheme);
        });

        // Listen for system theme changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                currentTheme = e.matches ? 'dark' : 'light';
                applyTheme(currentTheme);
            }
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                // Close mobile menu if open
                mobileMenu.classList.add('hidden');
            });
        });

        // Enhanced navigation scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            const isDark = html.getAttribute('data-theme') === 'dark';

            if (window.scrollY > 50) {
                nav.classList.add('backdrop-blur-md');
                if (isDark) {
                    nav.style.background = 'rgba(15, 23, 42, 0.95)';
                } else {
                    nav.style.background = 'rgba(248, 250, 252, 0.95)';
                }
            } else {
                nav.classList.remove('backdrop-blur-md');
                if (isDark) {
                    nav.style.background = 'rgba(15, 23, 42, 0.8)';
                } else {
                    nav.style.background = 'rgba(248, 250, 252, 0.9)';
                }
            }
        });

        // Portfolio filtering
        const portfolioFilters = document.querySelectorAll('.portfolio-filter');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        portfolioFilters.forEach(filter => {
            filter.addEventListener('click', () => {
                // Remove active class from all filters
                portfolioFilters.forEach(f => {
                    f.classList.remove('active', 'bg-gradient-to-r', 'from-tech-blue', 'to-tech-purple');
                    f.classList.add('glass', 'text-gray-300');
                });

                // Add active class to clicked filter
                filter.classList.add('active', 'bg-gradient-to-r', 'from-tech-blue', 'to-tech-purple');
                filter.classList.remove('glass', 'text-gray-300');
                filter.classList.add('text-white');

                const filterValue = filter.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.style.opacity = '1';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', () => {
            const animateElements = document.querySelectorAll('.glass, .portfolio-item');
            animateElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });

        // Form enhancement
        const form = document.querySelector('form');
        const submitButton = form?.querySelector('button[type="submit"]');

        if (form && submitButton) {
            form.addEventListener('submit', (e) => {
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
                submitButton.disabled = true;
            });
        }

        // Add typing effect to hero text (optional)
        const heroText = document.querySelector('h1 span:last-child');
        if (heroText) {
            const text = heroText.textContent;
            heroText.textContent = '';
            let i = 0;

            const typeWriter = () => {
                if (i < text.length) {
                    heroText.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 100);
                }
            };

            setTimeout(typeWriter, 1000);
        }
    </script>
</body>
</html>
