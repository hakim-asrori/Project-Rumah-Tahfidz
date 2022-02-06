<?php
$user = Auth::user();
?>

<div class="sidebar-wrapper">
    <div class="logo">
        <a href="<?= url(''); ?>" class="simple-text">
            Rumah Tahfidz
        </a>
    </div>

    <ul class="nav">
        <li class="{{ Request::is('admin') ? 'active' : '' }}">
            <a href="<?= url('admin'); ?>">
                <i class="pe-7s-graph"></i>
                <p>Home</p>
            </a>
        </li>

        <li class="{{ Request::is('admin/user') ? 'active' : '' }}">
            <a href="<?=url('admin/user'); ?>">
                <i class="pe-7s-user"></i>
                <p>Pengguna</p>
            </a>
        </li>

        <li class="{{ Request::is('admin/parent') ? 'active' : '' }}">
            <a href="<?=url('admin/parent'); ?>">
                <i class="pe-7s-id"></i>
                <p>Orang Tua</p>
            </a>
        </li>

        <li class="{{ Request::is('admin/student-class') ? 'active' : '' }}">
            <a href="<?=url('admin/student-class'); ?>">
                <i class="pe-7s-note2"></i>
                <p>Kelas</p>
            </a>
        </li>

        <li class="{{ Request::is('admin/student') ? 'active' : '' }}">
            <a href="<?=url('admin/student'); ?>">
                <i class="pe-7s-smile"></i>
                <p>Manajemen Siswa</p>
            </a>
        </li>

        <li class="{{ Request::is('admin/assessment') ? 'active' : '' }}">
            <a href="<?=url('admin/assessment'); ?>" style="color: yellow">
                <i class="pe-7s-note2"></i>
                <p>Penilaian Siswa</p>
            </a>
        </li>

    </ul>
</div>

<style type="text/css">

    .center
    {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

</style>

@push('scripts')


@endpush


@section('modal')

<div class="modal fade" id="detailNotification" role="dialog" >
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p class="modal-title">Detail Notifikasi</p>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>Judul Notifikasi</label>
                    <input disabled="true" type="text" class="form-control" value="" name="notification_title" id="notification_title">
                </div>

                <div class="form-group">
                    <label>Isi Pesan Notifikasi</label>
                    <input disabled="true" type="text" class="form-control" value="" name="notification_message" id="notification_message">
                </div>

                <div class="form-group">
                    <label>Dikeluarkan Pada Tanggal</label>
                    <input disabled="true" type="text" class="form-control" value="" name="date" id="date">
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
