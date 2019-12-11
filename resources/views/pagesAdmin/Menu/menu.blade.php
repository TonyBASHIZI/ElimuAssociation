@extends('layout.master')
@section('content')

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8">
                        <div class="sparkline10-list shadow-reset mg-t-30">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Modifier <span class="basic-ds-n">Menus</span></h1>
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
                                            <form method ="post" action="{{ route('store_menu') }}" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="form-group-inner">
                                                        @foreach ($m as $item)
                                                        <div class="row">
                                                                <div class="col-lg-4">
                                                                <input type="text" name="home" id="home" value ="{{ $item->home }}" class="form-control basic-ele-mg-b-10" placeholder="Home" />
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="text" name="actualite" id="actualite" value ="{{ $item->actualite }}" class="form-control basic-ele-mg-b-10" placeholder="Actualités" /><br>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                  <input type="text"  name ="enfant" id="enfant" value ="{{ $item->enfant }}" class="form-control basic-ele-mg-b-10" placeholder="Enfant en france" /><br>
                                                                </div>
                                                                <div class="col-lg-4">
                                                              <input type="text" name = "partenaire" id="partenaire" value ="{{ $item->partenaire }}" class="form-control basic-ele-mg-b-10" placeholder="Partenaires" /><br>
                                                                 </div>
                                                                 <div class="col-lg-4">
                                                                  <input type="text" name = "nous" id="nous" value ="{{ $item->nous }}" class="form-control basic-ele-mg-b-10" placeholder="Qui sommes nous" />
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <input type="hidden" name="id" id="id" class="form-control basic-ele-mg-b-10" value="{{ $item->id }} "><br>

                                                                </div> <br>
                                                                <div class="col-lg-2">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">

                                                                            <div class="col-lg-6">
                                                                              <p> <input class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit" id="submit"  value="Modifier" /></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

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
                            <h1>Menus <span class="table-project-n">Data</span> Table</h1>
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
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Menu 1</th>
                                        <th data-field="email" data-editable="true">Menu 2</th>
                                        <th data-field="phone" data-editable="true">Menu 3</th>
                                        <th data-field="company" data-editable="true">Menu 4</th>

                                        <th data-field="task" data-editable="true">Menu 5</th>
                                        <th data-field="date" data-editable="true">Date Modification</th>

                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($m as $v)
                                    <tr>
                                            <td></td>
                                    <td>{{ $v->id }}</td>
                                    <td>{{ $v->home }}</td>
                                    <td>{{ $v->actualite }}</td>
                                    <td>{{ $v->nous }}</td>
                                    <td>{{ $v->enfant }}</td>

                                    <td>{{ $v->partenaire }}</td>
                                    <td>{{ $v->created_at }}</td>
                                     <td class="datatable-ct"><i class="fa fa-check"></i>
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
