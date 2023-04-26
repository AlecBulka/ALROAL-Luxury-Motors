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
    <link rel="stylesheet" href={{ asset('style/admin/admin-dashboard-add-car.css') }}>
</head>
<body>
    <x-header/>
    <x-header-admin/>
        <div class="sell">
            <div class="img"><p id="p1">Select image</p></div>
            <div class="column">
                <div>
                  <label for="name">Name</label><br>
                  <input type="text" id="name">
                </div>
                <div>
                  <label for="torque">Torque</label><br>
                  <input type="text" id="torque">
                </div>
                <div>
                  <label for="top-speed">Top Speed</label><br>
                  <input type="text" id="top-speed">
                </div>
                <div>
                  <label for="motor">Motor</label><br>
                  <input type="text" id="motor">
                </div>
                <div>
                  <label for="tires">Tires</label><br>
                  <input type="text" id="tires">
                </div>
                <div>
                  <label for="gearbox">GearBox</label><br>
                  <input type="text" id="gearbox">
                </div>
                <div>
                  <label for="kilometers">Kilometers</label><br>
                  <input type="text" id="kilometers">
                </div>
                <div>
                  <label for="price">Price</label><br>
                  <input type="text" id="price">
                </div>
                <div>
                  <label for="brand">Brand</label><br>
                  <select id="brand">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                  </select>
                </div>
                <div>
                  <label for="horsepower">Horse Power</label><br>
                  <input type="text" id="horsepower">
                </div>
                <div>
                  <label for="consumption">Consumption</label><br>
                  <input type="text" id="consumption">
                </div>
                <div>
                  <label for="acceleration">Acceleration</label><br>
                  <input type="text" id="acceleration">
                </div>
                <div>
                  <label for="wheels">Wheels</label><br>
                  <input type="text" id="wheels">
                </div>
                <div>
                  <label for="drivetrain">DriveTrain</label><br>
                  <input type="text" id="drivetrain">
                </div>
                <div>
                  <label for="exterior">Exterior</label><br>
                  <input type="text" id="exterior">
                </div>
                <div>
                  <label for="interior">Interior</label><br>
                  <input type="text" id="interior">
                </div>
                <div>
                  <label for="year">Year</label><br>
                  <input type="text" id="year">
                </div>
                <div>
                  <label for="model">Model</label><br>
                  <select id="model">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                  </select>
                </div>
              </div>
        </div>
        <div class="boton"><a href="" id="a1">Add Car</a></div>
    <x-footer/>
</body>
</html>
