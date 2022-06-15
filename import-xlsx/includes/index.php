<?php

add_action('default_content', 'default_uploaded');

function default_uploaded()
{ ?>


  <div class="wrap">
    <form enctype="multipart/form-data" action="fileupload.php" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
      upload le fichier <input type="file" name="monfichier" />
      <input type="submit" />
    </form>
  </div>


<?php } ?>