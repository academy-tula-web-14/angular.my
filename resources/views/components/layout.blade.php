<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel site | {{$title_slot ?? "Title"}}</title>
    <style>
        .red{
            color: #ff0000;
        }
    </style>
</head>
<body>
    {{$slot}}
</body>
</html>