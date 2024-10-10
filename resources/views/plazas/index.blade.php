<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app/js'])
</head>
<body>
    <h1>Plazas</h1>
    {{--@dd($alumnos)--}}
    
    </ul>
   
    <div class="table-responsive-md">
        <table class="table table-striped table-hover table-bordered table-primary">
            <thead class="table-dark">
                <tr>
                        <th scope="col">Id Plazas</th>
                        <th scope="col">Nombre</th>
                        <th></th>
                    <th></th>
                    <th><a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="{{route('plazas.create')}}"
                        role="button"
                        >+</a
                    >
                    </th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($plazas as $plaza)
                    <tr class="">
                        <td scope="row">{{$plaza->idPlaza}}</td>
                        <td>{{$plaza->nombrePlaza}}</td>
                        <td> <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{route('plazas.edit')}}"
                            role="button"
                            >Editar</a
                        ></td>
                        <td> <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{route('plazas.destroy')}}"
                            role="button"
                            >Eliminar</a
                        ></td>
                        <td> <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{route('plazas.show')}}"
                            role="button"
                            >Ver</a
                        ></td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
        


</body>
</html>