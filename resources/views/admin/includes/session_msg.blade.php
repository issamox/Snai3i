@if(Session::has("success"))
    <script>
        Swal.fire(
            'Message',
            '{{ Session::get("success") }}',
            'success'
        )
    </script>
@endif
@if(Session::has("error"))
    <script>
        Swal.fire(
            'Oops...',
            '{{ Session::get("error") }}',
            'error'
        )
    </script>
@endif
