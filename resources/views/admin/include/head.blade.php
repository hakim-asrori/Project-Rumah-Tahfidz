<?php
$user = Auth::user();
?>

<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left"></ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= url('/profile'); ?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp Profile
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <p>
                            Pengaturan
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= url('/role'); ?>"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>&nbsp Role</a></li>
                        <li><a href="<?= url('/alquran'); ?>"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp Qur'an </a></li>
                        <li><a href="<?= url('/iqro'); ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp Iqro </a></li>
                        <li><a href="<?= url('/action-log'); ?>"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp Log Sistem </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp Laporan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('daily-report')}}"> Laporan Harian </a></li>
                        <li><a href="{{url('student-report')}}"> Laporan Persiswa </a></li>
                    </ul>
                </li>

                <li>
                    <a href="<?= url('/notification'); ?>">
                        <p>Buat Notifikasi</p>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> &nbsp Notifikasi

                        <span class="notification">{{ 10 }}</span>

                    </a>

                    <ul class="dropdown-menu">
                        <li><a style="" onclick="showNotif(1)">Asep</a></li>
                    </ul>

                </li>

                <li>
                    <a href="<?= url('/'); ?>/auth/logout">
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> &nbsp Logout
                    </a>
                </li>

                <li class="separator hidden-lg"></li>
            </ul>
        </div>
    </div>
</nav>
