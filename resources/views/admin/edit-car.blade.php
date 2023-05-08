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
    <link rel="stylesheet" href={{ asset('style/admin/admin-dashboard-edit-car.css') }}>
</head>
<body>
    <x-header/>
    <x-header-admin/>
    <form action="{{ route('admin-update-cars', $car) }}" method="post">
        @csrf
        @method('PUT')
        <div class="sell">
            <div class="img">
                <img src="{{asset('img/cars/' . $car->image)}}" alt="">
            </div>
            <div class="column">
                <div>
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" value="{{ $car->name }}">
                </div>
                <div>
                    <label for="torque">Torque</label><br>
                    <input type="text" id="torque" name="torque" value={{ $car->torque }}>
                </div>
                <div>
                    <label for="top-speed">Top Speed</label><br>
                    <input type="text" id="top-speed" name="topSpeed" value={{ $car->topSpeed }}>
                </div>
                <div>
                    <label for="motor">Motor</label><br>
                    <input type="text" id="motor" name="engine" value="{{ $car->engine }}">
                </div>
                <div>
                    <label for="tires">Tires</label><br>
                    <input type="text" id="tires" name="tires" value="{{ $car->tires }}">
                </div>
                <div>
                    <label for="gearbox">GearBox</label><br>
                    <input type="text" id="gearbox" name="gearbox" value="{{ $car->gearbox }}">
                </div>
                <div>
                    <label for="kilometers">Kilometers</label><br>
                    <input type="text" id="kilometers" name="kilometers" value={{ $car->kilometers }}>
                </div>
                <div>
                    <label for="price">Price</label><br>
                    <input type="text" id="price" name="price" value={{ $car->price }}>
                </div>
                <div>
                    <label for="brand">Brand</label><br>
                    <select id="brand" name="carbrand_id">
                        @foreach ($brands as $brand)
                            @if ($brand->id == $car->carbrand_id)
                                <option value={{ $brand->id }} selected>{{ $brand->name }}</option>
                            @else
                                <option value={{ $brand->id }}>{{ $brand->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="horsepower">Horse Power</label><br>
                    <input type="text" name="horsepower" id="horsepower" value={{ $car->horsepower }}>
                </div>
                <div>
                    <label for="consumption">Consumption</label><br>
                    <input type="text" id="consumption" name="consumption" value={{ $car->consumption }}>
                </div>
                <div>
                    <label for="acceleration">Acceleration</label><br>
                    <input type="text" id="acceleration" name="acceleration" value={{ $car->acceleration }}>
                </div>
                <div>
                    <label for="wheels">Wheels</label><br>
                    <input type="text" id="wheels" name="wheels" value="{{ $car->wheels }}">
                </div>
                <div>
                    <label for="drivetrain">DriveTrain</label><br>
                    <input type="text" id="drivetrain" name="driveTrain" value="{{ $car->driveTrain }}">
                </div>
                <div>
                    <label for="exterior">Exterior</label><br>
                    <input type="text" id="exterior" name="exterior" value="{{ $car->exterior }}">
                </div>
                <div>
                    <label for="interior">Interior</label><br>
                    <input type="text" id="interior" name="interior" value="{{ $car->interior }}">
                </div>
                <div>
                    <label for="year">Year</label><br>
                    <input type="text" id="year" name="year" value={{ $car->year }}>
                </div>
                <div>
                    <label for="model">Model</label><br>
                    <select id="model" name="carmodel_id">
                        @foreach ($models as $model)
                            @if ($model->id == $car->carmodel_id)
                                <option value={{ $model->id }} selected>{{ $model->name }}</option>
                            @else
                                <option value={{ $model->id }}>{{ $model->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button class="boton">Save Changes</button>
    </form>
    <x-footer/>
</body>
</html>
