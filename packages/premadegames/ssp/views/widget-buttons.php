<?php
/**
 * @var $view
 */
?>
<?php
    $view->script('buttons', 'premadegames/ssp:assets/jquery.socialshareprivacy.js', 'uikit');
?>
<script type="text/javascript">
    jQuery(document).ready(function($){
      if($('#socialshareprivacy').length > 0){
        $('#socialshareprivacy').socialSharePrivacy({});
      }
    });
</script>
<div id="socialshareprivacy"></div>