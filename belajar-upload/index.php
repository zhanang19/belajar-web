<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="form" action="process-upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="data" id="data">
        <button type="submit" id="submit-btn">Upload</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            let form = $('#form')
            form.on('submit', function (e) {
                e.preventDefault()
                let formData = new FormData()
                formData.append('data', $('#data')[0].files[0])
                $.ajax({
                    url: form.attr('action'),
                    method: form.attr('method'),
                    enctype: form.attr('enctype'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    complete: function (jqXHR, textStatus) {
                        alert(jqXHR.responseJSON.message)
                    }
                })
            })
        });
    </script>
  </body>
</html>
