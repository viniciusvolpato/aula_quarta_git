<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>


<script src="{{ asset('/sweetalert2/dist/sweetalert2.min.js') }}"></script> 
<link href="{{ asset('/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
<script>
	function ConfirmaExclusao(id) {
		swal({
			title: 'Confirma a exclusão?',
			text: "Esta ação não poderá ser revertida!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Sim, excluir!',
			closeOnConfirm: false,
			cancelButtonText: 'Cancelar!',
		}).then(function(isConfirm) {
			if (isConfirm) {
				//ajax
	            $.get('/'+ @yield('table-delete') +'/'+id+'/destroy', function(data){
	                //success data
	                console.log(data);
	                if (data.status == "ok") {
						swal(
							'Deletado!',
							'Exclusão confirmada.',
							'success'
						).then(function(isConfirm) {
								window.location.reload();
						});
	                }
					else
						swal(
							'Erro!',
							'Ocorreram erros na exclusão. Entre em contato com o suporte.',
							'error'
						);
	            });
			}
		})
	}
</script>