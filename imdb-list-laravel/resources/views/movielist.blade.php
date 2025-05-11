<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Top 50 Isekai Anime List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .movie-list {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .movie-item {
            display: flex;
            margin-bottom: 30px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
        }
        .movie-poster {
            width: 200px;
            height: 300px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 20px;
        }
        .movie-info {
            flex: 1;
        }
        .movie-title {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            color: #2c3e50;
        }
        .movie-year {
            color: #666;
            font-size: 16px;
            margin-left: 10px;
        }
        .movie-meta {
            display: flex;
            gap: 15px;
            margin-top: 10px;
            color: #666;
            font-size: 14px;
        }
        .movie-rating {
            color: #f5c518;
            font-weight: bold;
            margin-top: 10px;
            font-size: 16px;
        }
        .movie-description {
            margin-top: 15px;
            font-size: 14px;
            color: #333;
            line-height: 1.6;
        }
        .movie-stars, .movie-creator {
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="movie-list">
        <h1>Top 50 Isekai Anime List</h1>
        @foreach ($movies as $movie)
            <div class="movie-item">
                @if(isset($movie['poster']))
                    <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}" class="movie-poster">
                @endif
                <div class="movie-info">
                    <div class="movie-title">
                        {{ $movie['index'] }}. {{ $movie['title'] }}
                        <span class="movie-year">({{ $movie['year'] }})</span>
                    </div>
                    <div class="movie-meta">
                        @if(isset($movie['episodes']))
                            <span>{{ $movie['episodes'] }} episodes</span>
                        @endif
                        @if(isset($movie['content_rating']))
                            <span>{{ $movie['content_rating'] }}</span>
                        @endif
                        @if(isset($movie['type']))
                            <span>{{ $movie['type'] }}</span>
                        @endif
                    </div>
                    <div class="movie-rating">
                        Rating: {{ $movie['rating'] }}
                        @if(isset($movie['rating_count']))
                            ({{ $movie['rating_count'] }} votes)
                        @endif
                    </div>
                    @if(isset($movie['description']))
                        <p class="movie-description">{{ $movie['description'] }}</p>
                    @endif
                    @if(isset($movie['creator']))
                        <div class="movie-creator">
                            <strong>Creator:</strong> {{ $movie['creator'] }}
                        </div>
                    @endif
                    @if(isset($movie['stars']))
                        <div class="movie-stars">
                            <strong>Stars:</strong> {{ $movie['stars'] }}
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
