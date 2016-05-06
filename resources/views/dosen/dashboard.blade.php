@extends('dosen/base')

@section('activehome')
    active
@endsection

@section('title')
    Home - Dosen
@endsection

@section('addcss')
    @endsection

@section('addjs')

@endsection

@section('nav_position')
    Home
@endsection


@section('name_account')
    {{ $user->name }}
@endsection

@section('content')

    <div class="row">
        {{--<div class="col-md-6">--}}
        {{--<div class="card ">--}}
        {{--<div class="header">--}}
        {{--<h4 class="title">Presensi Mahasiswa (DUMMY)</h4>--}}
        {{--<p class="category">Semester 4 - 2016/2017s</p>--}}
        {{--</div>--}}
        {{--<div class="content">--}}
        {{--<div id="chartActivity" class="ct-chart"></div>--}}

        {{--<div class="footer">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        <div class="col-md-12">
            <div class="card ">
                <div class="header">
                    <h4 class="title">Agenda Akademik</h4>
                    <p class="category">Tanggal : {{ date('D, M, Y') }}</p>
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="" data-toggle="checkbox" checked>
                                    </label>
                                </td>
                                <td>Her Registrasi</td>
                                <td class="td-actions text-right">
                                    2 Maret 2016
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="" data-toggle="checkbox" >
                                    </label>
                                </td>
                                <td>Pendaftaran GemasTIK 2016</td>
                                <td class="td-actions text-right">
                                    20 Maret 2017
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="" data-toggle="checkbox" >
                                    </label>
                                </td>
                                <td>Awal Kuliah Semester Genap 2017/2018</td>
                                <td class="td-actions text-right">
                                    24 Maret 2016
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="" data-toggle="checkbox" >
                                    </label>
                                </td>
                                <td>UAS Semeter Genap 2017/2018</td>
                                <td class="td-actions text-right">
                                    24 Maret 2017
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="footer">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated by Admin
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
