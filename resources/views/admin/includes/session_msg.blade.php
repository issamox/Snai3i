@if(Session::has("success"))
    <script>
        Swal.fire(
            'Message',
            '{{ Session::get("success") }}',
            'success'
        )
    </script>
@endif
