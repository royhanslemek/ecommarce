function validateLogin() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const errorMessage = document.getElementById("error-message");

  // Simulasi validasi login
  if (username === "royhan" && password === "ganteng") {
    // Jika login berhasil, pindah ke halaman berikutnya
    window.location.href = "img.html";
    return false; // Mencegah form submit
  } else {
    // Jika login gagal, tampilkan pesan error
    errorMessage.style.display = "block";
    errorMessage.textContent = "Username atau password salah.";
    return false;
  }
}
