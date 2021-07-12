<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Data Transfer(php to js)</title>
  </head>

<!-- Transfering PHP data to JS -->

<div id="dom-target" style="display: none;">
<?php
  $output = "42";
  echo htmlspecialchars($output);
?>
</div>

<script>
  var div = document.getElementById("dom-target");
  var mdata = div.textContent;
  function myTurn()
  {
      document.getElementById("modalSave").innerText = mdata;
  }
</script>

<!-- -------------------------------------------------  -->

<div class="container mt-5">

  <button type="button" id="buttonEdit" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Edit</button>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input id="modalName" type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label  for="message-text" class="col-form-label">Description:</label>
            <textarea id="modalDesc" class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="modalClose" type="button" class="btn btn-secondary" onclick="myTurn()" data-bs-dismiss="modal">Close</button>
        <button id="modalSave" type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
  </body>


 

<!-- $abc = "<script>document.getElementByID('yourid').value</script>"; -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>
