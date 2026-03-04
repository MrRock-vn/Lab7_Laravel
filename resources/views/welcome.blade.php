<!DOCTYPE html>
<html>
<head>
    <title>Bài 1 - Controller</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f4f4f9; }
        .card { background: white; padding: 2rem; border-radius: 10px; shadow: 0 4px 6px rgba(0,0,0,0.1); border: 1px solid #ddd; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Xin chào {{ $name }}, {{ $age }} tuổi</h1>
        <p>Trường: {{ $school }}</p>
    </div>
</body>
</html>