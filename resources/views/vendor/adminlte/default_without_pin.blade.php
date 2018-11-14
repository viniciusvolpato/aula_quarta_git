@extends('adminlte::layouts.app')

@section('htmlheader_title')
    @yield('contentheader_title')
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="box-body">
                    @yield('content')
                </div>
                <!-- /.box-body -->

            </div>
        </div>
    </div>
@endsection
