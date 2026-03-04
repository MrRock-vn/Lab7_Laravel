<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        .vip-price { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Danh sách sản phẩm</h2>

    <table>
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>
                    {{-- Kiểm tra nếu giá > 10 triệu (10.000.000) --}}
                    @if($item['price'] > 10000000)
                        <span class="vip-price">{{ number_format($item['price']) }} VNĐ (Vip)</span>
                    @else
                        {{ number_format($item['price']) }} VNĐ
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>