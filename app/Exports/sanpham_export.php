<?php

namespace App\Exports;

use App\Models\sanpham;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class sanpham_export implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'id',
            'tensp',
            'anh',
            'anh1',
            'soluong',
            'gianhap',
            'giaxuat',
            'nhanhieu_id',
            'chatlieu_id',
            'phanloai_id',
            'danhmuc_id',
            'chitiet',
            'dactinh_id',
            'khuyenmai_id',
            'size_id',
        ];
    }
    public function map($row): array
    {
        return [
            $row->id,
            $row->tensp,
            $row->anh,
            $row->anh1,
            $row->soluong,
            $row->gianhap,
            $row->giaxuat,
            $row->nhanhieu_id,
            $row->chatlieu_id,
            $row->phanloai_id,
            $row->danhmuc_id,
            $row->chitiet,
            $row->dactinh_id,
            $row->khuyenmai_id,
            $row->size_id,
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return sanpham::all();
    }
}
