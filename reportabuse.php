<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report Abuse</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <style>
    .container {
      margin-top: 50px;
      width: 40%;
      border: 1px solid cornflowerblue;
      padding: 10px;
      border-radius: 7px;
    }

    body {
      background-image: url("./images/ab5.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;

    }

    label {
      color: whitesmoke;
      padding: 8px
    }
  </style>
</head>

<body class="hold-transition abuse-page">
  <div class="container">

    <div class="row">
      <div class="col-md-6" style="width: 100%; margin-left:auto">
        <p class="fs-5; fw-bolder; p-3 mb-4 bg-primary text-white">REPORT ABUSE</p>
        <br>
      </div>
    </div>
    <form>
      <div class="row mb-3" style="width: 100%; margin-left:auto">
        <label for="exampleInputName" class="form-label">Victim Name</label>
        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">Enter your full name.</div>
      </div>
      <div class="row mb-3" style="width: 100%; margin-left:auto">
        <label for="exampleInputName" class="form-label">Parent's Name</label>
        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">Enter your full name.</div>
      </div>
      <div class="row mb-3" style="width: 100%; margin-left:auto">
        <label for="exampleInputName" class="form-label">Reporter Name</label>
        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">Enter your name.</div>
      </div>
      <div class="row mb-3" style="width: 100%; margin-left:auto">
        <label for="exampleInputState" class="form-label">Report State</label>
        <select id="exampleInputState" class="form-select">
          <option selected>Choose...</option>
          <option>ABIA</option>
          <option>ADAMAWA</option>
          <option>AKWA IBOM</option>
          <option>ANAMBRA</option>
          <option>BAUCHI</option>
          <option>BAYELSA</option>
          <option>BENUE</option>
          <option>BORNO</option>
          <option>CROSS RIVER</option>
          <option>DELTA</option>
          <option>EBONYI</option>
          <option>EDO</option>
          <option>EKITI</option>
          <option>ENUGU</option>
          <option>GOMBE</option>
          <option>IMO</option>
          <option>JIGAWA</option>
          <option>KADUNA</option>
          <option>KANO</option>
          <option>KEBBI</option>
          <option>KOGI</option>
          <option>KWARA</option>
          <option>LAGOS</option>
          <option>NASARAWA</option>
          <option>NIGER</option>
          <option>OGUN</option>
          <option>ONDO</option>
          <option>OYO</option>
          <option>PLATEAU</option>
          <option>RIVERS</option>
          <option>SOKOTO</option>
          <option>TARABA</option>
          <option>YOBE</option>
          <option>ZAMFARA</option>
          <option>ABUJA</option>
        </select>
      </div>

      <div class="row mb-3" style="width: 100%; margin-left:auto">
        <label for="exampleInputCountry" class="form-label">Country</label>
        <input type="text" class="form-control" placeholder="">
      </div>

      <div class="row mb-3" style="width: 100%; margin-left:auto">
        <label for="exampleInputPhone" class="form-label">Reporter Phone Number</label>
        <input type="text" class="form-control" placeholder="1234 ">
      </div>
      <div class="row mb-3" style="width: 100%; margin-left:auto">
        <label for="exampleInputPhone" class="form-label">Parent or Guardian Phone Number</label>
        <input type="text" class="form-control" placeholder="1234 ">
      </div>

      <div class="row mb-3" style="width: 100%; margin-left:auto">
        <label for="exampleInputRelationship" class="form-label">Relationship with victim</label>
        <input type="text" class="form-control" placeholder="father, mother, guardian ">
      </div>

      <div class="row mb-3" style="width: 100%; margin-left:auto">
        <label for="exampleInputabuse" class="form-label">Type of Abuse</label>
        <select id="exampleInputState" class="form-select" name="abuse_type">
          <option selected>Choose...</option>
          <option value="BASIC NEEDS">NEGLECT(BASIC NEEDS)</option>
          <option value="MOLESTATION">SEXUAL ASSAULT(MOLESTATION)</option>
          <option value="DOMESTIC">PHYSICAL ABUSE(DOMESTIC ABUSE)</option>
        </select>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary btn-block" style="margin-left:40%;margin-top: 20px;">Report</button>

      </div>
    </form>

    <!-- /.form-box -->
  </div>


</body>

</html>