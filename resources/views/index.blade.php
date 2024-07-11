<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Form Registration</title>
</head>

<body>
    @if ($registered)
        <div class="container">
            <div class="card">
                <h1 class="text-success">Registration Successful</h1>
                <p class="text-success">Thank you for registering!, Dont forget to check email</p>
                <p><a class="text-back" href="{{ route('showForm') }}"><i class='bx bx-chevrons-left'></i>Back to register</a></p>
            </div>
        </div>
    @else
        <div class="wrapper">
            <form action="/register" method="POST">
                @csrf
                <h1>Registrasi Workshop <br> CTF CSC UMSU 2024</h1>
                <div class="input-box">
                    <div class="input-field"><input name="name" type="text" required placeholder="Nama Lengkap"
                            value="{{ old('name') }}"><i class='bx bxs-user'></i></div>
                    <div class="input-field"><input name="email" type="text" placeholder="Email" required
                            value="{{ old('email') }}"><i class='bx bxs-envelope'></i>
                    </div>
                </div>
                @error('email')
                    <span style="margin-bottom: 10px;">{{ $message }}</span>
                @enderror
                <div class="input-box">
                    <div class="input-field"><input name="nim" type="text" placeholder="NPM"
                            value="{{ old('nim') }}" required><i class='bx bxs-id-card'></i></div>
                    <div class="input-field">
                        <select name="jurusan" id="jurusan" required>
                            <option value="" disabled selected>Pilih Jurusan</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Data Science">Data Science</option>
                        </select>
                        <i class='bx bxs-graduation'></i>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-field"><input name="semester" type="number" placeholder="Semester" required
                            value="{{ old('semester') }}"><i class='bx bxs-book-reader'></i></div>
                    <div class="input-field"><input name="nohp" type="text" placeholder="No. Whatsapp" required
                            value="{{ old('nohp') }}"><i class='bx bxl-whatsapp'></i></div>
                            @error('semester')
                                <span style="margin-bottom: 10px;">{{ $message }}</span>
                            @enderror
                </div>
                <label><input type="checkbox" name="agree">Saya menyetujui persyaratan yang ada</label>
                <button type="submit" class="btn">Register</button>
                @error('agree')
                    <span>{{ $message }}</span>
                @enderror
            </form>
        </div>
    @endif
</body>

</html>
