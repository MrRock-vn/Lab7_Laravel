<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        header { background: #333; color: white; padding: 20px; text-align: center; }
        footer { background: #eee; padding: 10px; text-align: center; position: fixed; bottom: 0; width: 100%; }
        nav a { color: white; margin: 0 15px; text-decoration: none; }
        .content { padding: 20px; min-height: 400px; }
    </style>
</head>
<body>

    <header>
        <h1>My Website</h1>
        <nav>
            <a href="/home">Trang chủ</a>
            <a href="/contact">Liên hệ</a>
        </nav>
    </header>

    <div class="content">
        @yield('content') {{-- Nơi nội dung trang con sẽ nhảy vào đây --}}
    </div>

    <footer>
        <p>&copy; 2024 - Bản quyền thuộc về Nguyen Con Son Tung</p>
    </footer>

</body>
</html>