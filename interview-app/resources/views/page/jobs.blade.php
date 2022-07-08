@extends('master')

@section('konten')
  <div class="row">
      <div class="col-12">
          <h1>Github Jobs</h1>
          <form class="row gy-2 gx-3 align-items-center mb-3" action="/search" method="get">
            <div class="col-4">
              <label for="autoSizingInput"> <b>Job Description</b></label>
              <input type="text" name="description" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
            </div>
            <div class="col-4">
              <label for="autoSizingInput"><b>Location</b></label>
              <input name="location" type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
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
                        <li class="list-group-item">
                            <div class="ms-2">
                                <div class="d-flex justify-content-between w-100">
                                  <div>
                                    <h5 class="mb-1">{{$j['title']}}</h5>
                                    <p class="mb-1">{{$j['company']}} - <span style="color: green"> <b>{{$j['type']}}</b> </span></p>
                                  </div>
                                  <div class="d-flex justify-content-end">
                                    <p class="ms-3">{{ $j['location'] }}</p>
                                    <p class="ms-3"><b>{{\Carbon\Carbon::parse($j['created_at'])->diffForHumans()}}</b></p>
                                  </div>
                                </div>
                            </div>
                        </li>
                        
                        <hr>
                    @endforeach
              </div>
              {{-- {{ $jobs->links() }} --}}
          </div>
      </div>
  </div>
@endsection