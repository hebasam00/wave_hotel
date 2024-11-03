<script src="{{ asset('assets') }}/assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('assets') }}/assets/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('assets') }}/assets/vendor/js/bootstrap.js"></script>
<script src="{{ asset('assets') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset('assets') }}/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('assets') }}/assets/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('assets') }}/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '.delete-item', function(event) {
            event.preventDefault();
            let deleteUrl = $(this).attr('href'); // نحصل على رابط الحذف
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE', // طلب الحذف
                        url: deleteUrl, // نرسل الطلب للـ URL المحدد
                        success: function(data) {
                            if (data.status === 'success') {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                );
                                window.location
                            .reload(); // إعادة تحميل الصفحة بعد النجاح
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(error); // طباعة الخطأ في حال حدوثه
                        }
                    });
                }
            });
        });
    });
</script>

<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @php
                toastr()->error($error);
            @endphp
        @endforeach
    @endif
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
