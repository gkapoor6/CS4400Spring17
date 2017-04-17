<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- If IE use the latest rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Set the page to the width of the device and set the zoon level -->
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Add New Data Point</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="jumbotron text-center">
        <h1>Add New Data Point</h1>
    </div>
    <div class="container">
        <form class="form-horizontal">
            <fieldset>
                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="poilocationname">POI Location Name</label>
                    <div class="col-md-5">
                        <select id="poilocationname" name="poilocationname" class="form-control" required="">
                            <option value="1">Chattahoochee River</option>
                            <option value="2">Grand Canyon</option>
                            <option value="3">Niagara Falls</option>
                        </select>
                    </div>
                </div>
                <!-- Date and Time -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="datetime">Date and Time of Reading</label>
                    <div class="col-md-5">
                        <input id="datetime" type="datetime-local" name="datetime" required="">
                    </div>
                </div>
                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="datatype">Data Type</label>
                    <div class="col-md-5">
                        <select id="datatype" name="datatype" class="form-control" required="">
                            <option value="1">Mold</option>
                            <option value="2">Air Quality</option>
                            <option value="3">Water Quality</option>
                            <option value="4">Rust</option>
                        </select>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="datavalue">Data Value</label>
                    <div class="col-md-5">
                        <input id="datavalue" name="datavalue" type="text" placeholder="Description" class="form-control input-md" required="">
                        <span class="help-block">Describe your data here</span>
                    </div>
                </div>
                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="back"></label>
                    <div class="col-md-8">
                        <button id="back" name="back" class="btn btn-danger">Back</button>
                        <button id="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
