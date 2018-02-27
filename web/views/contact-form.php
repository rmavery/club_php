<!DOCTYPE html>
<html>
<head>
    <?php define( 'SCRIPT_ROOT', 'http://localhost/' ); ?> 
    <title>Contact form using Bootstrap 3.3.4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <base href="http://localhost">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <?php 
    echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT.'/assets/css/bootstrap.css">' ;
    echo '<link rel="stylesheet" typc="text/css" href="'.SCRIPT_ROOT.'/assets/css/animate.css">' ;
    ?>
</head>
<body style="background-color: #7e7e7e">
    <!-- https://stackoverflow.com/questions/15965376/how-to-configure-xampp-to-send-mail-from-localhost --> 
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
    <div class="well" style="margin-top: 10%;">
    <h3>Send me a message</h3>
    <form role="form" id="contactForm" data-toggle="validator" class="shake">
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
    </form>
    </div>
</div>
</div>
</body>
<script  type="text/javascript" src="#assets/js/jquery.min.js"></script>
<script type="text/javascript" src="#assets/js/validator.min.js"></script>
<script type="text/javascript" src="#assets/js/form-scripts.js"></script>
</html>