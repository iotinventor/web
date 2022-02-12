<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>Web Serial</title>
</head>
<body>
  <?php $this->load->view("partials/navbar.php"); ?>
  <div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
      <div class="col-md-8">
        <div class="card shadow">
          <div class="card-body">
            <div class="input-group mb-3">
              <select id="selectBaudRate" class="form-select" aria-label="Default select example">
                <option selected>Choose baud rate</option>
                <option value="9600">9600</option>
                <option value="115200">115200</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control border-secondary" placeholder="Data serial" aria-label="Example text with button addon" >
              <button class="btn btn-outline-secondary" type="button" id="button-addon1">Send</button>
            </div>
            <div class="form-floating">
              <textarea class="form-control border-dark bg-dark text-info" placeholder="Leave a comment here" id="textareaTerminal" style="height: 400px"></textarea>
              <label class="text-light">Web Serial</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('partials/webserial.php'); ?>
</body>
</html>
