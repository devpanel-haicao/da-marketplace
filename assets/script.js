document.getElementById('filterForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Ngăn form load lại trang
  
  // Lấy giá trị từ form
  const price = document.getElementById('price').value;
  const title = document.getElementById('title').value;
  
  // Log ra console hoặc hiển thị thông báo mô phỏng
  console.log(`Lọc với giá: ${price}, Tiêu đề: ${title}`);
  alert("Tính năng lọc đang được mô phỏng. Sẽ tích hợp API sau!");
});