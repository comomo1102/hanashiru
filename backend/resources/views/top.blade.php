<!DOCTYPE html>
<html>
<head>
</head>
<body>
@include("parts.header")

<main>
    <h1>これはトップページです {{$name}}({{$age}}) さん</h1>
    <a href= "/list?season=spring" >春の花</a>
    <a href= "/list?season=summer" >夏の花</a>
    <a href= "/list?season=autumn" >秋の花</a>
    <a href= "/list?season=winter" >冬の花</a>

</main>

@include("parts.footer")
</body>
</html>
