<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/employee/employee-dashboard-edit-car.css') }}>
</head>
<body>
    <x-header/>
    <x-header-employee/>
        <div class="sell">
            <div class="img"><p id="p1">Select image</p></div>
            <div class="column">
                <div>
                  <label for="name">Name</label><br>
                  <input type="text" id="name" value="Lamborghini STO">
                </div>
                <div>
                  <label for="torque">Torque</label><br>
                  <input type="text" id="torque" value="565">
                </div>
                <div>
                  <label for="top-speed">Top Speed</label><br>
                  <input type="text" id="top-speed" value="310">
                </div>
                <div>
                  <label for="motor">Motor</label><br>
                  <input type="text" id="motor" value="V10">
                </div>
                <div>
                  <label for="tires">Tires</label><br>
                  <input type="text" id="tires" value="8.5J x 20">
                </div>
                <div>
                  <label for="gearbox">GearBox</label><br>
                  <input type="text" id="gearbox" value="7-speed dual-clutch">
                </div>
                <div>
                  <label for="kilometers">Kilometers</label><br>
                  <input type="text" id="kilometers" value="2.500">
                </div>
                <div>
                  <label for="price">Price</label><br>
                  <input type="text" id="price" value="250.000">
                </div>
                <div>
                  <label for="brand">Brand</label><br>
                  <select id="brand" name="brand">
                    <option value="Lamborghini" selected>Lamborghini</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                  </select>
                </div>
                <div>
                  <label for="horsepower">Horse Power</label><br>
                  <input type="text" id="horsepower" value="640">
                </div>
                <div>
                  <label for="consumption">Consumption</label><br>
                  <input type="text" id="consumption" value="13.9">
                </div>
                <div>
                  <label for="acceleration">Acceleration</label><br>
                  <input type="text" id="acceleration" value="3.0">
                </div>
                <div>
                  <label for="wheels">Wheels</label><br>
                  <input type="text" id="wheels" value="245/30 R20">
                </div>
                <div>
                  <label for="drivetrain">DriveTrain</label><br>
                  <input type="text" id="drivetrain" value="RWD">
                </div>
                <div>
                  <label for="exterior">Exterior</label><br>
                  <input type="text" id="exterior" value="Red">
                </div>
                <div>
                  <label for="interior">Interior</label><br>
                  <input type="text" id="interior" value="Black">
                </div>
                <div>
                  <label for="year">Year</label><br>
                  <input type="text" id="year" value="2022">
                </div>
                <div>
                  <label for="model">Model</label><br>
                  <select id="model" name="model">
                    <option value="STO" selected>STO</option>
                    <option value="STO"></option>
                    <option value="STO"></option>
                    <option value="STO"></option>
                  </select>
                </div>
              </div>
        </div>
        <div class="boton"><a href="" id="a1">Save Changes</a></div>
    <x-footer/>
</body>
</html>
