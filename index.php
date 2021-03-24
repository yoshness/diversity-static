<?php include 'partials/header.php'; ?>
	<?php
		switch ($request) {
		    case '/diversity/':
	        	require __DIR__ . '/views/index.php';
		        break;
		    case '/diversity/diversity-management':
		    case '/diversity/diversity-management/':
		        require __DIR__ . '/views/diversity-management.php';
		        break;
		    case '/diversity/womenomics':
		    case '/diversity/womenomics/':
		        require __DIR__ . '/views/womenomics.php';
		        break;
		   	case '/diversity/work-life-balance':
		    case '/diversity/work-life-balance/':
		        require __DIR__ . '/views/work-life-balance.php';
		        break;
		    case '/diversity/work-style-reform':
		    case '/diversity/work-style-reform/':
		        require __DIR__ . '/views/work-style-reform.php';
		        break;
		    case '/diversity/inclusion':
		    case '/diversity/inclusion/':
		        require __DIR__ . '/views/inclusion.php';
		        break;
		    case '/diversity/interview':
		    case '/diversity/interview/':
		        require __DIR__ . '/views/interview.php';
		        break;
		    case '/diversity/interview/kobayashi-mitsuru':
		    case '/diversity/interview/kobayashi-mitsuru/':
		        require __DIR__ . '/detail/kobayashi-mitsuru.php';
		        break;
		    case '/diversity/interview/kano-motoharu':
		    case '/diversity/interview/kano-motoharu/':
		        require __DIR__ . '/detail/kano-motoharu.php';
		        break;
		    case '/diversity/interview/ueno-ai':
		    case '/diversity/interview/ueno-ai/':
		        require __DIR__ . '/detail/ueno-ai.php';
		        break;
		    case '/diversity/interview/ueno-ai':
		    case '/diversity/interview/ueno-ai/':
		        require __DIR__ . '/detail/ueno-ai.php';
		        break;
		    case '/diversity/interview/oono-hiroshi':
		    case '/diversity/interview/oono-hiroshi/':
		        require __DIR__ . '/detail/oono-hiroshi.php';
		        break;
		    case '/diversity/interview/watanabe-eriko':
		    case '/diversity/interview/watanabe-eriko/':
		        require __DIR__ . '/detail/watanabe-eriko.php';
		        break;
		    case '/diversity/interview/mukawa-eisuke':
		    case '/diversity/interview/mukawa-eisuke/':
		        require __DIR__ . '/detail/mukawa-eisuke.php';
		        break;
		    case '/diversity/interview/kaneoka-chiemi':
		    case '/diversity/interview/kaneoka-chiemi/':
		        require __DIR__ . '/detail/kaneoka-chiemi.php';
		        break;
		    case '/diversity/interview/houjou-sayuri':
		    case '/diversity/interview/houjou-sayuri/':
		        require __DIR__ . '/detail/houjou-sayuri.php';
		        break;
		    case '/diversity/interview/edamatsu-tomoko':
		    case '/diversity/interview/edamatsu-tomoko/':
		        require __DIR__ . '/detail/edamatsu-tomoko.php';
		        break;
		    case '/diversity/interview-category/%e3%83%80%e3%82%a4%e3%83%90%e3%83%bc%e3%82%b7%e3%83%86%e3%82%a3%e3%83%9e%e3%83%8d%e3%82%b8%e3%83%a1%e3%83%b3%e3%83%88/':
		        require __DIR__ . '/category/diversity-management.php';
		        break;
		    case '/diversity/interview-category/%e3%82%a4%e3%82%af%e3%83%a1%e3%83%b3/':
		        require __DIR__ . '/category/ikumen.php';
		        break;
		    case '/diversity/interview-category/%e5%a5%b3%e6%80%a7%e3%81%ae%e6%b4%bb%e8%ba%8d/':
		        require __DIR__ . '/category/women-success.php';
		        break;
		    case '/diversity/interview-category/%e3%82%b7%e3%83%8b%e3%82%a2%e4%ba%ba%e6%9d%90%e3%81%ae%e6%b4%bb%e8%ba%8d/':
		        require __DIR__ . '/category/senior-success.php';
		        break;
		    default:
		    	echo 'Page not found.';
		        http_response_code(404);
		        // require __DIR__ . '/views/404.php';
		        break;
	    }
    ?>
	<?php include 'partials/footer.php'; ?>
	<script type="text/javascript" src="/diversity/public/app.js"></script>
</body>
</html>