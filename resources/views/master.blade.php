<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sistem Manajemen Inventori - Platform pengelolaan inventori yang efisien">
    <meta name="author" content="Your Name">
    <title>@yield('title', 'Manajemen Inventori')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    
    <!-- CSS Styles -->
    <style>
        /* Reset dan Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        :root {
            --primary-color: #2c3e50;
            --secondary-color: #34495e;
            --accent-color: #3498db;
            --text-light: #ffffff;
            --text-dark: #333333;
            --bg-light: #f4f4f4;
            --bg-grey: #f2f2f2;
            --border-color: #dddddd;
            --shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            display: flex;
            min-height: 100vh;
            background: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Typography */
        h1 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
        }

        /* Sidebar Styles */
        .sidebar {
    position: fixed; /* Membuat sidebar tetap di tempat */
    top: 0;
    left: 0;
    height: 100vh; /* Sidebar mengambil seluruh tinggi viewport */
    width: 250px; /* Lebar sidebar */
    background: var(--primary-color);
    color: var(--text-light);
    display: flex;
    flex-direction: column;
    padding: 1.5rem;
    transition: var(--transition);
    overflow-y: auto; /* Menambahkan scroll di dalam sidebar jika konten terlalu panjang */
    z-index: 1000; /* Memastikan sidebar di atas elemen lain */
}

.content {
    margin-left: 250px; /* Menggeser konten agar tidak bertumpuk dengan sidebar */
    padding: 2rem;
    overflow-y: auto;
}

                    
        .sidebar .title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 2rem;
            text-align: center;
            padding: 0.5rem;
            border-bottom: 2px solid var(--accent-color);
        }

        .sidebar a {
            text-decoration: none;
            color: var(--text-light);
            padding: 0.875rem 1rem;
            margin-bottom: 0.625rem;
            border-radius: 6px;
            transition: var(--transition);
            display: flex;
            align-items: center;
        }

        .sidebar a:hover {
            background: var(--secondary-color);
            transform: translateX(5px);
        }

        .sidebar a.active {
            background: var(--accent-color);
            font-weight: 600;
        }

        /* Gaya umum untuk ikon */
.sidebar a::before {
    content: ''; /* Akan diubah dengan Unicode ikon */
    display: inline-block;
    margin-right: 0.75rem;
    font-family: 'Font Awesome 5 Free'; /* Jika menggunakan Font Awesome */
    font-weight: 900; /* Berat ikon */
    font-size: 1.2rem;
    color: var(--text-light);
    transition: var(--transition);
}

/* Ikon untuk setiap menu */
.sidebar a[href*="/dashboard"]::before {
    content: '\f0e4'; /* Dashboard Icon (Font Awesome Unicode) */
}

.sidebar a[href*="/user"]::before {
    content: '\f007'; /* User Icon */
}

.sidebar a[href*="/katagori"]::before {
    content: '\f03a'; /* Categories Icon */
}

.sidebar a[href*="/barang"]::before {
    content: '\f187'; /* Box/Inventory Icon */
}

.sidebar a[href*="/laporan"]::before {
    content: '\f15c'; /* File Report Icon */
}
        
/* Warna ikon saat aktif atau hover */
.sidebar a.active::before,
.sidebar a:hover::before {
    color: var(--accent-color);
}


        /* Content Area */
        .content {
            flex: 1;
            padding: 2rem;
            overflow-y: auto;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
            font-size: 1rem;
            background: var(--text-light);
            box-shadow: var(--shadow);
            border-radius: 8px;
            overflow: hidden;
        }

        table thead tr {
            background-color: var(--accent-color);
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        table th, 
        table td {
            padding: 1rem;
            border: 1px solid var(--border-color);
        }

        table tbody tr {
            background-color: var(--text-light);
            transition: var(--transition);
        }

        table tbody tr:nth-child(even) {
            background-color: var(--bg-grey);
        }

        table tbody tr:hover {
            background-color: #e8f4fe;
            transform: scale(1.001);
        }

        /* Dashboard Welcome Section */
        .welcome-container {
            margin: 2rem auto;
            max-width: 800px;
            text-align: center;
            padding: 2rem;
            border-radius: 12px;
            background-color: var(--text-light);
            box-shadow: var(--shadow);
        }

        .welcome-container h1 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .welcome-container p {
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .sidebar {
                width: 220px;
            }
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 1rem;
            }

            .sidebar .title {
                font-size: 1.1rem;
                margin-bottom: 1rem;
            }

            .sidebar a {
                font-size: 0.9rem;
                padding: 0.75rem;
            }

            .content {
                padding: 1rem;
            }

            table {
                font-size: 0.9rem;
            }

            .welcome-container {
                margin: 1rem;
                padding: 1.5rem;
            }
        }

        /* Print Styles */
        @media print {
            .sidebar {
                display: none;
            }

            .content {
                margin: 0;
                padding: 0;
            }

            table {
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <div class="title">Manajemen Inventori</div>
        <nav>
            <a href="{{ url('/') }}" class="{{ request()->is('/') || request()->is('dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
            <a href="{{ url('/user') }}" class="{{ request()->is('user*') ? 'active' : '' }}">
                User
            </a>
            <a href="{{ url('/katagori') }}" class="{{ request()->is('katagori*') ? 'active' : '' }}">
                Kategori Barang
            </a>
            <a href="{{ url('/barang') }}" class="{{ request()->is('barang*') ? 'active' : '' }}">
                Barang
            </a>
            <a href="{{ url('/laporan') }}" class="{{ request()->is('laporan*') ? 'active' : '' }}">
                Laporan
            </a>
        </nav>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <script>
        // Perbaikan JavaScript untuk active state
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.sidebar a');
            
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                // Untuk dashboard
                if (currentPath === '/' || currentPath === '/dashboard') {
                    if (href === '/' || href === '/dashboard') {
                        link.classList.add('active');
                    }
                }
                // Untuk halaman lain
                else if (currentPath.startsWith(href) && href !== '/') {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>