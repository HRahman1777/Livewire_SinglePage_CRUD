<div>
    @include('modals.create')
    @include('modals.edit')


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModalId">
        Add New Person
    </button>


    @if($checkedId)
    <button class="btn btn-danger" wire:click="delAllMarked">Delete({{ count($checkedId) }}) Persons</button>
    @endif

    <!--    @foreach($checkedId as $c)
    {{ $c }}
    @endforeach
-->

    <div>
        <table class="table mt-5 table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persons as $p)
                <tr class="{{ $this->colorMark($p->id) }}">
                    <td><input type="checkbox" value="{{ $p->id }}" wire:model="checkedId"></td>
                    <th scope="row">{{ $p->id }}</th>
                    <td>{{ $p->fname }}</td>
                    <td>{{ $p->lname }}</td>
                    <td>{{ $p->phone }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <button wire:click.prevent="OpenModalEdit({{ $p->id }})" class="btn btn-warning btn-sm">Edit</button>
                        <button wire:click.prevent="SingleDelete({{ $p->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>