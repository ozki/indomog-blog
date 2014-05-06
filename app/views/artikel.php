
<!DOCTYPE html>
<html>
<head>
    <title>Artikel</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/kube.min.css') ?>" />
    

</head>
<body style="width:80%;margin:40px auto">


    <div class="units-container">

        <form method="post" action="" class="forms">
            <h3>Tulis Artikel</h3>
            <label>
                Judul Artikel <span class="error"><?php echo $errors->first('title') ?></span>
                <input type="text" name="judul" value="<?php echo Form::old('title') ?>" class="width-50" />
            </label>
             <label>
                Author <span class="error"><?php echo $errors->first('author') ?></span>
                <input type="text" name="author" value="<?php echo Form::old('author') ?>" class="width-50" />
            </label>
            <label>
                Isi Artikel <span class="error"><?php echo $errors->first('body_content') ?></span>
                <textarea name="mytextarea" class="width-50" />
						
				</textarea>
            </label>
            <input type="submit" class="btn" value="Simpan">
        </form>

    </div>


</body>
</html>