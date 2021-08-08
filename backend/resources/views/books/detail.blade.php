<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="contaner">

        @error('book_name')
            book_name : {{ $message }}
        @enderror
        @error('author')
            author : {{ $message }}
        @enderror
        @error('likes')
            likes : {{ $message }}
        @enderror

        <ul>
            <form action="{{ route('books.update') }}" method="post">
                @csrf
                <input type="hidden" name="book_id" value="{{ $book['id'] }}">
                <li><input type="text" name="book_name" value="{{ old("book_name", $book['book_name']) }}"></li>
                <li><input type="text" name="author" value="{{ old("author", $book['author']) }}"></li>
                <li><input type="text" name="likes" value="{{ old("likes", $book['likes']) }}"></li>
                <p><input type="submit" value="送信"></p>
            </form>

            <form action="{{ route('books.delete', $book['id']) }}" method="post">
                {{-- <form action="{{ route('books.delete') }}" method="post"> --}}
                @csrf
                {{-- <input type="hidden" name="book_id" value="{{ $book['id'] }}"> --}}
                {{-- <p><input type="submit" value="削除"></p> --}}
                <button>削除</button>
            </form>
        </ul>
    </div>

    <a href="{{ route('books.index') }}">戻る</a>

</body>
</html>
