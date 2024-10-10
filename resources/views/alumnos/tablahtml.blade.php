<div class="table-responsive-md">
    <table class="table table-striped table-hover table-bordered table-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th></th>
                <th></th>
                <th><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('alumnos.create')}}"
                    role="button"
                    >+</a
                >
                </th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
        
    
            
            <tr class="">
                <td scope="row">{{$alumno->id}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellidop}}</td>
                <td>{{$alumno->email}}</td>
               <td> <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('alumnos.edit',$alumno->id)}}"
                role="button"
                >Editar</a
            ></td>
            <td>
                <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('alumnos.show',$alumno->id)}}"
                role="button"
                >Eliminar</a
            >  
            </td>
                <td>
                    <a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('alumnos.show',$alumno->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
    {{$alumnos->links()}}
</div>
