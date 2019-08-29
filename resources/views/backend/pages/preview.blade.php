  @extends('backend.layouts.master')
  @section('content')
  <script src='https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.2/tinymce.min.js' referrerpolicy="origin"></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
  <div class="row">
    
    <div class="col-lg-6 grid-margin stretch-card">

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Preview</h4>
          <h3 class="card-description">
            <h3 class="text-info text-center bg-warning" style="padding:10px;">Images</h3>
          </h3>
<button class="btn btn-light">Add Image</button>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Images</th>
                  <th>name</th>
                  <th>Type</th>
                  <th>Active status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($childs->childImages as $img)
                <tr>
                  <td>#</td>
                  <td class="py-1">
                    <img src="{{asset('images/childImage/'.$img->image)}}" alt="image" />
                  </td>
                  <td>{{$img->image}}</td>
                  <td>{{$img->type}}</td>
                  <td><a class="{{$img->status == 0 ?'badge badge-danger' : 'badge badge-primary'}}" data-toggle="modal" data-target="#imageStatusModal{{$img->id}}" style="color: white;">
                  {{$img->status == 0 ? "Inactive" : ($img->status == 1 ? "Active" : "Disable")}}
              </a>
              <div class="modal fade" id="imageStatusModal{{$img->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                admin.child.videoStaus
                  <form action="{{ route('admin.child.imageStaus', $img->id) }}" method="post">
                                    {{csrf_field()}}
                                    
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="exampleSelectPrimary" style="font-size: 1rem;">Active Status</label>
                          <select class="form-control border-primary" id="exampleSelectPrimary" name="status" style="font-size: 1rem;">
                            <option value="$child->active_status" selected>{{$img->status == 0 ? "inactive" : ($img->status == 1 ? "Active" : "disable")}}</option>
                            
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                            <option value="2">Disable</option>
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float: left;">Close</button>
                         
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
            </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <h3 class="text-info text-center bg-warning" style="padding:10px;">Videos</h2>
          </h3>
          <button class="btn btn-light">Add Video</button>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Link</th>
                  <th>Active status</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($childs->videos as $vdo)
                @if ($vdo->type='child' || $vdo->type=='childGift')
                <tr>
                  <td>#id</td>
                  <td><a href="{{$vdo->link}}" target="_blank">Link</a></td>
                  <td><label class="badge badge-danger">Pending</label></td>
                    <td><a class="{{$vdo->status == 0 ?'badge badge-danger' : 'badge badge-primary'}}" data-toggle="modal" data-target="#vdoStatusModal{{$vdo->id}}" style="color: white;">
                  {{$vdo->status == 0 ? "Inactive" : ($vdo->status == 1 ? "Active" : "Disable")}}
                    </a>
                    <div class="modal fade" id="vdoStatusModal{{$vdo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  
                    <form action="{{ route('admin.child.videoStaus', $vdo->id) }}" method="post">
                                      {{csrf_field()}}
                                      
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel"></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="exampleSelectPrimary" style="font-size: 1rem;">Active Status</label>
                            <select class="form-control border-primary" id="exampleSelectPrimary" name="status" style="font-size: 1rem;">
                              <option value="$vdo->status" selected>{{$img->status == 0 ? "inactive" : ($vdo->status == 1 ? "Active" : "disable")}}</option>
                              
                              <option value="0">Inactive</option>
                              <option value="1">Active</option>
                              <option value="2">Disable</option>
                            </select>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float: left;">Close</button>
                           
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  </div>
                  </td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Preview</h4>
          <h3 class="card-description">
            <h3 class="text-light text-center bg-success" style="padding:10px;">Add stories</h3>
          </h3>
           <form action="{{ route('admin.child.previewActive', $childs->id) }}" method="post">
             {{csrf_field()}}
          <div class="form-group">

            <textarea class="form-control" id="mytextarea" name="stories" rows="10">{{$childs->stories}}</textarea>
          </div>
          <button type="submit" class="btn btn-info mr-2">Submit All</button>
           </form>

        </div>
      </div>
    </div>
 
  </div>


  <!-- Custom js for Child-List page-->



  @endsection
