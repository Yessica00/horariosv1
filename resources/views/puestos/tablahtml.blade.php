<div class="table-responsive-md">
    <table class="table table-striped table-hover table-bordered table-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID Puesto</th>
                <th scope="col">Nombre</th>
                
                <th scope="col">Tipo</th>
                <th></th>
                <th></th>
                <th><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('puestos.create')}}"
                    role="button"
                    >+</a
                >
                </th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($puestos as $puesto)
        
    
            
            <tr class="">
                <td scope="row">{{$puesto->id}}</td>
                <td>{{$puesto->idPuesto}}</td>
                <td>{{$puesto->nombre}}</td>
                <td>{{$puesto->tipo}}</td>
                
               <td> <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('puestos.edit',$puesto->id)}}"
                role="button"
                >Editar</a
            ></td>
            <td>
                <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('puestos.show',$puesto->id)}}"
                role="button"
                >Eliminar</a
            >  
            </td>
                <td>
                    <a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('puestos.show',$puesto->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
    {{$puestos->links()}}
</div>
