<div>

    <div class="card">
      <div class="card-header shadow">
        <h2>Brand view
          <a href="{{url('admin/brands/create')}}" class="btn btn-primary btn-sm float-end mt-2">Add Brands</a>
        </h2>
      </div>
      <div class="card-body">
           
        <table class="table table-bordered table-hover my-4 text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Brand name</th>
              <th scope="col">Action</th>
             
            </tr>
          </thead>
          <tbody>
            @php
                $i= 1;
              
            @endphp
             @forelse ($brand as $val)
            
             <tr>
              <th scope="row">{{$i++}}</th>
           
              <td>{{$val->name}}</td>
              <td>
                <div>
                    <a href="{{url('admin/brand/delete/'.$val->id)}}" class="btn  btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">Delete</a>
                </div>
              </td>
     
          
            </tr>
             @empty
                 <tr>
                  <td colspan="4">
                    <div class="my-5 text-center">
                      <div class="text-danger">No Brands found</div>
                    </div>
                  </td>
                 </tr>
             @endforelse
       
          </tbody>
        </table>
  
      
      </div>
    </div>
  
  
  
  </div>
  
