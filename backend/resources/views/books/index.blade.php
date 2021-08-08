<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book master</title>
</head>
<body>

    <div class="contaner">
        <h1>Book master</h1>

        <p>新規追加</p>

        @error('book_name')
            book_name : {{ $message }}
        @enderror
        @error('author')
            author : {{ $message }}
        @enderror
        @error('likes')
            likes : {{ $message }}
        @enderror

        <form action="{{ route('books.index') }}" method="POST">
            @csrf
            book_name : <input type="text" name="book_name" value="{{ old('book_name') }}">
            author : <input type="text" name="author" value="{{ old('author') }}">
            likes : <input type="text" name="likes" value="{{ old('likes') }}">
            <input type="submit" value="送信">
        </form>

        <ul>
            @forelse ($books as $book)
            <li>
                {{-- <a href="/books/{{ $book['id'] }}">{{ $book['book_name'] }}</a> --}}
                <a href="{{ route('books.detail', $book['id']) }}">{{ $book['book_name'] }}</a>
            </li>
            <br>
            @empty
            <h2>本が見つかりません。登録してください。</h2>
            @endforelse
        </ul>

    </div>

    {{-- <a href="/books/create">新規追加</a> --}}
</body>
</html>
