<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<?php if ( is_active_sidebar( "footersidebar" ) ) {
					dynamic_sidebar( "footersidebar" );
				} ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>