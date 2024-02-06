<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
  /* Style untuk modal */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width:
}
</style>
<body>
  <button onclick="openConfirmationModal()">Delete Chat</button>

<!-- Modal -->
<div id="confirmationModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeConfirmationModal()">&times;</span>
    <p>Apakah Anda yakin ingin menghapus chat tersebut?</p>
    <button onclick="deleteChat()">Ya</button>
    <button onclick="closeConfirmationModal()">Tidak</button>
  </div>
</div>

</body>
<script>
  function openConfirmationModal() {
    document.getElementById('confirmationModal').style.display = 'block';
  }

  function closeConfirmationModal() {
    document.getElementById('confirmationModal').style.display = 'none';
  }

  function deleteChat() {
    // Tambahkan logika penghapusan chat di sini
    alert("Chat berhasil dihapus"); // Gantilah dengan logika penghapusan sesungguhnya
  }
</script>

</html>