<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow" />

{{-- Font Awesome (icons) --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

<!-- Google Fonts: Montserrat -->
<link rel="stylesheet" href="{{ asset('css') }}/Montserrat_font.css">

<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Inline CSS for Montserrat -->
<style>
    * {
        font-family: 'Montserrat', sans-serif !important;
        font-weight: 400;
    }
</style>

<link rel="stylesheet" href="{{ asset('css') }}/tailwind.min.css">
<link rel="stylesheet" href="{{ asset('css') }}/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css') }}/bootstrap-icons.css">

<script src="{{ asset('js') }}/jquery-3.7.1.min.js"></script>
<script src="{{ asset('js') }}/tailwind.min.js"></script>
<script src="{{ asset('js') }}/bootstrap.bundle.min.js"></script>
<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
     // Initialize Flatpickr for date inputs
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#fromDate", {
                enableTime: true,  
                dateFormat: "Y-m-d H:i", 
            });

            flatpickr("#toDate", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
        });
</script>