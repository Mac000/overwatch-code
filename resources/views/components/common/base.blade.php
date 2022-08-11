<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontSize: {
                        '14': '14px',
                        '15': '15px',
                        '16': '16px',
                        '18': '18px',
                        '20': '20px',
                        '22': '22px',
                        '24': '24px',
                        '28': '28px',
                    },
                    spacing: {
                        '18': '4.5rem',
                    }
                }
            }
        }
    </script>

    <!-- Swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="/css/custom.css">

    <script src="/js/utilities.js"></script>
    <script src="/js/custom.js"></script>

    <!-- Flowbite JS -->
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

    <title>OverWatch Pakistan</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
