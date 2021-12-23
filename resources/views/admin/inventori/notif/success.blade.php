@if(session('pesan'))
  <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
    <h4><i></i>Alert</h4>
    {{session('pesan')}}
  </div>
@endif