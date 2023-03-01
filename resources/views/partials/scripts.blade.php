{{-- Bootstrap 5.2 JS --}}
<script src="{{ asset('bootstrap5.2/js/bootstrap.bundle.min.js') }}"></script>

{{-- FeaterIcons --}}
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

{{-- DataTables --}}
<script src="{{asset('jquery/jquery-3.5.1.js')}}"></script>
<script src="{{ asset('DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.colVis.min.js"></script>

<script>
    feather.replace({ 'aria-hidden': 'true' })
</script>

{{-- Main JS --}}
<script type="module" src="{{ asset('js/main.js') }}"></script>

{{-- Livewire JS --}}
@livewireScripts
