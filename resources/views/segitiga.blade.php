<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 50px; }
        .container { max-width: 400px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        h2 { color: #333; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #4CAF50; color: white; padding: 10px; width: 100%; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #45a049; }
        .result { margin-top: 20px; padding: 10px; background: #e7f4e8; border-left: 4px solid #4CAF50; }
    </style>
</head>
<body>

<div class="container">
    <h2>{{ $judul }}</h2>
    
    <!-- Form menggunakan method POST dan mengarah ke route proses -->
    <form action="/kalkulator/segitiga/proses" method="POST">
        @csrf
        <div class="form-group">
            <label>Masukkan Alas:</label>
            <input type="number" name="alas" value="{{ $alas }}" step="any" required>
        </div>

        <div class="form-group">
            <label>Masukkan Tinggi:</label>
            <input type="number" name="tinggi" value="{{ $tinggi }}" step="any" required>
        </div>

        <button type="submit">Hitung Luas</button>
    </form>

    @if(isset($luas))
        <div class="result">
            <h3>Hasil Perhitungan:</h3>
            <p>Alas: <b>{{ $alas }}</b></p>
            <p>Tinggi: <b>{{ $tinggi }}</b></p>
            <p>Luas Segitiga: <b>{{ $luas }}</b></p>
        </div>
    @endif
</div>

</body>
</html>