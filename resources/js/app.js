import './bootstrap';
import 'bootstrap';

// Menambahkan kode untuk filter Ajax
$(document).ready(function() {
    $('#filter').on('change', function() {
        var filterValue = $(this).val();
        $.ajax({
            url: "{{ route('filterRoute') }}",  // Ganti dengan route yang sesuai
            method: 'GET',
            data: { filter: filterValue },
            success: function(response) {
                $('#filteredContent').html(response);  // Ganti dengan ID atau class konten yang akan diganti
            },
            error: function() {
                alert('Error filtering data.');
            }
        });
    });
});
