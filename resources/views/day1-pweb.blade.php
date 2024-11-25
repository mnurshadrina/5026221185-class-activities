<!DOCTYPE html>
<html>
    <head>
        <title>Web Programming's Practice on Day 1</title>
    </head>

    <body>
        <h1>Welcome!</h1>
        <h4>Created on {{ date('F d, Y') }}</h4> <!-- Dynamically render the current date -->

        <p>
            Star Schema (Skema Bintang) yang dihosting dalam basis data relasional adalah fondasi fisik yang baik untuk membangun OLAP Cubes, dan umumnya dianggap sebagai dasar yang lebih stabil untuk backup dan recovery.
        </p>

        <img src="{{ asset('public\img\raccoons8-min.png') }}" alt="raccoon" width="500">

        <br>

        <a href="https://www.instagram.com/">Instagram</a>
        <a href="#">ZONK</a>

        <p>
            OLAP Cubes secara tradisional dikenal karena keunggulan kinerja yang ekstrem dibandingkan RDBMS, tetapi perbedaan itu menjadi kurang penting dengan kemajuan perangkat keras komputer, seperti peralatan dan basis data dalam memori, dan perangkat lunak RDBMS, seperti basis data kolom.
        </p>
    </body>
</html>
