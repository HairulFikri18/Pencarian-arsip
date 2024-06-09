<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'pegawai-list',
            'pegawai-create',
            'pegawai-edit',
            'pegawai-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'kategori-arsip-list',
            'kategori-arsip-create',
            'kategori-arsip-edit',
            'kategori-arsip-delete',
            'tabel-arsip-list',
            'tabel-arsip-create',
            'tabel-arsip-edit',
            'tabel-arsip-delete',

        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
