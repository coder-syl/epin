<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>epin</title>
</head>
<body >
<div id="app" >
    <app></app>
</div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>