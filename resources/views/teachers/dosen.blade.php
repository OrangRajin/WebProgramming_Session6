
@extends('layout.template')

@section('title')
    Dosen Page
@endsection
@section('content')
<div style="background-color:powderblue;">
  <div>
    <center style="margin-bottom: 50px;"><h1>Meet Our Teacher</h1></center>
</div>   
    <div>
        <center style="margin-top: 20px">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum ullam sed est recusandae dicta nisi omnis delectus illo impedit ipsum reiciendis ipsa consequatur similique porro, aliquid asperiores quae sapiente iste. 
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde amet placeat pariatur tempora, expedita numquam maiores harum impedit architecto, sapiente voluptatem doloribus et accusantium odit, consequatur dignissimos rem eveniet quae.
            </p>
        </center>
    </div>
</div>

    <div>
        <div class="card">
            <div class="table-responsive">
              <table class="table table-vcenter card-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Kode Dosen</th>
                    <th>Mata Kuliah</th>
                    <th>Action</th>
                    <th class="w-1"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($teachers as $teacher)
                  <tr>
                    <td>{{$teacher->name}}</td>
                    <td>
                      {{$teacher->kode_dosen}}
                    </td>
                    <td>
                      {{$teacher->mata_kuliah}}
                    </td>
                    <td>
                      <a href="#">View</a>
                    </td>
                  </tr>
                  @endforeach
      
                </tbody>
              </table>
            </div>
          </div>            
    </div>
@endsection
