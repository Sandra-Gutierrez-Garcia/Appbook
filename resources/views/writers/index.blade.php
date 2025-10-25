<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    @vite('resources/css/app.css')
    <title>index for writers</title>
</head>
<body>
    <x-nav-blade
        :appName="'AppBook'"
        />
        <!-- section for writers -->
        <x-libery-writer-blade />
</body>
</html>