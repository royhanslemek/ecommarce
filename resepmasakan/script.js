// script.js

// Mapping nama resep ke halaman
const recipes = {
  "ikura": "ikura.html",
  "ikura don": "ikura-don.html",
  "california roll": "california-roll.html",
  "siu mai": "siu-mai.html"
};

// Ambil elemen HTML
const searchBox = document.getElementById("search-box");
const searchButton = document.getElementById("search-button");

// Tambahkan event listener ke tombol "Cari"
searchButton.addEventListener("click", () => {
  // Ambil input pengguna dan ubah ke huruf kecil
  const query = searchBox.value.trim().toLowerCase();

  // Cek apakah input cocok dengan nama resep
  if (recipes[query]) {
    // Arahkan ke halaman resep
    window.location.href = recipes[query];
  } else {
    // Jika tidak ditemukan, tampilkan alert
    alert("Resep tidak ditemukan! Silakan coba lagi.");
  }
});