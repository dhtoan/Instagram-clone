<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<script type="text/javascript" src="public/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="public/js/modules.js"></script>
<script type="text/javascript" src="public/js/login_fn.js"></script>
<script type="text/javascript">
  $(function(){
    $('.index_header > .logo').on('click', function(e){
      window.location.href = "welcome";
    });
    //for replacing illegal characters
    $('.s_username, .s_password, .s_email, .s_firstname, .s_surname').on('keyup', function(e){
      replacer($(this));
    });
  });
</script>
<noscript>
  <?php include 'needs/sec_no_script.php'; ?>
</noscript>
</body>
</html>

<!-- https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js -->
