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
    <link rel="stylesheet" href={{ asset('style/employee/employee-dashboard-add-car.css') }}>
</head>

<body>
    <x-header />
    <x-header-employee />
    <form action="{{ route('employee-store-cars') }}" method="post">
        @csrf
        <div class="sell">
            <div class="img">
                <p id="p1">Select image</p>
            </div>
            <div class="column">
                <div>
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label for="torque">Torque</label><br>
                    <input type="text" id="torque" name="torque">
                </div>
                <div>
                    <label for="top-speed">Top Speed</label><br>
                    <input type="text" id="top-speed" name="topSpeed">
                </div>
                <div>
                    <label for="motor">Motor</label><br>
                    <input type="text" id="motor" name="engine">
                </div>
                <div>
                    <label for="tires">Tires</label><br>
                    <input type="text" id="tires" name="tires">
                </div>
                <div>
                    <label for="gearbox">GearBox</label><br>
                    <input type="text" id="gearbox" name="gearbox">
                </div>
                <div>
                    <label for="kilometers">Kilometers</label><br>
                    <input type="text" id="kilometers" name="kilometers">
                </div>
                <div>
                    <label for="price">Price</label><br>
                    <input type="text" id="price" name="price">
                </div>
                <div>
                    <label for="brand">Brand</label><br>
                    <select id="brand" name="carbrand_id">
                        @foreach ($brands as $brand)
                            <option value={{ $brand->id }}>{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="horsepower">Horse Power</label><br>
                    <input type="text" name="horsepower" id="horsepower">
                </div>
                <div>
                    <label for="consumption">Consumption</label><br>
                    <input type="text" id="consumption" name="consumption">
                </div>
                <div>
                    <label for="acceleration">Acceleration</label><br>
                    <input type="text" id="acceleration" name="acceleration">
                </div>
                <div>
                    <label for="wheels">Wheels</label><br>
                    <input type="text" id="wheels" name="wheels">
                </div>
                <div>
                    <label for="drivetrain">DriveTrain</label><br>
                    <input type="text" id="drivetrain" name="driveTrain">
                </div>
                <div>
                    <label for="exterior">Exterior</label><br>
                    <input type="text" id="exterior" name="exterior">
                </div>
                <div>
                    <label for="interior">Interior</label><br>
                    <input type="text" id="interior" name="interior">
                </div>
                <div>
                    <label for="year">Year</label><br>
                    <input type="text" id="year" name="year">
                </div>
                <div>
                    <label for="model">Model</label><br>
                    <select id="model" name="carmodel_id">
                        @foreach ($models as $model)
                            <option value={{ $model->id }}>{{ $model->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button class="boton">Add Car</button>
    </form>
    <x-footer />
</body>

</html>
