<html>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="submit" value="Upload">
    </form>
    <?php
      if (isset($_FILES['file'])) {
        $upload_dir = __DIR__ . '/';
        $filename = basename($_FILES['file']['name']);
        $target = $upload_dir . $filename;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
          echo "✅ Uploaded: $filename";
        } else {
          echo "❌ Upload failed.";
        }
      }
    ?>
  </body>
</html>