@extends('layout.master')
@section('content')

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8">
                        <div class="sparkline10-list shadow-reset mg-t-30">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                <h1>Modification : <span class="basic-ds-n">membre {{ $m->nom }}</span></h1>
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
                                            <form action="{{ route('store_editmember')}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                            <input type="text" name="nom" id="nom" value="{{ $m->nom }}" class="form-control basic-ele-mg-b-10" placeholder="Nom" />
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div class="chosen-select-single mg-b-20">

                                                                    <select name="cate" id="cate" class="select2_demo_3 form-control">
                                                                        <option>Select categorie</option>
                                                                        <option value="Enseignant">Enseignant</option>
                                                                        <option value="Administration">Administration</option>
                                                                        <option value="Ouvrier">Ouvrier</option>
                                                                        <option value="Autre">Autre</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="col-lg-5">
                                                                <input type="text" name="postnom" id="postnom" value="{{ $m->postnom }}" class="form-control basic-ele-mg-b-10" placeholder="Nom" />
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <input type="text" name="prenom" id="prenom" value="{{ $m->prenom }}" class="form-control basic-ele-mg-b-10" placeholder="prenom" />
                                                                    </div><br><br>
                                                                   <p>
                                                                        <div class="col-lg-12">
                                                                                <input type="email" name="email" id="email" value="{{ $m->email }}" class="form-control basic-ele-mg-b-10" placeholder="email" />
                                                                                </div>

                                                                   </p>



                                                            <p>
                                                                    <div class="col-lg-12">
                                                                    <label for="">Photo : {{ $m->photo }}</label>
                                                                            <input type="file" name="photo" id="photo" class="form-control basic-ele-mg-b-10" /><br>
                                                                    </div>

                                                            </p>



                                                        <div class="row">

                                                                <div class="col-lg-6">
                                                                        <div class="login-btn-inner">
                                                                            <div class="row">

                                                                                <div class="col-lg-6">
                                                                                    <input class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit" id="submit" value="Ajouter nouveau membre" />
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
                            <h1>Les <span class="table-project-n">Membre</span> Table</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="">
                            <div id="toolbar">
                                <select class="form-control">

                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" >
                                <thead>
                                    <tr>
                                        <th  data-checkbox="true"></th>
                                        <th data-field="id">ID</th>

                                        <th  data-editable="false">Nom</th>
                                        <th  data-editable="false">Postnom</th>
                                        <th  data-editable="false">Prenom</th>
                                        <th  data-editable="false">Categorie</th>
                                        <th  data-editable="false">Email</th>
                                        <th>Photo</th>
                                        <th  data-editable="true">Date Insertion</th>

                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($p as $v)
                                    <tr>
                                            <td></td>
                                    <td>{{ $v->id }}</td>

                                    <td>{{ $v->nom }}</td>
                                    <td>{{ $v->postnom }}</td>
                                    <td style="">{{ $v->prenom }}</td>
                                    <td style="">{{ $v->categorie }}</td>
                                    <td style="">{{ $v->email }}</td>
                                    <td><img src="{{ asset('storage/'.$v->photo) }}" style="width:35px; heidth:35px;"></td>
                                     <td>{{ $v->updated_at }}</td>

                                     <td>
                                         <div class="col-lg-5">
                                            <a href="{{ route('editmembre', [$v]) }}"><button class="btn btn-sm btn-primary login-submit-cs" type="submit">Modifier</button></a>
                                             <br><br>
                                            <a href="{{ route('deletepro', [$v]) }}"><button class="btn btn-sm btn-primary login-submit-cs" type="submit">Supprimer</button></a>
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
