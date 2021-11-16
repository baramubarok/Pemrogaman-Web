@if ($message = Session::get('success'))
    <script>
        swal.fire({
            title: 'Berhasil',
            text: '{{ $message }}',
            icon: 'success',
            showConfirmButton: false,
            timer: 2000
        })
    </script>
@endif
@if ($message = Session::get('error'))
    <script>
        swal.fire({
            title: 'Gagal',
            text: '{{ $message }}',
            icon: 'error',
            showConfirmButton: false,
            timer: 4000
        })
    </script>
@endif
