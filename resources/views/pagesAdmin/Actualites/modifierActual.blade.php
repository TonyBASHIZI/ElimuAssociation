@extends('layout.master')
@section('content')

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8">
                        <div class="sparkline10-list shadow-reset mg-t-30">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                <h1>Modifier actualité : <span class="basic-ds-n">{{ $p->titre }}</span></h1>
                                    <div class="sparkline10-outline-icon">
                                        <span class="sparkline10-collapse-link"><i class="fa fa-chevron-up"></i></span>

                                        <span class="sparkline10-collapse-close"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="basic-login-inner inline-basic-form">
                                            <form action="{{ route('store.put')}}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="form-group-inner">
                                                        @include('error')
                                                        <div class="row">

                                                            <div class="col-lg-5">

                                                            <input type="text" name="titre" id="titre" value="{{ $p->titre }}" class="form-control basic-ele-mg-b-10" placeholder="Titre" />
                                                            </div>`
                                                            <div class="col-lg-5">
                                                                <input type="text" name="fond" id="fond" value="{{ $p->fond }}" class="form-control basic-ele-mg-b-10" placeholder="Fond" /><br>
                                                            </div>
                                                            <p>
                                                                    <div class="col-lg-5">
                                                                            <textarea name="detail" id="detail" cols="30" rows="5" class="form-control basic-ele-mg-b-10" placeholder="Detail">
                                                                                {{ $p->detail }}
                                                                            </textarea><br>
                                                                    </div>
                                                            </p>


                                                            <div class="col-lg-5">
                                                                    <input type="file" name="photo" id="photo" class="form-control basic-ele-mg-b-10" /><br>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                    <input type="hidden" name="id" id="id" value="{{ $p->id }}" class="form-control basic-ele-mg-b-10" placeholder="Fond" /><br>
                                                                </div>

                                                        </div>
                                                        <div class="row">

                                                                <div class="col-lg-12">
                                                                        <div class="login-btn-inner">
                                                                            <div class="row">

                                                                                <div class="col-lg-8">
                                                                                <a href="{{ route('store.put') }}"></a><button class="btn btn-sm btn-primary login-submit-cs" type="submit">Modifier</button>
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
