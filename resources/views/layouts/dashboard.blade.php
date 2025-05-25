<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-dash')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" src="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css"></link>
    <script src="https:////cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.1.0/dist/umd/simple-datatables.min.js"></script>
    <link href=" https://cdn.jsdelivr.net/npm/simple-datatables@9.1.0/dist/style.min.css " rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/scrollreveal"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#001F3F',
                        navyLight: '#003366',
                        navyDark: '#001429',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        
        .scroll-reveal {
            visibility: hidden;
        }
        
        .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 31, 63, 0.1), 0 4px 6px -2px rgba(0, 31, 63, 0.05);
        }
        
        .nav-link {
            transition: all 0.2s ease;
        }
        
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            padding-left: 1.75rem;
        }
        
        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            border-left: 4px solid white;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="overflow-x-hidden">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('partials.sidebar')
            <div class="flex-1 ml-0 md:ml-64 transition-all duration-300 ease-in-out">
                @yield('content')
            </div>
        </div>
    
        <!-- Mobile Header -->
    <header class="bg-white shadow-sm py-4 px-6 md:hidden">
        <div class="flex items-center justify-between">
            <button id="menuToggle" class="text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <h1 class="text-lg font-semibold text-navy">Admin Dashboard</h1>
            <div class="w-6"></div> <!-- Spacer for alignment -->
        </div>
    </header>

    <script>
        // Mobile menu toggle
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('open');
        });

        // Initialize ScrollReveal
        const sr = ScrollReveal({
            origin: 'bottom',
            distance: '20px',
            duration: 1000,
            delay: 200,
            easing: 'ease-in-out',
            reset: false
        });

        sr.reveal('.scroll-reveal', { interval: 100 });

        // Initialize Charts
        document.addEventListener('DOMContentLoaded', function() {
            // Bar Chart - Students per Department
            const barCtx = document.getElementById('barChart').getContext('2d');
            const barChart = new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: ['Computer Science', 'Engineering', 'Business', 'Arts', 'Medicine', 'Law'],
                    datasets: [{
                        label: 'Number of Students',
                        data: [320, 280, 205, 187, 145, 120],
                        backgroundColor: [
                            'rgba(0, 31, 63, 0.8)',
                            'rgba(0, 31, 63, 0.7)',
                            'rgba(0, 31, 63, 0.6)',
                            'rgba(0, 31, 63, 0.5)',
                            'rgba(0, 31, 63, 0.4)',
                            'rgba(0, 31, 63, 0.3)'
                        ],
                        borderColor: [
                            'rgba(0, 31, 63, 1)',
                            'rgba(0, 31, 63, 1)',
                            'rgba(0, 31, 63, 1)',
                            'rgba(0, 31, 63, 1)',
                            'rgba(0, 31, 63, 1)',
                            'rgba(0, 31, 63, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 31, 63, 0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            titleFont: {
                                size: 14,
                                weight: 'bold'
                            },
                            bodyFont: {
                                size: 13
                            },
                            padding: 10,
                            displayColors: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    animation: {
                        duration: 2000,
                        easing: 'easeOutQuart'
                    }
                }
            });

            // Line Chart - Monthly Enrollment
            const lineCtx = document.getElementById('lineChart').getContext('2d');
            const lineChart = new Chart(lineCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'New Enrollments',
                        data: [65, 59, 80, 81, 56, 55, 40, 90, 120, 115, 95, 80],
                        fill: true,
                        backgroundColor: 'rgba(0, 31, 63, 0.1)',
                        borderColor: 'rgba(0, 31, 63, 1)',
                        tension: 0.4,
                        pointBackgroundColor: 'rgba(0, 31, 63, 1)',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 31, 63, 0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            titleFont: {
                                size: 14,
                                weight: 'bold'
                            },
                            bodyFont: {
                                size: 13
                            },
                            padding: 10,
                            displayColors: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    animation: {
                        duration: 2000,
                        easing: 'easeOutQuart'
                    }
                }
            });
        });

        // Add active class to nav links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9413a870762140eb',t:'MTc0NzQ5MDYwNy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>