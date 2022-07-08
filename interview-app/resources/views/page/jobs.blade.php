@extends('master')

@section('konten')
  <div class="row">
      <div class="col-12">
          <h1>Github Jobs</h1>
          <form class="row gy-2 gx-3 align-items-center mb-3">
            <div class="col-4">
              <label for="autoSizingInput"> <b>Job Description</b></label>
              <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
            </div>
            <div class="col-4">
              <label for="autoSizingInput"><b>Location</b></label>
              <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
            </div>
            
            <div class="col-2 mt-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label class="form-check-label" for="autoSizingCheck">
                  Remember me
                </label>
              </div>
            </div>
            <div class="col-2 mt-3">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          <div class="card">
              <div class="card-header">
                  <h4>Job List</h4>
              </div>
              <div class="card-body">
                    {{-- <p>{{$jobs[0]['title']}}</p> --}}
                    @foreach ($jobs as $key => $j)
                        {{-- <p>{{ $j->id }}</p> --}}
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2">
                                <div class="d-flex  justify-content-between">
                                  <h5 class="mb-1">{{$j['title']}}</h5>
                                  <small class="ms-3">{{ $j['location'] }}</small>
                                </div>
                                <div class="d-flex  justify-content-between">
                                    <p class="mb-1">{{$j['company']}} - <span style="color: green"> <b>{{$j['type']}}</b> </span></p>
                                    <small class="ms-3">{{\Carbon\Carbon::parse($j['created_at'])->diffForHumans()}}</small>
                                </div>
                            </div>
                        </li>
                        
                        <hr>
                    @endforeach
              </div>
              <nav aria-label="Page navigation example" style="margin-left: 75%">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
          </div>
      </div>
  </div>
@endsection