<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Data Interface</title>
</head>
<body>
    <h1>Daftar Film</h1>
    <table border="1">
        <tr>
            <th>Perusahaan Produksi</th>
            <th>Judul Film</th>
            <th>Tahun Rilis</th>
            <th>Durasi</th>
            <th>Budget</th>
            <th>Homepage</th>
            <th>Rangkuman</th>
            <th>Popularitas</th>
            <th>Jumlah Vote</th>
            <th>Rating Vote</th>
        </tr>
        @foreach ($films as $film)
        <tr>
            <td>{{ $film->company->company_name}}</td>
            <td>{{ $film->title }}</td>
            <td>{{ $film->release_date }}</td>
            <td>{{ $film->runtime }}</td>
            <td>{{ $film->budget }}</td>
            <td><a href="{{ $film->homepage }}" target="_blank">{{ $film->homepage }}</a></td>
            <td>{{ $film->overview }}</td>
            <td>{{ $film->popularity }}</td>
            <td>{{ $film->vote_count }}</td>
            <td>{{ $film->vote_average }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>