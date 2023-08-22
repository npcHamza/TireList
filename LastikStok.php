<!DOCTYPE html>
<html>
<head>
    <title>Lastik Stok Kontrolü</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body {
            background-color: #f1f8ff;
            padding: 20px;
        }
        h1, h2 {
            color: #0066cc;
        }
        table {
            margin-top: 20px;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
        }
        form {
            display: inline;
        }
    </style>
    <link rel="shortcut icon" href="https://www.pngarts.com/files/4/Car-Tire-PNG-Photo.png" type="image/x-icon">
    <script src="index.js" defer></script>
    <link rel="manifest" href="manifest.webmanifest">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">Lastik Stok Kontrolü</h1>
        <form method="post">
            <div class="mb-3">
                <label for="ebat" class="form-label">Lastik Ebatı:</label>
                <select name="ebat" id="ebat" class="form-select" required>
                    <option value="" selected disabled>Lastik Ebatı Seçin</option>
                    
                    <!-- 145 -->
                    <option value="145/80/13">145/80/13</option>
                    
                    <!-- 155 -->
                    <option value="" selected disabled>- 155 -</option>
                    <option value="155/55/14">155/55/14</option>
                    <option value="155/55/15">155/55/15</option>
                    <option value="155/55/16">155/55/16</option>
                    <option value="155/55/17">155/55/17</option>
                    <option value="155/60/14">155/60/14</option>
                    <option value="155/60/15">155/60/15</option>
                    <option value="155/60/16">155/60/16</option>
                    <option value="155/60/17">155/60/17</option>
                    <option value="155/65/14">155/65/14</option>
                    <option value="155/65/15">155/65/15</option>
                    <option value="155/65/16">155/65/16</option>
                    <option value="155/65/17">155/65/17</option>
                    <option value="155/65/14">155/65/14</option>
                    <option value="155/65/15">155/65/15</option>
                    <option value="155/65/16">155/65/16</option>
                    <option value="155/65/17">155/65/17</option>
                    <option value="155/70/14">155/70/14</option>
                    <option value="155/70/15">155/70/15</option>
                    <option value="155/70/16">155/70/16</option>
                    <option value="155/70/17">155/70/17</option>
                    <option value="155/75/14">155/75/14</option>
                    <option value="155/75/15">155/75/15</option>
                    <option value="155/75/16">155/75/16</option>
                    <option value="155/75/17">155/75/17</option>
                    <option value="155/80/14">155/80/14</option>
                    <option value="155/80/15">155/80/15</option>
                    <option value="155/80/16">155/80/16</option>
                    <option value="155/80/17">155/80/17</option>
                    <option value="155/85/14">155/85/14</option>
                    <option value="155/85/15">155/85/15</option>
                    <option value="155/85/16">155/85/16</option>
                    <option value="155/85/17">155/85/17</option>
                    
                    <!-- 165 -->
                    <option value="" selected disabled>- 165 -</option>
                    <option value="165/55/14">165/55/14</option>
                    <option value="165/55/15">165/55/15</option>
                    <option value="165/55/16">165/55/16</option>
                    <option value="165/55/17">165/55/17</option>
                    <option value="165/60/14">165/60/14</option>
                    <option value="165/60/15">165/60/15</option>
                    <option value="165/60/16">165/60/16</option>
                    <option value="165/60/17">165/60/17</option>
                    <option value="165/65/14">165/65/14</option>
                    <option value="165/65/15">165/65/15</option>
                    <option value="165/65/16">165/65/16</option>
                    <option value="165/65/17">165/65/17</option>
                    <option value="165/65/14">165/65/14</option>
                    <option value="165/65/15">165/65/15</option>
                    <option value="165/65/16">165/65/16</option>
                    <option value="165/65/17">165/65/17</option>
                    <option value="165/70/14">165/70/14</option>
                    <option value="165/70/15">165/70/15</option>
                    <option value="165/70/16">165/70/16</option>
                    <option value="165/70/17">165/70/17</option>
                    <option value="165/75/14">165/75/14</option>
                    <option value="165/75/15">165/75/15</option>
                    <option value="165/75/16">165/75/16</option>
                    <option value="165/75/17">165/75/17</option>
                    <option value="165/80/14">165/80/14</option>
                    <option value="165/80/15">165/80/15</option>
                    <option value="165/80/16">165/80/16</option>
                    <option value="165/80/17">165/80/17</option>
                    <option value="165/85/14">165/85/14</option>
                    <option value="165/85/15">165/85/15</option>
                    <option value="165/85/16">165/85/16</option>
                    <option value="165/85/17">165/85/17</option>
                    
                    <!-- 175 -->
                    <option value="" selected disabled>- 175 -</option>
                    <option value="175/55/14">175/55/14</option>
                    <option value="175/55/15">175/55/15</option>
                    <option value="175/55/16">175/55/16</option>
                    <option value="175/55/17">175/55/17</option>
                    <option value="175/60/14">175/60/14</option>
                    <option value="175/60/15">175/60/15</option>
                    <option value="175/60/16">175/60/16</option>
                    <option value="175/60/17">175/60/17</option>
                    <option value="175/65/14">175/65/14</option>
                    <option value="175/65/15">175/65/15</option>
                    <option value="175/65/16">175/65/16</option>
                    <option value="175/65/17">175/65/17</option>
                    <option value="175/65/14">175/65/14</option>
                    <option value="175/65/15">175/65/15</option>
                    <option value="175/65/16">175/65/16</option>
                    <option value="175/65/17">175/65/17</option>
                    <option value="175/70/14">175/70/14</option>
                    <option value="175/70/15">175/70/15</option>
                    <option value="175/70/16">175/70/16</option>
                    <option value="175/70/17">175/70/17</option>
                    <option value="175/75/14">175/75/14</option>
                    <option value="175/75/15">175/75/15</option>
                    <option value="175/75/16">175/75/16</option>
                    <option value="175/75/17">175/75/17</option>
                    <option value="175/80/14">175/80/14</option>
                    <option value="175/80/15">175/80/15</option>
                    <option value="175/80/16">175/80/16</option>
                    <option value="175/80/17">175/80/17</option>
                    <option value="175/85/14">175/85/14</option>
                    <option value="175/85/15">175/85/15</option>
                    <option value="175/85/16">175/85/16</option>
                    <option value="175/85/17">175/85/17</option>

                    <!-- 185 -->
                    <option value="" selected disabled>- 185 -</option>
                    <option value="185/55/14">185/55/14</option>
                    <option value="185/55/15">185/55/15</option>
                    <option value="185/55/16">185/55/16</option>
                    <option value="185/55/17">185/55/17</option>
                    <option value="185/60/14">185/60/14</option>
                    <option value="185/60/15">185/60/15</option>
                    <option value="185/60/16">185/60/16</option>
                    <option value="185/60/17">185/60/17</option>
                    <option value="185/65/14">185/65/14</option>
                    <option value="185/65/15">185/65/15</option>
                    <option value="185/65/16">185/65/16</option>
                    <option value="185/65/17">185/65/17</option>
                    <option value="185/65/14">185/65/14</option>
                    <option value="185/65/15">185/65/15</option>
                    <option value="185/65/16">185/65/16</option>
                    <option value="185/65/17">185/65/17</option>
                    <option value="185/70/14">185/70/14</option>
                    <option value="185/70/15">185/70/15</option>
                    <option value="185/70/16">185/70/16</option>
                    <option value="185/70/17">185/70/17</option>
                    <option value="185/75/14">185/75/14</option>
                    <option value="185/75/15">185/75/15</option>
                    <option value="185/75/16">185/75/16</option>
                    <option value="185/75/17">185/75/17</option>
                    <option value="185/80/14">185/80/14</option>
                    <option value="185/80/15">185/80/15</option>
                    <option value="185/80/16">185/80/16</option>
                    <option value="185/80/17">185/80/17</option>
                    <option value="185/85/14">185/85/14</option>
                    <option value="185/85/15">185/85/15</option>
                    <option value="185/85/16">185/85/16</option>
                    <option value="185/85/17">185/85/17</option>
                    
                    <!-- 195 -->
                    <option value="" selected disabled>- 195 -</option>
                    <option value="195/55/14">195/55/14</option>
                    <option value="195/55/15">195/55/15</option>
                    <option value="195/55/16">195/55/16</option>
                    <option value="195/55/17">195/55/17</option>
                    <option value="195/60/14">195/60/14</option>
                    <option value="195/60/15">195/60/15</option>
                    <option value="195/60/16">195/60/16</option>
                    <option value="195/60/17">195/60/17</option>
                    <option value="195/65/14">195/65/14</option>
                    <option value="195/65/15">195/65/15</option>
                    <option value="195/65/16">195/65/16</option>
                    <option value="195/65/17">195/65/17</option>
                    <option value="195/65/14">195/65/14</option>
                    <option value="195/65/15">195/65/15</option>
                    <option value="195/65/16">195/65/16</option>
                    <option value="195/65/17">195/65/17</option>
                    <option value="195/70/14">195/70/14</option>
                    <option value="195/70/15">195/70/15</option>
                    <option value="195/70/16">195/70/16</option>
                    <option value="195/70/17">195/70/17</option>
                    <option value="195/75/14">195/75/14</option>
                    <option value="195/75/15">195/75/15</option>
                    <option value="195/75/16">195/75/16</option>
                    <option value="195/75/17">195/75/17</option>
                    <option value="195/80/14">195/80/14</option>
                    <option value="195/80/15">195/80/15</option>
                    <option value="195/80/16">195/80/16</option>
                    <option value="195/80/17">195/80/17</option>
                    <option value="195/85/14">195/85/14</option>
                    <option value="195/85/15">195/85/15</option>
                    <option value="195/85/16">195/85/16</option>
                    <option value="195/85/17">195/85/17</option>

                    <!-- 205 -->
                    <option value="" selected disabled>- 205 -</option>
                    <option value="205/55/14">205/55/14</option>
                    <option value="205/55/15">205/55/15</option>
                    <option value="205/55/16">205/55/16</option>
                    <option value="205/55/17">205/55/17</option>
                    <option value="205/60/14">205/60/14</option>
                    <option value="205/60/15">205/60/15</option>
                    <option value="205/60/16">205/60/16</option>
                    <option value="205/60/17">205/60/17</option>
                    <option value="205/65/14">205/65/14</option>
                    <option value="205/65/15">205/65/15</option>
                    <option value="205/65/16">205/65/16</option>
                    <option value="205/65/17">205/65/17</option>
                    <option value="205/65/14">205/65/14</option>
                    <option value="205/65/15">205/65/15</option>
                    <option value="205/65/16">205/65/16</option>
                    <option value="205/65/17">205/65/17</option>
                    <option value="205/70/14">205/70/14</option>
                    <option value="205/70/15">205/70/15</option>
                    <option value="205/70/16">205/70/16</option>
                    <option value="205/70/17">205/70/17</option>
                    <option value="205/75/14">205/75/14</option>
                    <option value="205/75/15">205/75/15</option>
                    <option value="205/75/16">205/75/16</option>
                    <option value="205/75/17">205/75/17</option>
                    <option value="205/80/14">205/80/14</option>
                    <option value="205/80/15">205/80/15</option>
                    <option value="205/80/16">205/80/16</option>
                    <option value="205/80/17">205/80/17</option>
                    <option value="205/85/14">205/85/14</option>
                    <option value="205/85/15">205/85/15</option>
                    <option value="205/85/16">205/85/16</option>
                    <option value="205/85/17">205/85/17</option>
                    
                    <!-- 215 -->
                    <option value="" selected disabled>- 215 -</option>
                    <option value="215/55/14">215/55/14</option>
                    <option value="215/55/15">215/55/15</option>
                    <option value="215/55/16">215/55/16</option>
                    <option value="215/55/17">215/55/17</option>
                    <option value="215/60/14">215/60/14</option>
                    <option value="215/60/15">215/60/15</option>
                    <option value="215/60/16">215/60/16</option>
                    <option value="215/60/17">215/60/17</option>
                    <option value="215/65/14">215/65/14</option>
                    <option value="215/65/15">215/65/15</option>
                    <option value="215/65/16">215/65/16</option>
                    <option value="215/65/17">215/65/17</option>
                    <option value="215/65/14">215/65/14</option>
                    <option value="215/65/15">215/65/15</option>
                    <option value="215/65/16">215/65/16</option>
                    <option value="215/65/17">215/65/17</option>
                    <option value="215/70/14">215/70/14</option>
                    <option value="215/70/15">215/70/15</option>
                    <option value="215/70/16">215/70/16</option>
                    <option value="215/70/17">215/70/17</option>
                    <option value="215/75/14">215/75/14</option>
                    <option value="215/75/15">215/75/15</option>
                    <option value="215/75/16">215/75/16</option>
                    <option value="215/75/17">215/75/17</option>
                    <option value="215/80/14">215/80/14</option>
                    <option value="215/80/15">215/80/15</option>
                    <option value="215/80/16">215/80/16</option>
                    <option value="215/80/17">215/80/17</option>
                    <option value="215/85/14">215/85/14</option>
                    <option value="215/85/15">215/85/15</option>
                    <option value="215/85/16">215/85/16</option>
                    <option value="215/85/17">215/85/17</option>

                    <!-- 225 -->
                    <option value="" selected disabled>- 225 -</option>
                    <option value="225/55/14">225/55/14</option>
                    <option value="225/55/15">225/55/15</option>
                    <option value="225/55/16">225/55/16</option>
                    <option value="225/55/17">225/55/17</option>
                    <option value="225/60/14">225/60/14</option>
                    <option value="225/60/15">225/60/15</option>
                    <option value="225/60/16">225/60/16</option>
                    <option value="225/60/17">225/60/17</option>
                    <option value="225/65/14">225/65/14</option>
                    <option value="225/65/15">225/65/15</option>
                    <option value="225/65/16">225/65/16</option>
                    <option value="225/65/17">225/65/17</option>
                    <option value="225/65/14">225/65/14</option>
                    <option value="225/65/15">225/65/15</option>
                    <option value="225/65/16">225/65/16</option>
                    <option value="225/65/17">225/65/17</option>
                    <option value="225/70/14">225/70/14</option>
                    <option value="225/70/15">225/70/15</option>
                    <option value="225/70/16">225/70/16</option>
                    <option value="225/70/17">225/70/17</option>
                    <option value="225/75/14">225/75/14</option>
                    <option value="225/75/15">225/75/15</option>
                    <option value="225/75/16">225/75/16</option>
                    <option value="225/75/17">225/75/17</option>
                    <option value="225/80/14">225/80/14</option>
                    <option value="225/80/15">225/80/15</option>
                    <option value="225/80/16">225/80/16</option>
                    <option value="225/80/17">225/80/17</option>
                    <option value="225/85/14">225/85/14</option>
                    <option value="225/85/15">225/85/15</option>
                    <option value="225/85/16">225/85/16</option>
                    <option value="225/85/17">225/85/17</option>

                    <!-- 235 -->
                    <option value="" selected disabled>- 235 -</option>
                    <option value="235/55/14">235/55/14</option>
                    <option value="235/55/15">235/55/15</option>
                    <option value="235/55/16">235/55/16</option>
                    <option value="235/55/17">235/55/17</option>
                    <option value="235/60/14">235/60/14</option>
                    <option value="235/60/15">235/60/15</option>
                    <option value="235/60/16">235/60/16</option>
                    <option value="235/60/17">235/60/17</option>
                    <option value="235/65/14">235/65/14</option>
                    <option value="235/65/15">235/65/15</option>
                    <option value="235/65/16">235/65/16</option>
                    <option value="235/65/17">235/65/17</option>
                    <option value="235/65/14">235/65/14</option>
                    <option value="235/65/15">235/65/15</option>
                    <option value="235/65/16">235/65/16</option>
                    <option value="235/65/17">235/65/17</option>
                    <option value="235/70/14">235/70/14</option>
                    <option value="235/70/15">235/70/15</option>
                    <option value="235/70/16">235/70/16</option>
                    <option value="235/70/17">235/70/17</option>
                    <option value="235/75/14">235/75/14</option>
                    <option value="235/75/15">235/75/15</option>
                    <option value="235/75/16">235/75/16</option>
                    <option value="235/75/17">235/75/17</option>
                    <option value="235/80/14">235/80/14</option>
                    <option value="235/80/15">235/80/15</option>
                    <option value="235/80/16">235/80/16</option>
                    <option value="235/80/17">235/80/17</option>
                    <option value="235/85/14">235/85/14</option>
                    <option value="235/85/15">235/85/15</option>
                    <option value="235/85/16">235/85/16</option>
                    <option value="235/85/17">235/85/17</option>

                    <!-- 245 -->
                    <option value="" selected disabled>- 245 -</option>
                    <option value="245/55/14">245/55/14</option>
                    <option value="245/55/15">245/55/15</option>
                    <option value="245/55/16">245/55/16</option>
                    <option value="245/55/17">245/55/17</option>
                    <option value="245/60/14">245/60/14</option>
                    <option value="245/60/15">245/60/15</option>
                    <option value="245/60/16">245/60/16</option>
                    <option value="245/60/17">245/60/17</option>
                    <option value="245/65/14">245/65/14</option>
                    <option value="245/65/15">245/65/15</option>
                    <option value="245/65/16">245/65/16</option>
                    <option value="245/65/17">245/65/17</option>
                    <option value="245/65/14">245/65/14</option>
                    <option value="245/65/15">245/65/15</option>
                    <option value="245/65/16">245/65/16</option>
                    <option value="245/65/17">245/65/17</option>
                    <option value="245/70/14">245/70/14</option>
                    <option value="245/70/15">245/70/15</option>
                    <option value="245/70/16">245/70/16</option>
                    <option value="245/70/17">245/70/17</option>
                    <option value="245/75/14">245/75/14</option>
                    <option value="245/75/15">245/75/15</option>
                    <option value="245/75/16">245/75/16</option>
                    <option value="245/75/17">245/75/17</option>
                    <option value="245/80/14">245/80/14</option>
                    <option value="245/80/15">245/80/15</option>
                    <option value="245/80/16">245/80/16</option>
                    <option value="245/80/17">245/80/17</option>
                    <option value="245/85/14">245/85/14</option>
                    <option value="245/85/15">245/85/15</option>
                    <option value="245/85/16">245/85/16</option>
                    <option value="245/85/17">245/85/17</option>

                    <!-- 255 -->
                    <option value="" selected disabled>- 255 -</option>
                    <option value="255/55/14">255/55/14</option>
                    <option value="255/55/15">255/55/15</option>
                    <option value="255/55/16">255/55/16</option>
                    <option value="255/55/17">255/55/17</option>
                    <option value="255/60/14">255/60/14</option>
                    <option value="255/60/15">255/60/15</option>
                    <option value="255/60/16">255/60/16</option>
                    <option value="255/60/17">255/60/17</option>
                    <option value="255/65/14">255/65/14</option>
                    <option value="255/65/15">255/65/15</option>
                    <option value="255/65/16">255/65/16</option>
                    <option value="255/65/17">255/65/17</option>
                    <option value="255/65/14">255/65/14</option>
                    <option value="255/65/15">255/65/15</option>
                    <option value="255/65/16">255/65/16</option>
                    <option value="255/65/17">255/65/17</option>
                    <option value="255/70/14">255/70/14</option>
                    <option value="255/70/15">255/70/15</option>
                    <option value="255/70/16">255/70/16</option>
                    <option value="255/70/17">255/70/17</option>
                    <option value="255/75/14">255/75/14</option>
                    <option value="255/75/15">255/75/15</option>
                    <option value="255/75/16">255/75/16</option>
                    <option value="255/75/17">255/75/17</option>
                    <option value="255/80/14">255/80/14</option>
                    <option value="255/80/15">255/80/15</option>
                    <option value="255/80/16">255/80/16</option>
                    <option value="255/80/17">255/80/17</option>
                    <option value="255/85/14">255/85/14</option>
                    <option value="255/85/15">255/85/15</option>
                    <option value="255/85/16">255/85/16</option>
                    <option value="255/85/17">255/85/17</option>

                    <!-- 265 -->
                    <option value="" selected disabled>- 265 -</option>
                    <option value="265/55/14">265/55/14</option>
                    <option value="265/55/15">265/55/15</option>
                    <option value="265/55/16">265/55/16</option>
                    <option value="265/55/17">265/55/17</option>
                    <option value="265/60/14">265/60/14</option>
                    <option value="265/60/15">265/60/15</option>
                    <option value="265/60/16">265/60/16</option>
                    <option value="265/60/17">265/60/17</option>
                    <option value="265/65/14">265/65/14</option>
                    <option value="265/65/15">265/65/15</option>
                    <option value="265/65/16">265/65/16</option>
                    <option value="265/65/17">265/65/17</option>
                    <option value="265/65/14">265/65/14</option>
                    <option value="265/65/15">265/65/15</option>
                    <option value="265/65/16">265/65/16</option>
                    <option value="265/65/17">265/65/17</option>
                    <option value="265/70/14">265/70/14</option>
                    <option value="265/70/15">265/70/15</option>
                    <option value="265/70/16">265/70/16</option>
                    <option value="265/70/17">265/70/17</option>
                    <option value="265/75/14">265/75/14</option>
                    <option value="265/75/15">265/75/15</option>
                    <option value="265/75/16">265/75/16</option>
                    <option value="265/75/17">265/75/17</option>
                    <option value="265/80/14">265/80/14</option>
                    <option value="265/80/15">265/80/15</option>
                    <option value="265/80/16">265/80/16</option>
                    <option value="265/80/17">265/80/17</option>
                    <option value="265/85/14">265/85/14</option>
                    <option value="265/85/15">265/85/15</option>
                    <option value="265/85/16">265/85/16</option>
                    <option value="265/85/17">265/85/17</option>
                </select>
            </div>
            <button type="submit" name="ekle" class="btn btn-primary">Ekle</button>
        </form>

        <?php
        // Veritabanı bağlantısı
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lastik";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
        }

        // Lastik eklemek için form gönderildiğinde çalışacak kod
        if (isset($_POST['ekle'])) {
            $ebat = $_POST['ebat'];

            if ($ebat != "") {
                // Lastiğin daha önce eklenip eklenmediğini kontrol et
                $checkSql = "SELECT * FROM lastikler WHERE ebat = '$ebat'";
                $checkResult = $conn->query($checkSql);

                if ($checkResult->num_rows > 0) {
                    echo "<div class='alert alert-warning mt-3'>Bu lastik ebatı zaten stokta mevcut.</div>";
                } else {
                    // Lastiği veritabanına ekle
                    $insertSql = "INSERT INTO lastikler (ebat, miktar, tarih) VALUES ('$ebat', 1, NOW())";
                    if ($conn->query($insertSql) === TRUE) {
                        echo "<div class='alert alert-success mt-3'>Lastik başarıyla eklendi.</div>";
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Lastik eklenirken hata oluştu: " . $conn->error . "</div>";
                    }
                }
            }
        }

        // Lastikleri listele
        $sql = "SELECT * FROM lastikler";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2 class='mt-4'>Lastiklerin Listesi:</h2>";
            echo "<table class='table'><thead><tr><th scope='col'>Ebat</th><th scope='col'>Miktar</th><th scope='col'></th></tr></thead><tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['ebat'] . "</td><td>" . $row['miktar'] . "</td>";
                echo "<td><form method='post'><input type='hidden' name='ebat' value='" . $row['ebat'] . "' /><button type='submit' name='azalt' class='btn btn-outline-primary btn-sm'>-</button> <button type='submit' name='arttir' class='btn btn-outline-primary btn-sm'>+</button></form></td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-info mt-4'>Stokta hiç lastik bulunmamaktadır.</div>";
        }

        // Artırma veya azaltma işlemleri için form gönderildiğinde çalışacak kod
        if (isset($_POST['azalt']) || isset($_POST['arttir'])) {
            $ebat = $_POST['ebat'];

            // Lastiğin mevcut miktarını al
            $miktarSql = "SELECT miktar FROM lastikler WHERE ebat = '$ebat'";
            $miktarResult = $conn->query($miktarSql);
            $row = $miktarResult->fetch_assoc();
            $miktar = $row['miktar'];

            // Artırma veya azaltma işlemi yap
            if (isset($_POST['azalt'])) {
                $miktar--;
            } else {
                $miktar++;
            }

            // Miktarı güncelle
            $updateSql = "UPDATE lastikler SET miktar = $miktar WHERE ebat = '$ebat'";
            if ($conn->query($updateSql) === TRUE) {
                echo "<div class='alert alert-success mt-3'>Miktar başarıyla güncellendi.</div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>Miktar güncellenirken hata oluştu: " . $conn->error . "</div>";
            }
        }

        $conn->close();
        ?>
    </div>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker
            .register('sw.js')
            .then(() => { console.log('Service Worker Registered'); });
        }
    </script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
