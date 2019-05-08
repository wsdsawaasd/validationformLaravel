<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="main-content">
    <h1>Form đi ền th ông tin</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('store') }}">
        {{ csrf_field() }}
        <label for="number">chỉ đư ợc nh ập số<input type="text" name="number"></label>
        <button type="submit">Ki ểm tra</button>
    </form>

</div>
</body>
</html>
