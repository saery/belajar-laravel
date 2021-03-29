@extends('layout/main')
@section('title', 'Web Programming SaeryPane')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h5 class="card-title">Berkas</h5>
                                    <p class="card-text fs-6">...</p>
                                    <a href="{{ url('/berkas') }}" class="btn btn-primary">Preview</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="card border-success">
                                <div class="card-body">
                                    <h5 class="card-title">Permohonan</h5>
                                    <p class="card-text fs-6">...</p>
                                    <a href="{{url('/permohonans')}}" class="btn btn-primary">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
        </div>
    </div>

@endsection
