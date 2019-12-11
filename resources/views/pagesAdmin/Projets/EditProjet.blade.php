@extends('layout.master')
@section('content')

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8">
                        <div class="sparkline10-list shadow-reset mg-t-30">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Modification <span class="basic-ds-n">Projet  {{ $pedt->categorie }}</span></h1>
                                    <div class="sparkline10-outline-icon">
                                        <span class="sparkline10-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                        <span><i class="fa fa-wrench"></i></span>
                                        <span class="sparkline10-collapse-close"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="basic-login-inner inline-basic-form">
                                                 @include('error')
                                            <form action="{{ route('proedit')}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                            <input type="text" name="titre" id="titre" value="{{ $pedt->titre }}" class="form-control basic-ele-mg-b-10" placeholder="Titre" />
                                                            <input type="hidden" name="id" value="{{ $pedt->id }}">    
                                                        </div>
                                                            <div class="col-lg-5">
                                                                <div class="chosen-select-single mg-b-20">

                                                                    <select name="cate" id="cate" class="select2_demo_3 form-control">
                                                                        <option >Select type</option>
                                                                        <option value="Realisé">Realisé</option>
                                                                        <option value="En cours">En cours</option>
                                                                        <option value="A venir">A venir</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                    <div class="col-lg-12">
                                                                        <label for="detail">Information :</label>
                                                                            <textarea name="detail" id="detail"  cols="60" rows="10" class="form-control basic-ele-mg-b-10" placeholder="Detail">
                                                                                {{ $pedt->detail }}
                                                                            </textarea><br>
                                                                    </div>
                                                            </p><br>

                                                            <p>
                                                                    <div class="col-lg-12">
                                                                        <label for="">Image : {{ $pedt->image }}</label>
                                                                            <input type="file" name="photo"   id="photo" class="form-control basic-ele-mg-b-10" /><br>
                                                                    </div>

                                                            </p>



                                                        <div class="row">

                                                                <div class="col-lg-6">
                                                                        <div class="login-btn-inner">
                                                                            <div class="row">

                                                                                <div class="col-lg-6">
                                                                                 <input class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit" id="submit" value="Modifier ce  projet" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
</div>

@endsection
