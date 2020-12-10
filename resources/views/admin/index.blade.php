@extends("admin.indexBase")

@section('main')
<!-- content center -->
<div class="main-content">
	<script type="text/javascript">
		try {
			ace.settings.check("breadcrumbs", "fixed");
		} catch (e) {}
	</script>
	<div class="breadcrumbs" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="index.html">首页</a>
			</li>
			<li class="active">
				<span class="Current_page iframeurl"></span>
			</li>
			<li class="active" id="parentIframe">
				<span class="parentIframe iframeurl"></span>
			</li>
			<li class="active" id="parentIfour">
				<span class="parentIfour iframeurl"></span>
			</li>
		</ul>
	</div>

	<iframe
		id="iframe"
		style="border: 0; width: 100%; background-color: #fff;"
		name="iframe"
		frameborder="0"
		src="/home"
	>
	</iframe>

	<!-- /.page-content -->
</div>
@endsection