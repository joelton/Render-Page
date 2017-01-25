</body>

<?php
  if(sizeof($js_files) > 0) :
    foreach ($js_files as $key => $value) :
?>
      <script src="assets/js/<?php echo $value ?>" charset="utf-8"></script>

<?php
    endforeach;
  endif;
?>

</html>
