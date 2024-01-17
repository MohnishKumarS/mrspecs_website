<div>
      <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form  wire:submit.prevent="destroyCategory">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Categort Delete</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body">
         <h6>Are you sure you want to delete this data?</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yes, Delete</button>
        </div>
    </form>
      </div>
    </div>
  </div>




    <div class="card">
      <div class="card-header shadow">
        <h2>Category view</h2>
      </div>
      <div class="card-body">
           
        <table class="table table-bordered table-hover my-4 text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
                $i= 1;
            @endphp
             @forelse ($category as $val)
             <tr>
              <th scope="row">{{$i++}}</th>
              <td>
                <div>
                  <img src="{{asset('image/category/'.$val->image)}}" alt="category-image" width="350">
                </div>
              </td>
              <td>{{$val->name}}</td>
              <td>
                <div>
                  <a href="{{url('admin/category/'.$val->id.'/edit')}}" class="btn btn-primary">Edit</a>
                  <a href="#" wire:click="deleteCategory({{$val->id}})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                </div>
              </td>
            </tr>
             @empty
                 <tr>
                  <td colspan="4">
                    <div class="my-5 text-center">
                      <div class="text-danger">No category found</div>
                    </div>
                  </td>
                 </tr>
             @endforelse
       
          </tbody>
        </table>

        {{-- ---- paginate ---- --}}
        <div class="mt-4">
            {{$category->links()}}
        </div>
      </div>
    </div>
 
  

</div>



@push('script')
    
<script>
  window.addEventListener('close-modal', event => {
    $('#deleteModal').modal('hide');
});
</script>
@endpush