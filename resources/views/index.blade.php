<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    @livewireStyles
</head>

<body>

    <div class="container">
        <h1 class="text-center mt-3">All Persons Details From Database</h1>
        <hr>
        @livewire('personslw')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
    <script>
        window.addEventListener('saveAlert', function() {
            $('#createFormId')[0].reset();
            $('#createModalId').modal('hide');
            //location.reload();
            //alert('done');
        });

        window.addEventListener('EditModal', function() {
            $('#editModalId').modal('show');
        });

        window.addEventListener('editAlert', function() {
            $('#editFormId')[0].reset();
            $('#editModalId').modal('hide');
        });

        window.addEventListener('delAlert', function() {
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Data has been deleted',
                showConfirmButton: false,
                timer: 1500
            })
        });
    </script>
</body>

</html>