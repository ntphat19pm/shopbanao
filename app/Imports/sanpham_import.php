<?php

namespace App\Imports;

use App\Models\sanpham;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class sanpham_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new sanpham([
            'tensp'=>$row['tensp'],
            'anh'=>$row['anh'],
            'anh1'=>$row['anh1'],
            'soluong'=>$row['soluong'],
            'gianhap'=>$row['gianhap'],
            'giaxuat'=>$row['giaxuat'],
            'nhanhieu_id'=>$row['nhanhieu_id'],
            'chatlieu_id'=>$row['chatlieu_id'],
            'phanloai_id'=>$row['phanloai_id'],
            'danhmuc_id'=>$row['danhmuc_id'],
            'chitiet'=>$row['chitiet'],
            'dactinh_id'=>$row['dactinh_id'],
            'khuyenmai_id'=>$row['khuyenmai_id'],
            'size_id'=>$row['size_id'],
        ]);
    }
}
