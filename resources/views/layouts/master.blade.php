<!DOCTYPE html>
<html>

@include("components.title")

<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo">
				<img src="vendors/images/deskapp-logo.svg" alt="" />
			</div>
			<div class="loader-progress" id="progress_div">
				<div class="bar" id="bar1"></div>
			</div>
			<div class="percent" id="percent1">0%</div>
			<div class="loading-text">Loading...</div>
		</div>
	</div>
@include("components.header")
@include("components.setting")

	@include("components.sidebar")
@include("components.container")
@include("components.footer")
	@yield("contenu")
	@include("components.script")
</body>

</html>