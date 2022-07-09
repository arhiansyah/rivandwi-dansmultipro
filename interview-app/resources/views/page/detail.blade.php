@extends('master')

@section('konten')
<a class="btn btn-primary" href="#" role="button"><i class="fas fa-arrow-left"></i> Back</a>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <span>{{ $jobs['type'] }} / {{ $jobs['location'] }}</span>
                    <h2>{{ $jobs['title'] }}</h2>
                </div>
                <hr>
                <div class="d-flex justify-content-between w-100">
                    <div class="row">
                        <div class="col-8">{!! $jobs['description'] !!}</div>
                        {{-- <div class="col-8">
                        </div> --}}
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <p><b>{{ $jobs['company'] }}</b></p>
                                </div>
                                <div class="card-body">
                                    <img src="{{ $jobs['company_logo'] }}" alt="{{ $jobs['company']}}">
                                    <a href="{{ $jobs['company_url'] }}">{{ $jobs['company_url'] }}</a>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <p class="mt-2"><b>How to Apply</b></p>
                                </div>
                                <div class="card-body">
                                    <div>{!! $jobs['how_to_apply'] !!}</div>
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