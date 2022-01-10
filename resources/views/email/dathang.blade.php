<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Đặt hàng thành công - {{ config('app.name', 'ShopOnline') }}</title>
    <style>
        table
        {
            border-collapse: collapse;
            width: 100%;
        }
        p
        {
            margin-top: 3px;
            margin-bottom: 3px;
        }
    </style>
</head>

<body>
    <p>Xin chào {{ Auth::guard('khachhang')->user()->hovaten }}!</p>
    <p>Xin cảm ơn bạn đã đặt hàng tại {{ config('app.name', 'ShopOnline') }}.</p>
    <p>Thông tin giao hàng:</p>
    <p>- Điện thoại: <strong>{{ $dathang->khachhang->sdt }}</strong></p>
    <p>- Địa chỉ giao: <strong>{{ $dathang->khachhang->diachi }}</strong></p>
 
    <p>Thông tin đơn hàng bao gồm:</p>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th>Sản phẩm</th>
                    <th width="5%">SL</th>
                    <th width="15%">Đơn giá</th>
                    <th width="20%">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @php $tongtien = 0; @endphp
                @foreach($dathang->dathang_chitiet as $chitiet)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $chitiet->sanpham->tensp }}</td>
                    <td>{{ $chitiet->soluong }}</td>
                    <td style="text-align:right">
                    {{ number_format($chitiet->dongia) }}<sup><u>đ</u></sup>
                    </td>
                    <td style="text-align:right">
                    {{ number_format($chitiet->soluong * $chitiet->dongia) }}<sup><u>đ</u></sup>
                    </td>
                </tr>
                
                @php $tongtien += $chitiet->soluong * $chitiet->dongia; @endphp
                @endforeach
                <tr>
                    <td colspan="4">Tổng tiền sản phẩm:</td>
                    <td style="text-align:right">
                    <strong>{{ number_format($tongtien) }}</strong><sup><u>đ</u></sup>
                    </td>
                </tr>
            </tbody>
        </table>
 
    <p>Trân trọng,</p>
    <p>{{ config('app.name', 'ShopOnline') }}</p>
</body>

</html>
