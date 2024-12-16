// Fungsi untuk menangani login
function loginUser(event) {
  event.preventDefault(); // Mencegah form submit standar

  // Ambil username dan password yang dimasukkan
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  // Periksa username dan password
  if (username === 'admin' && password === '1234') {
      // Jika login berhasil, arahkan ke halaman admin
      window.location.href = "index.html"; // Ganti dengan path yang sesuai
  } else {
      // Jika login gagal, tampilkan pesan error
      document.getElementById('error-message').style.display = 'block';
  }
}