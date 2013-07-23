<?php $text = themeblvd_get_local( 'search' ); ?>
<div class="themeblvd-search">
    <form method="get" action="<?php echo site_url(); ?>">
        <fieldset>
            <span class="input-wrap">
            	<input type="text" class="search-input" name="s" onblur="if (this.value == '') {this.value = 'search';}" onfocus="if(this.value == 'search') {this.value = '';}" value="search">
            </span>
            <span class="submit-wrap">
            	<input type="submit" class="submit" value="">
            </span>
        </fieldset>
    </form>
</div>
