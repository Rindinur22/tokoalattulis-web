/* Colorful Table Styling */
        .table {
            background: var<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Alat Tulis Elegan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6c63ff;
            --secondary-color: #4ecdc4;
            --accent-color: #ff6b6b;
            --success-color: #4ecdc4;
            --warning-color: #ffd93d;
            --danger-color: #ff6b6b;
            --purple: #a8e6cf;
            --coral: #ff8a80;
            --mint: #4ecdc4;
            --lavender: #c7ceea;
            --peach: #ffb3ba;
            --light-gray: #f8f9ff;
            --medium-gray: #e1e8ff;
            --dark-gray: #6c7293;
            --white: #ffffff;
            --off-white: #fafaff;
            
            --gradient-primary: linear-gradient(135deg, #6c63ff 0%, #4ecdc4 100%);
            --gradient-secondary: linear-gradient(135deg, #ff6b6b 0%, #ffd93d 100%);
            --gradient-accent: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
            --gradient-success: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
            --gradient-danger: linear-gradient(135deg, #ff6b6b 0%, #ff8a80 100%);
            --gradient-warning: linear-gradient(135deg, #ffd93d 0%, #ffb347 100%);
            --gradient-purple: linear-gradient(135deg, #a8e6cf 0%, #7fcdcd 100%);
            --gradient-cosmic: linear-gradient(135deg, #6c63ff 0%, #c471ed 50%, #12c2e9 100%);
            --gradient-sunset: linear-gradient(135deg, #ff8a80 0%, #ff6b6b 50%, #ffd93d 100%);
            --gradient-ocean: linear-gradient(135deg, #4ecdc4 0%, #44a08d 50%, #096c82 100%);
            --gradient-light: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
            
            --shadow-sm: 0 2px 8px rgba(108, 99, 255, 0.1);
            --shadow-md: 0 4px 12px rgba(108, 99, 255, 0.15);
            --shadow-lg: 0 8px 20px rgba(108, 99, 255, 0.2);
            --shadow-xl: 0 12px 28px rgba(108, 99, 255, 0.25);
            --shadow-colorful: 0 8px 25px rgba(255, 107, 107, 0.3);
            
            --border-radius: 12px;
            --border-radius-lg: 16px;
            --border-radius-xl: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--off-white);
            color: var(--primary-color);
            line-height: 1.6;
            font-weight: 400;
        }

        /* Colorful animated background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 20%, rgba(108, 99, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 107, 107, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(78, 205, 196, 0.06) 0%, transparent 50%),
                radial-gradient(circle at 70% 30%, rgba(255, 217, 61, 0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
            animation: backgroundShift 20s ease-in-out infinite;
        }

        @keyframes backgroundShift {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        /* Colorful Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(108, 99, 255, 0.1);
            box-shadow: 0 2px 20px rgba(108, 99, 255, 0.1);
            transition: all 0.3s ease;
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            background: var(--gradient-cosmic);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .navbar-brand i {
            background: var(--gradient-accent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 1.6rem;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover i {
            transform: rotate(15deg);
            background: var(--gradient-danger);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            padding: 10px 20px !important;
            border-radius: var(--border-radius);
            margin: 0 4px;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: var(--border-radius);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 5px;
            left: 50%;
            background: var(--gradient-accent);
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: var(--gradient-sunset);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transform: translateY(-2px);
        }

        .nav-link:hover::before {
            opacity: 0.1;
        }

        .nav-link:hover::after {
            width: 60%;
            left: 20%;
        }

        .nav-link.active {
            background: var(--gradient-cosmic);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link.active::before {
            opacity: 0.15;
        }

        .nav-link i {
            margin-right: 8px;
            font-size: 1rem;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
        }

        /* Elegant Cards */
        .card {
            background: var(--white);
            border: 1px solid rgba(44, 62, 80, 0.1);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            overflow: hidden;
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gradient-accent);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: rgba(52, 152, 219, 0.2);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card-header {
            background: var(--gradient-light);
            border-bottom: 1px solid rgba(44, 62, 80, 0.1);
            padding: 1.5rem;
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.75rem;
        }

        .card-text {
            color: var(--dark-gray);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Colorful Buttons */
        .btn {
            border-radius: var(--border-radius);
            font-weight: 500;
            font-size: 0.9rem;
            padding: 10px 20px;
            border: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-transform: none;
            letter-spacing: 0.3px;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(108, 99, 255, 0.3);
        }

        .btn-primary:hover {
            background: var(--gradient-cosmic);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(108, 99, 255, 0.4);
            color: var(--white);
        }

        .btn-success {
            background: var(--gradient-success);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(78, 205, 196, 0.3);
        }

        .btn-success:hover {
            background: var(--gradient-ocean);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(78, 205, 196, 0.4);
            color: var(--white);
        }

        .btn-danger {
            background: var(--gradient-danger);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
        }

        .btn-danger:hover {
            background: var(--gradient-sunset);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 107, 0.4);
            color: var(--white);
        }

        .btn-warning {
            background: var(--gradient-warning);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(255, 217, 61, 0.3);
        }

        .btn-warning:hover {
            background: linear-gradient(135deg, #ffb347 0%, #ffd93d 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 217, 61, 0.4);
            color: var(--white);
        }

        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .btn-outline-primary:hover {
            background: var(--gradient-primary);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(108, 99, 255, 0.3);
        }

        /* Product Images */
        .product-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: var(--border-radius);
            transition: all 0.3s ease;
            filter: brightness(0.95);
        }

        .product-img:hover {
            filter: brightness(1);
            transform: scale(1.02);
        }

        /* Colorful Alerts */
        .alert {
            border: none;
            border-radius: var(--border-radius);
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid;
            background: var(--white);
            box-shadow: var(--shadow-sm);
            position: relative;
            overflow: hidden;
        }

        .alert::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            opacity: 0.05;
            pointer-events: none;
        }

        .alert-success {
            border-left-color: var(--success-color);
            background: var(--gradient-success);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .alert-success::before {
            background: var(--gradient-success);
        }

        .alert-danger {
            border-left-color: var(--danger-color);
            background: var(--gradient-danger);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .alert-danger::before {
            background: var(--gradient-danger);
        }

        .alert i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .alert .btn-close {
            filter: none;
            opacity: 0.7;
        }

        /* Colorful Form Enhancements */
        .form-control {
            border: 2px solid rgba(108, 99, 255, 0.1);
            border-radius: var(--border-radius);
            padding: 12px 16px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(108, 99, 255, 0.1);
            background: var(--white);
        }

        .form-control::placeholder {
            color: var(--medium-gray);
        }

        .form-label {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-select {
            border: 2px solid rgba(108, 99, 255, 0.1);
            border-radius: var(--border-radius);
            padding: 12px 16px;
            font-size: 0.95rem;
            background: var(--white);
        }

        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(108, 99, 255, 0.1);
        }

        /* Table Styling */
        .table {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }

        .table th {
            background: var(--gradient-light);
            border-bottom: 2px solid rgba(44, 62, 80, 0.1);
            color: var(--primary-color);
            font-weight: 600;
            padding: 1rem;
        }

        .table td {
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid rgba(44, 62, 80, 0.05);
        }

        .table tr:hover {
            background: rgba(52, 152, 219, 0.03);
        }

        /* Floating Action Button */
        .fab {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: var(--gradient-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.4rem;
            text-decoration: none;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .fab:hover {
            transform: scale(1.1);
            box-shadow: var(--shadow-xl);
            color: var(--white);
            background: var(--gradient-primary);
        }

        /* Scroll to top button */
        .scroll-top {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--gradient-secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: var(--shadow-md);
        }

        .scroll-top.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            transform: scale(1.1);
            background: var(--gradient-primary);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .container {
                max-width: 100%;
                padding: 0 20px;
            }
        }

        @media (max-width: 992px) {
            .navbar-brand {
                font-size: 1.3rem;
            }
            
            .card-body {
                padding: 1.25rem;
            }
            
            .fab {
                bottom: 20px;
                right: 20px;
                width: 55px;
                height: 55px;
            }
            
            .scroll-top {
                bottom: 85px;
                right: 20px;
                width: 45px;
                height: 45px;
            }
        }

        @media (max-width: 768px) {
            body {
                font-size: 14px;
            }
            
            .navbar {
                padding: 0.75rem 0;
            }
            
            .navbar-brand {
                font-size: 1.2rem;
            }
            
            .navbar-brand i {
                font-size: 1.3rem;
            }
            
            .nav-link {
                padding: 8px 16px !important;
                font-size: 0.9rem;
            }
            
            .card {
                margin-bottom: 1rem;
            }
            
            .card-header,
            .card-body {
                padding: 1.25rem;
            }
            
            .btn {
                padding: 8px 16px;
                font-size: 0.85rem;
            }
            
            .product-img {
                height: 180px;
            }
            
            .fab {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
            
            .scroll-top {
                width: 40px;
                height: 40px;
                font-size: 0.9rem;
            }
            
            .table th,
            .table td {
                padding: 0.75rem 0.5rem;
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 0 15px;
            }
            
            .card-header,
            .card-body {
                padding: 1rem;
            }
            
            .btn {
                padding: 6px 12px;
                font-size: 0.8rem;
            }
            
            .alert {
                padding: 0.75rem 1rem;
            }
            
            .form-control,
            .form-select {
                padding: 10px 12px;
                font-size: 0.9rem;
            }
            
            .product-img {
                height: 150px;
            }
            
            .fab {
                bottom: 15px;
                right: 15px;
                width: 45px;
                height: 45px;
                font-size: 1.1rem;
            }
            
            .scroll-top {
                bottom: 70px;
                right: 15px;
                width: 35px;
                height: 35px;
                font-size: 0.8rem;
            }
        }

        /* Loading States */
        .loading {
            position: relative;
            overflow: hidden;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* Utility Classes */
        .text-muted {
            color: var(--dark-gray) !important;
        }

        .text-primary {
            color: var(--accent-color) !important;
        }

        .bg-light {
            background: var(--light-gray) !important;
        }

        .border-primary {
            border-color: var(--accent-color) !important;
        }

        /* Custom spacing */
        .section-spacing {
            padding: 2rem 0;
        }

        @media (max-width: 768px) {
            .section-spacing {
                padding: 1.5rem 0;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('alat-tulis.index') }}">
                <i class="fas fa-pen-nib"></i>
                <span>Toko Alat Tulis</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('alat-tulis.index') }}">
                            <i class="fas fa-home"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('alat-tulis.create') }}">
                            <i class="fas fa-plus"></i> Tambah Produk
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container section-spacing" style="margin-top: 80px;">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="d-flex align-items-center">
                    <i class="fas fa-check-circle"></i>
                    <div>{{ session('success') }}</div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="d-flex align-items-start">
                    <i class="fas fa-exclamation-triangle mt-1"></i>
                    <div>
                        <strong>Terjadi kesalahan:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Floating Action Button -->
    <a href="{{ route('alat-tulis.create') }}" class="fab" title="Tambah Produk Baru">
        <i class="fas fa-plus"></i>
    </a>

    <!-- Scroll to Top Button -->
    <div class="scroll-top" id="scrollTop">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Scroll to top functionality
        const scrollTop = document.getElementById('scrollTop');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                scrollTop.classList.add('show');
            } else {
                scrollTop.classList.remove('show');
            }
        });
        
        scrollTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Enhanced navbar scroll effect
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');
        
        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)';
            }
            
            if (scrollTop > lastScrollTop && scrollTop > 80) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        });

        // Add loading animation to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                if (!this.classList.contains('loading') && !this.hasAttribute('data-bs-dismiss')) {
                    this.classList.add('loading');
                    setTimeout(() => {
                        this.classList.remove('loading');
                    }, 1500);
                }
            });
        });

        // Auto-hide alerts after 5 seconds
        document.querySelectorAll('.alert').forEach(alert => {
            setTimeout(() => {
                if (alert.classList.contains('show')) {
                    alert.classList.remove('show');
                    setTimeout(() => {
                        alert.remove();
                    }, 150);
                }
            }, 5000);
        });

        // Enhanced form validation feedback
        document.querySelectorAll('.form-control, .form-select').forEach(input => {
            input.addEventListener('blur', function() {
                if (this.checkValidity()) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else {
                    this.classList.remove('is-valid');
                    this.classList.add('is-invalid');
                }
            });
        });

        // Active nav link highlighting
        const currentPath = window.location.pathname;
        document.querySelectorAll('.nav-link').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });

        // Smooth scroll for internal links
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
            });
        });

        // Image lazy loading fallback
        document.querySelectorAll('img[data-src]').forEach(img => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('loading');
                        observer.unobserve(img);
                    }
                });
            });
            observer.observe(img);
        });
    </script>
    @yield('scripts')
</body>
</html>