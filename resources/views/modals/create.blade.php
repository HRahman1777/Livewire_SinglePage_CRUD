<div>

    <div class="modal fade" wire:ignore.self id="createModalId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Person</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-control" id="createFormId" wire:submit.prevent="save">
                        <input type="text" class="form-control" placeholder="firstname" wire:model="firstname">
                        <span class="text-danger"> @error('firstname') {{ $message }} @enderror</span>

                        <input type="text" class="form-control" placeholder="lastname" wire:model="lastname">
                        <span class="text-danger"> @error('lastname') {{ $message }} @enderror</span>

                        <input type="text" class="form-control" placeholder="phone" wire:model="phone">
                        <span class="text-danger"> @error('phone') {{ $message }} @enderror</span>

                        <input type="text" class="form-control" placeholder="email" wire:model="email">
                        <span class="text-danger"> @error('email') {{ $message }} @enderror</span>
                        <br>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>