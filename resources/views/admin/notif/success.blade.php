@if(session('pesan'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
    <h4><i></i>Alert</h4>
    {{session('pesan')}}
  </div>
@endif