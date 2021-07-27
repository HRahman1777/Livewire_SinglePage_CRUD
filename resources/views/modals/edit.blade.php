 <div>

     <div class="modal fade" wire:ignore.self id="editModalId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Edit Person Info</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form class="form-control" id="editFormId" wire:submit.prevent="edit">
                         <input type="hidden" wire:model="uid">
                         <input type="text" class="form-control" placeholder="firstname" wire:model="ufirstname">
                         <span class="text-danger"> @error('ufirstname') {{ $message }} @enderror</span>

                         <input type="text" class="form-control" placeholder="lastname" wire:model="ulastname">
                         <span class="text-danger"> @error('ulastname') {{ $message }} @enderror</span>

                         <input type="text" class="form-control" placeholder="phone" wire:model="uphone">
                         <span class="text-danger"> @error('uphone') {{ $message }} @enderror</span>

                         <input type="text" class="form-control" placeholder="email" wire:model="uemail">
                         <span class="text-danger"> @error('uemail') {{ $message }} @enderror</span>
                         <br>
                         <button type="submit" class="btn btn-primary">Edit</button>
                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>

 </div>