<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>

<script>
    $(function(){

        $('#more').on('click', function() {
            $('#dropdown').toggle();
        });

        return false;  
    });
</script>

<script>
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#change-pic-btn').on('click', function () {
            $('#picture').trigger('click')
        });

        $('#picture').on('change', function () {
            $('#form-changepic').submit()
        })

        $('#form-changepic').on('submit', function(e) {
            e.preventDefault() //cegah action default
            let me = $(this)
            let formData = new FormData()
            formData.append('picture', $('#picture')[0].files[0])
            //$(#picture)[0]  masuk ke dom element 0
            // ditambah .files[0] masuk untuk cari file di dalam input index ke-0
            $.ajax({
                type: me.attr('method'),
                url: me.attr('action'),
                enctype: me.attr('enctype'),
                data: formData,
                // data: me.serialize(),
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    $('#user-image').attr('src', response.data.image)
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert('terjadi kesalahan');
                    
                }
            });
        })
    });
</script>

<script>
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btn-change-cov').on('click', function () {
            $('#cover').trigger('click')
        });

        $('#cover').on('change', function () {
            $('#form-changecov').submit()
        })

        $('#form-changecov').on('submit', function(e) {
            e.preventDefault() //cegah action default
            let me = $(this)
            let formData = new FormData()
            formData.append('cover', $('#cover')[0].files[0])
            //$(#picture)[0]  masuk ke dom element 0
            // ditambah .files[0] masuk untuk cari file di dalam input index ke-0
            $.ajax({
                type: me.attr('method'),
                url: me.attr('action'),
                enctype: me.attr('enctype'),
                data: formData,
                // data: me.serialize(),
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    $('#user-cover').attr('src', response.data.image)
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert('terjadi kesalahan');
                    
                }
            });
        })
    });
</script>

<script>
$('#btn').click(function(){
    var btn = $(this);
    btn.prop('disabled', true);
});
</script>