<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permainan Dadu</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            position: relative;
            overflow: hidden;
        }
        #image-gallery {
            display: flex;
            transition: transform 0.5s ease;
        }
        .image-slide {
            min-width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="tabs">
            <a href="#home">Beranda</a>
            <a href="#game">Permainan Dadu</a>
            <a href="#punishment">Hukuman</a>
        </div>
        <div class="tab-content" id="home">
            <h1>Selamat Datang di Permainan Ular Tangga!</h1>
            <p>Di sini, setiap angka dadu memiliki peran tersendiri:</p>
            <ul>
                <li><strong>1 </strong> - Menyerang pemain lain (yang harus menjawab pertanyaan)</li>
                <li><strong>2 </strong> - Pertanyaan numerasi</li>
                <li><strong>3 </strong> - Pertanyaan numerasi</li>
                <li><strong>4 </strong> - Tim harus mengelilingi papan ular tangga dua putaran penuh</li>
                <li><strong>5 </strong> - Tantangan teka-teki Pertanyaan numerasi</li>
                <li><strong>6 </strong> - Mendemonstrasikan bakat atau keterampilan khusus</li>
            </ul>
            <p>Selamat bersenang-senang!</p>
            <audio id="background-music" src="background_music.m4a" loop></audio>
            <button onclick="toggleAudio()">Mulai/Pause Musik</button>

            <div id="image-gallery">
                <img src="image1.jpg" alt="Gambar 1" width="300" height="200" style="display: block;">
                <img src="image2.jpg" alt="Gambar 2" width="300" height="200" style="display: block;">
                <img src="image3.jpg" alt="Gambar 3" width="300" height="200"style="display: block;">
                <img src="image4.jpg" alt="Gambar 4" width="300" height="200"style="display: block;">
                <img src="image5.jpg" alt="Gambar 5" width="300" height="200"style="display: block;">
                <img src="image6.jpg" alt="Gambar 6" width="300" height="200"style="display: block;">
                <img src="image7.jpg" alt="Gambar 7" width="300" height="200"style="display: block;">
                <img src="image8.jpg" alt="Gambar 8" width="300" height="200"style="display: block;">
                <img src="image9.jpg" alt="Gambar 9" width="300" height="200"style="display: block;">
                <img src="image10.jpg" alt="Gambar 10" width="300" height="200"style="display: block;">
            </div>
        </div>
        <div class="tab-content" id="game">
            <h1>Permainan Dadu</h1>
            <!-- Your game content goes here -->
            <?php include 'game.php'; ?>
        </div>
        <div class="tab-content" id="punishment">
            <h1>Hukuman</h1>
            <p>Di sini Anda bisa menemukan daftar hukuman bagi yang kalah dalam permainan dadu.</p>
        </div>
    </div>

    <script>
        function toggleAudio() {
            var audio = document.getElementById("background-music");
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }

        var currentIndex = 0;
        var images = document.getElementById("image-gallery").getElementsByTagName("img");

        setInterval(function() {
            images[currentIndex].style.display = "none";
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].style.display = "block";
        }, 3000); // Ganti gambar setiap 3 detik
    </script>
</body>
</html>