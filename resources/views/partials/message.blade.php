@if (Session::has('success'))

	<script src="/js/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">	

	<script type="text/javascript">
		swal("Success", "{{ Session::get('success') }}", "success")
	</script>

@endif


@if (Session::has('danger'))

	<script src="/js/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
	
	<script type="text/javascript">
		sweetAlert("Error!", "{{ Session::get('danger') }}", "error");
	</script>
	


@endif


@if (Session::has('alert'))	

	<script src="/js/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
	
	<script type="text/javascript">
		swal("Alert", "{{ Session::get('alert') }}", "warning")
	</script>
	


@endif

