@extends('layout.master')
@section('content')

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8">
                        <div class="sparkline10-list shadow-reset mg-t-30">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Nos <span class="basic-ds-n">partennaires</span></h1>
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
                                            <form action="{{ route('store.part')}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                            <input type="text" name="titre" id="titre" value="{{ old('titre') }}" class="form-control basic-ele-mg-b-10" placeholder="Titre" />
                                                            </div><br>

                                                            <p>
                                                                    <div class="col-lg-12">
                                                                        <label for="detail">Detail :</label>
                                                                            <textarea name="detail" id="detail" cols="60" rows="10" class="form-control basic-ele-mg-b-10" placeholder="Detail">
                                                                                    {{ old('detail') }}
                                                                            </textarea><br>
                                                                    </div>
                                                            </p><br>

                                                            <p>
                                                                    <div class="col-lg-12">
                                                                        <label for="">Logo :</label>
                                                                            <input type="file" name="photo" id="photo" class="form-control basic-ele-mg-b-10" /><br>
                                                                    </div>

                                                            </p>


                                                        </div>
                                                        <div class="row">

                                                                <div class="col-lg-6">
                                                                        <div class="login-btn-inner">
                                                                            <div class="row">

                                                                                <div class="col-lg-6">
                                                                                    <input class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit" id="submit" value="Ajouter nouveau partennaire" />
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
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Les <span class="table-project-n">Partennaires</span> Table</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">

                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true"  data-key-events="true" data-show-toggle="true" data-resizable="true"  data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="true" data-editable="true">Logo</th>
                                        <th data-field="true" data-editable="true">Titre</th>
                                        <th data-field="Detail" data-editable="true">Information</th>


                                        <th data-field="date" data-editable="true">Date Insertion</th>

                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($p as $v)
                                    <tr>
                                            <td></td>
                                    <td>{{ $v->id }}</td>
                                    <td><img src="{{ asset('storage/'.$v->logot) }}" ></td>
                                    <td>{{ $v->design }}</td>
                                    <td>{{ $v->detail }}</td>

                                     <td>{{ $v->updated_at }}</td>

                                     <td class="">
                                         <div class="col-lg-6">
                                            <a href="{{ route('editparte', [$v]) }}"><button class="btn btn-sm btn-primary login-submit-cs" type="submit">Modifier</button></a><br><br>

                                            <a href="{{ route('deleteparte', [$v]) }}"><button class="btn btn-sm btn-primary login-submit-cs" type="submit">Supprimer</button></a>
                                        </div>
                                        <div class="col-lg-3">

                                        </div>


                                         </td>
                                        </tr>
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
