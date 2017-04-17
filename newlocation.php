<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- If IE use the latest rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Set the page to the width of the device and set the zoon level -->
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Pending Data Points</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="jumbotron text-center">
        <h1>Pending Data Points</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Select
                    </th>
                    <th>
                        POI Location
                    </th>
                    <th>
                        Data Type
                    </th>
                    <th>
                        Data Value
                    </th>
                    <th>
                        Time and Date of Data Reading
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>
                        Georgia Tech
                    </td>
                    <td>
                        Mold
                    </td>
                    <td>
                        12
                    </td>
                    <td>
                        Time and Date of Reading
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="back"></label>
      <div class="col-md-8">
        <button id="back" name="back" class="btn btn-warning">Back</button>
        <button id="back" name="back" class="btn btn-danger">Reject</button>

        <button id="submit" name="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
